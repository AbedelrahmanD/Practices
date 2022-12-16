<?php

class Product{
    public static function get($options=[]){

        $sql= new sql();
        $products=$sql->fetch("select * from product");
        return $products;
    }
}