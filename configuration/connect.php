<?php

require_once '../db.php';

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_error) {
    die('connexion échoué: '.$mysqli->connect_error);
}
