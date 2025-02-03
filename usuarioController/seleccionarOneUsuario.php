<?php
include "../model/mappers/UsuarioMapper.php";
include "../model/Usuario.php";


try {

    $id =  isset($_POST["id"]) ? $_POST["id"] : null;


    $db = new PDO("mysql:host=baseDatos;dbname=Tienda;", "root", "123456");

    $usuario = new Usuario($id, "");
    UsuarioMapper::init($db);



    $response = UsuarioMapper::seleccionarUsuario($usuario);


    $response ? print_r($response) : print "No hay datos";
} catch (\Throwable $th) {
    throw $th;
}
