<?php

 class Securite{

    public static function chiffer($password){

        // Chiffrement du mot de passe
		$password = "aq1".sha1($password."123")."25";

     

        return $password;

    }

 }