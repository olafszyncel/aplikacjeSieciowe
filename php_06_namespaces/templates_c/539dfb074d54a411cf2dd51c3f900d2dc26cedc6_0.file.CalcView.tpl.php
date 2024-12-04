<?php
/* Smarty version 4.5.4, created on 2024-12-04 11:35:21
  from 'C:\xampp\htdocs\php_06_namespaces\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67503069aa71c3_52488886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '539dfb074d54a411cf2dd51c3f900d2dc26cedc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_namespaces\\app\\views\\CalcView.tpl',
      1 => 1733308518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67503069aa71c3_52488886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213134182667503069a96e98_65037842', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91511846767503069a9a0c1_09448509', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204361502667503069a9a693_90397254', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_213134182667503069a96e98_65037842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_213134182667503069a96e98_65037842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
layout ze strony https://templatemo.com/tm-564-plot-listing<?php
}
}
/* {/block 'footer'} */
/* {block 'title'} */
class Block_91511846767503069a9a0c1_09448509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_91511846767503069a9a0c1_09448509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <h2 class="content-head is-center">Kalkulator kredytowy</h2> <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_204361502667503069a9a693_90397254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_204361502667503069a9a693_90397254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<div class="pure-g">

<div class="container mt-4"> 
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post" class="p-4 border rounded shadow">
        <div class="mb-3 row">
            <label for="kwota" class="col-sm-4 col-form-label text-end">Kwota kredytu</label>
            <div class="col-sm-8">
                <input id="kwota" type="text" placeholder="..." name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" class="form-control bg-light">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="liczba_lat" class="col-sm-4 col-form-label text-end">Liczba lat</label>
            <div class="col-sm-8">
                <input id="liczba_lat" type="text" placeholder="..." name="liczba_lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->liczba_lat;?>
" class="form-control bg-light">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="oprocentowanie" class="col-sm-4 col-form-label text-end">Oprocentowanie</label>
            <div class="col-sm-8">
                <input id="oprocentowanie" type="text" placeholder="..." name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
" class="form-control bg-light">
            </div>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Oblicz</button>
        </div>
    </form>
</div>





<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
