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
                            <h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" srcset="<?= base_url('assets/images/retina-logo.png') ?>"></a></h1>
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
            <div class="w-100 pt-180 pb-110 black-layer opc45 position-relative">
                <div class="fixed-bg" style="background-image: url(<?= base_url('assets/images/pg-tp-bg.jpg') ?>);"></div>
                <div class="container">
                    <div class="pg-tp-wrp text-center w-100">
                        <h1 class="mb-0">About us</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">About us</li>
                        </ol>
                    </div><!-- Page Top Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-140 pb-140 gray-bg position-relative">
                <div class="container">
                    <div class="about-wrap w-100">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-sm-12 col-lg-6">
                                <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/about-img1.jpg') ?>" alt="About Image 1">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-6">
                                <div class="about-desc w-100">
                                    <h2 class="mb-0">Explore on-going and Upcoming Events</h2>
                                    <p class="mb-0">City Night Life is the largest and most trusted global directory connecting engaged couples with local wedding professionals.</p>
                                    <p class="mb-0">Maecenas semper dolor metus, a convallis ipsum condimentum ras eros ex, euismod vitae congue ullamcorper id ligula. Maecenas semper dolor metusm ras eros ex</p>
                                    <a class="thm-btn" href="listing-layout.html" title="">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- About Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pb-110 gray-bg position-relative">
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
            <div class="w-100 pt-180 pb-180 dark-layer2 opc65 position-relative">
                <div class="fixed-bg" style="background-image: url(<?= base_url('assets/images/parallax2.jpg') ?>);"></div>
                <div class="container">
                    <div class="video-wrap text-center w-100">
                        <div class="video-inner d-inline-block">
                            <a class="d-inline-block" href="https://www.youtube.com/embed/7EdpBH81XIY" data-fancybox title=""><i class="fas fa-play"></i></a>
                            <h2 class="mb-0">Need More Information</h2>
                            <p class="mb-0">Keep calm and get a special discount for all orders over $50 from The Naturel Coffee. Hurry up! Only 3 days left.</p>
                            <a class="thm-btn" href="javascript:void(0);" title="">Explore</a>
                        </div>
                    </div><!-- Video Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-110 pb-80 dark-bg3 position-relative">
                <div class="container">
                    <div class="facts-wrap w-100">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="fact-box position-relative w-100">
                                    <i class="fas fa-briefcase"></i>
                                    <h3 class="mb-0 counter">452</h3>
                                    <h5 class="mb-0">work completed</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="fact-box position-relative w-100">
                                    <i class="far fa-heart"></i>
                                    <h3 class="mb-0 counter">348</h3>
                                    <h5 class="mb-0">happy customers</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="fact-box position-relative w-100">
                                    <i class="far fa-star"></i>
                                    <h3 class="mb-0 counter">516</h3>
                                    <h5 class="mb-0">positive feedbacks</h5>
                                </div>
                            </div>
                        </div>
                    </div><!-- Facts Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-110 pb-30 position-relative">
                <div class="container">
                    <div class="simple-posts-wrap w-100">
                        <div class="simple-post w-100">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="simple-img position-relative rounded-circle"><img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/simple-post-img1.jpg') ?>" alt="Simple Post Image 1"></div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="simple-desc w-100">
                                        <h2 class="mb-0">New Gear 360 Introduces True 4K</h2>
                                        <p class="mb-0">4K resolution 360-degree camera, expanding Samsung’s overall virtual reality ecosystem. The new Gear 360 offers enhanced features for producing high-quality content, including a streamlined workflow.</p>
                                        <ul class="mb-0 list-unstyled w-100">
                                            <li><i class="fas fa-check"></i>Enhanced Features for High-Quality 360 Content</li>
                                            <li><i class="fas fa-check"></i>Always Stay Connected with 360 Social Live Broadcast</li>
                                            <li><i class="fas fa-check"></i>Expanded Compatibility for More 360 Experiences</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simple-post w-100">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-sm-12 col-lg-6 order-md-1">
                                    <div class="simple-img position-relative rounded-circle"><img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/simple-post-img2.jpg') ?>" alt="Simple Post Image 2"></div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="simple-desc w-100">
                                        <h2 class="mb-0">It's easier than easy. It's automatic.</h2>
                                        <p class="mb-0">4K resolution 360-degree camera, expanding Samsung’s overall virtual reality ecosystem. The new Gear 360 offers enhanced features for producing high-quality content, including a streamlined workflow.</p>
                                        <ul class="mb-0 list-unstyled w-100">
                                            <li><i class="fas fa-check"></i>Hey Siri, remind me to water the plants</li>
                                            <li><i class="fas fa-check"></i>Hey Siri, add apples to the grocery list</li>
                                            <li><i class="fas fa-check"></i>Hey Siri, make it warmer downstairs</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Simple Posts Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-140 pb-90 gray-bg position-relative">
                <div class="container">
                    <div class="sec-title text-center w-100">
                        <span class="d-block thm-clr">Discover & connect with great local businesses</span>
                        <h2 class="mb-0">Our Technical Experts</h2>
                    </div><!-- Sec Title -->
                    <div class="team-wrap res-row w-100">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="team-box w-100 overflow-hidden position-relative">
                                    <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/team-img1-1.jpg') ?>" alt="Team Image 1">
                                    <div class="team-info w-100 position-absolute">
                                        <h3 class="mb-0"><a href="javascript:void(0);" title="">David jame</a></h3>
                                        <span class="d-block">CEO Cunao Business</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="team-box w-100 overflow-hidden position-relative">
                                    <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/team-img1-2.jpg') ?>" alt="Team Image 2">
                                    <div class="team-info w-100 position-absolute">
                                        <h3 class="mb-0"><a href="javascript:void(0);" title="">David jame</a></h3>
                                        <span class="d-block">CEO Designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="team-box w-100 overflow-hidden position-relative">
                                    <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/team-img1-3.jpg') ?>" alt="Team Image 3">
                                    <div class="team-info w-100 position-absolute">
                                        <h3 class="mb-0"><a href="javascript:void(0);" title="">David jame</a></h3>
                                        <span class="d-block">Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Team Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-120 pb-140 position-relative">
                <div class="container">
                    <div class="testi-wrap text-center w-100">
                        <div class="testi-img-caro">
                            <div class="testi-img"><img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/testi-img1-1.jpg') ?>" alt="Testimonials Image 1"></div>
                            <div class="testi-img"><img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/testi-img1-2.jpg') ?>" alt="Testimonials Image 2"></div>
                            <div class="testi-img"><img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/testi-img1-3.jpg') ?>" alt="Testimonials Image 3"></div>
                            <div class="testi-img"><img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/testi-img1-4.jpg') ?>" alt="Testimonials Image 4"></div>
                        </div>
                        <div class="testi-desc-caro">
                            <div class="testi-desc-item">
                                <h4 class="mb-0">Malujt Looeo</h4>
                                <span class="d-block">Peerio Technologies</span>
                                <p class="mb-0">Ash's tactics & books have helped me a lot in my understanding on how social media advertising works.I can say that he is one of the best development professionals i have dealt with so far. His experience is great & he is such a great & pleasant person to work with you are</p>
                            </div>
                            <div class="testi-desc-item">
                                <h4 class="mb-0">Malujt Looeo</h4>
                                <span class="d-block">Peerio Technologies</span>
                                <p class="mb-0">Ash's tactics & books have helped me a lot in my understanding on how social media advertising works.I can say that he is one of the best development professionals i have dealt with so far. His experience is great & he is such a great & pleasant person to work with you are</p>
                            </div>
                            <div class="testi-desc-item">
                                <h4 class="mb-0">Malujt Looeo</h4>
                                <span class="d-block">Peerio Technologies</span>
                                <p class="mb-0">Ash's tactics & books have helped me a lot in my understanding on how social media advertising works.I can say that he is one of the best development professionals i have dealt with so far. His experience is great & he is such a great & pleasant person to work with you are</p>
                            </div>
                            <div class="testi-desc-item">
                                <h4 class="mb-0">Malujt Looeo</h4>
                                <span class="d-block">Peerio Technologies</span>
                                <p class="mb-0">Ash's tactics & books have helped me a lot in my understanding on how social media advertising works.I can say that he is one of the best development professionals i have dealt with so far. His experience is great & he is such a great & pleasant person to work with you are</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pb-120 position-relative">
                <div class="container">
                    <ul class="clients-list text-center mb-0 list-unstyled d-flex flex-wrap">
                        <li><a href="javascript:void(0);" title=""><img class="img-fluid" src="<?= base_url('assets/images/resources/client-img1.png') ?>" alt="Client Image 1"></a></li>
                        <li><a href="javascript:void(0);" title=""><img class="img-fluid" src="<?= base_url('assets/images/resources/client-img2.png') ?>" alt="Client Image 2"></a></li>
                        <li><a href="javascript:void(0);" title=""><img class="img-fluid" src="<?= base_url('assets/images/resources/client-img3.png') ?>" alt="Client Image 3"></a></li>
                        <li><a href="javascript:void(0);" title=""><img class="img-fluid" src="<?= base_url('assets/images/resources/client-img4.png') ?>" alt="Client Image 4"></a></li>
                        <li><a href="javascript:void(0);" title=""><img class="img-fluid" src="<?= base_url('assets/images/resources/client-img5.png') ?>" alt="Client Image 5"></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pb-140 position-relative">
                <div class="container">
                    <div class="about-toggle-wrap w-100">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-sm-12 col-lg-6">
                                <img class="img-fluid w-100" src="assets/images/resources/about-img2.jpg" alt="About Image 2">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-6">
                                <div class="toggle w-100" id="toggle">
                                    <div class="toggle-item w-100">
                                        <h4 class="mb-0">Royal Park of America Produces<i class=""></i></h4>
                                        <div class="toggle-content w-100">
                                            <p class="mb-0">Royal Park of America produces premium branded and private label lubricants for agriculture.</p>
                                        </div>
                                    </div>
                                    <div class="toggle-item w-100">
                                        <h4 class="mb-0">Private label Lubricants<i class=""></i></h4>
                                        <div class="toggle-content w-100">
                                            <p class="mb-0">Royal Park of America produces premium branded and private label lubricants for agriculture.</p>
                                        </div>
                                    </div>
                                    <div class="toggle-item w-100">
                                        <h4 class="mb-0">Automotive, Fleet<i class=""></i></h4>
                                        <div class="toggle-content w-100">
                                            <p class="mb-0">Royal Park of America produces premium branded and private label lubricants for agriculture.</p>
                                        </div>
                                    </div>
                                    <div class="toggle-item w-100">
                                        <h4 class="mb-0">industrial Applications.<i class=""></i></h4>
                                        <div class="toggle-content w-100">
                                            <p class="mb-0">Royal Park of America produces premium branded and private label lubricants for agriculture.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- About Toggle Wrap -->
                </div>
            </div>
        </section>