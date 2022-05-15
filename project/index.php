<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="php">
    <style>
        p{
            text-align: center;
            color: #3a6cf4;
            font-weight: 700;
            font-size: 3em;
        }
    </style>
<?php 
    $email="b211210580@gmail.com";
    $pass="b211210580";
    if($_POST["Email"]==$email && $_POST["Pass"]==$pass)
    {
        echo ("<p>hoşgeldiniz b211210580</p>");
    }
    else
    {
        echo ("<p>hatalı giriş</p>");
        header("refresh: 3; url=login.html");
    }
?>
</body>
</html>