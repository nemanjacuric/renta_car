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


<div class="container-fluid px-0 color">
    <div class="row">
        <div class="col-md-4 offset-md-1">
<h2 class="h3_pocenta">RENT A CAR NOVI SAD</h2>
<h3>NEOGRANIČENA KILOMETRAŽA BEZ DEPOZITA</h3>
<p>Već od 15€ dnevno<br>
Specijalna ponuda na rentiranje od 30 dana<br>
Dostava vozila na adresu<br>
Zeleni karton gratis<br>
Registruj se i dodji lako do svoga automobila!</p>

<a href="login.php" class="btn btn-primary col-md-8" role="button">Prijavi se</a>

        </div>  
    </div>
</div>

<div class="section-title  text-center" style="margin-top:2%;">
                        <p style="	margin-bottom: 10px;
                        position: relative;
                        text-transform: uppercase;font-size: 22px;
	                    font-weight: 600;
	                    margin-bottom: 30px;
	                    text-transform: uppercase;">Automobili iz naše ponude</p>
                        <span class="title-line">- <i class="fa fa-car"> -</i></span>
</div>
<div class="container-fluid">
      <div class="row">
        <div class="col-md-1 offset-11">
        <?php
        if($aktivni_id!=''){
           $sql_korpa=mysqli_query($link,"SELECT * FROM $car_rental.reservation_work WHERE id_user='$aktivni_id'");
           $broj_u_korpi=mysqli_num_rows($sql_korpa);
         ?>
        <a href="moja_korpa.php?korisnik=<?php echo $_SESSION['aktivni_id']; ?>" style="color:black; text-decoration:none;">
             <i class="fa fa-shopping-basket" aria-hidden="true" style="font-size:26px"></i><span style="font-size:26px; color:red;"><?php echo $broj_u_korpi; ?></span>
        </a>
        <?php } ?>
        </div>
      </div>
</div>
<div class="container-fluid">
      <div class="row">
          <?php  
           $sql_ispis_cars=mysqli_query($link,"SELECT * FROM $car_rental.cars as car");
           while($rez=mysqli_fetch_assoc($sql_ispis_cars)){
            $naziv=$rez['car'];
            $cena=$rez['price'];
            $slika=$rez['image'];
            $link_slike='images/'.$slika;
            $id=$rez['id'];
          ?>
            <div class="col-md-3">
            <div class="card text-center">
              <div class="card-header p-0">
                <img
                  src="<?php echo $link_slike ?>"
                  alt="" class="w-100">
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $naziv ?></h5>
                <p class="card-text" style="color:orange;"><i class="fa fa-tag" aria-hidden="true"></i> <?php echo $cena ?>$/dan</p>

              </div>
              <div class="card-footer text-muted">
              <a class="btn btn-outline-warning" style="color:yellow; font-size:16px;" href="rezervacija_proces.php?auto=<?php echo $id ?>">Dodaj rezervaciju</a>
              </div>
            </div>
            </div>
          <?php } ?>
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
