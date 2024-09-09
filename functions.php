<?php 
function dumpDie($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';

    die();
}
function applyBg($url){
    return $_SERVER['REQUEST_URI'] === $url ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
}