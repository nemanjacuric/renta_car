<nav class="navbar sticky-top navbar-expand-lg  navBar">
    <div class="container">
    <a class="navbar-brand" href="#"><img src="images/logo1.jpg" style="height:60px; width: 150px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fa fa-bars" style="color:white;"></i>
  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Početna <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="uslovi_najma.php">Uslovi najma</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontakt.php">Kontakt</a>
              </li>
              <?php
              if($aktivni_id!=''){
              $sql_admin=mysqli_query($link,"SELECT * FROM $car_rental.users WHERE id='$aktivni_id'");
              $rezultat=mysqli_fetch_assoc($sql_admin);
              $rola=$rezultat['rola'];
              if($rola==1){ ?>
              <li class="nav-item">
                <a class="nav-link" href="rezervacije.php">Rezervacija</a>
              </li>
          <?php   } }
              ?>
                <?php if($aktivni_id!=''){ ?>
                    <a class="nav-link" style="margin-left:20%; color:#ADB5BD; margin-right:2%;">  <?php echo $aktivni_korisnik; ?> </a>
                    <form class="form-inline my-2 my-lg-0" method="POST" action="login_proces.php">
                      <button type="submit" name="logout" class="btn btn-outline-danger" style="float:left; ">Odjavite se</button>
                    </form>
                <?php  } ?>       
        </ul>

      </div>
    </div>
  </nav>