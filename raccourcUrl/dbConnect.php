<?php

/* CONNECTION BASE DE DONNEES */

define('HOST','localhost');
define('DB_NAME','bitly');
define('USER','root');
define('PASS','');


    try{
        $db =new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        
        
        
    } catch(PDOException $e){
        print "ERREUR :". $e->getMessage()."<br/>";
        die;
    }
   
    ?>