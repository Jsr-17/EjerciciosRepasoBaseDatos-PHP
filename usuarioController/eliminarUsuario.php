<?php
include "../model/mappers/UsuarioMapper.php";
include "../model/Usuario.php";

try {
    $id = isset($_POST["id"]) ?  (int) $_POST["id"] : null;


    $db = new PDO("mysql:host=baseDatos;dbname=Tienda", "root", "123456", [
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    ]);

    UsuarioMapper::init($db);

    $usuario = new Usuario($id, "");


    $resultado = UsuarioMapper::rmUsuario($usuario);

    $resultado ?
        print "<p> Usuario Eliminado Correctamente</p>" :
        print "<p> Ha ocurrido un error</p>";
} catch (\Throwable $th) {
    throw $th;
}
