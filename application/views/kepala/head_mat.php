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
                <li><a href="<?php echo base_url();?>admin">Halaman Admin</a></li>
                <li><a href="<?php echo base_url();?>auth">Logout</a></li>
                <?php
            }
            ?>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/materialize.js"></script>
<script src="<?php echo base_url();?>assets/js/init.js"></script>
