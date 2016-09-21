<?php
/* TODO:
 * */

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
//    if (!isset($this->db)) {
    switch ($key) {
        case 'bayres':
            return new MysqliDb ('192.185.4.175', 'arielces_bayres', 't)htl)lPH{83', 'arielces_bayres');
            break;
        case 'bayres-test':
            return new MysqliDb ('192.185.4.175', 'arielces_test', '*DJ[c(n@)[ku', 'arielces_bayres_test');
            break;
        case 'mps':
            return new MysqliDb ('127.0.0.1', 'root', 'concentrador', 'arielces_bayres');
            break;
        default:
            return new MysqliDb ('127.0.0.1', 'root', 'concentrador', 'arielces_bayres');
            break;
    }
//    }
}