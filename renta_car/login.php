<?php
session_start();
$korisnik_reg=isset($_SESSION['korisnik_reg'])? $_SESSION['korisnik_reg'] : '';
$email_reg=isset($_SESSION['email_reg'])? $_SESSION['email_reg'] : '';
$sifra_reg=isset($_SESSION['sifra_reg'])? $_SESSION['sifra_reg'] : '';

unset($_SESSION['korisnik_reg']);
unset($_SESSION['email_reg']);
unset($_SESSION['sifra_reg']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Car Rentals</title>
    
    <link rel="stylesheet" type="text/css" href="main.css">
    
</head>
<body class="body">
<div class="container-fluid px-0">
    <div class="row">
<div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>

            <!-- <div class="social-icons">
                <img src="img/fb.png" alt="">
                <img src="img/tw.png" alt=""> 
                <img src="img/gp.png" alt="">
                <a href="index.php">Pocenta</a>
            </div> -->

            <form id="login" action="login_proces.php" method="POST" class="input-group">
                <input type="text" class="input-field" name="korisnik_login" placeholder="Korisnicko ime" required>
                <input type="password" class="input-field" name="sifra_login" placeholder="Sifra" required>
                <button type="submit" name="login" class="submit-btn" style="margin-top:8%;">Login</button>
            </form>

            <form id="register" action="login_proces.php"  method="POST" class="input-group">
                <input type="text" class="input-field" value="<?php echo $korisnik_reg; ?>" name="korisnik_reg" placeholder="Korisnicko ime" required>
                <input type="email" class="input-field" value="<?php echo $email_reg; ?>" name="email_reg" placeholder="Email" required>
                <input type="password" class="input-field" value="<?php echo $sifra_reg; ?>" name="sifra_reg" placeholder="Sifra" required>
                <button type="submit" name="reg" class="submit-btn" style="margin-top:8%;">Register</button>
            </form>
        </div>
    </div>
    </div></div>
    <script src="main.js"></script>

</body>
</html>