<?php
/* TODO:
 * */
session_start();
require_once '../cnx/cnx.php';

$data = file_get_contents("php://input");
// Decode data from js
$decoded = json_decode($data);

if ($decoded != null) {
    if ($decoded->function == 'db') {
        db($decoded->key);
    }
}


/////// INSERT ////////
/**
 * @description Crea un producto, sus fotos, precios y le asigna las categorias
 * @param $product
 */
function db($key)
{
    echo get($key);
}