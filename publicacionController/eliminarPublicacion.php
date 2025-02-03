<?php

include "../../model/mappers/PublicacionesMapper.php";
include "../../model/Publicaciones.php";

$id = isset($_POST["id"]) ? $_POST["id"] : null;
//$usuario_id=isset($_POST["usuario_id"])? $_POST["usuario_id"]:null;
//$titulo=isset($_POST["titulo"])? $_POST["titulo"]:null;

try {

    $db = new PDO("mysql:host=baseDatos;dbname=Tienda;", "root", "123456");

    PublicacionesMapper::init($db);

    $publicacion = new Publicaciones($id, 0, "");

    $response = PublicacionesMapper::rmPublicacion($publicacion);

    $response ? print "usuario eliminado" : print "El usuario no ha podido ser eliminado";
} catch (\Throwable $th) {
    throw $th;
}
