<!-- Header -->
<header id="header">
    <a class="logo" href="<?php echo base_url();?>">Home</a>
    <?php if ($this->ion_auth->logged_in()){?>
        <a class="logo" href="<?php echo base_url();?>admin">Halaman Admin</a>
    <?php }?>
    <nav>
        <a href="#menu">Menu</a>
    </nav>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <?php if(!empty($pesan)){?>
            <li><?php echo $pesan?></li>
        <?php }?>

        <li><a href="index.html">Home</a></li>
        <?php if (!$this->ion_auth->logged_in()){?>
            <li><a href="<?php echo base_url();?>auth">Login Admin</a></li>
        <?php }?>
        <?php if ($this->ion_auth->logged_in()){?>
            <li><a href="<?php echo base_url();?>auth/logout">Logout</a></li>
        <?php }?>
        <li><a href="tes.html">About</a></li>
    </ul>
</nav>