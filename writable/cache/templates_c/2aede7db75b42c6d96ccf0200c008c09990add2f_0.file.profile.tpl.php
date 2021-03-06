<?php
/* Smarty version 4.0.4, created on 2022-03-09 17:39:31
  from '/var/www/html/ardis/app/Views/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62293ab3d15400_62483316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2aede7db75b42c6d96ccf0200c008c09990add2f' => 
    array (
      0 => '/var/www/html/ardis/app/Views/profile.tpl',
      1 => 1646865663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62293ab3d15400_62483316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ((isset($_SESSION['pseudo'])) && (isset($_SESSION['id']))) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186373179462293ab3d0e062_77165153', 'content');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_186373179462293ab3d0e062_77165153 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_186373179462293ab3d0e062_77165153',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4">
            <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="<?php echo ((base_url('assets/Images/profile')).('/')).($_smarty_tpl->tpl_vars['photo_profile']->value);?>
" height="100" width="100" /></button> 
                <span class="name mt-3"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</span>
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
                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['msg_succes']->value))) {?>
                            <div class="p-3 mb-2 bg-success text-white"><?php echo $_smarty_tpl->tpl_vars['msg_succes']->value;?>
</div>
                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['msg_error_profile']->value))) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msg_error_profile']->value, 'msg');
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
" method="post"  enctype='multipart/form-data'>
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
                            <p>Photo de profile: <input type="file" name="photo_profile"> 
                                <p style="color: red;">Format accepter .png, .webp, .jpeg, .jpg</p>
                            </p>
                            <p>Entrez votre nouveaux mot de passe: <input type="password" name="new_password"> </p>
                            <p>Confirmez votre nouveaux mot de passe: <input type="password" name="new_password_confirm"> </p>
                            <?php if ($_smarty_tpl->tpl_vars['reservation_achieve']->value != false) {?>
                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['reservation_achieve']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['reservation_achieve']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                    <p>Vous avez effectuer <?php echo $_smarty_tpl->tpl_vars['reservation_achieve']->value[$_smarty_tpl->tpl_vars['i']->value]->nb_reservation;?>
 reservation dans l'hotel ardis <?php echo $_smarty_tpl->tpl_vars['reservation_achieve']->value[$_smarty_tpl->tpl_vars['i']->value]->hotel_nom;?>
.</p>
                                <?php }
}
?>
                            <?php }?>
                            <input type="submit" value="Valider les modification" class='btn-primary submit-btn '>
                        </form>
                        <form action="<?php echo base_url('/customers/delete_profile/');?>
" method="POST">
                            <input type="submit" class='btn-danger' value='Supprimer votre compte'>
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
