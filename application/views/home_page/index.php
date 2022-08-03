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
        </header><!-- Header -->
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
                <div class="logo"><a href="index.html" title="Home"><img src="<?= base_url('assets/images/logo2.png') ?>" alt="Logo" srcset="<?= base_url('assets/images/retina-logo2.png') ?>"></a></div>
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
            <div class="w-100 position-relative">
                <div class="feat-wrap pt-140 pb-140 dark-layer position-relative opc7 w-100">
                    <div class="fixed-bg" style="background-image: url(assets/images/resources/feat-bg1.jpg);"></div>
                    <div class="container">
                        <div class="feat-inner pt-240 w-100">
                            <h2 class="mb-0 text-center">Explore on-going and <br> Upcoming Events Around you...</h2>
                            <form class="dir-form d-flex">
                                <div class="field">
                                    <label class="thm-clr">I'am looking for</label>
                                    <input type="text" placeholder="Event name">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="field loc">
                                    <label class="thm-clr">Location</label>
                                    <input type="text" placeholder="15th Feb 2016">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="field slc">
                                    <div class="slc-wp">
                                        <select>
                                            <option>All Categories</option>
                                            <option>Category Style 1</option>
                                            <option>Category Style 2</option>
                                            <option>Category Style 3</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="thm-btn" type="submit"><i class="fas fa-search"></i>DISCOVER NOW</button>
                            </form>
                            <div class="dir-cate-wrap text-center w-100">
                                <h4 class="mb-0">Use quick search by category</h4>
                                <ul class="dir-opt-list d-inline-flex mb-0 list-unstyled">
                                    <li>
                                        <a href="listing-layout.html" title=""><span class="rounded-circle"><i class="fas fa-hamburger thm-clr"></i></span>
                                            <h5 class="mb-0">Concert Event</h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="listing-layout.html" title=""><span class="rounded-circle"><i class="fas fa-hotel thm-clr"></i></span>
                                            <h5 class="mb-0">Resturants Event</h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="listing-layout.html" title=""><span class="rounded-circle"><i class="fas fa-store-alt thm-clr"></i></span>
                                            <h5 class="mb-0">Shopping Mall</h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="listing-layout.html" title=""><span class="rounded-circle"><i class="fas fa-school thm-clr"></i></span>
                                            <h5 class="mb-0">School Event</h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="listing-layout.html" title=""><span class="rounded-circle"><i class="fas fa-hamburger thm-clr"></i></span>
                                            <h5 class="mb-0">Gym Event</h5>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- Feat Wrap -->
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-140 pb-140 gray-layer opc55 position-relative">
                <div class="fixed-bg" style="background-image: url(assets/images/pattern-bg1.png);"></div>
                <div class="container">
                    <div class="sec-title text-center w-100">
                        <span class="d-block thm-clr">Restaurants Event</span>
                        <h2 class="mb-0">Top Listing Events</h2>
                    </div><!-- Sec Title -->
                    <div class="post-caro">
                        <div class="post-box-wrap">
                            <div class="post-box brd-rd5 w-100 overflow-hidden">
                                <div class="post-img w-100">
                                    <span class="rounded-pill bg-white position-absolute">Now Closed</span>
                                    <a href="event-detail.html" title=""><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/post-img1-1.jpg') ?>" alt="Post Image 1"></a>
                                </div>
                                <div class="post-info w-100">
                                    <span class="d-inline-block text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span class="d-inline-block">4.5</span></span>
                                    <h3 class="mb-0"><a href="event-detail.html" title="">Private Hotel-Spa</a></h3>
                                    <p class="mb-0">Luxury hotel in the heart of Bloomsbury.</p>
                                    <ul class="post-meta mb-0 list-unstyled w-100">
                                        <li><i class="fas fa-map-marker-alt rounded-circle"></i>95 South Park Avenue</li>
                                        <li><i class="fas fa-phone rounded-circle"></i>+61 2 8236 9200</li>
                                    </ul>
                                    <span class="evnt-loc d-block thm-bg"><i class="fas fa-building rounded-circle"></i>Restaurant</span>
                                </div>
                            </div>
                        </div>
                        <div class="post-box-wrap">
                            <div class="post-box brd-rd5 w-100 overflow-hidden">
                                <div class="post-img w-100">
                                    <span class="rounded-pill bg-white position-absolute">Open</span>
                                    <a href="event-detail.html" title=""><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/post-img1-2.jpg') ?>" alt="Post Image 2"></a>
                                </div>
                                <div class="post-info w-100">
                                    <span class="d-inline-block text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span class="d-inline-block">4.5</span></span>
                                    <h3 class="mb-0"><a href="event-detail.html" title="">Private Hotel-Spa</a></h3>
                                    <p class="mb-0">Luxury hotel in the heart of Bloomsbury.</p>
                                    <ul class="post-meta mb-0 list-unstyled w-100">
                                        <li><i class="fas fa-map-marker-alt rounded-circle"></i>95 South Park Avenue</li>
                                        <li><i class="fas fa-phone rounded-circle"></i>+61 2 8236 9200</li>
                                    </ul>
                                    <span class="evnt-loc d-block thm-bg"><i class="fas fa-building rounded-circle"></i>Restaurant</span>
                                </div>
                            </div>
                        </div>
                        <div class="post-box-wrap">
                            <div class="post-box brd-rd5 w-100 overflow-hidden">
                                <div class="post-img w-100">
                                    <span class="rounded-pill bg-white position-absolute">Now Closed</span>
                                    <a href="event-detail.html" title=""><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/post-img1-3.jpg') ?>" alt="Post Image 3"></a>
                                </div>
                                <div class="post-info w-100">
                                    <span class="d-inline-block text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span class="d-inline-block">4.5</span></span>
                                    <h3 class="mb-0"><a href="event-detail.html" title="">Private Hotel-Spa</a></h3>
                                    <p class="mb-0">Luxury hotel in the heart of Bloomsbury.</p>
                                    <ul class="post-meta mb-0 list-unstyled w-100">
                                        <li><i class="fas fa-map-marker-alt rounded-circle"></i>95 South Park Avenue</li>
                                        <li><i class="fas fa-phone rounded-circle"></i>+61 2 8236 9200</li>
                                    </ul>
                                    <span class="evnt-loc d-block thm-bg"><i class="fas fa-building rounded-circle"></i>Restaurant</span>
                                </div>
                            </div>
                        </div>
                        <div class="post-box-wrap">
                            <div class="post-box brd-rd5 w-100 overflow-hidden">
                                <div class="post-img w-100">
                                    <span class="rounded-pill bg-white position-absolute">Now Closed</span>
                                    <a href="event-detail.html" title=""><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/post-img1-4.jpg') ?>" alt="Post Image 4"></a>
                                </div>
                                <div class="post-info w-100">
                                    <span class="d-inline-block text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span class="d-inline-block">4.5</span></span>
                                    <h3 class="mb-0"><a href="event-detail.html" title="">Private Hotel-Spa</a></h3>
                                    <p class="mb-0">Luxury hotel in the heart of Bloomsbury.</p>
                                    <ul class="post-meta mb-0 list-unstyled w-100">
                                        <li><i class="fas fa-map-marker-alt rounded-circle"></i>95 South Park Avenue</li>
                                        <li><i class="fas fa-phone rounded-circle"></i>+61 2 8236 9200</li>
                                    </ul>
                                    <span class="evnt-loc d-block thm-bg"><i class="fas fa-building rounded-circle"></i>Restaurant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-140 pb-110 position-relative">
                <div class="fixed-bg bg-norepeate" style="background-image: url(assets/images/how-we-work-bg.png);"></div>
                <div class="container">
                    <div class="sec-title text-center w-100">
                        <span class="d-block thm-clr">Discover & connect with great local businesses</span>
                        <h2 class="mb-0">See How it Works</h2>
                    </div><!-- Sec Title -->
                    <div class="how-work-wrap res-row text-center w-100">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="how-work-box w-100">
                                    <span class="rounded-circle d-inline-block"><img class="img-fluid" src="<?= base_url('assets/images/resources/how-work-icon1.png') ?>" alt="How It Works Icon 1"></span>
                                    <div class="how-work-inner w-100">
                                        <h3 class="mb-0">Choose what to Do</h3>
                                        <p class="mb-0">Luxury hotel in the heart of BloomsburyLuxury hotel in the heart of Bloomsbury..</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="how-work-box w-100">
                                    <span class="rounded-circle d-inline-block"><img class="img-fluid" src="<?= base_url('assets/images/resources/how-work-icon2.png') ?>" alt="How It Works Icon 2"></span>
                                    <div class="how-work-inner w-100">
                                        <h3 class="mb-0">Find What You Want</h3>
                                        <p class="mb-0">Luxury hotel in the heart of BloomsburyLuxury hotel in the heart of Bloomsbury..</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="how-work-box w-100">
                                    <span class="rounded-circle d-inline-block"><img class="img-fluid" src="<?= base_url('assets/images/resources/how-work-icon3.png') ?>" alt="How It Works Icon 3"></span>
                                    <div class="how-work-inner w-100">
                                        <h3 class="mb-0">Amazing Places</h3>
                                        <p class="mb-0">Luxury hotel in the heart of BloomsburyLuxury hotel in the heart of Bloomsbury..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Services Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-140 pb-140 gray-layer2 opc85 position-relative">
                <img class="lf-bt-img img-fluid position-absolute" src="<?= base_url('') ?>assets/images/icon-img.png" alt="Icon Image">
                <div class="fixed-bg" style="background-image: url(assets/images/parallax1.jpg);"></div>
                <div class="container">
                    <div class="sec-title text-center w-100">
                        <span class="d-block thm-clr">Featured Cities</span>
                        <h2 class="mb-0">Explore Trending Category</h2>
                    </div><!-- Sec Title -->
                    <div class="city-wrap">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-6">
                                <div class="city-box brd-rd5 overflow-hidden w-100">
                                    <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/city-img1-1.jpg') ?>" alt="City Image 1">
                                    <div class="city-info position-absolute">
                                        <div class="city-info-inner">
                                            <h3 class="mb-0"><a href="place-listing.html" title="">England</a></h3>
                                            <span class="d-block">( 20, available City Events )</span>
                                        </div>
                                        <a class="thm-btn" href="place-listing.html" title="">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-6">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="city-box brd-rd5 overflow-hidden w-100">
                                            <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/city-img1-2.jpg') ?>" alt="City Image 2">
                                            <div class="city-info position-absolute">
                                                <div class="city-info-inner">
                                                    <h3 class="mb-0"><a href="place-listing.html" title="">Canada</a></h3>
                                                    <span class="d-block">( 20, available City Events )</span>
                                                </div>
                                                <a class="thm-btn" href="place-listing.html" title="">Discover Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="city-box brd-rd5 overflow-hidden w-100">
                                            <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/city-img1-3.jp') ?>g" alt="City Image 3">
                                            <div class="city-info position-absolute">
                                                <div class="city-info-inner">
                                                    <h3 class="mb-0"><a href="place-listing.html" title="">India</a></h3>
                                                    <span class="d-block">( 20, available City Events )</span>
                                                </div>
                                                <a class="thm-btn" href="place-listing.html" title="">Discover Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="city-box brd-rd5 overflow-hidden w-100">
                                            <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/city-img1-4.jpg') ?>" alt="City Image 4">
                                            <div class="city-info position-absolute">
                                                <div class="city-info-inner">
                                                    <h3 class="mb-0"><a href="place-listing.html" title="">Australia</a></h3>
                                                    <span class="d-block">( 20, available City Events )</span>
                                                </div>
                                                <a class="thm-btn" href="place-listing.html" title="">Discover Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Category Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-140 pb-140 position-relative">
                <div class="container">
                    <div class="sec-title text-center w-100">
                        <span class="d-block thm-clr">Restaurants Event</span>
                        <h2 class="mb-0">Top Listing Events</h2>
                    </div><!-- Sec Title -->
                    <div class="top-list-post-wrap position-relative w-100">
                        <div class="top-list-img position-relative">
                            <span class="rounded-pill position-absolute">Now Closed</span>
                            <img class="img-fluid rounded" src="<?= base_url('assets/images/resources/top-list-image.jpg') ?>" alt="Top List Image">
                        </div>
                        <div class="top-list-info position-absolute rounded">
                            <span class="d-block"><i class="fas fa-ticket-alt"></i>Ticket: $25 - $35</span>
                            <h3 class="mb-0"><a href="place-layout-detail.html" title="">Explore on-going and Upcoming Events</a></h3>
                            <p class="mb-0">Luxury hotel in the heart of BloomsburyLuxury hotel in the heart of Bloomsbury..</p>
                            <ul class="post-meta mb-0 list-unstyled w-100">
                                <li><i class="fas fa-map-marker-alt rounded-circle"></i>95 South Park Avenue</li>
                                <li><i class="fas fa-phone rounded-circle"></i>+61 2 8236 9200</li>
                            </ul>
                            <a class="thm-btn" href="place-layout-detail.html" title="">Discover Now</a>
                        </div>
                    </div><!-- Top List Post Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pb-140 position-relative">
                <div class="sec-title text-center w-100">
                    <span class="d-block thm-clr">acinia viverra lectus. Fusce imperdiet</span>
                    <h2 class="mb-0">Featured Events in your city</h2>
                </div><!-- Sec Title -->
                <div class="feat-post-wrap w-100">
                    <div class="row mrg10">
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="feat-post-box position-relative w-100">
                                <div class="feat-post-img position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/feat-post-img1-1.jpg') ?>" alt="Featured Post Image 1">
                                </div>
                                <div class="feat-post-info d-flex flex-wrap justify-content-between position-absolute w-100">
                                    <div class="feat-post-info-inner">
                                        <h3 class="mb-0"><a href="event-detail2.html" title="">Contraband Coffee Bar</a></h3>
                                        <span class="d-inline-block rate-star text-color2"><span class="bg-color3">4.5</span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                        <i class="d-block cite-cate">Cocktail Bars</i>
                                    </div>
                                    <span class="loc"><i class="rounded d-block fas fa-map-marker-alt"></i>Location</span>
                                </div>
                                <a class="thm-btn" href="event-detail2.html" title="">Discover Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="feat-post-box position-relative w-100">
                                <div class="feat-post-img position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/feat-post-img1-2.jpg') ?>" alt="Featured Post Image 2">
                                </div>
                                <div class="feat-post-info d-flex flex-wrap justify-content-between position-absolute w-100">
                                    <div class="feat-post-info-inner">
                                        <h3 class="mb-0"><a href="event-detail2.html" title="">Contraband Coffee Bar</a></h3>
                                        <span class="d-inline-block rate-star text-color2"><span class="bg-color3">4.5</span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                        <i class="d-block cite-cate">Cocktail Bars</i>
                                    </div>
                                    <span class="loc"><i class="rounded d-block fas fa-map-marker-alt"></i>Location</span>
                                </div>
                                <a class="thm-btn" href="event-detail2.html" title="">Discover Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="feat-post-box position-relative w-100">
                                <div class="feat-post-img position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/feat-post-img1-3.jpg') ?>" alt="Featured Post Image 3">
                                </div>
                                <div class="feat-post-info d-flex flex-wrap justify-content-between position-absolute w-100">
                                    <div class="feat-post-info-inner">
                                        <h3 class="mb-0"><a href="event-detail2.html" title="">Contraband Coffee Bar</a></h3>
                                        <span class="d-inline-block rate-star text-color2"><span class="bg-color3">4.5</span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                        <i class="d-block cite-cate">Cocktail Bars</i>
                                    </div>
                                    <span class="loc"><i class="rounded d-block fas fa-map-marker-alt"></i>Location</span>
                                </div>
                                <a class="thm-btn" href="event-detail2.html" title="">Discover Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="feat-post-box position-relative w-100">
                                <div class="feat-post-img position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/feat-post-img1-4.jpg') ?>" alt="Featured Post Image 4">
                                </div>
                                <div class="feat-post-info d-flex flex-wrap justify-content-between position-absolute w-100">
                                    <div class="feat-post-info-inner">
                                        <h3 class="mb-0"><a href="event-detail2.html" title="">Contraband Coffee Bar</a></h3>
                                        <span class="d-inline-block rate-star text-color2"><span class="bg-color3">4.5</span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                        <i class="d-block cite-cate">Cocktail Bars</i>
                                    </div>
                                    <span class="loc"><i class="rounded d-block fas fa-map-marker-alt"></i>Location</span>
                                </div>
                                <a class="thm-btn" href="event-detail2.html" title="">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div><!-- Featured Post Wrap -->
            </div>
        </section>
        <section>
            <div class="w-100 pb-100 position-relative">
                <div class="container">
                    <div class="sec-title text-center w-100">
                        <span class="d-block thm-clr">Browse the latest articles from our blog.</span>
                        <h2 class="mb-0">Tips & Articles</h2>
                    </div><!-- Sec Title -->
                    <div class="blog-wrap res-row w-100">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="blog-post-box w-100">
                                    <div class="blog-post-img overflow-hidden w-100">
                                        <a href="javascript:void(0);" title=""><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/blog-img1-1.jpg') ?>" alt="Blog Image 1"></a>
                                    </div>
                                    <div class="blog-post-info w-100">
                                        <span class="post-date d-inline-block">11 June</span>
                                        <h3 class="mb-0"><a href="javascript:void(0);" title="">Standard Post Format</a></h3>
                                        <p class="mb-0">Qui nunc nobis videntur parum clari, sollemnes in futurum putamus parum claram legere.</p>
                                        <span class="post-auth d-inline-block">Posted by <a href="javascript:void(0);" title="">Robin Miles</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="blog-post-box w-100">
                                    <div class="blog-post-img overflow-hidden w-100">
                                        <a href="javascript:void(0);" title=""><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/blog-img1-2.jpg') ?>" alt="Blog Image 2"></a>
                                    </div>
                                    <div class="blog-post-info w-100">
                                        <span class="post-date d-inline-block">11 June</span>
                                        <h3 class="mb-0"><a href="javascript:void(0);" title="">Standard Post Format</a></h3>
                                        <p class="mb-0">Qui nunc nobis videntur parum clari, sollemnes in futurum putamus parum claram legere.</p>
                                        <span class="post-auth d-inline-block">Posted by <a href="javascript:void(0);" title="">Robin Miles</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="blog-post-box w-100">
                                    <div class="blog-post-img overflow-hidden w-100">
                                        <a href="javascript:void(0);" title=""><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/blog-img1-3.jpg') ?>" alt="Blog Image 3"></a>
                                    </div>
                                    <div class="blog-post-info w-100">
                                        <span class="post-date d-inline-block">11 June</span>
                                        <h3 class="mb-0"><a href="javascript:void(0);" title="">Standard Post Format</a></h3>
                                        <p class="mb-0">Qui nunc nobis videntur parum clari, sollemnes in futurum putamus parum claram legere.</p>
                                        <span class="post-auth d-inline-block">Posted by <a href="javascript:void(0);" title="">Robin Miles</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Blog Wrap -->
                </div>
            </div>
        </section>