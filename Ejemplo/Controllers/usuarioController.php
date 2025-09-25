<?php

class   UsuarioController{

    public  function mostrarTodos(){
        require_once "models/modelsUsuario.php";

        $usuario = new Usuario();

        $todos_los_usuarios = $usuario->conseguirTodos();

    }

    public  function crear(){
        require_once "models/modelsUsuario.php";

        $practicanteDeBodega = new Usuario();


        $practicanteDeBodega->setid_usuarios("null");
        $practicanteDeBodega->setNombre("Juan Sebastian");
        $practicanteDeBodega->setApellido("Nieto");
        $practicanteDeBodega->setEmail("jnieto@gmail.com");
        $practicanteDeBodega->setpassword("abc2123");

        $guardar = $practicanteDeBodega->crear();
    }
}