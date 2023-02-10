<?php
session_start();
include('db.php');

$aktivni_korisnik=isset($_SESSION['aktivni_korisnik'])? $_SESSION['aktivni_korisnik'] : '';
$aktivni_id=isset($_SESSION['aktivni_id'])? $_SESSION['aktivni_id'] : '';
// die($aktivni_id);

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

<div class="container-fluid px-0">
    <div class="row">
        <div class=col-md-12>
            <h2 style="margin-top:3%; margin-left:1%;">Automobili koje ste izabrazi za rentiranje</h2>
        </div>
        <?php
          $rez_auta=mysqli_query($link,"SELECT * FROM $car_rental.reservation_work as res,$car_rental.cars as car WHERE res.id_cars=car.id AND id_user=$aktivni_id");
        //   die($rez_auta);
          while($rez=mysqli_fetch_assoc($rez_auta)){ 
            $naziv=$rez['car'];
            $cena=$rez['price'];
            $slika=$rez['image'];
            $link_slike='images/'.$slika;
            $id=$rez['id'];
            ?> 
      
       <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img src="<?php echo $link_slike; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $naziv ?></h5>
                <p class="card-text" style="color:orange;"><i class="fa fa-tag" aria-hidden="true"></i> <?php echo $cena ?>$/dan</p>
                <a href="rezervacija_proces.php?delete=<?php echo $id; ?>" class="btn btn-danger">Izbaci iz korpe</a>
            </div>
            </div>
        </div>
      <?php } ?>
    </div>
</div>

<div class="container-fluid px-0">
    <div class="row">
    <div class="col-md-4 offset-4">
        <form action="rezervacija_proces.php" method="POST">
        <input type="submit" class="btn btn-secondary col-md-12" name="rezervacija" value="Potvrdite svoju rezervaciju">
        </form>
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