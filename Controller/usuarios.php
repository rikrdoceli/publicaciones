<?php
class usuarios extends Controllers
{
    public function __construct()
    {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: ".base_url());
        }
        parent::__construct();
    }
    public function listar()
    {
        $data = $this->model->selectUsuarios();
        $this->views->getView($this, "listar", $data);
    }
    public function insertar()
    {
        $nombre = $_POST['nombre'];
        $cedula = $_POST['cedula'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $cargo = $_POST['cargo'];
        $rol = $_POST['rol'];
        $img = $_FILES['imagen'];
        $imagen ="";
        $nombreName = $img['name'];
        $nombreTemp = $img['tmp_name'];
        $fecha = md5(date("Y-m-d h:i:s")) ."_". $nombreName;
        $destino = "Assets/images/usuarios/" . $fecha; 
        $hash = hash("SHA256", $clave);
        /* $insert = $this->model->insertarUsuarios($nombre, $cedula, $usuario, $cargo, $hash, $rol); */
        if ($nombreName == null || $nombreName == "") {
            $insert = $this->model->insertarUsuarios($nombre, $cedula, $usuario, $cargo, $hash, $rol, $imagen);
        } else {
            $insert = $this->model->insertarUsuarios($nombre, $cedula, $usuario, $cargo, $hash, $rol, $fecha);
            if ($insert) {
                move_uploaded_file($nombreTemp, $destino);
            }
        }
        header("location: " . base_url() . "usuarios/listar");
        die();
    }
    public function editar()
    {
        $id = $_GET['id'];
        $data = $this->model->editarUsuarios($id);
        if ($data == 0) {
            $this->listar();
        } else {
            $this->views->getView($this, "Editar", $data);
        }
    }
    public function actualizar()
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $cedula = $_POST['cedula'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $cargo = $_POST['cargo'];
        $rol = $_POST['rol'];
        $img = $_FILES['imagen'];
        $nombreName = $img['name'];
        $nombreTemp = $img['tmp_name']; 
        $fecha = md5(date("Y-m-d h:i:s")) ."_". $nombreName;
        $destino = "Assets/images/usuarios/" . $fecha;
        $hash = hash("SHA256", $clave);
        $imgAntigua = $_POST['foto']; 
        if ($nombreName == null || $nombreName == "")  {
            $actualizar = $this->model->actualizarUsuarios($nombre, $cedula, $usuario, $cargo, $hash, $rol, $imgAntigua, $id);
        }else{
            $actualizar = $this->model->actualizarUsuarios($nombre, $cedula, $usuario, $cargo, $hash, $rol, $fecha, $id);
            if ($actualizar) {
                move_uploaded_file($nombreTemp, $destino);
                if ($imgAntigua != "") {
                    unlink("Assets/images/usuarios/" . $imgAntigua);
                }
            }
        }

        if ($actualizar == 1) {
            $alert = 'modificado';
        } else {
            $alert =  'error';
        }
        header("location: " . base_url() . "usuarios/listar");
        die();
    }
    public function eliminar()
    {
        $id = $_POST['id'];
        $this->model->eliminarUsuarios($id);
        header("location: " . base_url() . "usuarios/listar");
        die();
    }
    public function reingresar()
    {
        $id = $_POST['id'];
        $this->model->reingresarUsuarios($id);
        $this->model->selectUsuarios();
        header('location: ' . base_url() . 'usuarios/Listar');
        die();
    }
    public function eliminar1()
        {
            $id = $_GET['id'];
            $this->model->eliminarusu($id);
            header("location: " . base_url() . "usuarios/listar");
            die();
        }  
    public function login()
    {
        if (!empty($_POST['usuario']) || !empty($_POST['clave'])) {
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];
            $hash = hash("SHA256", $clave);
            $data = $this->model->selectUsuario($usuario, $hash);
            print_r($data);
            if (!empty($data)) {
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['nombre'] = $data['nombre'];
                    $_SESSION['usuario'] = $data['usuario'];
                    $_SESSION['correo'] = $data['correo'];
                    $_SESSION['cargo'] = $data['cargo'];
                    $_SESSION['rol'] = $data['rol'];
                    $_SESSION['imagen'] = $data['imagen'];
                    $_SESSION['activo'] = true;
                    print_r($data);
                    header('location: ../admin/listar');
            } else {
                $error = 0;
                print_r($data);
                header("location: ".base_url()."?msg=$error");
            }
        }
    }
    public function cambiar()
    {
        $id = $_SESSION['id'];
        $actual = $_POST['actual'];
        $hash = hash("SHA256", $actual);
        $nueva = hash("SHA256", $_POST['nueva']);
        $data = $this->model->cambiarPass($hash, $id);
        if ($data != null || $data != "") {
            $cambio = $this->model->cambiarContra($nueva, $id);
            if ($cambio == 1) {
                header("Location: " . base_url(). "usuarios/salir");
            }
        }else{
            header("Location: " . base_url() . "usuarios/listar?error");
        }  
    }
    public function perfil()
    {

        $data = $this->model->selectUsuariosPass(1);
        $this->views->getView($this, "cambiarPass", $data);
    }
    public function salir()
    {
        session_destroy();
        header("Location: ".base_url());
    }
}


