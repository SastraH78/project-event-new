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
                            <a class="login-btn" href="<?= base_url() ?>login" title=""><i class="thm-clr fas fa-user"></i>login or Register</a>
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
            <div class="w-100 position-relative">
                <div class="feat-wrap2 w-100 position-relative">
                    <div class="feat-caro2">
                        <div class="feat-item">
                            <div class="feat-img" style="background-image: url(<?= base_url('assets/images/resources/feat-img1.jpg') ?> );"></div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-img" style="background-image: url(<?= base_url('assets/images/resources/feat-img2.jpg') ?> );"></div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-img" style="background-image: url(<?= base_url('assets/images/resources/feat-img3.jpg') ?> );"></div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-img" style="background-image: url(<?= base_url('assets/images/resources/feat-img4.jpg') ?> );"></div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-img" style="background-image: url(<?= base_url('assets/images/resources/feat-img5.jpg') ?> );"></div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-img" style="background-image: url(<?= base_url('assets/images/resources/feat-img6.jpg') ?> );"></div>
                        </div>
                    </div>
                    <div class="feat-nav-caro">
                        <div class="feat-nav-item"><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/feat-nav-img1.jpg') ?>" alt="Featured Nav Image 1"></div>
                        <div class="feat-nav-item"><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/feat-nav-img2.jpg') ?>" alt="Featured Nav Image 2"></div>
                        <div class="feat-nav-item"><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/feat-nav-img3.jpg') ?>" alt="Featured Nav Image 3"></div>
                        <div class="feat-nav-item"><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/feat-nav-img4.jpg') ?> " alt="Featured Nav Image 4"></div>
                        <div class="feat-nav-item"><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/feat-nav-img5.jpg') ?> " alt="Featured Nav Image 5"></div>
                        <div class="feat-nav-item"><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/feat-nav-img6.jpg') ?> " alt="Featured Nav Image 6"></div>
                    </div>
                </div><!-- Featured Wrap 2 -->
            </div>
        </section>
        <section>
            <div class="w-100 pb-120 gray-bg position-relative">
                <div class="container">
                    <div class="event-detail-wrap2 w-100">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-8">
                                <div class="event-detail-inner2 bg-white w-100 overlap205">
                                    <div class="event-detail-info2 w-100">
                                        <h2 class="mb-0">The Paradise Beach Hotel</h2>
                                        <span class="d-inline-block thm-clr">02-05 July 2020</span><i class="d-inline-block">California</i>
                                        <ul class="event-detail-list mb-0 list-unstyled w-100">
                                            <li>Location:<span>2495 Tident St, NY</span></li>
                                            <li>Review:<span><span class="rate text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>563 reviews</span></li>
                                            <li>Phone:<span>(+0064) 725 4143 68</span></li>
                                            <li>Website:<span>www.jthemes.com</span></li>
                                        </ul>
                                        <div class="reviewer-review-btns d-inline-flex align-items-center w-100">
                                            <a class="share-btn" href="javascript:void(0);" title="">Share</a>
                                            <a class="thm-btn" href="javascript:void(0);" title="">Join Event</a>
                                        </div>
                                    </div>
                                    <div class="event-detail-content-inner w-100">
                                        <h3>About Event</h3>
                                        <p class="mb-0"><span>Quisque non dictum eros, Praesent porta vehicula arcu eu ornare.</span> Donec id egestas arcu. Suspendisse auctor ali condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae mi. Pellentesque suil molestie elit bibendum tincidunt semper. Aliquam ac volutpat risus. In felis felis, posuere commodo aliquet amit eget, sagittis sed turpis. Phasellus commodo turpis non nunc egestas, et egestas felis pretium. Pellentesque suli dignissim libero vitae tincidunt semper. Nam id ante nisi. Nam sollicitudin, dolor non suscipit feugiat, nibh lacus commodo metus, nec tempus dui velit sagittis velit. Pellentesque elementum risus rhoncus justo porta, at varius odio consequat. Duis non augue adipiscing, posuere quam non, tempus urna.</p>
                                        <p class="mb-0"><span>Duis autem vel eum iriure dolor in hendrerit</span> in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent. Duis </p>
                                    </div>
                                    <div class="event-detail-content-inner w-100">
                                        <h3>Who Speaking?</h3>
                                        <div class="speaker-wrap w-100">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <div class="speaker-box text-center w-100">
                                                        <img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/speaker-img1.jpg') ?>" alt="Speaker Image 1">
                                                        <h4 class="mb-0">David Miller</h4>
                                                        <span class="d-block">Marketing Envato Pty Ltd.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <div class="speaker-box text-center w-100">
                                                        <img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/speaker-img2.jpg') ?>" alt="Speaker Image 2">
                                                        <h4 class="mb-0">David Miller</h4>
                                                        <span class="d-block">Marketing Envato Pty Ltd.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <div class="speaker-box text-center w-100">
                                                        <img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/speaker-img3.jpg') ?>" alt="Speaker Image 3">
                                                        <h4 class="mb-0">David Miller</h4>
                                                        <span class="d-block">Marketing Envato Pty Ltd.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-detail-content-inner w-100">
                                        <h3>Location</h3>
                                        <div class="listing-loc-map place-map" id="listing-loc-map"></div>
                                        <ul class="location-add-list mb-0 list-unstyled d-flex flex-wrap">
                                            <li><span><i class="rounded-circle fas fa-map-marker-alt"></i>484 Ellis St, San Francisco, CA 94102, United States</span></li>
                                            <li><span><i class="rounded-circle fas fa-phone-alt"></i>+61 2 8236 9200</span></li>
                                            <li><span><i class="rounded-circle far fa-envelope"></i>youremail@mail.com</span></li>
                                            <li><span><i class="rounded-circle fas fa-globe"></i>www.website.com</span></li>
                                        </ul>
                                    </div>
                                    <div class="event-detail-content-inner w-100">
                                        <h3>Our Sponsors</h3>
                                        <div class="sponsors-wrap w-100">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <div class="spr-box w-100">
                                                        <a href="javascript:void(0);" title=""><img class="img-fluid" src="<?= base_url('assets/images/resources/sp-img1.png') ?> " alt="Sponsor Image 1"></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <div class="spr-box w-100">
                                                        <a href="javascript:void(0);" title=""><img class="img-fluid" src="<?= base_url('assets/images/resources/sp-img2.png') ?> " alt="Sponsor Image 2"></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <div class="spr-box w-100">
                                                        <a href="javascript:void(0);" title=""><img class="img-fluid" src="<?= base_url('assets/images/resources/sp-img3.png') ?> " alt="Sponsor Image 3"></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <div class="spr-box w-100">
                                                        <a href="javascript:void(0);" title=""><img class="img-fluid" src="<?= base_url('assets/images/resources/sp-img4.png') ?> " alt="Sponsor Image 4"></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <div class="spr-box w-100">
                                                        <a href="javascript:void(0);" title=""><img class="img-fluid" src="<?= base_url('assets/images/resources/sp-img5.png') ?> " alt="Sponsor Image 5"></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <div class="spr-box w-100">
                                                        <a href="javascript:void(0);" title=""><img class="img-fluid" src="<?= base_url('assets/images/resources/sp-img6.png') ?> " alt="Sponsor Image 6"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-detail-content-inner w-100">
                                        <h3>Faq's</h3>
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
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-4">
                                <div class="sidebar-wrap2 pt-140 w-100">
                                    <div class="widget-box w-100">
                                        <h3 class="thm-bg">Who Host this Event</h3>
                                        <div class="event-organizer w-100">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="event-organizer1">
                                                    <div class="event-organizer-box w-100">
                                                        <div class="event-organizer-info d-flex flex-wrap align-items-center w-100">
                                                            <img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/event-organizer-img1.jpg') ?> " alt="Event Organizer Image 1">
                                                            <div class="event-organizer-info-inner">
                                                                <h4 class="mb-0">Mark Willma</h4>
                                                                <span class="thm-clr">Posted 3 days ago</span>
                                                            </div>
                                                        </div>
                                                        <ul class="post-meta event-organizer-meta mb-0 list-unstyled w-100">
                                                            <li><i class="fas fa-map-marker-alt rounded-circle"></i>484 Ellis St, Francisco, CA 94102.</li>
                                                            <li><i class="far fa-envelope rounded-circle"></i>example@gmail.com</li>
                                                            <li><i class="fas fa-phone rounded-circle"></i>89+97872978129</li>
                                                            <li><i class="fas fa-globe rounded-circle"></i>www.yourwebsite.com</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="event-organizer2">
                                                    <div class="event-organizer-box w-100">
                                                        <div class="event-organizer-info d-flex flex-wrap align-items-center w-100">
                                                            <img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/event-organizer-img2.jpg') ?> " alt="Event Organizer Image 2">
                                                            <div class="event-organizer-info-inner">
                                                                <h4 class="mb-0">Mark Joe</h4>
                                                                <span class="thm-clr">Posted 8 days ago</span>
                                                            </div>
                                                        </div>
                                                        <ul class="post-meta event-organizer-meta mb-0 list-unstyled w-100">
                                                            <li><i class="fas fa-map-marker-alt rounded-circle"></i>484 Ellis St, Francisco, CA 94102.</li>
                                                            <li><i class="far fa-envelope rounded-circle"></i>example@gmail.com</li>
                                                            <li><i class="fas fa-phone rounded-circle"></i>89+97872978129</li>
                                                            <li><i class="fas fa-globe rounded-circle"></i>www.yourwebsite.com</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="event-organizer3">
                                                    <div class="event-organizer-box w-100">
                                                        <div class="event-organizer-info d-flex flex-wrap align-items-center w-100">
                                                            <img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/event-organizer-img3.jpg') ?> " alt="Event Organizer Image 3">
                                                            <div class="event-organizer-info-inner">
                                                                <h4 class="mb-0">Willma Mark</h4>
                                                                <span class="thm-clr">Posted 5 days ago</span>
                                                            </div>
                                                        </div>
                                                        <ul class="post-meta event-organizer-meta mb-0 list-unstyled w-100">
                                                            <li><i class="fas fa-map-marker-alt rounded-circle"></i>484 Ellis St, Francisco, CA 94102.</li>
                                                            <li><i class="far fa-envelope rounded-circle"></i>example@gmail.com</li>
                                                            <li><i class="fas fa-phone rounded-circle"></i>89+97872978129</li>
                                                            <li><i class="fas fa-globe rounded-circle"></i>www.yourwebsite.com</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#event-organizer1"><img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/event-organizer-nav-img1.jpg') ?> " alt="Event Organizer Nav Image 1"></a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#event-organizer2"><img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/event-organizer-nav-img2.jpg') ?> " alt="Event Organizer Nav Image 2"></a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#event-organizer3"><img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/event-organizer-nav-img3.jpg') ?> " alt="Event Organizer Nav Image 3"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget-box w-100">
                                        <h3 class="thm-bg">Event Schedule</h3>
                                        <div class="event-schedule-wrap text-center w-100">
                                            <div class="event-schedule-box w-100">
                                                <img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/event-schedule-img1.jpg') ?> " alt="Event Schedule Image 1">
                                                <h4 class="mb-0"><a href="javascript:void(0);" title="">Auditorium A</a></h4>
                                                <i class="d-block">Introduction to WP</i>
                                                <span>Day 1 - 20 Nov 2020</span>
                                            </div>
                                            <div class="event-schedule-box w-100">
                                                <img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/event-schedule-img2.jpg') ?> " alt="Event Schedule Image 2">
                                                <h4 class="mb-0"><a href="javascript:void(0);" title="">Auditorium A</a></h4>
                                                <i class="d-block">Introduction to WP</i>
                                                <span>Day 2 - 21 Nov 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Event Detail Wrap 2 -->
                </div>
            </div>
        </section>