<?php 
/* 
Template Name: eyes
*/
?>

<!DOCTYPE HTML> 
<html lang="en"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
        <meta name="apple-mobile-web-app-capable" content="yes"> 
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/> 
        <title>Body Waxing</title>         
        <link href="<?php echo get_template_directory_uri()?>/styles/bootstrap.css" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/styles/style.css"> 
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/fonts/css/fontawesome-all.min.css"> 
        <link rel="manifest" href="<?php echo get_template_directory_uri()?>/_manifest.json" data-pwa-version="1.0"> 
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri()?>/app/icons/icon-192x192.png"> 
    </head>     
    <body class="theme-light"> 
        <div id="preloader"> 
            <div class="spinner-border color-highlight" role="status"></div>             
        </div>         
        <div id="page"> 
            <div class="header header-fixed header-logo-center header-auto-show"> 
                <a href="index.html" class="header-title"><?php the_title()?></a> 
                <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-chevron-left"></i></a> 
                <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a> 
                <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a> 
                <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a> 
            </div>             
            <div id="footer-bar" class="d-md-none footer-bar-6"> 
                <a href="index-components.html"><i class="fa fa-layer-group"></i><span>Features</span></a> 
                <a href="index-pages.html" ><i class="fa fa-file"></i><span>Pages</span></a> 
                <a href="index.html" class="circle-nav active-nav"><i class="fa fa-hashtag"></i><span>Welcome</span></a> 
                <a href="index-projects.html"><i class="fa fa-camera"></i><span>Projects</span></a> 
                <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a> 
            </div>             
            <div class="page-title page-title-fixed mt-3"> 
                <h1 class="font-22"><?php the_title()?></h1> 
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-colors"><i class="fa fa-brush"></i></a> 
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a> 
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a> 
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a> 
            </div>             
            <div class="page-title-clear"></div>             
            <div class="page-content container">
                
                <!--big screen | start-->
                <div class="card card-style m-auto mb-4 bg-highlight bg-35" data-card-height="300"> 
                    <div class="card-bottom text-center"> 
                        <h1 class="color-theme">Tints & Extensions</h1> 
                        <h2 class="font-18 mb-3 color-highlight mt-n2 mb-1">Brows & Lashes</h2> 
                    </div>                     
                    <div class="card-overlay bg-gradient-fade-small"></div>                     
                </div>                 
                <!--big screen | end-->

            <!--cta | start-->
            <a href="#" class="card card-style mb-4 btn btn-lg btn-full font-600 gradient-highlight rounded-m">Book Online</a> 
            <!--cta | end-->


                <!--Wax Menu-->
                <div class="card-style card price-list bg-theme mb-4 font-9">
                    <p class="font-600 color-highlight mt-3 mb-n1">Brows & Lashes</p>
                    <h2 class="mb-4">Tinting Services</h2>
                
                <?php echo do_shortcode('[table id=2 /]');?> 
                    
                    <div class="font-9 divider-table bg-highlight divider-margins-table pl-0 pr-0 pt-0 pb-0"></div>

                    <p class="font-600 color-highlight mt-3 mb-n1">Lashes</p>
                    <h2 class="mb-4">Extensions & Fills</h2>
                
                <?php echo do_shortcode('[table id=3 /]');?> 

                    <div class="divider-table bg-highlight divider-margins-table pl-0 pr-0 pt-0 pb-0"></div>
                    <div href="#" class="ml-3 d-flex py-2">
                        <div>
                            <i class="fa fa-info icon-30 mr-3 mt-2 fa-2x"></i>
                        </div>
                        <div>
                            <p class="color-highlight mb-n1 font-14 font-600">Notice</p>
                            <p class="font-16">Over 4 weeks requires a new full set</p>
                        </div>
                    </div>

                    <div class="py-3"></div>

                    <div class="py-3 row font-6">

                    <div class="col-6 pb-2 pt-2 px-2 duel-cta-col"><a href="<?php echo site_url('/services'); ?>" class="btn btn-full rounded-s shadow-xl border-highlight color-highlight back-button ">&#11164; Back</a>
                    </div>

                    <div class="col-6 pb-2 pt-2 px-2 duel-cta-col"><a href="https://square.site/book/B7XJ5944N8D2T/wax-and-skin-care" class="btn btn-full btn-border rounded-s shadow-1 gradient-highlight">Book Now</a>
                    </div>

                    </div>
                </div>      
                <!--Footer Menu-->

                <div data-menu-load="/wp-content/themes/fin/menu-footer.html" class=" card card-style g-4 m-auto"></div>                 
            <!-- Page content ends here-->
            <div class="raster-bg" style="opacity: 1">
                <div class="h-raster-v rv1"></div>
                <div class="h-raster-v rv2"></div>
                <div class="h-raster-v rv3"></div>
                <div class="h-raster-v rv5"></div>
                <div class="h-raster-v rv6"></div>
                <div class="h-raster-v rv7"></div>
                <div class="h-raster-v rv9"></div>
                <div class="h-raster-v rv10"></div>
                <div class="h-raster-v rv11"></div>
            </div>

            <div class="raster ">
                <div class="rasterline r-h1 bg-highlight"></div>
                <div class="rasterline r-h2 bg-highlight"></div>
                <div class="rasterline r-v1 bg-highlight"></div>
                <div class="rasterline r-v2 bg-highlight"></div>
            </div> 
        </div>             
            
            <!-- Main Menu-->             
            <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="/wp-content/themes/fin/menu-main.html" data-menu-width="280" data-menu-active="nav-pages"></div>             
            <!-- Share Menu-->             
            <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="/wp-content/themes/fin/menu-share.html"  data-menu-height="370"></div>             
            <!-- Colors Menu-->             
            <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="/wp-content/themes/fin/menu-colors.html"  data-menu-height="480"></div>             
        </div>         
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/scripts/bootstrap.min.js"></script>         
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/scripts/custom.js"></script>         
    </body>
</html>
