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
          <?php  
           $sql_ispis_cars=mysqli_query($link,"SELECT DISTINCT id_user,user,email FROM $car_rental.reservation as res,$car_rental.users as us WHERE us.id=res.id_user");
           while($rez=mysqli_fetch_assoc($sql_ispis_cars)){
            $naziv=$rez['user'];
            $email=$rez['email'];
            $id=$rez['id_user'];
          ?>
            <div class="col-md-3">
            <div class="card text-center">
              <div class="card-header p-0">
                
              </div>
              <div class="card-body">
                <h5 class="card-title">Narucilac: <?php echo $naziv ?></h5>
                <p class="card-text" style="color:orange;">Email: <?php echo $email; ?></p>

              </div>
              <div class="card-footer text-muted">
              <a class="btn btn-outline-warning" style="color:yellow; font-size:16px;" href="potvrda_rezervacije.php?broj_rezervacije=<?php echo $id; ?>">Prikaz rezervacije</a>
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
