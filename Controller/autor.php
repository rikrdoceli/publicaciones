<?php
    class autor extends Controllers{
        public function __construct()
        {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url());
        }
            parent::__construct();

        }
        public function autor()
        {
            $data = $this->model->selectAutor();         
            $this->views->getView($this, "listar", $data);
        }
        public function registrar()
        {
            $autor = $_POST['nombre'];
            /* $autor2 = $_POST['nombre2']; */
            /* $img = $_FILES['imagen'];
            $img2 = $_FILES['imagen2']; */
            /* $nombre = $img['name'];
            $nombre2 = $img2['name2'];
            $nombreTemp = $img['tmp_name'];
            $nombreTemp2 = $img2['tmp_name2']; */
           /*  $fecha = md5(date("Y-m-d h:i:s")) . "_" . $nombre;
            $fecha2 = md5(date("Y-m-d h:i:s")) . "_" . $nombre2;
            $destino = "Assets/images/autor/".$fecha;
            $destino2 = "Assets/images/autor/".$fecha2; */
       /*      if ($nombre == null || $nombre == "") { */
                $insert = $this->model->insertarAutor($autor);
           /*  } else {
                $insert = $this->model->insertarAutor($autor, $autor2, $fecha, $fecha2);
                if ($insert) {
                    move_uploaded_file($nombreTemp, $nombreTemp2, $destino, $destino2);
                }
            }
            if ($nombre2 == null || $nombre2 == "") {
                $insert = $this->model->insertarAutor($autor, $autor2, "default-avatar.png");
            } else {
                $insert = $this->model->insertarAutor($autor, $autor2, $fecha, $fecha2);
                if ($insert) {
                    move_uploaded_file($nombreTemp, $nombreTemp2, $destino, $destino2);
                }
            } */
            header("location: " . base_url() . "autor");
            die();
        }
        public function editar()
        {
            $id = $_GET['id'];
            $data = $this->model->editAutor($id);
            if ($data == 0) {
                $this->autor();
            }else{
                $this->views->getView($this, "editar", $data);
            }
        }
        public function modificar()
        {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            /* $nombre2 = $_POST['nombre2']; */
           /*  $img = $_FILES['imagen'];
            $img2 = $_FILES['imagen2']; */
            /* $imgName = $img['name']; */
            /* $imgName2 = $img2['name2']; */
           /*  $imgTmp = $img['tmp_name']; */
            /* $imgTmp2 = $img2['tmp_name2']; */
            /* $fecha = md5(date("Y-m-d h:i:s")) . "_" . $imgName; */
            /* $fecha2 = md5(date("Y-m-d h:i:s")) . "_" . $imgName2; */
           /*  $destino = "Assets/images/autor/".$fecha; */
            /* $destino2 = "Assets/images/autor/".$fecha2; */
           /*  $imgAntigua = $_POST['foto']; */
            /* $imgAntigua2 = $_POST['foto2']; */
            
            /* if ($imgName == null || $imgName == "")  { */
            $actualizar = $this->model->actualizarAutor($nombre, $id);
                /* if ($actualizar) {
                    move_uploaded_file($imgTmp, $imgTmp2, $destino, $destino2);
                    if ($imgAntigua != "default-avatar.png") {
                        unlink("Assets/images/autor/" . $imgAntigua);
                    }
                }
            }  */
            /* if ($imgName2 == null || $imgName2 == "")  {
                $actualizar = $this->model->actualizarAutor($nombre, $nombre2, $imgAntigua, $imgAntigua2, $id);
            }else{
                $actualizar = $this->model->actualizarAutor($nombre, $nombre2, $fecha, $fecha2, $id);
                if ($actualizar) {
                    move_uploaded_file($imgTmp, $imgTmp2, $destino, $destino2);
                    if ($imgAntigua2 != "default-avatar.png") {
                        unlink("Assets/images/autor/" . $imgAntigua2);
                    }
                }
            } */
            header("location: " . base_url() . "autor");
            die();
        }
        public function eliminar()
        {
            $id = $_POST['id'];
            $this->model->estadoAutor(0, $id);
            header("location: " . base_url() . "autor");
            die();
        }
        public function reingresar()
        {
            $id = $_POST['id'];
            $this->model->estadoAutor(1, $id);
            header("location: " . base_url() . "autor");
            die();
        }
        public function eliminar1()
    {
        $id = $_GET['id'];
        $this->model->eliminarau($id);
        header("location: " . base_url() . "autor");
        die();
    }  
}
