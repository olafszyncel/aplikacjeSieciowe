<?php
/* Smarty version 4.5.4, created on 2024-11-08 23:57:44
  from 'C:\xampp\htdocs\php_04_szablony_smarty\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_672e9768420f70_13051400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26470dc3d6b03d41b8c15b0b5bf25a8e5dc925ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_szablony_smarty\\templates\\main.tpl',
      1 => 1731106663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672e9768420f70_13051400 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1589587835672e976841f071_34807812', 'title');
?>

                    </div>
                </div>
                <div class="col-lg-12">
                    <form id="search-form" name="gs" method="submit" role="search" action="#">
                        <div class="row">
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <select name="area" class="form-select" aria-label="Area" id="chooseCategory" onchange="this.form.click()">
                                        <option selected>All Areas</option>
                                        <option value="New Village">New Village</option>
                                        <option value="Old Town">Old Town</option>
                                        <option value="Modern City">Modern City</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <fieldset>

                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1538735536672e976841fcb5_61535612', 'content');
?>


                                </fieldset>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <select name="price" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                                        <option selected>Price Range</option>
                                        <option value="$100 - $250">$100 - $250</option>
                                        <option value="$250 - $500">$250 - $500</option>
                                        <option value="$500 - $1000">$500 - $1,000</option>
                                        <option value="$1000+">$1,000 or more</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset>
                                    <button class="main-button"><i class="fa fa-search"></i> Search Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <ul class="categories">
                        <li><a href="category.html"><span class="icon"><img src="assets/images/search-icon-01.png" alt="Home"></span> Apartments</a></li>
                        <li><a href="listing.html"><span class="icon"><img src="assets/images/search-icon-02.png" alt="Food"></span> Food &amp; Life</a></li>
                        <li><a href="#"><span class="icon"><img src="assets/images/search-icon-03.png" alt="Vehicle"></span> Cars</a></li>
                        <li><a href="#"><span class="icon"><img src="assets/images/search-icon-04.png" alt="Shopping"></span> Shopping</a></li>
                        <li><a href="#"><span class="icon"><img src="assets/images/search-icon-05.png" alt="Travel"></span> Traveling</a></li>
                    </ul>
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
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Listing</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Awards</a></li>
                                    <li><a href="#">Useful Sites</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1908235890672e9768420320_39467870', 'footer');
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
class Block_1589587835672e976841f071_34807812 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1589587835672e976841f071_34807812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_1538735536672e976841fcb5_61535612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1538735536672e976841fcb5_61535612',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1908235890672e9768420320_39467870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1908235890672e9768420320_39467870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
