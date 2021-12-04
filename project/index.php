<?php
try {
    $dbh = new PDO('mysql:host=docker_database;dbname=mysql_db_name', "docker_root", "docker_root");
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
echo 'test';