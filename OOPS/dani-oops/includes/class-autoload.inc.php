<?php
// spl_autoload_register('myAutoLoader');

// function myAutoLoad ($className){
//     $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

//     $path = 'classes/';
//     $extension = '.class.php';
//     require_once $path . $className . $extension;
// }

spl_autoload_register('myAutoLoader');
function myAutoLoad($className)
{
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if (strpos($url, 'inclueds') !== false) {
        $path = '../classes/';
    } else {
        $path = 'classes/';
    }

    $extension = '.class.php';
    require_once $path . $className . $extension;
}
