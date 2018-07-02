<?php
include "kepala/head_mat.php";
?>

<div class="container">
    <h4>Daftar menjadi Pemilik Wisata!</h4>
    <?php

    $hidden = array('active' => '0','company' => 'Pemilik_Wisata','group' => '');
    echo form_open("auth/create_user", '',$hidden);
    ?>
    <table>
        <tr>
            <td>No. ID KTP</td>
            <td><?php echo form_input($identity);?></td>
        </tr>
        <tr>
            <td>Nama Awal</td>
            <td><?php echo form_input($first_name); ?></td>
        </tr>
        <tr>
            <td>Nama Akhir</td>
            <td><?php echo form_input($first_name); ?></td>
        </tr>
        <tr>
            <td>Email Aktif</td>
            <td><?php echo form_input($email); ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo form_input($password); ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo form_input($password_confirm); ?></td>
        </tr>
    </table>
</div>