<?php
/* TODO:
 * */
session_start();
require_once '../cnx/cnx.php';

$data = $_GET['function'];
$clave = $_GET['key'];
// Decode data from js
//$decoded = json_decode($data);

if ($data != null) {
    if ($data == 'db') {
        db($clave);
    }
}


/////// INSERT ////////
/**
 * @description Crea un producto, sus fotos, precios y le asigna las categorias
 * @param $product
 */
function db($key)
{
    echo 'entra';
    echo print_r(get($key));
}