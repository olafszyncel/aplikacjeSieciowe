<?php
/* Smarty version 4.5.4, created on 2024-11-22 16:52:53
  from 'C:\xampp\htdocs\php_05_obiektowosc\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6740a8d5bec483_37330664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd83d31a0da910b0bff730a9cc22d477ba89a0b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_obiektowosc\\templates\\main.tpl',
      1 => 1732289647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740a8d5bec483_37330664 (Smarty_Internal_Template $_smarty_tpl) {
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
        <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>


        <!-- Bootstrap core CSS -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/fontawesome.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/templatemo-plot-listing.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/animated.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/owl.css">
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10250716246740a8d5be9c71_79125492', 'title');
?>

                    </div>
                </div>
                <div class="col-lg-12">
                    <form id="search-form" name="gs" method="submit" role="search" action="#">
                        <div class="row">

                            <div class="col-lg-3 align-self-center">
                                <fieldset>

                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18000345266740a8d5bea2c6_14249392', 'content');
?>


                                </fieldset>
                            </div>


                        </div>
                    </form>

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
/assets/images/black-logo.png" alt="Plot Listing">
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9171388226740a8d5beab39_40685503', 'footer');
?>

                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/owl-carousel.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/animation.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/imagesloaded.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/custom.js"><?php echo '</script'; ?>
>

    </body>

    </html>
<?php }
/* {block 'title'} */
class Block_10250716246740a8d5be9c71_79125492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10250716246740a8d5be9c71_79125492',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_18000345266740a8d5bea2c6_14249392 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18000345266740a8d5bea2c6_14249392',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_9171388226740a8d5beab39_40685503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_9171388226740a8d5beab39_40685503',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
