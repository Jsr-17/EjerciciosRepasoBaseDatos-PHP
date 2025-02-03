<?php
include "../model/Usuario.php";
include "../model/mappers/UsuarioMapper.php";
try {
    $id = isset($_POST["id"]) ? $_POST["id"] : null;
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : null;


    $db = new PDO("mysql:host=baseDatos;dbname=Tienda", "root", "123456", []);

    $usuario = new Usuario($id, $nombre);

    UsuarioMapper::init($db);

    $response = UsuarioMapper::modifyUsuario($usuario);


    $response ? print("actualizado correctamente") : print("no ha podido ser actualizado");
} catch (\Throwable $th) {
    throw $th;
}
