<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br>
<h1>Exercise 1 : Username Session</h1>


<?php
       session_start();
       if (isset($_SESSION['usename'])) {
        // echo " la bienvenue";
       $_SESSION['username'] = ' ';

       }
       //verification du Bouton submit
       if (isset($_POST['submit'])) {
          $_SESSION['username'] = $_POST['username'];
       }
      if (!empty($_SESSION['username'])) {
        echo "Bienvenue   ". $_SESSION['username'];
      }else{
        ?>
        <form action="" method="post">
        <label for="username">Username :</label>
          <input type="text" name="username">
          <input type="submit" name="submit" value="Submit">
      </form>
      <?php
      }

      //Destruction de la session
      if(isset( $_POST['logout'])){
        session_destroy();
        $_SESSION['username']='';
      };

    ?>

  <form action="" method="post">
  <input type="submit" name="logout" value="logout">
  </form> 
</body>
</html>