<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
    
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