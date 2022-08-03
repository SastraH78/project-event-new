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
                            <a class="login-btn" href="<?= base_url() ?>login" title=""><i class="thm-clr fas fa-user"></i>Login or Register</a>
                            <a class="search-btn" href="javascript:void(0);" title=""><i class="thm-clr fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- Topbar -->
            <div class="menu-wrap">
                <div class="container">
                    <div class="menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                        <div class="logo">
                            <h1 class="mb-0"><a href="<?= base_url() ?>home" title="Home"><img class="img-fluid" src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" srcset="<?= base_url('assets/images/retina-logo.png') ?>"></a></h1>
                        </div><!-- Logo -->
                        <nav class="d-inline-flex align-items-center">
                            <div>
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                    <li class="menu-has-children <?= $page == 'home' ? 'menu-has-children active' : ''?>"><a href="<?= base_url() ?>home" title="">Home</a>
                                        <!-- <ul class="children mb-0 list-unstyled">
                                    <li><a href="index.html" title="">Homepage 1</a></li>
                                    <li><a href="index2.html" title="">Homepage 2</a></li>
                                    <li><a href="index3.html" title="">Homepage 3</a></li>
                                    <li><a href="index4.html" title="">Homepage 4</a></li>
                                    <li><a href="index5.html" title="">Homepage 5</a></li>
                                </ul> -->
                                    </li>
                                    <li class="menu-item-has-children <?= $page == 'listing' ? 'menu-item-has-children active' : '' ?>"><a href="javascript:void(0);" title="">Listing</a>
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
                                    <li class="menu-item-has-children <?= $page == 'pages' ? 'menu-item-has-children active' : '' ?>"><a href="javascript:void(0);" title="">Pages</a>
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
                                    <li class="menu-has-children <?= $page == 'about' ? 'menu-has-children active' : '' ?>"><a href="<?= base_url() ?>about" title="">About us</a></li>
                                    <li class="menu-has-children <?= $page == 'contact' ? 'menu-has-children active' : '' ?>"><a href="<?= base_url() ?>contact" title="">Contact us</a>
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
                    <li><a href="<?= base_url() ?>home" title="">Home</a></li>
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
                        <h1 class="mb-0">City Night Life Directory</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>home" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Listing Place</li>
                        </ol>
                    </div><!-- Page Top Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-120 pb-140 gray-bg position-relative">
                <div class="container">
                    <div class="listing-top-bar d-flex flex-wrap align-items-center justify-content-between w-100">
                        <div class="listing-filter-inner d-inline-flex align-items-center">
                            <a class="rounded advanc-filter-btn" href="javascript:void(0);" title=""><i class="fas fa-sliders-h"></i>Show Filter</a>
                            <p class="mb-0">20 Result Found in USA <strong>( Showing 1 - 20 )</strong></p>
                        </div>
                        <div class="slc-wp">
                            <select>
                                <option>Sort By</option>
                                <option>Date</option>
                                <option>Name</option>
                            </select>
                        </div>
                    </div><!-- Listing Top Bar -->
                    <div class="listing-layout mt-70 w-100">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="list-post-box brd-rd5 overflow-hidden position-relative w-100">
                                    <div class="list-post-img overflow-hidden position-relative w-100">
                                        <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/list-post-img1-1.jpg') ?>" alt="List Post Image 1">
                                        <span class="list-post-cat position-absolute"><a class="rounded-pill" href="javascript:void(0);" title="">Restaurants</a></span>
                                        <span class="list-post-like position-absolute rounded-circle"><a class="" href="javascript:void(0);" title=""><i class="far fa-heart"></i></a></span>
                                    </div>
                                    <div class="list-post-info w-100">
                                        <div class="list-post-inner w-100">
                                            <div class="list-post-info-top d-flex flex-wrap justify-content-between">
                                                <span class="list-post-date"><i class="thm-clr far fa-clock"></i>27 May 2020</span>
                                                <span class="list-post-rate text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span>4.0/5</span></span>
                                            </div>
                                            <h3 class="mb-0"><a href="<?= base_url() ?>eventdetail/detailevent" title="">Seafood Rooftop into Dinner and Wine</a></h3>
                                            <div class="list-post-author-stats d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="list-post-author d-inline-flex align-items-center">
                                                    <img class="rounded-circle img-fluid" src="<?= base_url('assets/images/resources/author-img1-1.jpg') ?>" alt="Author Image 1">
                                                    <span>By Master Event</span>
                                                </div>
                                                <span class="rounded-pill bg-color5">Open</span>
                                            </div>
                                        </div>
                                        <ul class="list-post-meta mb-0 list-unstyled">
                                            <li class="active"><i class="thm-clr fas fa-map-marker-alt"></i><span>27th Brooklyn New York, USA</span></li>
                                            <li><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title="">yourdomain@web.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="list-post-box brd-rd5 overflow-hidden position-relative w-100">
                                    <div class="list-post-img overflow-hidden position-relative w-100">
                                        <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/list-post-img1-2.jpg') ?>" alt="List Post Image 2">
                                        <span class="list-post-cat position-absolute"><a class="rounded-pill" href="javascript:void(0);" title="">Restaurants</a></span>
                                        <span class="list-post-like position-absolute rounded-circle"><a class="rounded-circle" href="javascript:void(0);" title=""><i class="far fa-heart"></i></a></span>
                                    </div>
                                    <div class="list-post-info w-100">
                                        <div class="list-post-inner w-100">
                                            <div class="list-post-info-top d-flex flex-wrap justify-content-between">
                                                <span class="list-post-date"><i class="thm-clr far fa-clock"></i>27 May 2020</span>
                                                <span class="list-post-rate text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span>4.0/5</span></span>
                                            </div>
                                            <h3 class="mb-0"><a href="<?= base_url() ?>eventdetail/detailevent" title="">Seafood Rooftop into Dinner and Wine</a></h3>
                                            <div class="list-post-author-stats d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="list-post-author d-inline-flex align-items-center">
                                                    <img class="rounded-circle img-fluid" src="<?= base_url('assets/images/resources/author-img1-2.jpg') ?>" alt="Author Image 2">
                                                    <span>By Master Event</span>
                                                </div>
                                                <span class="rounded-pill bg-color6">Now Closed</span>
                                            </div>
                                        </div>
                                        <ul class="list-post-meta mb-0 list-unstyled">
                                            <li class="active"><i class="thm-clr fas fa-map-marker-alt"></i><span>27th Brooklyn New York, USA</span></li>
                                            <li><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title="">yourdomain@web.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="list-post-box brd-rd5 overflow-hidden position-relative w-100">
                                    <div class="list-post-img overflow-hidden position-relative w-100">
                                        <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/list-post-img1-3.jpg') ?> " alt="List Post Image 3">
                                        <span class="list-post-cat position-absolute"><a class="rounded-pill" href="javascript:void(0);" title="">Restaurants</a></span>
                                        <span class="list-post-like position-absolute rounded-circle"><a class="" href="javascript:void(0);" title=""><i class="far fa-heart"></i></a></span>
                                    </div>
                                    <div class="list-post-info w-100">
                                        <div class="list-post-inner w-100">
                                            <div class="list-post-info-top d-flex flex-wrap justify-content-between">
                                                <span class="list-post-date"><i class="thm-clr far fa-clock"></i>27 May 2020</span>
                                                <span class="list-post-rate text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span>4.0/5</span></span>
                                            </div>
                                            <h3 class="mb-0"><a href="<?= base_url() ?>eventdetail/detailevent" title="">Seafood Rooftop into Dinner and Wine</a></h3>
                                            <div class="list-post-author-stats d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="list-post-author d-inline-flex align-items-center">
                                                    <img class="rounded-circle img-fluid" src="<?= base_url('assets/images/resources/author-img1-3.jpg') ?>" alt="Author Image 3">
                                                    <span>By Master Event</span>
                                                </div>
                                                <span class="rounded-pill bg-color6">Now Closed</span>
                                            </div>
                                        </div>
                                        <ul class="list-post-meta mb-0 list-unstyled">
                                            <li class="active"><i class="thm-clr fas fa-map-marker-alt"></i><span>27th Brooklyn New York, USA</span></li>
                                            <li><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title="">yourdomain@web.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="list-post-box brd-rd5 overflow-hidden position-relative w-100">
                                    <div class="list-post-img overflow-hidden position-relative w-100">
                                        <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/list-post-img1-4.jpg') ?>" alt="List Post Image 4">
                                        <span class="list-post-cat position-absolute"><a class="rounded-pill" href="javascript:void(0);" title="">Restaurants</a></span>
                                        <span class="list-post-like position-absolute rounded-circle"><a class="" href="javascript:void(0);" title=""><i class="far fa-heart"></i></a></span>
                                    </div>
                                    <div class="list-post-info w-100">
                                        <div class="list-post-inner w-100">
                                            <div class="list-post-info-top d-flex flex-wrap justify-content-between">
                                                <span class="list-post-date"><i class="thm-clr far fa-clock"></i>27 May 2020</span>
                                                <span class="list-post-rate text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span>4.0/5</span></span>
                                            </div>
                                            <h3 class="mb-0"><a href="<?= base_url() ?>eventdetail/detailevent" title="">Seafood Rooftop into Dinner and Wine</a></h3>
                                            <div class="list-post-author-stats d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="list-post-author d-inline-flex align-items-center">
                                                    <img class="rounded-circle img-fluid" src="<?= base_url('assets/images/resources/author-img1-4.jpg') ?>" alt="Author Image 4">
                                                    <span>By Master Event</span>
                                                </div>
                                                <span class="rounded-pill bg-color6">Now Closed</span>
                                            </div>
                                        </div>
                                        <ul class="list-post-meta mb-0 list-unstyled">
                                            <li class="active"><i class="thm-clr fas fa-map-marker-alt"></i><span>27th Brooklyn New York, USA</span></li>
                                            <li><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title="">yourdomain@web.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="list-post-box brd-rd5 overflow-hidden position-relative w-100">
                                    <div class="list-post-img overflow-hidden position-relative w-100">
                                        <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/list-post-img1-5.jpg') ?>" alt="List Post Image 5">
                                        <span class="list-post-cat position-absolute"><a class="rounded-pill" href="javascript:void(0);" title="">Restaurants</a></span>
                                        <span class="list-post-like position-absolute rounded-circle"><a class="" href="javascript:void(0);" title=""><i class="far fa-heart"></i></a></span>
                                    </div>
                                    <div class="list-post-info w-100">
                                        <div class="list-post-inner w-100">
                                            <div class="list-post-info-top d-flex flex-wrap justify-content-between">
                                                <span class="list-post-date"><i class="thm-clr far fa-clock"></i>27 May 2020</span>
                                                <span class="list-post-rate text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span>4.0/5</span></span>
                                            </div>
                                            <h3 class="mb-0"><a href="<?= base_url() ?>eventdetail/detailevent" title="">Seafood Rooftop into Dinner and Wine</a></h3>
                                            <div class="list-post-author-stats d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="list-post-author d-inline-flex align-items-center">
                                                    <img class="rounded-circle img-fluid" src="<?= base_url('assets/images/resources/author-img1-5.jpg') ?>" alt="Author Image 5">
                                                    <span>By Master Event</span>
                                                </div>
                                                <span class="rounded-pill bg-color5">Open</span>
                                            </div>
                                        </div>
                                        <ul class="list-post-meta mb-0 list-unstyled">
                                            <li class="active"><i class="thm-clr fas fa-map-marker-alt"></i><span>27th Brooklyn New York, USA</span></li>
                                            <li><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title="">yourdomain@web.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="list-post-box brd-rd5 overflow-hidden position-relative w-100">
                                    <div class="list-post-img overflow-hidden position-relative w-100">
                                        <img class="img-fluid w-100" src="<?= base_url('assets/images/resources/list-post-img1-6.jpg') ?>" alt="List Post Image 6">
                                        <span class="list-post-cat position-absolute"><a class="rounded-pill" href="javascript:void(0);" title="">Restaurants</a></span>
                                        <span class="list-post-like position-absolute rounded-circle"><a class="" href="javascript:void(0);" title=""><i class="far fa-heart"></i></a></span>
                                    </div>
                                    <div class="list-post-info w-100">
                                        <div class="list-post-inner w-100">
                                            <div class="list-post-info-top d-flex flex-wrap justify-content-between">
                                                <span class="list-post-date"><i class="thm-clr far fa-clock"></i>27 May 2020</span>
                                                <span class="list-post-rate text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span>4.0/5</span></span>
                                            </div>
                                            <h3 class="mb-0"><a href="<?= base_url() ?>eventdetail/detailevent" title="">Seafood Rooftop into Dinner and Wine</a></h3>
                                            <div class="list-post-author-stats d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="list-post-author d-inline-flex align-items-center">
                                                    <img class="rounded-circle img-fluid" src="<?= base_url('assets/images/resources/author-img1-6.jpg') ?>" alt="Author Image 6">
                                                    <span>By Master Event</span>
                                                </div>
                                                <span class="rounded-pill bg-color6">Now Closed</span>
                                            </div>
                                        </div>
                                        <ul class="list-post-meta mb-0 list-unstyled">
                                            <li class="active"><i class="thm-clr fas fa-map-marker-alt"></i><span>27th Brooklyn New York, USA</span></li>
                                            <li><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title="">yourdomain@web.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Listing Layout -->
                    <div class="view-all mt-30 text-center w-100">
                        <a class="thm-btn brd-btn" href="listing-layout.html" title="">Load More</a>
                    </div><!-- View All -->
                    <div class="listing-explore-info-wrap advance-filter-wrap">
                        <span class="advanc-filter-close-btn"><i class="fas fa-times"></i></span>
                        <div class="mini-title w-100">
                            <h4 class="mb-0">What are you looking for?</h4>
                            <span class="d-block">Search or select categories</span>
                        </div>
                        <div class="listing-explore-form-wrap w-100">
                            <form>
                                <div class="wdgt w-100">
                                    <div class="field w-100"><input type="text" placeholder="What are you looking for?"></div>
                                    <div class="field slc-wp w-100">
                                        <select>
                                            <option>All Categories</option>
                                            <option>Restaurant</option>
                                            <option>Fast Food</option>
                                            <option>Drink</option>
                                        </select>
                                    </div>
                                    <div class="field w-100"><input type="text" placeholder="Where to Look?"><i class="fas fa-map-marker-alt"></i></div>
                                </div>
                                <div class="wdgt advance-search w-100">
                                    <h4>Advance Search</h4>
                                    <div class="search-range">
                                        <label>Price Range</label>
                                        <ul class="search-price-opt">
                                            <li><span>$$</span></li>
                                            <li><span>$$$</span></li>
                                            <li><span>$$$$</span></li>
                                        </ul>
                                        <div class="slc-wp">
                                            <label>Sort by:</label>
                                            <select>
                                                <option>Name</option>
                                                <option>Date</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="wdgt search-tags w-100">
                                    <h4>Tags</h4>
                                    <ul class="tags-list row mb-0 list-unstyled">
                                        <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-1"><label for="tag1-1">Reservations (04)</label></span></li>
                                        <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-2"><label for="tag1-2">Outdoor Seating</label></span></li>
                                        <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-3"><label for="tag1-3">Wheelchair Accesible</label></span></li>
                                        <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-4"><label for="tag1-4">Smoking Allowed</label></span></li>
                                        <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-5"><label for="tag1-5">Accepts Credit Cards</label></span></li>
                                        <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-6"><label for="tag1-6">Parking street</label></span></li>
                                        <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-7"><label for="tag1-7">Outdoor Seating</label></span></li>
                                        <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-8"><label for="tag1-8">Accepts Credit Cards</label></span></li>
                                        <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-9"><label for="tag1-9">Wireless Internet</label></span></li>
                                        <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-10"><label for="tag1-10">Parking street</label></span></li>
                                        <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-11"><label for="tag1-11">Wirless Internet</label></span></li>
                                        <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-12"><label for="tag1-12">Parking street</label></span></li>
                                    </ul>
                                </div>
                                <div class="wdgt location-search w-100">
                                    <div class="field slc-wp w-100">
                                        <select>
                                            <option>Location</option>
                                            <option>Location 1</option>
                                            <option>Location 2</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="thm-btn" type="submit">Search Now</button>
                            </form>
                        </div>
                    </div><!-- Listing Explore Info Wrap -->
                </div>
            </div>
        </section>