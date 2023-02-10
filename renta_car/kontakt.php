<?php
session_start();
include('db.php');

$aktivni_korisnik=isset($_SESSION['aktivni_korisnik'])? $_SESSION['aktivni_korisnik'] : '';
$aktivni_id=isset($_SESSION['aktivni_id'])? $_SESSION['aktivni_id'] : '';


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    
</head>
<body>
  


<!-- Navbar -->
<?php 
include('navbar.php');
?>

<div class="contact-container">
<div class="contact-header">
    <h1>Kontakt</h1>
</div>
    <div class="left-side"><img src="images/pocenta.jpg" alt=""></div>
    <div class="contact-form">
      <div class="contact-details">
        <p><span class="material-symbols-outlined">Adresa</span>Vase Stajica 19, Novi Sad</p>
        <p><span class="material-symbols-outlined">Telefon</span>+381 69 333 4 302</p>
        <p><span class="material-symbols-outlined">Email</span>rentacarns@gmail.com</p>
      </div>
      <form
  action="https://formspree.io/f/mqkjabpk"
  method="POST"
>

  <div class="form-group">
    <label for="exampleInputEmail1">Email Adresa</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Poruka</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

</div>



<?php 
include('footer.php');
?>

<script src="main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
