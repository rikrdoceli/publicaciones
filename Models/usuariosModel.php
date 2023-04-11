<?php
class usuariosModel extends Mysql{
    public $id, $clave, $nombre, $cedula, $usuario, $cargo, $rol,$imagen;
    public function __construct()
    {
        parent::__construct();
    }
    public function selectUsuarios()
    {
        $sql = "SELECT * FROM usuarios";
        $res = $this->select_all($sql);
        return $res;
    }
    public function selectUsuariosPass(int $id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $res = $this->select($sql);
        return $res;
    }
    public function insertarUsuarios(string $nombre, string $cedula, string $usuario, string $cargo, string $clave, string $rol, string $nombreName)
    {
        $return = "";
        $this->nombre = $nombre;
        $this->cedula = $cedula;
        $this->usuario = $usuario;
        $this->cargo = $cargo;
        $this->clave = $clave;
        $this->rol = $rol;
        $this->nombreName = $nombreName;
        $query = "INSERT INTO usuarios(nombre, cedula, usuario, cargo, clave, rol, imagen) VALUES (?,?,?,?,?,?,?)";
        $data = array($this->nombre, $this->cedula, $this->usuario, $this->cargo, $this->clave, $this->rol, $this->nombreName);
        $resul = $this->insert($query, $data);
        $return = $resul;
        return $return;
    }
    public function editarUsuarios(int $id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $res = $this->select($sql);
        if (empty($res)) {
            $res = 0;
        }
        return $res;
    }
    public function actualizarUsuarios(string $nombre, string $cedula, string $usuario, string $cargo, string $clave, string $rol, String $nombreName, int $id)
    {
        $return = "";
        $this->nombre = $nombre;
        $this->cedula = $cedula;
        $this->usuario = $usuario;
        $this->cargo = $cargo;
        $this->clave = $clave;
        $this->rol = $rol;
        $this->nombreName = $nombreName;
        $this->id = $id;
        $query = "UPDATE usuarios SET nombre=?, cedula=?, usuario=?, cargo=?, clave=?, rol=?, imagen=? WHERE id=?";
        $data = array($this->nombre, $this->cedula, $this->usuario, $this->cargo, $this->clave, $this->rol, $this->nombreName, $this->id);
        $resul = $this->update($query, $data);
        $return = $resul;
        return $return;
    }
    public function eliminarUsuarios(int $id)
    {
        $return = "";
        $this->id = $id;
        $query = "UPDATE usuarios SET estado = 0 WHERE id=?";
        $data = array($this->id);
        $resul = $this->update($query, $data);
        $return = $resul;
        return $return;
    }
    public function selectUsuario(string $usuario, string $clave)
    {
        $this->usuario = $usuario;
        $this->clave = $clave;
        $sql = "SELECT * FROM usuarios WHERE usuario = '{$this->usuario}' AND clave = '{$this->clave}' AND estado = 1";
        $res = $this->select($sql);
        return $res;
    }
    public function reingresarUsuarios(int $id)
    {
        $return = "";
        $this->id = $id;
        $query = "UPDATE usuarios SET estado = 1 WHERE id=?";
        $data = array($this->id);
        $resul = $this->update($query, $data);
        $return = $resul;
        return $return;
    }
    public function cambiarPass(string $clave, int $id)
    {
        $this->clave = $clave;
        $query = "SELECT * FROM usuarios WHERE clave = '$clave' AND id = $id";
        $resul = $this->select($query);
        return $resul;
    }
    public function cambiarContra(string $clave, int $id)
    {
        $this->clave = $clave;
        $this->id = $id;
        $query = "UPDATE usuarios SET clave = ? WHERE id = ?";
        $data = array($this->clave, $this->id);
        $resul = $this->update($query, $data);
        return $resul;
    }
    public function eliminarusu(int $id)
    {
        $sql = "DELETE FROM usuarios WHERE id = $id";
        $res = $this->select($sql);
        return $res;
    }
}
?>