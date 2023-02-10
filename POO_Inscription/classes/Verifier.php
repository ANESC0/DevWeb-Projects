<?php

class Verifier
{

    public static function syntaxeEmail($email)
    {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public static function doublonEmail($email)
    {

        $doublon = false;

        // Connexion à la bdd
        require('src/connection.php');



        // L'adresse email est-elle en doublon ?
        $req = $bdd->prepare('SELECT COUNT(*) as numberEmail FROM utilisateurs WHERE email = ?');
        $req->execute([$email]);

        while ($emailVerification = $req->fetch()) {

            if ($emailVerification['numberEmail'] != 0) {
                $doublon = true;
            }
        }
        return $doublon;
    }
}
