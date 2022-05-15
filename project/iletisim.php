<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        .php p{
            color: #3a6cf4;
            background-color: #f0f0f0;
            width: 100%;
            font-weight: 700;
            font-size:1.4em; 
            padding: 1% 30%;
        }

        .php{
            background-size: cover;
            background: url(images/login3.jpg) no-repeat;
        }
        .font{
            color: #fff;
            padding-top: 5%;
            padding-left: 36%;
            font-weight: 500;
            font-size: 1.3em;
        }
        .font td{
            padding-bottom: 2%;
            padding-left:10px;
        }
    </style>
</head>
<body class="php">
        <p>Bilgileriniz Başarılı Bir Şekilde Gönderilmiştir</p>
    <table class="font">
        <tr>
            <td>isim</td>
            <td>:</td>
            <td>
                <?php
                    echo $_POST["ad"];
                ?>
            </td>
        </tr>
        <tr>
            <td>soyisim</td>
            <td>:</td>
            <td>
                <?php
                    echo $_POST["soyad"];
                ?>
            </td>
        </tr>
        <tr>
            <td>eposta</td>
            <td>:</td>
            <td>
                <?php
                    echo $_POST["eposta"];
                ?>
            </td>
        </tr>
        <tr>
            <td>şifre</td>
            <td>:</td>
            <td>
                <?php
                    echo $_POST["sifre"];
                ?>
            </td>
        </tr>
        <tr>
            <td>cinsiyet</td>
            <td>:</td>
            <td>
                <?php
                    echo $_POST["cinsiyet"];
                ?>
            </td>
        </tr>
        <tr>
            <td>okul</td>
            <td>:</td>
            <td>
                <?php
                    echo $_POST["universite"];
                ?>
            </td>
        </tr>
        <tr>
            <td>form türü</td>
            <td>:</td>
            <td>
                <?php
                    echo $_POST["form-tipi"];
                ?>
            </td>
        </tr>
        <tr>
            <td>ilgili dersler</td>
            <td>:</td>
            <td>
                <?php
                    echo $_POST["ders"];
                ?>
            </td>
        </tr>
        <tr>
            <td>mesajınız</td>
            <td>:</td>
            <td>
                <?php
                    echo $_POST["mesaj"];
                ?>
            </td>
        </tr>
        
    </table>

</body>
</html>