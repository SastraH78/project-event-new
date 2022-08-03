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
                            <a class="login-btn" href="<?= base_url()?>login" title=""><i class="thm-clr fas fa-user"></i>login or Register</a>
                            <a class="search-btn" href="javascript:void(0);" title=""><i class="thm-clr fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- Topbar -->
            <div class="menu-wrap">
                <div class="container">
                    <div class="menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                        <div class="logo">
                            <h1 class="mb-0"><a href="<?= base_url() ?>home" title="Home"><img class="img-fluid" src="<?= base_url('assets/images/logo.png" alt="Logo" srcset="assets/images/retina-logo.png') ?>"></a></h1>
                        </div><!-- Logo -->
                        <nav class="d-inline-flex align-items-center">
                            <div>
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                    <li class="menu-has-children"><a href="<?= base_url() ?>home" title="">Home</a>
                                        <!-- <ul class="children mb-0 list-unstyled">
                                    <li><a href="index.html" title="">Homepage 1</a></li>
                                    <li><a href="index2.html" title="">Homepage 2</a></li>
                                    <li><a href="index3.html" title="">Homepage 3</a></li>
                                    <li><a href="index4.html" title="">Homepage 4</a></li>
                                    <li><a href="index5.html" title="">Homepage 5</a></li>
                                </ul> -->
                                    </li>
                                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Listing</a>
                                        <ul class="children mb-0 list-unstyled">
                                            <li><a href="<?= base_url() ?>listing/add" title="">Add Listing</a></li>
                                            <li><a href="<?= base_url() ?>listing/detail" title="">Listing Detail Style 1</a></li>
                                            <!-- <li><a href="place-listing.html" title="">Place Listing</a></li>
                                    <li><a href="listing-explore-map-sidebar.html" title="">Listing With Map Style 1</a></li>
                                    <li><a href="listing-explore-map-sidebar2.html" title="">Listing With Map Style 2</a></li>
                                    <li><a href="place-layout-detail2.html" title="">Listing Detail Style 2</a></li>
                                    <li><a href="listing-review.html" title="">Listing Review</a></li> -->
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Pages</a>
                                        <ul class="children mb-0 list-unstyled">
                                            <li><a href="<?= base_url() ?>listing/style" title="">Listing Style 1</a></li>
                                            <li><a href="<?= base_url() ?>eventdetail/detailevent" title="">Event Detail Style</a></li>
                                            <!-- <li><a href="place-listing.html" title="">Place Listing</a></li>
                                    <li><a href="listing-explore-map-sidebar.html" title="">Listing With Map Style 1</a></li>
                                    <li><a href="listing-explore-map-sidebar2.html" title="">Listing With Map Style 2</a></li>
                                    <li><a href="place-layout-detail2.html" title="">Listing Detail Style 2</a></li>
                                    <li><a href="listing-review.html" title="">Listing Review</a></li> -->
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url() ?>about" title="">About us</a></li>
                                    <li class="menu-has-children"><a href="<?= base_url() ?>contact" title="">Contact us</a>
                                        <!-- <ul class="children mb-0 list-unstyled">
                                    <li><a href="contact.html" title="">Contact us 1</a></li>
                                    <li><a href="contact2.html" title="">Contact us 2</a></li>
                                </ul> -->
                                    </li>
                                </ul>
                                <a class="header-btn" href="<?= base_url() ?>listing/add" title=""><i class="">+</i>Add Listing</a>
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
                <div class="logo"><a href="<?= base_url() ?>home" title="Home"><img src="<?= base_url('assets/images/logo2.png') ?>" alt="Logo" srcset="<?= base_url('assets/images/retina-logo2.png') ?>"></a></div>
                <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
            </div>
            <div class="rsnp-mnu">
                <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                <ul class="mb-0 list-unstyled w-100">
                    <li><a href="<?= base_url() ?>contact" title="">Contact us</a></li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Listing</a>
                        <ul class="children mb-0 list-unstyled">
                            <li><a href="<?= base_url()?>listing/add" title="">Add Listing</a></li>
                            <li><a href="<?= base_url()?>listing/detail" title="">Listing Detail Style 1</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Pages</a>
                        <ul class="children mb-0 list-unstyled">
                            <li><a href="<?= base_url()?>listing/style" title="">Listing Style 1</a></li>
                            <li><a href="<?= base_url()?>eventdetail/detailevent" title="">Event Detail Style</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url() ?>about" title="">About us</a></li>
                    <li><a href="<?= base_url() ?>contact" title="">Contact us</a></li>
                </ul>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->
        <section>
            <div class="w-100 pt-180 pb-110 black-layer opc45 position-relative">
                <div class="fixed-bg" style="background-image: url(<?= base_url('assets/images/pg-tp-bg.jpg') ?>);"></div>
                <div class="container">
                    <div class="pg-tp-wrp text-center w-100">
                        <h1 class="mb-0">Contact Us</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url()?>home" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </div><!-- Page Top Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pb-120 gray-bg position-relative">
                <div class="cont-map place-map w-100" id="cont-map"></div>
                <div class="container">
                    <div class="get-touch-wrap w-100">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-lg-4">
                                <div class="get-info w-100">
                                    <h2 class="mb-0">Get In Touch</h2>
                                    <p class="mb-0">If you are interested in working with us, please get in touch.</p>
                                    <ul class="get-info-list d-inline-block mb-0 list-unstyled w-100">
                                        <li><i class="fas fa-map-marked-alt rounded-circle"></i>484 Ellis St, San Francisco, CA 94102, United States</li>
                                        <li><i class="fas fa-phone-volume rounded-circle"></i>+61 2 8236 9200 - Central Office</li>
                                        <li><i class="far fa-paper-plane rounded-circle"></i><a href="javascript:void(0);" title="">example@example.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-lg-8">
                                <div class="form-wrap w-100">
                                    <h2 class="mb-0">FeedBack</h2>
                                    <form class="w-100" action="#" method="post" id="email-form">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <div class="form-group w-100">
                                                    <div class="response w-100"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-4">
                                                <input class="w-100 brd-rd5 mt-30 fname" type="text" name="fname" placeholder="Name">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-4">
                                                <input class="w-100 brd-rd5 mt-30 email" type="email" name="email" placeholder="Email *">
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-lg-4">
                                                <input class="w-100 brd-rd5 mt-30 subject" type="text" name="subject" placeholder="Subject">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <textarea class="w-100 brd-rd5 mt-30 contact_message" name="contact_message" placeholder="Your Message"></textarea>
                                                <button class="thm-btn mt-50" id="submit" type="submit">SEND MESSAGE</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Get In Touch Style --->
                </div>
            </div>
        </section>