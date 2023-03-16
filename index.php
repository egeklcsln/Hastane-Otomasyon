<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Hastane Otomasyon</title>
</head>
<body>
    <header>
        <h2>Hastane Otomasyon</h2>
    </header>
    <div class="tableOuter">
        <h1>Giriş Yap</h1>
        <form action="islem.php" method="POST">
            <div class="user">
              <input type="text" name="kullanici_tc" placeholder="TC Kimlik No">
            </div>
            <div class="pass">
                <input type="password" name="kullanici_password" placeholder="Şifre">
            </div>
            <button type="submit" class="sub" id="giris" name="giris_yap">Giriş Yap</button>
            <br>
        </form>
        <a href="uye.php"><button type="submit" class="sub" id="uye">Üye Ol</button></a>



        
        


    </div>

    
</body>
</html>