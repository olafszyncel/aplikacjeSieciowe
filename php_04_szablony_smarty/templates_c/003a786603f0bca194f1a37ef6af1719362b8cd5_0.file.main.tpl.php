<?php
/* Smarty version 4.5.4, created on 2024-11-09 00:36:00
  from 'C:\xampp\htdocs\php_04_szablony_smarty\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_672ea0609ea710_47344450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '003a786603f0bca194f1a37ef6af1719362b8cd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_szablony_smarty\\templates\\main.tpl',
      1 => 1731108626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672ea0609ea710_47344450 (Smarty_Internal_Template $_smarty_tpl) {
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
        <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/fontawesome.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/templatemo-plot-listing.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/animated.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
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
                        <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.tpl" class="logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" class="active">Home</a></li>
                            <li><a href="category.html">Category</a></li>

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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_727287933672ea0609e8e24_86636364', 'title');
?>

                    </div>
                </div>
                <div class="col-lg-12">
                    <form id="search-form" name="gs" method="submit" role="search" action="#">
                        <div class="row">

                            <div class="col-lg-3 align-self-center">
                                <fieldset>

                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_933373511672ea0609e94d7_39452334', 'content');
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
                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_730804465672ea0609e9ad7_10430088', 'footer');
?>

                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/owl-carousel.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/animation.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/imagesloaded.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/custom.js"><?php echo '</script'; ?>
>

    </body>

    </html>
<?php }
/* {block 'title'} */
class Block_727287933672ea0609e8e24_86636364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_727287933672ea0609e8e24_86636364',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_933373511672ea0609e94d7_39452334 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_933373511672ea0609e94d7_39452334',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_730804465672ea0609e9ad7_10430088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_730804465672ea0609e9ad7_10430088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
