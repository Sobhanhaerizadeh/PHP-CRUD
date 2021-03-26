<?php

    define ('DB_HOST' , 'localhost');
    define ('DB_USER' , 'sobi');
    define ('DB_PASS' , '123');
    define ('DB_NAME' , 'project');

    try{
    
        $connect = new PDO ('mysql:host=' .DB_HOST . ';dbname='. DB_NAME, DB_USER, DB_PASS);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connect->exec('SET NAMES UTF8');

    }
    catch(PDOException $error){
        echo $error->getMessage();
    }

