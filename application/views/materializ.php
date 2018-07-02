<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Website Wisata</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo base_url();?>" class="brand-logo">Wisata BANDUNG RAYA</a>
      <ul class="right hide-on-med-and-down">
          <?php if (!$this->ion_auth->logged_in()){?>

          <?php }
          else {?>
              <li><a href="<?php echo base_url();?>admin">Halaman Admin</a></li>
              <li><a href="<?php echo base_url();?>auth/logout">Logout</a></li>
              <?php
          }
          ?>
      </ul>

      <ul id="nav-mobile" class="sidenav">
          <?php if (!$this->ion_auth->logged_in()){?>

          <?php }
          else {?>
              <li><a href="#"><?php echo $pesan?></a></li>
              <li><a href="<?php echo base_url();?>admin">Halaman Admin</a></li>
              <li><a href="<?php echo base_url();?>auth">Logout</a></li>
              <?php
          }
          ?>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Website Wisata BANDUNG RAYA</h1>
        <div class="row center">
          <h5 class="header col s12 light">Jelajahi wisata di BANDUNG RAYA</h5>
        </div>
        <div class="row center">
          <a href="<?php echo base_url();?>in" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Masuk</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url();?>images/banner.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">
        <center><h4>Apa saja yang ada di Bandung Raya?</h4></center>
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">filter_hdr</i></h2>
            <h5 class="center">Tangkuban Parahu</h5>

            <p class="light">Tangkuban Parahu atau Gunung Tangkuban Perahu adalah salah satu gunung dengan rimbun pohon pinus dan hamparan kebun teh di sekitarnya</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">filter_vintage</i></h2>
            <h5 class="center">Dago Dreampark</h5>

            <p class="light">Dago Dreampark adalah sebuah taman yang terletak di Dago</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">filter_drama</i></h2>
            <h5 class="center">Waduk Jatiluhur</h5>

            <p class="light">Waduk Jatiluhur adalah sebuah waduk yang terletak di Kecamatan Jatiluhur, Kabupaten Purwakarta, Provinsi Jawa Barat (±9 km dari pusat Kota Purwakarta)</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Tunggu apalagi?</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url();?>images/banner.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Website apa ini?</h5>
          <p class="grey-text text-lighten-4">Website ini dibuat untuk memberikan informasi kepada masyarakat tentang wisata di Bandung Raya</p>


        </div>
        <div class="col l6 s12">
          <h5 class="white-text">Link Penting</h5>
          <ul>
            <li><a class="white-text" href="#!">Paduan untuk pemilik Wisata </a></li>
            <li><a class="white-text" href="#!">Paduan untuk Dinas</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/materialize.js"></script>
  <script src="<?php echo base_url();?>assets/js/init.js"></script>

  </body>
</html>
