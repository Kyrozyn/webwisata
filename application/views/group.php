<?php
include "kepala/head_mat.php";
//print_r($groups, 0);
?>

<div class="container">
    <table cellpadding=0 cellspacing=10>
        <tr>
            <th>ID</th>
            <th>Nama Group</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach ($groups as $group) {
            $desc = $group->description;
            if (empty($desc)) {
                $desc = "<i>KOSONG</i>";
            }
            ?>
            <tr>
                <td><?php echo $group->id; ?></td>
                <td><?php echo $group->name; ?></td>
                <td><?php echo $desc; ?></td>
                <td>
                    <form method="post" accept-charset="utf-8" action=""
                          onsubmit="return confirm('Apakah anda yakin mau delete grup <?php echo $group->name ?>??')";>
                        <button type="submit" class="waves-effect waves-light btn-small">Delete</button>
                        <input type="hidden" name="id" value="<?php echo $group->id?>"/>
                    </form>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
