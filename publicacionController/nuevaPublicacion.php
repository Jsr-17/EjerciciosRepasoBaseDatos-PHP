<?php
include "../../model/Publicaciones.php";
include "../../model/mappers/PublicacionesMapper.php";


$titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : null;
$id = isset($_POST["id"]) ? $_POST["id"] : null;
$id_usuario = isset($_POST["id_usuario"]) ? $_POST["id_usuario"] : null;


try {
    $db = new PDO("mysql:host=baseDatos;dbname=Tienda", "root", "123456");

    PublicacionesMapper::init($db);
    $publicacion = new Publicaciones(0, $id_usuario, $titulo);

    $response = PublicacionesMapper::addPublicacion($publicacion);

    $response ? print("usario introducido") : print("usuario no introducido");
} catch (\Throwable $th) {
    throw $th;
}
