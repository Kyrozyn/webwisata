<?php
include "kepala/head_mat.php";
$user = $this->ion_auth->user()->row();
$name = $user->username;
?>

<div class="container">

    <h4>Hai, <?php echo $name?></h4>
    <div class="row">
    <?php
        if($this->ion_auth->in_group('Pemilik_Wisata')){
    ?>
        <div class="col s12 m6 l3"><p>
                <div class="card-panel hoverable">  <p class="center-align">Input Data Wisata</p>
                <center><a href="<?php echo base_url();?>in" id="download-button" class="btn-small waves-effect waves-light teal lighten-1">Masuk</a></center></div>
        </div>
    <div class="col s12 m6 l3"><p>
            <div class="card-panel hoverable">  <p class="center-align">Hapus Data Wisata</p>
        <center><a href="<?php echo base_url();?>in" id="download-button" class="btn-small waves-effect waves-light teal lighten-1">Masuk</a></center></div>
    </div>
    <?php } ?>
<div class="col s12 m6 l3"><p>
        <div class="card-panel hoverable">  <p class="center-align">Update Informasi Akun</p>
    <center><a href="<?php echo base_url();?>in" id="download-button" class="btn-small waves-effect waves-light teal lighten-1">Masuk</a></center></div>
    </div>
    </div>
