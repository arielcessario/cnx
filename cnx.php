<?php
/* TODO:
 * */
session_start();
require_once 'MysqliDb.php';

$data = file_get_contents("php://input");
// Decode data from js
$decoded = json_decode($data);

if ($decoded != null) {
    if ($decoded->function == 'get') {
        get($decoded->key);
    }
}


/////// INSERT ////////
/**
 * @description Crea un producto, sus fotos, precios y le asigna las categorias
 * @param $product
 */
function get($key)
{
    if (!isset($this->db)) {
        switch ($key) {
            case 'bayres':
                return new MysqliDb ('127.0.0.1', 'root', 'concentrador', 'arielces_bayres');
                break;
            case 'mps':
                return new MysqliDb ('127.0.0.1', 'root', 'concentrador', 'arielces_bayres');
            default:
                return new MysqliDb ('127.0.0.1', 'root', 'concentrador', 'arielces_bayres');
        }
    }
}