<?php

$error = null;

if (isset($_POST['user_name']) && !empty($_POST['user_name']) && isset($_POST['user_password']) && !empty($_POST['user_password'])) {
    $sql = 'SELECT * FROM users WHERE nickname="'.$_POST['user_name'].'" LIMIT 1';
    if ($result = $mysqli->query($sql)) {
        if ($result->num_rows > 0) {
            //echo _dump($result->fetch_assoc());
            echo ($_POST['user_password']);
            $user = $result->fetch_assoc();
            var_dump ($user['user']);
            if (password_verify($_POST['user_password'], $user['password']) === true)
            {
                $_SESSION['msg-flash'] = 'Salut '.$user['nickname'];
                $_SESSION['user'] = $user;

                redirectToRoute('index.php');
            }
            else {
                $error= 'test';
            }
        }
        $error = 'Pseudo ou mot de passe incorrect !!';

        /* Libération du jeu de résultats */
        $result->close();
    }
}