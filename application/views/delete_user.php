<?php
include "kepala/head_mat.php";
?>

<div class="container">
    <div class="row">
        <div class="col s12"><h4>Apakah anda yakin ingin mendelete <?php echo $a[0]->username;?>?</h4></div>
        <div class="col s12 s6 m6 13"> <form action="" method="post">
                    <button type="submit" value="submit" class="btn waves-effect red">Ya</button>
                    <input type="hidden" name="id" value=<?php echo $a[0]->id;?>/>
                </form>
        </div>
        <div class="col s12 s6 m6 13"><a href=".." class="waves-effect waves-light btn">Tidak</a></div>
    </div>
</div>
