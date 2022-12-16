<?php
session_start();
$base_url="http://localhost/practices/p2_e_commerce/";
$languages = [
    "en" => "ltr",
    "ar" => "rtl",
];
$lang = isset($_GET["lang"]) ? $_GET["lang"] : "en";
if(!isset($languages[$lang])){
    $lang="en";
}
$dirc = $languages[$lang];
include_once __DIR__."/languages/$lang.php";
spl_autoload_register(function($class_name){

$paths=[
    "classes/",
    "../model"
];
foreach($paths as $path){
    $file_path=__DIR__."/$path/$class_name.php";
 
    if(file_exists($file_path)){
        include_once $file_path;
        break;
    }
}


});