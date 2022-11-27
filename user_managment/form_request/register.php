<?php

$errors=[];
if($_POST["username"]==""){
    $errors[]="Username is required";
}

if(strlen($_POST["password"])<8){
    $errors[]="Password must be at least 8 characters";
}

if($_POST["password"]!=$_POST["confirm_password"]){
    $errors[]="Passwords doesn't match";
}

$sql= new sql();
$users=$sql->fetch("select username from user where username=:username",[":username"=>$_POST["username"]]);
if(count($users)){
    $errors[]="Username already exists";
}

if(count($errors)==0){

$sql->execute("insert into user (username,password) values(:username,:password)",[
    ":username"=>$_POST["username"],
    ":password"=>password_hash($_POST["password"],PASSWORD_DEFAULT),
]);

}