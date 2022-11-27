<?php

include("sql.php");
$sql =  new sql();

//  $sql->execute("insert into user(username,password) values(:username,:password)",[
//     ":username"=>"aaa",
//     ":password"=>"bbb"
// ]);


//  $sql->execute(
//     "update user set username=:username where id=:id",
//     [
//         ":username" => "zzz",
//         ":id" => "2"
//     ]
// );

//  $sql->execute(
//     "delete from user where id=:id",
//     [
//         ":id" => "1",

//     ]
// );

// $records=$sql->fetch("select * from user where id=:id",[":id"=>5]);
// print_r($records);