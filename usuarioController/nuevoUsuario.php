<?php
include "../model/mappers/UsuarioMapper.php";
include "../model/Usuario.php";

try {

    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : null;


    $db = new PDO("mysql:host=baseDatos;dbname=Tienda", "root", "123456", [
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    ]);

    UsuarioMapper::init($db);

    $usuario = new Usuario(0, $nombre);

    UsuarioMapper::add($usuario);
} catch (Exception $e) {
    echo $e;
}
