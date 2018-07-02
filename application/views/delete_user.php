<?php
include "kepala/head_mat.php";
$user = $this->ion_auth->user()->row();
$name = $user->username;
?>

<div class="container">
    <h4>Apakah anda yakin ingin mendelete <?php echo $a[0]->username;?>?</h4>
    <a href=<?php echo $id?>/y id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Masuk</a>

</div>
