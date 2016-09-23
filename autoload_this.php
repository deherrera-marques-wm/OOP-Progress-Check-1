<?php
spl_autoload_register(function($class_name){
    include $class_name . '.php';
});
$food = new index;
$bar = new classes;

$bar->car_model();
?>