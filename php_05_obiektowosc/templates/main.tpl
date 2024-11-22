 <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <title>{$page_title|default:"Tytuł domyślny"}</title>


        <!-- Bootstrap core CSS -->
        <link href="{$conf->app_url}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/fontawesome.css">
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/templatemo-plot-listing.css">
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/animated.css">
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/owl.css">
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

                        {block name=title} Domyślna treść zawartości .... {/block}
                    </div>
                </div>
                <div class="col-lg-12">
                    <form id="search-form" name="gs" method="submit" role="search" action="#">
                        <div class="row">

                            <div class="col-lg-3 align-self-center">
                                <fieldset>

                                    {block name=content} Domyślna treść zawartości .... {/block}

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
                            <img src="{$conf->app_url}/assets/images/black-logo.png" alt="Plot Listing">
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
                        {block name=footer} Domyślna treść stopki .... {/block}
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="{$conf->app_url}/vendor/jquery/jquery.min.js"></script>
    <script src="{$conf->app_url}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{$conf->app_url}/assets/js/owl-carousel.js"></script>
    <script src="{$conf->app_url}/assets/js/animation.js"></script>
    <script src="{$conf->app_url}/assets/js/imagesloaded.js"></script>
    <script src="{$conf->app_url}/assets/js/custom.js"></script>

    </body>

    </html>
