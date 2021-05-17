<?php

$sql = 'SELECT * FROM user WHERE pseudo="'.$_POST['user_name'].'" LIMIT 1';
    if ($result = $mysqli->query($sql)) {
        if ($result->num_rows > 0) {
            //_dump($result->fetch_assoc());
            $user = $result->fetch_assoc();
            if (password_verify($_POST['user_password'], $user['password']) === true) {
                $_SESSION['msg-flash'] = 'Salut '.$user['pseudo'];
                $_SESSION['user'] = $user;
                header('Location: index.php');
            }
        }
        $error = 'Pseudo ou mot de passe incorrect !!';
        /* Libération du jeu de résultats */
        $result->close();
    }

?>