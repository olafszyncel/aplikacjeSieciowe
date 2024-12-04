<?php
/* Smarty version 3.1.30, created on 2024-12-04 11:38:53
  from "C:\xampp\htdocs\php_07_bkudlacik\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6750313dd508b9_61374459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2807312b4d20e9d7eae58dc6d8211f996b8a63e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_07_bkudlacik\\app\\views\\CalcView.tpl',
      1 => 1733308729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6750313dd508b9_61374459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1161931596750313dd44906_41961512', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7820533606750313dd45331_34259930', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10302172216750313dd50070_11346994', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_1161931596750313dd44906_41961512 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
layout ze strony https://templatemo.com/tm-564-plot-listing<?php
}
}
/* {/block 'footer'} */
/* {block 'title'} */
class Block_7820533606750313dd45331_34259930 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <h2 class="content-head is-center">Kalkulator kredytowy</h2> <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_10302172216750313dd50070_11346994 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin" style="color:white">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

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

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
	<h4>Miesięczna rata wynosi:</h4>
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
