<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title><?= $title ?></title>
    <link rel="icon" href="<?= base_url('assets/images/favicon.png')?>" sizes="35x35" type="image/png">
    <title>NeonDir - Directory Listing HTML5 Template</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-select.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.fancybox.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/perfect-scrollbar.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/slick.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css')?>">

    <!-- Gradient Color Scheme -->
    <link rel="stylesheet" href="assets/css/colors/color.css" title="color">
    <link rel="alternate stylesheet" href="<?= base_url('assets/css/colors/color2.css')?>" title="color2"> <!-- Color2 -->
    <link rel="alternate stylesheet" href="<?= base_url('assets/css/colors/color3.css')?>" title="color3"> <!-- Color3 -->
    <link rel="alternate stylesheet" href="<?= base_url('assets/css/colors/color4.css')?>" title="color4"> <!-- Color4 -->
    <link rel="alternate stylesheet" href="<?= base_url('assets/css/colors/color5.css')?>" title="color5"> <!-- Color5 -->

    <!-- Solid Color Scheme -->
    <link rel="alternate stylesheet" href="<?= base_url('assets/css/colors/color6.css')?>" title="color6"> <!-- Color6 -->
    <link rel="alternate stylesheet" href="<?= base_url('assets/css/colors/color7.css')?>" title="color7"> <!-- Color7 -->
    <link rel="alternate stylesheet" href="<?= base_url('assets/css/colors/color8.css')?>" title="color8"> <!-- Color8 -->
    <link rel="alternate stylesheet" href="<?= base_url('assets/css/colors/color9.css')?>" title="color9"> <!-- Color9 -->
    <link rel="alternate stylesheet" href="<?= base_url('assets/css/colors/color10.css')?>" title="color10"> <!-- Color10 -->
</head>

<body>
    <main>
        <div class="sidepanel">
            <span><i class="fas fa-cog fa-spin"></i></span>
            <div class="color-picker">
                <h3>Gradient Colors</h3>
                <a class="color applied" onclick="setActiveStyleSheet('color'); return false;"></a>
                <a class="color2" onclick="setActiveStyleSheet('color2'); return false;"></a>
                <a class="color3" onclick="setActiveStyleSheet('color3'); return false;"></a>
                <a class="color4" onclick="setActiveStyleSheet('color4'); return false;"></a>
                <a class="color5" onclick="setActiveStyleSheet('color5'); return false;"></a>
            </div><!-- Color Picker -->
            <div class="color-picker">
                <h3>Solid Colors</h3>
                <a class="color6" onclick="setActiveStyleSheet('color6'); return false;"></a>
                <a class="color7" onclick="setActiveStyleSheet('color7'); return false;"></a>
                <a class="color8" onclick="setActiveStyleSheet('color8'); return false;"></a>
                <a class="color9" onclick="setActiveStyleSheet('color9'); return false;"></a>
                <a class="color10" onclick="setActiveStyleSheet('color10'); return false;"></a>
            </div><!-- Color Picker -->
        </div><!-- Side Panel -->
        <header class="stick style1 w-100 d-flex flex-wrap justify-content-between align-items-center">
            <div class="logo">
                <h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="<?= base_url('assets/images/logo.png')?>" alt="Logo" srcset="<?= base_url('assets/images/retina-logo.png')?>"></a></h1>
            </div><!-- Logo -->
            <div class="menu-wrap">
                <span class="d-block">Your Location: Sanfrancisco, CA <a class="thm-clr" href="javascript:void(0);" title=""><i class="fas fa-map-marker-alt"></i>Change location</a></span>
                <nav class="d-inline-flex align-items-center">
                    <div>
                        <ul class="mb-0 list-unstyled d-inline-flex">
                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Home</a>
                                <ul class="children mb-0 list-unstyled">
                                    <li><a href="index.html" title="">Homepage 1</a></li>
                                    <li><a href="index2.html" title="">Homepage 2</a></li>
                                    <li><a href="index3.html" title="">Homepage 3</a></li>
                                    <li><a href="index4.html" title="">Homepage 4</a></li>
                                    <li><a href="index5.html" title="">Homepage 5</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Listing</a>
                                <ul class="children mb-0 list-unstyled">
                                    <li><a href="place-listing.html" title="">Place Listing</a></li>
                                    <li><a href="listing-explore-map-sidebar.html" title="">Listing With Map Style 1</a></li>
                                    <li><a href="place-layout-detail.html" title="">Listing Detail Style 1</a></li>
                                    <li><a href="listing-explore-map-sidebar2.html" title="">Listing With Map Style 2</a></li>
                                    <li><a href="place-layout-detail2.html" title="">Listing Detail Style 2</a></li>
                                    <li><a href="add-listing.html" title="">Add Listing</a></li>
                                    <li><a href="listing-review.html" title="">Listing Review</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Pages</a>
                                <div class="megamenu center">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 col-sm-12 col-sm-4">
                                            <div class="megamenu-links w-100">
                                                <a href="listing-layout.html" title="">Listing Style 1</a>
                                                <a href="listing-layout2.html" title="">Listing Style 2</a>
                                                <a href="event-detail.html" title="">Event Detail Style 1</a>
                                                <a href="event-detail2.html" title="">Event Detail Style 2</a>
                                                <a href="price-table.html" title="">Price Table</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-sm-4">
                                            <div class="megamenu-links w-100">
                                                <a href="gallery.html" title="">Gallery Style 1</a>
                                                <a href="gallery2.html" title="">Gallery Style 2</a>
                                                <a href="gallery3.html" title="">Gallery Style 3</a>
                                                <a href="gallery-detail.html" title="">Gallery Detail</a>
                                                <a href="login.html" title="">Login</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-sm-4">
                                            <div class="megamenu-add w-100">
                                                <img class="img-fluid" src="<?= base_url('assets/images/resources/megamenu-img.jpg')?>" alt="Megamenu Image">
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Megamenu -->
                            </li>
                            <li><a href="about.html" title="">About us</a></li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Contact us</a>
                                <ul class="children mb-0 list-unstyled">
                                    <li><a href="contact.html" title="">Contact us 1</a></li>
                                    <li><a href="contact2.html" title="">Contact us 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <a class="login-btn" href="login.html" title=""><i class="thm-clr fas fa-user"></i>login or Register</a>
                </nav>
            </div><!-- Menu Wrap -->
        </header><!--