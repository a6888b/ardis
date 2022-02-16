<?php
/* Smarty version 4.0.4, created on 2022-02-16 04:24:37
  from '/var/www/html/ardis/app/Views/base/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620cd0e56a8681_92612962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c5834c268270ba97c84b8f8df15447ebba46635' => 
    array (
      0 => '/var/www/html/ardis/app/Views/base/header.tpl',
      1 => 1645007057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620cd0e56a8681_92612962 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description " content="Hotel ardis ,l 'hotel du 'climats ' ">
    <meta name="description " content="Découvrez nos hôtels sur tout les climats, nous avons des hôtels Dans les 4 coins du globe.
    Nous avons 3 hotels à dubai, 2 en suisse et 2 à punt cana. ">
    <link rel="stylesheet " href="<?php echo base_url('assets/css/bootstrap.css');?>
">
    <link rel="stylesheet" href="<?php echo base_url((('assets/css/').($_smarty_tpl->tpl_vars['name_file']->value)).('.css'));?>
">
    <title><?php echo $_smarty_tpl->tpl_vars['name_file']->value;?>
</title>
    </head>
<?php if ($_smarty_tpl->tpl_vars['name_file']->value == 'index') {?>
<body style="background-image: url(<?php echo base_url('assets/Images/background.jpg');?>
)">
<?php } else { ?>
<body>
<?php }?>
    <!-- hedear -->
<header>
    <!-- navbar -->
    <nav class="navbar bg-transparent navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="<?php echo base_url('pages/index');?>
"><img src="<?php echo base_url('assets/Images/logo.png');?>
" alt="logo" width="80"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- item navbar  -->
                    <li class="nav-item">
                        <a class="nav-link active text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" aria-current="page" href="<?php echo base_url('pages/index');?>
">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Nos hôtels
                        </a>
                        <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item bg-transparent text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/punta_cana');?>
">Punta cana</a></li>
                            <li><a class="dropdown-item bg-transparent text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/dubai');?>
">Dubai</a></li>
                            <li><a class="dropdown-item bg-transparent text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/suisse');?>
">Suisse</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/reservation');?>
">reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/activiter');?>
">nos activiter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/restaurant');?>
">restaurants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/galerie_photo');?>
">galerie photo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/avis');?>
">les avis </a>
                    </li>
                    <?php if ((isset($_SESSION['pseudo']))) {?>
                        <li class="nav-item">
                            <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url(('customers/profile/').($_SESSION['pseudo']));?>
">profile - <?php echo $_SESSION['pseudo'];?>
</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('customers/logout');?>
">se déconnecter</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('visitor/create_account');?>
">creer un compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('visitor/login');?>
">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('visitor/mdpoublier');?>
">mot de passe oublié </a>
                        </li>

                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php }
}
