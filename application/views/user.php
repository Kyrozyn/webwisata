<?php
include "kepala/head_mat.php";
$user = $this->ion_auth->user()->row();
$name = $user->username;
?>

<div class="container">
    <table cellpadding=0 cellspacing=10>
        <tr>
            <th>Nama Awal</th>
            <th>Nama Akhir</th>
            <th>Email</th>
            <th>Grup</th>
            <th>Status</th>
            <th colspan="2"><center>Aksi</center></th>
        </tr>
        <?php foreach ($users as $user):?>
            <tr>
                <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                <td>
                    <?php foreach ($user->groups as $group):?>
                        <?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                    <?php endforeach?>
                </td>
                <td><?php echo  ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
                <td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
                <td><?php echo anchor("admin/user/delete/".$user->id, 'Delete') ;?></td>
            </tr>
        <?php endforeach;?>
    </table>
    <br>
    <a href="user/group" class="waves-effect waves-light btn">Manajemen Grup</a>
</div>
