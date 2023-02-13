 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 2 : Store Login Detail</h1>
   
     <?php
     $data=[
        "username" => "Rachelle",
        "cookiesTime" => time() + (86400 * 30),
     ];
    
     $dataEncoding = base64_encode(json_encode($data));

     $submit = false;
    //bouton d'envoie
    $logIn = false;
    setcookie('userInfo','$dataEncoding', time()+(86400 * 30) ,'/'); //// 86400 = 1 day
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $submit = true;
        //decodage
        $dataDecrypt = json_decode(base64_decode($_COOKIE["userInfo"]), true);

        if (($dataDecrypt["username"] == $_POST["username"])) {
            $logIn = true;
        }
      
    }

    ?> 

<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="">
        <input type="text" name="usename">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php if($submit): ?>
        <h3>Login <?= $logIn ? "success" : "error" ?> </h3>
    <?php endif; ?>
</body> 
 </html> 
<?php
