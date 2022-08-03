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
        <header class="stick style2 w-100">
            <div class="topbar w-100">
                <div class="container">
                    <div class="topbar-inner d-flex flex-wrap align-items-center justify-content-between">
                        <div class="social-links2 d-inline-flex">
                            <a href="javascript:void(0);" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0);" title="Google Plus" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                            <a href="javascript:void(0);" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="javascript:void(0);" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="top-links d-inline-flex">
                            <a class="login-btn" href="login.html" title=""><i class="thm-clr fas fa-user"></i>login or Register</a>
                            <a class="search-btn" href="javascript:void(0);" title=""><i class="thm-clr fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- Topbar -->
            <div class="menu-wrap">
                <div class="container">
                    <div class="menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                        <div class="logo">
                            <h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="<?= base_url('assets/images/logo.png')?>" alt="Logo" srcset="<?= base_url('assets/images/retina-logo.png')?>"></a></h1>
                        </div><!-- Logo -->
                        <nav class="d-inline-flex align-items-center">
                            <div>
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                    <li class="menu-item-has-children"><a href="index.html" title="">Home</a>
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
                                <a class="header-btn" href="add-listing.html" title=""><i class="">+</i>Add Listing</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div><!-- Menu Wrap -->
        </header><!-- Header -->
        <div class="search-wrap w-100 d-flex flex-wrap align-items-center justify-content-center">
            <span class="search-cls-btn rounded-circle"><i class="fas fa-times"></i></span>
            <form class="w-100">
                <input type="text" placeholder="Search here....">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div><!-- Search Wrap -->
        <div class="rspn-hdr">
            <div class="rspn-mdbr">
                <div class="rspn-scil">
                    <a href="javascript:void(0);" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="javascript:void(0);" title="Google Plus" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                    <a href="javascript:void(0);" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="javascript:void(0);" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <form class="rspn-srch">
                    <input type="text" placeholder="Enter Your Keyword" />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="lg-mn">
                <div class="logo"><a href="index.html" title="Home"><img src="<?= base_url('assets/images/logo2.png')?>" alt="Logo" srcset="<?= base_url('assets/images/retina-logo2.png')?>"></a></div>
                <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
            </div>
            <div class="rsnp-mnu">
                <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                <ul class="mb-0 list-unstyled w-100">
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
                        <ul class="children mb-0 list-unstyled">
                            <li><a href="listing-layout.html" title="">Listing Style 1</a></li>
                            <li><a href="listing-layout2.html" title="">Listing Style 2</a></li>
                            <li><a href="event-detail.html" title="">Event Detail Style 1</a></li>
                            <li><a href="event-detail2.html" title="">Event Detail Style 2</a></li>
                            <li><a href="price-table.html" title="">Price Table</a></li>
                            <li><a href="gallery.html" title="">Gallery Style 1</a></li>
                            <li><a href="gallery2.html" title="">Gallery Style 2</a></li>
                            <li><a href="gallery3.html" title="">Gallery Style 3</a></li>
                            <li><a href="gallery-detail.html" title="">Gallery Detail</a></li>
                            <li><a href="login.html" title="">Login</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html" title="">About us</a></li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Contact us</a>
                        <ul class="children mb-0 list-unstyled">
                            <li><a href="contact.html" title="">Contact us 1</a></li>
                            <li><a href="contact2.html" title="">Contact us 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->
        <section>
            <div class="w-100 pt-180 pb-110 black-layer opc45 position-relative">
                <div class="fixed-bg" style="background-image: url(assets/images/pg-tp-bg.jpg);"></div>
                <div class="container">
                    <div class="pg-tp-wrp text-center w-100">
                        <h1 class="mb-0">Login & Register</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Login & Register</li>
                        </ol>
                    </div><!-- Page Top Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 gray-bg position-relative">
                <div class="login-register-wrap w-100">
                    <div class="row mrg align-items-center">
                        <div class="col-md-12 col-sm-12 col-lg-5">
                            <div class="login-wrap w-100 position-relative" style="background-image: url(assets/images/login-bg.jpg);">
                                <div class="login-inner">
                                    <div class="title2 w-100">
                                        <h2 class="mb-0">Login your Account</h2>
                                        <p class="mb-0">Login to your account to discovery all great features in this template.</p>
                                    </div>
                                    <form class="w-100">
                                        <input class="rounded-pill" type="text" placeholder="Your Name">
                                        <input class="rounded-pill" type="password" placeholder="Password">
                                        <div class="kep-forget-pas d-flex flex-wrap justify-content-between align-items-center">
                                            <span class="check-box"><input type="checkbox" id="keep-login"><label for="keep-login">Keep me logged in</label></span>
                                            <a href="javascript:void(0);" title="">Forgot your Password?</a>
                                        </div>
                                        <button class="thm-btn brd-btn rounded-pill" type="submit">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-7">
                            <div class="register-wrap w-100">
                                <div class="register-inner">
                                    <div class="title2 w-100">
                                        <h2 class="mb-0">Don't have an Account? Register Now</h2>
                                        <p class="mb-0">By creating an account with our store, you will be able to move through the checkout process faster,store multiple shipping addresses.</p>
                                    </div>
                                    <form class="w-100">
                                        <div class="row mrg20">
                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <input class="rounded-pill" type="text" placeholder="Your Name">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <input class="rounded-pill" type="email" placeholder="Email Address">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <input class="rounded-pill" type="text" placeholder="Username">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <input class="rounded-pill" type="tel" placeholder="Phone">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <input class="rounded-pill" type="password" placeholder="Password">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <input class="rounded-pill" type="password" placeholder="Re - Password">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <button class="thm-btn rounded-pill" type="submit">Register Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Login Register Wrap -->
            </div>
        </section>