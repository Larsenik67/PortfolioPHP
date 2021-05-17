<?php

$error = null;

if (isset($_POST) && !empty($_POST)) {
    $error = [];

    if ($_POST['user_password'] !== $_POST['confirm_user_password']) {
        $error['password'] = 'Les mots de passe de sont pas indentiques';
    }
    if ($_POST['user_email'] !== $_POST['confirm_user_email']) {
        $error['email'] = 'Les emails de sont pas indentiques';
    }
    if (strlen($_POST['user_password']) < 3 && strlen($_POST['user_password']) > 30) {
        $error['user_password'] = 'Votre password dois comporter 3 caractères minimum et 30 maximum !!';
    }
    if (!preg_match('#^[a-zA-Z0-9_-]{3,30}+$#', $_POST['user_name'])) {
        //if (!preg_match(" \^[a-zA-Z0-9_-'ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]{3,30}$\ ", $_POST['user_name'])) {
        $error['user_name'] = 'Votre pseudo dois comporter 3 caractères minimum et 30 maximum. des caratères de 0 à 9, des lettre minuscules ou majuscules, des tirets et underscores!!';
    }
    if (empty($error)) {
        $nickname = $_POST['user_name'];
        $password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
        $email = $_POST['user_email'];
        $roles = json_encode(['user']);
        $sql = "INSERT INTO users(email,password,nickname,roles) VALUES ('$email','$password','$nickname','$roles')";
        if ($mysqli->query($sql) === true) {
            $_SESSION['msg-flash'] = 'Votre compte à été créer avec succès !!';
            header('Location: login.php');
        } else {
            $error = 'Une erreur est survenue: compte non créer';
        }
    }
}