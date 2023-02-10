<?php 
include('db.php');
session_start();

if(isset($_POST['reg'])){
    $korisnik=$_POST['korisnik_reg'];
    $email=$_POST['email_reg'];
    $sifra=$_POST['sifra_reg'];
    
    $sql_provera=mysqli_query($link,"SELECT * FROM $car_rental.users WHERE user='$korisnik' AND password_user='$sifra'");
    $broj_provere=mysqli_num_rows($sql_provera);

    if($broj_provere>0){
      $_SESSION['korisnik_reg']=$korisnik;
      $_SESSION['email_reg']=$email;
      $_SESSION['sifra_reg']=$sifra;

      echo '<script language="javascript">';
      echo 'alert("Ova kombinacija korisnickog imena i sifre vec postoji")';
      header('refresh:0 url=login.php');
      echo '</script>';
    }
    else{
      $sql_upis=mysqli_query($link,"INSERT INTO $car_rental.users (user,email,password_user) VALUES('$korisnik','$email','$sifra')");
      echo '<script language="javascript">';
      echo 'alert("Uspesno ste se registrovali")';
      header('refresh:0 url=login.php');
      echo '</script>';
    }
 
}




if(isset($_POST['login'])){
    $korisnik=$_POST['korisnik_login'];
    $sifra=$_POST['sifra_login'];

    $sql_provera=mysqli_query($link,"SELECT * FROM $car_rental.users WHERE user='$korisnik' AND password_user='$sifra'");
    $broj_provere=mysqli_num_rows($sql_provera);

    if($broj_provere==1){
       $sql_user=mysqli_query($link,"SELECT * FROM $car_rental.users WHERE user='$korisnik' AND password_user='$sifra'");
       $red=mysqli_fetch_assoc($sql_user);

       $ime_korisnika=$red['user'];
       $email_korisnika=$red['email'];
       $id_korisnika=$red['id'];

       $_SESSION['aktivni_korisnik']=$ime_korisnika;
       $_SESSION['aktivni_id']=$id_korisnika;
       $_SESSION['aktivni_email']=$email_korisnika;

        echo '<script language="javascript">';
        echo 'alert("Uspresno ste se ulogovali")';
        header('refresh:0 url=index.php');
        echo '</script>';

    }
    else{
        $_SESSION['korisnik_login']=$korisnik;
        $_SESSION['sifra_login']=$sifra;
        echo '<script language="javascript">';
        echo 'alert("Neispravna kombinacija korisnika i sifre")';
        header('refresh:0 url=login.php');
        echo '</script>';
    }
}

if(isset($_POST['logout'])){
    unset($_SESSION['aktivni_korisnik']);
    unset($_SESSION['aktivni_id']);
    unset($_SESSION['aktivni_email']);

    echo '<script language="javascript">';
    echo 'alert("Uspesno ste se izlogovali")';
    header('refresh:0 url=index.php');
    echo '</script>';
}
?>