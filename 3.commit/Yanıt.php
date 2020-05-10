<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
   
   <div class="bodi shadow bg-light mt-5 p-4 border-success border rounde3d w-75 mt-5">
        <p class="h4 text-success">Gönderildi</p>
       <?php 
        
    $isim=$_POST["Adınız"];
    $soyisim=$_POST["Soyadınız"];
    $email=$_POST["email"];
    $cinsiyet=$_POST["gender"];
    $şehir=$_POST["il"];
    $message=$_POST["Mesaj"];
    $ceptel=$_POST["CepTel"];
    $doğumtarihi=$_POST["dogumtarihi"];
        
        
        
    echo"İsim: ".$isim;
    echo "<br>";
    echo "Soyisim: ".$soyisim;
    echo "<br>";
    echo "E-Posta: ".$email;
    echo "<br>";
    echo "Telefon Numarası: ".$ceptel;
    echo "<br>";
    echo "Cinisyet: ".$cinsiyet;
        echo"<br>";
    echo "Yaşadığı Şehir: ".$şehir;
    echo"<br>";
    echo "Mesaj: ".$message;
        echo"<br>";
        
        ?>
    <a href=Anasayfa.html class="w3-button w3-deep-orange">Anasayfaya Geri Dön</a>
        </div>
 
    
    
    
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
    
</html>
