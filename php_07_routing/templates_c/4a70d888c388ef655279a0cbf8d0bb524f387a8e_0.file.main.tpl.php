<?php
/* Smarty version 3.1.30, created on 2024-12-04 11:37:38
  from "C:\xampp\htdocs\php_07_bkudlacik\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_675030f2e2b0b8_36680767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a70d888c388ef655279a0cbf8d0bb524f387a8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_07_bkudlacik\\app\\views\\templates\\main.tpl',
      1 => 1733307575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675030f2e2b0b8_36680767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>


	<!-- Bootstrap core CSS -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/static/assets/css/fontawesome.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/static/assets/css/templatemo-plot-listing.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/static/assets/css/animated.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/static/assets/css/owl.css">
	<!--

	TemplateMo 564 Plot Listing

	https://templatemo.com/tm-564-plot-listing

	-->
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
	<div class="preloader-inner">
		<span class="dot"></span>
		<div class="dots">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav class="main-nav">
					<!-- ***** Logo Start ***** -->
					<a href="#app_top" class="logo"></a>
					<!-- ***** Logo End ***** -->
					<!-- ***** Menu Start ***** -->
					<ul class="nav">
						<li><a href="#app_top" class="active">Góra Strony</a></li>
						<li><a href="#app_content">Idź do Formularza!</a></li>

					</ul>
					<a class='menu-trigger'>
						<span>Menu</span>
					</a>
					<!-- ***** Menu End ***** -->
				</nav>
			</div>
		</div>
	</div>
</header>
<!-- ***** Header Area End ***** -->

<div class="main-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="top-text header-text">

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_767441098675030f2e24a24_46004663', 'title');
?>

				</div>
			</div>
			<div class="col-lg-12">
				
					

						<div class="col-lg-12>
							<fieldset>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_570413802675030f2e26285_18004624', 'content');
?>


							</fieldset>
						


					</div>
				

		</div>
	</div>
</div>








<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="about">
					<div class="logo">
						<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/static/assets/images/black-logo.png" alt="Plot Listing">
					</div>

				</div>
			</div>
			<div class="col-lg-4">
				<div class="helpful-links">
					<h4>Helpful Links</h4>
					<div class="row">
						<div class="col-lg-6 col-sm-6">
							<ul>
								<li><a href="#">Categories</a></li>

							</ul>
						</div>


					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="contact-us">
					<h4>Contact Us</h4>
					<p>Olaf Szyncel</p>
					<div class="row">
						<div class="col-lg-6">
							<a href="#">oszyncel@us.edu.pl</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="sub-footer">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1281989856675030f2e27d29_21234885', 'footer');
?>

				</div>
			</div>
		</div>
	</div>
</footer>


<!-- Scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/static/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/static/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/static/assets/js/owl-carousel.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/static/assets/js/animation.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/static/assets/js/imagesloaded.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/static/assets/js/custom.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
/* {block 'title'} */
class Block_767441098675030f2e24a24_46004663 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_570413802675030f2e26285_18004624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1281989856675030f2e27d29_21234885 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
