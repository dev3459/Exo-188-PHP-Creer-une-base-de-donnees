<?php

/**
 * 1. A l'aide de PhpMyAdmin
 * ==> Créez une nouvelle base de données intro_sql_phpmyadmin
 * ==> Une fois créée, trouvez un moyen pour supprimer cette base de données toujours depuis PhpMyAdmin.
 */

// FIXME ==> Aucun code à fournir pour cette étape.


/**
 * 2. A l'aide de PHP
 * ==> Créez une nouvelle base de données intro_sql
 * ==> Tentez de la supprimer depuis PHP
 * ==> Créez la à nouveau car nus en aurons besoin pour l'exo suivant !
 * Théorie :
 * -----------
 * En SQL, l'instruction DROP DATABASE nom_de_ma_table permet de supprimer une base de données.
 * Dans la réalité, vous n'aurez que très peu d'occasions de vous en servir directement depuis PHP mais retenez la quand même, elle peut être utile dans le cadre de tests.
 */

// TODO Votre code ici bas.

try {
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $maConnexion = new PDO("mysql:host=$server;charset=utf8", $user, $pass);

    //Pour créer la base de données
    $request = "CREATE DATABASE intro_sql";
    
    //Pour supprimer la base de données
    // $request = "DROP DATABASE intro_sql";

    $maConnexion->exec($request);

    echo "La requête c'est bien déroulé.";
}
catch (PDOException $exception) {
    echo $exception->getMessage();
}