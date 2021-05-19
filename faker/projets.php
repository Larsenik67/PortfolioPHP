<?php

require_once '../vendor/autoload.php';
require_once '../vendor/fzaninotto\faker/src/autoload.php';
require_once '../configuration/configuration.php';

$error = null;

$number = isset($_GET['faker']) && is_numeric($_GET['faker']) && $_GET['faker'] > 0 ? $_GET['faker'] : null;

if (null !== $number) {
    //echo $number;

    require_once '../configuration/connect.php';
    require_once '../configuration/slug.php';

    for ($i=1; $i <= $number; $i++){
      //echo 1;

      $faker = Faker\Factory::create('fr-FR');

      $name = $faker->name;
      $description = $faker->text(500); 
      $image = $faker->imageUrl;
      $time = $faker->dateTime;
      $time = date_format($time, 'Y-m-d H:i:s');
      $slug = slug($name);
      $technos = json_encode(['HTML','CSS']);
      $github = null;
      $lien = null;
      $status = $faker->boolean;

      $sql = "INSERT INTO projets(name,description,image,time_at,slug,technos,github,lien,status) VALUES ('$name','$description','$image','$time','$slug','$technos','$github','$lien','$status')";

      if ($mysqli->query($sql) === true) {

        echo 'Profil ';
        echo $i;
        echo '<br/>';
        echo 'Nom : ';
        echo $name;
        echo '<br/>';
        echo 'Description : ';
        echo $description;
        echo '<br/>';
        echo 'Image : ';
        echo $image;
        echo '<br/>';
        echo 'Temps : ';
        echo $time;
        echo '<br/>';
        echo 'Slug : ';
        echo $slug;
        echo '<br/>';
        echo 'Technos : ';
        echo $technos;
        echo '<br/>';
        echo 'GitHub : ';
        echo $github;
        echo '<br/>';
        echo 'Lien : ';
        echo $lien;
        echo '<br/>';
        echo 'Status : ';
        echo $status;
        echo '<br/> <br/>';
      } else {
          echo $mysqli->error;
      }
    } 
}
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
            crossorigin="anonymous">

        <title>Faker Users</title>
    </head>
    <body>

        <form>
            <input
                class="my-5 form-control"
                type="number"
                min="0"
                placeholder="Combien de compte voulez-vous faker ?"
                name='faker'>
        </form>
        <!-- Optional JavaScript; choose one of the two! -->

        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>

    </body>
</html>