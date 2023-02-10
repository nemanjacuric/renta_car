
<?php 
include('db.php');
session_start();

if(isset($_GET['auto'])){
   $danas=date("Y-m-d");
   $id_auta=$_GET['auto'];
   $id_korisnika=$_SESSION['aktivni_id'];
   $sql_dodavanje=mysqli_query($link,"INSERT INTO $car_rental.reservation_work (id_cars,id_user,date)
   VALUES ('$id_auta','$id_korisnika','$danas')");
   header('refresh:0 url=index.php');
}

if(isset($_GET['delete'])){
    $id_auta=$_GET['delete'];
    $id_korisnika=$_SESSION['aktivni_id'];

    $sql_dodavanje=mysqli_query($link,"DELETE FROM $car_rental.reservation_work
    WHERE id_cars='$id_auta' AND id_user='$id_korisnika'");
    header('refresh:0 url=moja_korpa.php?korisnik='.$id_korisnika.'');
 }

if(isset($_POST['rezervacija'])){
   $id_korisnika=$_SESSION['aktivni_id'];
   $sql_radna=mysqli_query($link,"SELECT * FROM $car_rental.reservation_work WHERE id_user='$id_korisnika'");

   while($red=mysqli_fetch_assoc($sql_radna)){
     $id_k=$red['id_user'];
     $id_c=$red['id_cars'];
     $date=$red['date'];

     $sql_rezervacija=mysqli_query($link,"INSERT INTO $car_rental.reservation (id_cars,id_user,date)
     VALUES ('$id_c','$id_k','$date')");

        
   }
   $sql_dodavanje=mysqli_query($link,"DELETE FROM $car_rental.reservation_work
    WHERE id_user='$id_korisnika'");

        echo '<script language="javascript">';
        echo 'alert("Uspresno ste izvrsili rezervaciju")';
        header('refresh:0 url=index.php');
        echo '</script>';
}

?>