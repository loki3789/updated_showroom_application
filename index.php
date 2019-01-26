<?php
/**
 * Front controller
 */

require_once "./vendor/autoload.php";


use Controller\publicController AS PC;

$loader = new Twig_Loader_Filesystem('./views');

$twig = new Twig_Environment($loader, array(
//'cache'=>'cache',

));

