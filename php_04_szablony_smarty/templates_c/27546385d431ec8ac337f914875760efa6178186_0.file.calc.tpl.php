<?php
/* Smarty version 4.5.4, created on 2024-11-09 00:42:11
  from 'C:\xampp\htdocs\php_04_szablony_smarty\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_672ea1d3ed9118_90694176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27546385d431ec8ac337f914875760efa6178186' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_szablony_smarty\\app\\calc.tpl',
      1 => 1731109329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672ea1d3ed9118_90694176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_434978921672ea1d3eca484_75417831', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1449009938672ea1d3ecac95_52718312', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1743398971672ea1d3ecb181_42663080', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_434978921672ea1d3eca484_75417831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_434978921672ea1d3eca484_75417831',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
layout ze strony https://templatemo.com/tm-564-plot-listing<?php
}
}
/* {/block 'footer'} */
/* {block 'title'} */
class Block_1449009938672ea1d3ecac95_52718312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1449009938672ea1d3ecac95_52718312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <h2 class="content-head is-center">Kalkulator kredytowy</h2> <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_1743398971672ea1d3ecb181_42663080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1743398971672ea1d3ecb181_42663080',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
		<fieldset>

			<label for="kwota">Kwota kredytu</label>
			<input id="kwota" type="text" placeholder="..." name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
">
					
			<label for="liczba_lat">Liczba lat</label>
			<input id="liczba_lat" type="text" placeholder="..." name="liczba_lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['liczba_lat'];?>
">

			<label for="oprocentowanie">oprocentowanie</label>
			<input id="oprocentowanie" type="text" placeholder="..." name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['oprocentowanie'];?>
">

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Miesięczna rata</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
