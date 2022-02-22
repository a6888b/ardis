<?php
/* Smarty version 4.0.4, created on 2022-02-22 13:53:19
  from '/var/www/html/ardis/app/Views/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62153f2fa76998_82534447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2aede7db75b42c6d96ccf0200c008c09990add2f' => 
    array (
      0 => '/var/www/html/ardis/app/Views/profile.tpl',
      1 => 1645559550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62153f2fa76998_82534447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ((isset($_SESSION['pseudo'])) && (isset($_SESSION['id']))) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8852682262153f2fa70393_45261636', 'content');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_8852682262153f2fa70393_45261636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8852682262153f2fa70393_45261636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4">
            <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" /></button> <span class="name mt-3">Nom prenom</span>
                <div class="container">
                    <div class="row">
                        <?php if ((isset($_smarty_tpl->tpl_vars['msg_error']->value))) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msg_error']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                <div class="p-3 mb-2 bg-danger text-white"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>                                  
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                        <form action="<?php echo base_url('/customers/edite_profile/');?>
" method="post">
                            <p>Nom : <input type="text" name="nom"  value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"> </p>
                            <p>Prenom : <input type="text" name="prenom"  value="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
"> </p>
                            <p>Pseudo: <input type="text" name="pseudo"  value="<?php echo $_smarty_tpl->tpl_vars['pseudo']->value;?>
"></p>
                            <p>Adresses de facturation: <input type="text" name="adresse"  value="<?php echo $_smarty_tpl->tpl_vars['adresse']->value;?>
">  </p>
                            <p>Code Postal: <input type="text" name="cp"  value="<?php echo $_smarty_tpl->tpl_vars['zip']->value;?>
"></p>
                            <p>Pays: <input type="text" name="pays"  value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
"></p>
                            <p>Votre email: <input type="email" name="email"  value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"> </p>
                            <p>Votre numero de telephone: <input type="tel" name="tel"  value="<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
"> </p>
                            <?php if ((isset($_smarty_tpl->tpl_vars['photo_profile']->value)) && !empty($_smarty_tpl->tpl_vars['photo_profile']->value)) {?>
                                                            <p>Photo de profile: <input type="file" name="profil_img"></p>
                            <?php } else { ?>
                                <p>Photo de profile: aucune 
                                    <input type="file" name="photo_profile">
                                </p>
                            <?php }?>
                            <p>Entrez votre nouveaux mot de passe: <input type="password" name="new_password"> </p>
                            <p>Confirmez votre nouveaux mot de passe: <input type="password" name="new_password_confirm"> </p>
                            <input type="submit" value="Valider les modification" class='btn btn-primary submit-btn '>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}