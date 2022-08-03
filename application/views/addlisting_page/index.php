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
                <div class="fixed-bg" style="background-image: url(<?= base_url('assets/images/pg-tp-bg.jpg') ?>)"></div>
                <div class="container">
                    <div class="pg-tp-wrp text-center w-100">
                        <h1 class="mb-0">Add Listing</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>home" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Add listing</li>
                        </ol>
                    </div><!-- Page Top Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-120 pb-120 gray-bg position-relative">
                <div class="container">
                    <div class="add-listing-wrap w-100">
                        <div class="add-listing-top w-100">
                            <div class="add-listing-top-info d-flex flex-wrap justify-content-between w-100">
                                <div class="add-listing-top-info-btns">
                                    <a href="javascript:void(0);" title=""><i class="thm-clr fas fa-pencil-ruler"></i>Add Listing</a><br>
                                    <a href="" title=""><i class="thm-clr fas fa-sign-out-alt"></i>Logout</a>
                                </div>
                                <div class="add-listing-top-info-user text-center">
                                    <div class="add-listing-top-info-img position-relative">
                                        <img class="img-fluid rounded-circle" src="<?= base_url('assets/images/resources/add-listing-user-img.jpg') ?>" alt="Add Listing User Image">
                                        <span class="rounded-circle thm-bg"><i class="fas fa-camera-retro"></i></span>
                                    </div>
                                    <h3 class="mb-0">Jack Smith</h3>
                                    <p class="mb-0">Joined February 2009 <br> Gibraltar, UK</p>
                                </div>
                                <div class="add-listing-top-info-stats">
                                    <ul class="add-listing-top-info-stats-list d-inline-flex mb-0 list-unstyled">
                                        <li><span><i class="fas fa-map-marked-alt"></i>Active Listing<span class="d-block">21</span></span></li>
                                        <li><span><i class="fas fa-chart-line"></i>Active View<span class="d-block">21</span></span></li>
                                        <li><span><i class="far fa-eye"></i>Total Reviews<span class="d-block">21</span></span></li>
                                        <li><span><i class="far fa-heart"></i>Times Bookmarket<span class="d-block">21</span></span></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="nav nav-tabs add-listing-nav d-flex flex-wrap justify-content-center mb-0 list-unstyled w-100">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#add-tab1"><i class="fas fa-chart-line"></i>Dashboard</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#add-tab2"><i class="fas fa-user-edit"></i>Edit profile</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#add-tab3"><i class="fas fa-key"></i>Change password</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#add-tab4"><i class="fas fa-list"></i>My Listing</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#add-tab5"><i class="fas fa-comments"></i>Reviews</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#add-tab6"><i class="fas fa-calendar-alt"></i>Booking</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#add-tab7"><i class="fas fa-file-medical"></i>Add New</a></li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="add-tab1">
                                <form class="add-listing-form-wrap w-100">
                                    <div class="add-listing-inner-wrap dashboard-wrap w-100">
                                        <h3 class="mb-0">Dashboard</h3>
                                        <div class="add-listing-inner w-100">
                                            <div class="row mrg20">
                                                <div class="col-md-12 col-sm-12 col-lg-6">
                                                    <div class="row mrg20">
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <div class="dash-widget w-100">
                                                                <div class="mini-title w-100">
                                                                    <h4 class="mb-0">Congratulations John!</h4>
                                                                    <span class="d-block">Best seller of the month</span>
                                                                </div>
                                                                <div class="sales-wrap w-100 d-flex flex-wrap">
                                                                    <div class="sale-info">
                                                                        <span class="d-block thm-clr">$89k</span>
                                                                        <p class="mb-0">You have done 57.6% more sales today.</p>
                                                                        <a class="thm-btn" href="javascript:void(0);" title="">View Sales</a>
                                                                    </div>
                                                                    <div class="sale-img">
                                                                        <img class="img-fluid" src="<?= base_url('assets/images/resources/award-img.png') ?>" alt="Award Image">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                            <div class="dash-widget stats-widget text-center w-100">
                                                                <i class="rounded-circle fas fa-briefcase"></i>
                                                                <h5 class="mb-0">New Products</h5>
                                                                <span class="d-block">1.2k</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                            <div class="dash-widget stats-widget text-center w-100">
                                                                <i class="rounded-circle far fa-user"></i>
                                                                <h5 class="mb-0">New Users</h5>
                                                                <span class="d-block">45.6k</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-6">
                                                    <div class="dash-widget w-100">
                                                        <div class="mini-title w-100">
                                                            <h4 class="mb-0">Latest Update</h4>
                                                            <span class="d-block">Latest Posts List</span>
                                                        </div>
                                                        <div class="listing-posts-wrap2 w-100">
                                                            <div class="listing-post-box3 v2 d-flex flex-wrap w-100">
                                                                <div class="listing-post-img3">
                                                                    <a href="<?= base_url() ?>eventdetail/detailevent" title=""><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/list-post-img4-1.jpg') ?>" alt="List Post Image 1"></a>
                                                                </div>
                                                                <div class="list-post-info3">
                                                                    <ul class="post-meta2 d-inline-flex mb-0 list-unstyled">
                                                                        <li><i class="thm-clr far fa-clock"></i>May 28, 2018</li>
                                                                    </ul>
                                                                    <h3 class="mb-0"><a href="<?= base_url() ?>eventdetail/detailevent" title="">MWC Barcelona 2021</a></h3>
                                                                </div>
                                                            </div>
                                                            <div class="listing-post-box3 v2 d-flex flex-wrap w-100">
                                                                <div class="listing-post-img3">
                                                                    <a href="<?= base_url() ?>eventdetail/detailevent" title=""><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/list-post-img4-2.jpg') ?>" alt="List Post Image 2"></a>
                                                                </div>
                                                                <div class="list-post-info3">
                                                                    <ul class="post-meta2 d-inline-flex mb-0 list-unstyled">
                                                                        <li><i class="thm-clr far fa-clock"></i>May 28, 2018</li>
                                                                    </ul>
                                                                    <h3 class="mb-0"><a href="<?= base_url() ?>eventdetail/detailevent" title="">MWC Barcelona 2021</a></h3>
                                                                </div>
                                                            </div>
                                                            <div class="listing-post-box3 v2 d-flex flex-wrap w-100">
                                                                <div class="listing-post-img3">
                                                                    <a href="<?= base_url() ?>eventdetail/detailevent" title=""><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/list-post-img4-3.jpg') ?>" alt="List Post Image 3"></a>
                                                                </div>
                                                                <div class="list-post-info3">
                                                                    <ul class="post-meta2 d-inline-flex mb-0 list-unstyled">
                                                                        <li><i class="thm-clr far fa-clock"></i>May 28, 2018</li>
                                                                    </ul>
                                                                    <h3 class="mb-0"><a href="<?= base_url() ?>eventdetail/detailevent" title="">MWC Barcelona 2021</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="add-tab2">
                                <form class="add-listing-form-wrap w-100">
                                    <div class="add-listing-inner-wrap w-100">
                                        <h3 class="mb-0">Edit Profile</h3>
                                        <div class="add-listing-inner w-100">
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Name</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-user"></i>
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Position</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-industry"></i>
                                                        <input type="text" placeholder="Position">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Address</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <input type="text" placeholder="Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Phone</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-phone"></i>
                                                        <input type="tel" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Fax</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-fax"></i>
                                                        <input type="tel" placeholder="Fax">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Email Address</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-envelope"></i>
                                                        <input type="email" placeholder="Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>About Me</label>
                                                    <div class="field w-100 position-relative">
                                                        <textarea placeholder="About Me"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="thm-btn" type="submit"><i class="far fa-paper-plane"></i>Save Changes</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="add-tab3">
                                <form class="add-listing-form-wrap w-100">
                                    <div class="add-listing-inner-wrap w-100">
                                        <h3 class="mb-0">Change Password</h3>
                                        <div class="add-listing-inner w-100">
                                            <div class="row mrg20">
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Old Password</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-key"></i>
                                                        <input type="password" placeholder="Old Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>New Password</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-key"></i>
                                                        <input type="password" placeholder="New Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Confirm Password</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-key"></i>
                                                        <input type="password" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="thm-btn" type="submit"><i class="far fa-paper-plane"></i>Save Password</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="add-tab4">
                                <form class="add-listing-form-wrap w-100">
                                    <div class="add-listing-inner-wrap w-100">
                                        <h3 class="mb-0">My Listing</h3>
                                        <div class="listing-posts-wrap2 w-100">
                                            <div class="listing-post-box3 v3 d-flex flex-wrap w-100">
                                                <div class="listing-post-img3">
                                                    <a href="<?= base_url() ?>eventdetail/detailevent" title=""><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/list-post-img5-1.jpg') ?>" alt="List Post Image 1"></a>
                                                    <span class="position-absolute rounded-pill">Featured</span>
                                                </div>
                                                <div class="list-post-info3">
                                                    <ul class="post-meta2 d-inline-flex mb-0 list-unstyled">
                                                        <li><i class="thm-clr far fa-clock"></i>May 28, 2018</li>
                                                        <li><i class="thm-clr fas fa-user-edit"></i>By <a href="javascript:void(0);">Lokina</a></li>
                                                    </ul>
                                                    <h3 class="mb-0"><a href="<?= base_url() ?>eventdetail/detailevent" title="">New Mexico</a></h3>
                                                    <p class="mb-0">Luxury hotel in the heart of BloomsburyLuxury hotel in the heart of Bloomsbury Luxury hotel in the heart of BloomsburyLuxury hotel in the heart of BloomsburyLuxury hotel in the heart</p>
                                                    <ul class="post-meta d-inline-flex flex-wrap mb-0 list-unstyled">
                                                        <li><i class="fas fa-glass-cheers rounded-circle"></i>3 Events Available</li>
                                                        <li><i class="fas fa-phone rounded-circle"></i>+61 2 8236 9200</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="listing-post-box3 v3 d-flex flex-wrap w-100">
                                                <div class="listing-post-img3">
                                                    <a href="<?= base_url() ?>eventdetail/detailevent" title=""><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/list-post-img5-2-1.jpg') ?>" alt="List Post Image 2"></a>
                                                    <span class="position-absolute rounded-pill">Featured</span>
                                                </div>
                                                <div class="list-post-info3">
                                                    <ul class="post-meta2 d-inline-flex mb-0 list-unstyled">
                                                        <li><i class="thm-clr far fa-clock"></i>May 28, 2018</li>
                                                        <li><i class="thm-clr fas fa-user-edit"></i>By <a href="javascript:void(0);">Lokina</a></li>
                                                    </ul>
                                                    <h3 class="mb-0"><a href="<?= base_url() ?>eventdetail/detailevent" title="">Washinton</a></h3>
                                                    <p class="mb-0">Luxury hotel in the heart of BloomsburyLuxury hotel in the heart of Bloomsbury Luxury hotel in the heart of BloomsburyLuxury hotel in the heart of BloomsburyLuxury hotel in the heart</p>
                                                    <ul class="post-meta d-inline-flex flex-wrap mb-0 list-unstyled">
                                                        <li><i class="fas fa-glass-cheers rounded-circle"></i>3 Events Available</li>
                                                        <li><i class="fas fa-phone rounded-circle"></i>+61 2 8236 9200</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="listing-post-box3 v3 d-flex flex-wrap w-100">
                                                <div class="listing-post-img3">
                                                    <a href="<?= base_url() ?>eventdetail/detailevent" title=""><img class="img-fluid w-100" src="<?= base_url('assets/images/resources/list-post-img5-3.jpg') ?>" alt="List Post Image 3"></a>
                                                    <span class="position-absolute rounded-pill">Featured</span>
                                                </div>
                                                <div class="list-post-info3">
                                                    <ul class="post-meta2 d-inline-flex mb-0 list-unstyled">
                                                        <li><i class="thm-clr far fa-clock"></i>May 28, 2018</li>
                                                        <li><i class="thm-clr fas fa-user-edit"></i>By <a href="javascript:void(0);">Lokina</a></li>
                                                    </ul>
                                                    <h3 class="mb-0"><a href="<?= base_url() ?>eventdetail/detailevent" title="">Colorado</a></h3>
                                                    <p class="mb-0">Luxury hotel in the heart of BloomsburyLuxury hotel in the heart of Bloomsbury Luxury hotel in the heart of BloomsburyLuxury hotel in the heart of BloomsburyLuxury hotel in the heart</p>
                                                    <ul class="post-meta d-inline-flex flex-wrap mb-0 list-unstyled">
                                                        <li><i class="fas fa-glass-cheers rounded-circle"></i>0 Events Available</li>
                                                        <li><i class="fas fa-phone rounded-circle"></i>+61 2 8236 9200</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="add-tab5">
                                <div class="reviewer-review-data w-100">
                                    <div class="reviewer-review-data-inner bg-white w-100">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-lg-8">
                                                <ul class="reviewer-review-list list-unstyled w-100">
                                                    <li>
                                                        <div class="reviewer-review-box w-100">
                                                            <img class="img-fluid" src="<?= base_url('assets/images/resources/review-img1.jpg') ?>" alt="Review Image 1">
                                                            <div class="reviewer-review-info">
                                                                <div class="reviewer-review-info-top d-flex flex-wrap justify-content-between">
                                                                    <div class="reviewer-review-info-top-inner">
                                                                        <h3 class="mb-0"><a href="javascript:void(0);" title="">Gerhard Ray</a></h3>
                                                                        <span class="d-block">December 20, 2020</span>
                                                                    </div>
                                                                    <div class="reviewer-review-info-top-inner">
                                                                        <span class="reviewer-rate"><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="far fa-star off"></i></span>
                                                                        <span class="d-block">Time: 5:07 pm</span>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt abore et dolore magna aliqua. enim ad minim veniam</p>
                                                                <a class="d-inline-block" href="javascript:void(0);" title="">Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="reviewer-review-box w-100">
                                                            <img class="img-fluid" src="<?= base_url('assets/images/resources/review-img2.jpg') ?>" alt="Review Image 2">
                                                            <div class="reviewer-review-info">
                                                                <div class="reviewer-review-info-top d-flex flex-wrap justify-content-between">
                                                                    <div class="reviewer-review-info-top-inner">
                                                                        <h3 class="mb-0"><a href="javascript:void(0);" title="">Kairon Powel</a></h3>
                                                                        <span class="d-block">December 20, 2020</span>
                                                                    </div>
                                                                    <div class="reviewer-review-info-top-inner">
                                                                        <span class="reviewer-rate"><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="far fa-star off"></i></span>
                                                                        <span class="d-block">Time: 5:07 pm</span>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt abore et dolore magna aliqua. enim ad minim veniam</p>
                                                                <a class="d-inline-block" href="javascript:void(0);" title="">Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="reviewer-review-box w-100">
                                                            <img class="img-fluid" src="<?= base_url('assets/images/resources/review-img3.jpg') ?>" alt="Review Image 3">
                                                            <div class="reviewer-review-info">
                                                                <div class="reviewer-review-info-top d-flex flex-wrap justify-content-between">
                                                                    <div class="reviewer-review-info-top-inner">
                                                                        <h3 class="mb-0"><a href="javascript:void(0);" title="">Gerhard Ray</a></h3>
                                                                        <span class="d-block">December 20, 2020</span>
                                                                    </div>
                                                                    <div class="reviewer-review-info-top-inner">
                                                                        <span class="reviewer-rate"><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="far fa-star off"></i></span>
                                                                        <span class="d-block">Time: 5:07 pm</span>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt abore et dolore magna aliqua. enim ad minim veniam</p>
                                                                <a class="d-inline-block" href="javascript:void(0);" title="">Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-4">
                                                <div class="reviewer-review-widget w-100">
                                                    <h3 class="mb-0">Review</h3>
                                                    <div class="top-reviews-list w-100">
                                                        <div class="top-reviews w-100">
                                                            <label>Very Good Review</label>
                                                            <span class="reviewer-rate"><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i></span>
                                                        </div>
                                                        <div class="top-reviews w-100">
                                                            <label>Good Review</label>
                                                            <span class="reviewer-rate"><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="far fa-star off"></i></span>
                                                        </div>
                                                        <div class="top-reviews w-100">
                                                            <label>Bad Review</label>
                                                            <span class="reviewer-rate"><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="far fa-star off"></i><i class="far fa-star off"></i><i class="far fa-star off"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reviewer-review-widget w-100">
                                                    <h3 class="mb-0">Review Message</h3>
                                                    <form class="review-form w-100">
                                                        <div class="field w-100"><input type="text" placeholder="Name"></div>
                                                        <div class="field w-100"><input type="email" placeholder="Email"></div>
                                                        <div class="field w-100"><textarea placeholder="Message"></textarea></div>
                                                        <div class="field w-100"><span class="check-box"><input type="checkbox" id="review-check"><label for="review-check">Save my name, email, and website in this browser for the next time I comment.</label></span></div>
                                                        <button class="thm-btn" type="submit">Review Send</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="add-tab6">
                                <form class="add-listing-form-wrap w-100">
                                    <div class="add-listing-inner-wrap w-100">
                                        <h3 class="mb-0">Booking</h3>
                                        <div class="add-listing-inner w-100">
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>First Name</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-user"></i>
                                                        <input type="text" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Last Name</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-user"></i>
                                                        <input type="text" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Start Time</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="far fa-calendar-alt"></i>
                                                        <input type="date" placeholder="Start Time">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>End Time</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="far fa-calendar-alt"></i>
                                                        <input type="date" placeholder="End Time">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Adults</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-user"></i>
                                                        <input type="text" placeholder="Adults">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Childrens</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-user"></i>
                                                        <input type="text" placeholder="Childrens">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Address</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <input type="text" placeholder="Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Message</label>
                                                    <div class="field w-100 position-relative">
                                                        <textarea placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="thm-btn" type="submit"><i class="far fa-paper-plane"></i>Book Event</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="add-tab7">
                                <form class="add-listing-form-wrap w-100">
                                    <div class="add-listing-inner-wrap w-100">
                                        <h3 class="mb-0">Add Listing</h3>
                                        <div class="add-listing-inner w-100">
                                            <div class="row mrg20">
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Listing Title</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-chart-line"></i>
                                                        <input type="text" placeholder="Name of your business">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Type / Categories</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-chart-line"></i>
                                                        <input type="text" placeholder="All Categories">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Keywords</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-chart-line"></i>
                                                        <input type="text" placeholder="Maximum 15, should be separated by commas">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-listing-inner-wrap w-100">
                                        <h3 class="mb-0">Location & Contacts</h3>
                                        <div class="add-listing-inner w-100">
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Latitude (Drag marker on the map)</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-chart-line"></i>
                                                        <input type="text" placeholder="Map Latitude">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Longitude (Drag marker on the map)</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-chart-line"></i>
                                                        <input type="text" placeholder="Map Longitude">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <div class="listing-loc-map place-map" id="listing-loc-map"></div>
                                                </div>
                                                <div class="col-md-8 col-sm-12 col-lg-8">
                                                    <label>City / Location</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-chart-line"></i>
                                                        <input type="text" placeholder="All Cities">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-lg-4">
                                                    <label>State</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-chart-line"></i>
                                                        <input type="text" placeholder="All Cities">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Address</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-chart-line"></i>
                                                        <input type="text" placeholder="Address of your business">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Email Address</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-chart-line"></i>
                                                        <input type="email" placeholder="JessieManrty@domain.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Phone</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-chart-line"></i>
                                                        <input type="tel" placeholder="+7(123)987654">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label>Website</label>
                                                    <div class="field w-100 position-relative">
                                                        <i class="fas fa-chart-line"></i>
                                                        <input type="url" placeholder="themeforest.net">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-listing-inner-wrap w-100">
                                        <h3 class="mb-0">Upload Media</h3>
                                        <div class="add-listing-inner w-100">
                                            <div class="row mrg20">
                                                <div class="col-md-4 col-sm-6 col-lg-4">
                                                    <span class="check-box"><input type="checkbox" id="media-check1"><label for="media-check1">Place image</label></span>
                                                    <div class="field fileContainer text-center w-100 position-relative">
                                                        <i class="fas fa-chart-line"></i>
                                                        <span class="d-block">Click here or drop files upload</span>
                                                        <input type="file">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-lg-4">
                                                    <span class="check-box"><input type="checkbox" id="media-check2"><label for="media-check2">Carousel</label></span>
                                                    <div class="field fileContainer text-center w-100 position-relative">
                                                        <i class="fas fa-chart-line"></i>
                                                        <span class="d-block">Click here or drop files upload</span>
                                                        <input type="file">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-lg-4">
                                                    <span class="check-box"><input type="checkbox" id="media-check3"><label for="media-check3">Video</label></span>
                                                    <label><i class="fas fa-chart-line"></i>Youtube</label>
                                                    <div class="field w-100 position-relative">
                                                        <input type="url" placeholder="https://www.youtube.com/">
                                                    </div>
                                                    <label><i class="fas fa-chart-line"></i>Vimeo</label>
                                                    <div class="field w-100 position-relative">
                                                        <input type="url" placeholder="https://vimeo.com/">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-listing-inner-wrap w-100">
                                        <h3 class="mb-0">Details</h3>
                                        <div class="add-listing-inner w-100">
                                            <div class="row mrg20">
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Details</label>
                                                    <div class="field w-100 position-relative">
                                                        <textarea placeholder="Description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label class="facebook-clr"><i class="fas fa-chart-line"></i>Facebook<span>(optional)</span></label>
                                                    <div class="field w-100 position-relative">
                                                        <input type="text" placeholder="www.facebook.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label class="twitter-clr"><i class="fas fa-chart-line"></i>Twitter<span>(optional)</span></label>
                                                    <div class="field w-100 position-relative">
                                                        <input type="text" placeholder="www.twitter.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label class="google-clr"><i class="fas fa-chart-line"></i>Google Plus<span>(optional)</span></label>
                                                    <div class="field w-100 position-relative">
                                                        <input type="text" placeholder="www.google.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <label class="instagram-clr"><i class="fas fa-chart-line"></i>Instagram<span>(optional)</span></label>
                                                    <div class="field w-100 position-relative">
                                                        <input type="text" placeholder="www.instagram.com">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-listing-inner-wrap w-100">
                                        <h3 class="mb-0">Amenities (optional)</h3>
                                        <div class="add-listing-inner w-100">
                                            <ul class="tags-list mb-0 list-unstyled">
                                                <li><span><input type="checkbox" id="anmi1-1"><label for="anmi1-1">Free Wifi</label></span></li>
                                                <li><span><input type="checkbox" id="anmi1-2"><label for="anmi1-2">Parking</label></span></li>
                                                <li><span><input type="checkbox" id="anmi1-3"><label for="anmi1-3">Fitness center</label></span></li>
                                                <li><span><input type="checkbox" id="anmi1-4"><label for="anmi1-4">Non-smoking Rooms</label></span></li>
                                                <li><span><input type="checkbox" id="anmi1-5"><label for="anmi1-5">Airport Shuttle</label></span></li>
                                                <li><span><input type="checkbox" id="anmi1-6"><label for="anmi1-6">Air Conditioning</label></span></li>
                                                <li><span><input type="checkbox" id="anmi1-7"><label for="anmi1-7">Friendly workspace</label></span></li>
                                                <li><span><input type="checkbox" id="anmi1-8"><label for="anmi1-8">Wireless Internet</label></span></li>
                                                <li><span><input type="checkbox" id="anmi1-9"><label for="anmi1-9">Free parking on premises</label></span></li>
                                                <li><span><input type="checkbox" id="anmi1-10"><label for="anmi1-10">Free parking on street</label></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button class="thm-btn" type="submit"><i class="far fa-paper-plane"></i>Send Listing</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- Add Listing Wrap -->
                </div>
            </div>
        </section>