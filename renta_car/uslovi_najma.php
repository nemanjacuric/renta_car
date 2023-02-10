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



<div class="container-fluid">
      <div class="row">
        <div class="col-md-6 offset-3">
        <h2 class="text-center">Uslovi najma</h2>
        <h3>Opsti uslovi</h3>
        <p>Minimum 21 godina starosti<br>

Minimum 2 godine posedovanja vozačke dozvole<br>

Obavezna identifikacija – lična karta ili pasoš<br>

Minimalna dužina najma je 1 dan (24 časa)<br>

Vreme preuzimanja i vraćanja vozila moraju biti isti. Tolerišemo 60 minuta kašnjenja.<br>

Po isteku prekoračenja od 60 minuta, Rent a Car Royal Novi Sad zadržava pravo da naplati još jedan dan najma.<br></p>
<h3>Preuzimanje i vraćanje vozila</h3>
<p>Vozilo se može preuzeti i vratiti u jednoj od naših poslovnica a moguća je i dostava odnosno vraćanje izvan poslovnice (hotel, kućna adresa i sl.).
Takođe,vozilo možete preuzeti i vratiti i izvan radnog vremena.</p>
<h3>Depozit</h3>
<p>Klijent je u obavezi da ostavi depozit u visini 200 do 500€ u zavisnosti od kategorije vozila. Ukoliko se utvrdi da vozilo ima novo oštećenje u trenutku vraćanja, depozit će biti zadržan u onolikom iznosu koliko se klijent prema ugovoru o najmu zadužuje za oštećenje.</p>
<h3>Načini plaćanja</h3>
<p>Najam vozila se plaća prilikom preuzimanja vozila gotovinom, kreditnom karticom (Visa, Mastercard, Diners, Amex), ili uplatom na račun (pravna lica).</p>
<h3>Saobraćajne kazne</h3>
<p>Klijent je dužan da plati sve saobraćajne/parking kazne koje su nastale za vreme trajanja najma.</p>
<h3>Podrška na putu</h3>
<p>Ukoliko odlučite da iznajmite jedno od vozila iz našeg voznog parka, imaćete podršku 24/7 na teritoriji cele Evrope.</p>
        </div>
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
