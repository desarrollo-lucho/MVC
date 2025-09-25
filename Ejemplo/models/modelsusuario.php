<?php
require_once "Config/database.php";

class Usuario{
    public $id_usuario;
    public $nombre;
    public $apellido;
    public $email;
    public $password;

    private $db;

    public function __construct()
    {
        $this->db=database::conectar();
    }

    function getid_usuario(){
        return $this->id_usuario;
    }

    function getNombre(){
        return $this->nombre;
    }

        function getApellido(){
        return $this->apellido;
    }

    function getEmail(){
        return $this->email;
    }

    function getPassword(){
        return $this->password;
    }

    function setid_usuarios($id_usuario){
        $this->id_usuarios = $id_usuario;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setApellido($apellido){
        $this->apellido = $apellido;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function setPassword($password){
        $this->password = $password;
    }

// metodo que consulte la bd

public function conseguirTodos(){

    //var_dump($this->db);

   $query = $this->db->query("SELECT * FROM t_usuarios");
   return $query;

    echo "IMPRIMIENDO TODOS LOS USUARIOS ACTIVOS...";
}

public  function crear(){
    $sql = "INSERT INTO t_usuarios (id_usuarios,nombre,apellido,email,password) VALUES({$this->id_usuario}, '{$this->nombre}', '{$this->apellido}', '{$this->email}', '{$this->password}');";

    $guardar = $this->db->query($sql);

    return $guardar;
}

}