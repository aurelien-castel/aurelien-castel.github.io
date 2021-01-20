<?php

class Database
{
    private $dsn = "mysql:dbname=gsb_frais;host=localhost:3308";
    private $login = "root";
    private $password = "";

    private $pdo;


    public function __construct()
    {
        if ($this->pdo==null)
        {
            $this->pdo = new PDO($this->dsn,$this->login,$this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
            $this->pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,'SET NAMES utf8');
        }
    }


    public function getPDO()
    {
        return $this->pdo;
    }

    
    public function query( $query , $params = false )
    {
        
        if($params)
        {
            $req = $this->pdo->prepare($query);
            $req->execute($params);

        }else{

            $req = $this->pdo->query($query);

        }

        return $req;

    }





}







?>