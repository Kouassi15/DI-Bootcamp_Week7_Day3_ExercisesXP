<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Exercise3 : Values From Session</h1>
    <?php
      session_start();
      $_SESSION["nom"] = "Kati";
      $_SESSION["couleur"]= "Blanc";
      $_SESSION["animal"] = "Chien";
      echo "le nom de l'utilisateur est :" .$_SESSION["nom"] . ".<br>";
      echo "Ma couleur preferer est le : " . $_SESSION["couleur"] . ".<br>";
    echo " Mon animal demestique est le : " . $_SESSION["animal"] . ".";
    ?>
    </center>
</body>
</html>