<?php

class   ProductoController{

    public  function mostrarTodos(){
        require_once "models/productoModel.php";

        $producto = new Producto();

        $todosLosProductos = $producto->conseguirTodos();

        require_once "views/Productos/mostrar-todos.php";

    }

    public  function crear(){
        require_once "views/Productos/crear.php";
    }
}