<?php

require_once '../vendor/autoload.php';
require_once '../vendor/fzaninotto\faker/src/autoload.php';
require_once '../configuration/configuration.php';

$error = null;

function removeSpecialChar(string $text): string
{
    return preg_replace('/[^A-Za-z0-9\-]/', '', $text);
}

$number = isset($_GET['faker']) && is_numeric($_GET['faker']) && $_GET['faker'] > 0 ? $_GET['faker'] : null;

if (null !== $number) {
    //echo $number;

    require_once '../configuration/connect.php';

    for ($i = 1; $i <= $number; $i++){
      //echo "oui";

      $faker = Faker\Factory::create('fr-FR');
      $email = removeSpecialChar(strtolower($faker->lastName.rand().$faker->firstName));
      $password = '@@__'.$email;

      $nickname = $faker->name;
      $password = $faker->password;
      $email = $faker->email;
      $roles = json_encode(['user']);
      $password_hash = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO users(email,password,nickname,roles) VALUES ('$email','$password_hash','$nickname','$roles')";

      if ($mysqli->query($sql) === true) {

        echo 'Profil ';
        echo $i;
        echo '<br/>';
        echo $nickname;
        echo '<br/>';
        echo $password;
        echo '<br/>';
        echo $email;
        echo '<br/> <br/>';
      }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Faker Users</title>
  </head>
  <body>
 
    <form>
    <input class="my-5 form-control" type="number" min="0" placeholder="Combien de compte voulez-vous faker ?" name='faker'>
    </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>