var a = document.forms["form"]["ad"].value;
var b = document.forms["form"]["soyad"].value;
var c = document.forms["form"]["sifre"].value.toString();
var d = document.forms["form"]["eposta"].value;
var e = document.forms["form"]["cinsiyet"].value;
var f = document.forms["form"]["universite"].value;
var g = document.forms["form"]["mesaj"].value;

function funk() {

    a = document.forms["form"]["ad"].value;
    if(a.length > 15 || a == "" || a == null) 
    {
        alert("adınız uzun olmasın!<br>adınız boş olmasın!");
        return false;
    }
    
    b = document.forms["form"]["soyad"].value;
    if(b.length > 10 || b == "" || b == null) 
    {
        alert("soyadınız uzun olmasın!<br>doyadınız boş olamsın!");
        return false;
    }

    d = document.forms["form"]["eposta"].value;
    var sayac = 0;
    for(i=0; i<d.length; i++) 
    {
        if(d[i] == "@")
        sayac++;
    }
    if(sayac == 0 || d == "" || d[0] == "@") 
    {
        alert("mail boş bırakmayınız!<br>@ operatoru kullanmanız gerekiyor!");
        return false;
    }
    
    c = document.forms["form"]["sifre"].value.toString();
    if(c != d.toString().substring(0,c.length) || c == "") 
    {
        alert("sifre hatalıdır!<br><b>sifreniz epostanızdaki @ operatorunden onceki harflerdir</b>");
        return false;
    }
    
    e = document.forms["form"]["cinsiyet"].value;
    if(e == "") 
    {
        alert("Cinsiyet boş bırakmayınız!");
        return false;
    }
    
    f = document.forms["form"]["universite"].value;
    if(f != "sau" && f != "subu"&& f !="itu" && f == "") 
    {
        f = "belirtilmedi";
    }

    g = document.forms["form"]["mesaj"].value;
    if(g == "") 
    {
        alert("mesaj kısmı boş bırakmayınız!");
        return false;
    }    
}