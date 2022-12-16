<?php
class Sql{
    public $con;
    public function __construct($servername="localhost",$dbname="e_commerce",$username="root",$password="")
    { 
       $this->connect($servername,$dbname,$username,$password);
        
    }

    public function connect($servername,$dbname,$username,$password){
        $this->con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function execute($query,$bind_params=[]){
        $stmt= $this->con->prepare($query);
        foreach($bind_params as $key=>$bind_param){
            $stmt->bindParam($key,$bind_params[$key]);
        }
       
         $stmt->execute();
         return $stmt;

    }
    public function fetch($query,$bind_params=[]){
        $stmt=$this->execute($query,$bind_params);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}