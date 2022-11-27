<?php
session_start();
$base_url="http://localhost/practices/user_managment/";
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
include_once __DIR__."/classes/$class_name.php";
});