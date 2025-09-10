<?php

class Usuario{
    public $nombres;
    public $apellidos;
    public $email;
    public $password;

    function getNombre(){
        return $this->nombres;
    }

    function getapellidos(){
        return $this->apellidos;
    }

    function getemail(){
        return $this->email;
    }

    function getpassword(){
        return $this->password;
    }

    function getNombres(){
        return $this->nombre = $nombres;
    }

    function getapellidos(){
        return $this->apellidos = $apellidos;
    }

    function getemail(){
        return $this->email = $email;
    }

    function getpassword(){
        return $this->password = $password;
    }

 //metodo de consulta de la Base de Datos
        public function conseguirTodos(){
            echo "imprimiendo todos los usurios";    
        }
}
