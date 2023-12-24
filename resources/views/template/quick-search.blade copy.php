
        <!--====== Start Hero Section ======-->
        <!-- {{-- <section class="hero-area">
            <div class="breadcrumbs-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="page-title">
                                <h1 class="title">Listing Grid</h1>
                                <ul class="breadcrumbs-link">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Listing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}} -->
        <!--====== End Hero Section ======-->
        <!--====== Start Listing Section ======-->
        <section class="listing-grid-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sidebar-widget-area">
                            <div class="widget search-listing-widget mb-30">
                                <h4 class="widget-title">Search Courses</h4>
                                <form>
                                    <div class="search-form">
                                        <div class="form_group">
                                            <select class="wide">
                                                <option data-dsplay="By Country">By Country</option>
                                                <option value="01">United Kingdom</option>
                                                <option value="02">United State</option>
                                                <option value="03">Canada</option>
                                                <option value="04">Australia</option>

                                            </select>
                                        </div>

                                        <div class="form_group">
                                            <select class="wide">
                                                <option data-dsplay="Category">Course type</option>
                                                <option value="01">Foundation</option>
                                                <option value="02">Undergraduate</option>
                                                <option value="03">Postgraduate</option>
                                                <option value="04">Doctorate</option>
                                                <option value="05">Diploma</option>
                                            </select>
                                        </div>
                                        <div class="form_group">
                                            <input type="search" class="form_control" placeholder="e.g Software Engineering" name="search" required>
                                            <i class="ti-search"></i>
                                        </div>
                                        <div class="form_group">
                                            <select class="wide">
                                                <option data-dsplay="Location"> Year/Intake</option>
                                                <option value="01">2023</option>
                                                <option value="02">2024</option>
                                                <option value="03">2025</option>
                                                <option value="04">2026</option>

                                            </select>
                                        </div>

                                        <div class="form_group">
                                            <select class="wide">
                                                <option data-dsplay="By place">Mode of Study</option>
                                                <option value="01">Full-Time</option>
                                                <option value="02">Online</option>
                                                <option value="03">Part-Time</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="price-range-widget">
                                        <h4 class="widget-title">Tuition Fee:$</h4>
                                        <div id="slider-range" class="mb-20"></div>
                                        <div class="price-number">
                                            <span class="amount"><input type="text" id="amount"></span>
                                        </div>
                                        <select class="wide">
                                            <option data-dsplay="Default price">Tuition Range</option>
                                            <option value="01">$5,000-$7,000</option>
                                            <option value="02">$7000-$10000</option>
                                            <option value="03">$10000-$13000</option>
                                            <option value="04">$13000-$15000</option>
                                            <option value="05">$15000-$20000</option>
                                        </select>
                                    </div>
                                    <div class="form_group">
                                        <button class="main-btn icon-btn">Search Now</button>
                                    </div>
                                </form>
                            </div>
                            {{-- <div class="widget newsletter-widget mb-30">
                                <div class="newsletter-widget-wrap bg_cover" style="background-image: url({{config('app.url')}}front-assets/images/newsletter-widget-1.jpg);">
                                    <i class="flaticon-email-1"></i>
                                    <h3>Subscribe Our
                                        Newsletter</h3>
                                    <button class="main-btn icon-btn">Subscribe</button>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="listing-search-filter mb-40">
                            <div class="row">
                                <div class="col-md-8">
                                    {{-- <div class="filter-left d-flex align-items-center">
                                        <div class="show-text">
                                            <span>Showing Result low -09</span>
                                        </div>
                                        <div class="sorting-dropdown">
                                            <select>
                                                <option data-dsplay="Default Sorting">Default Sorting</option>
                                                <option value="01">Museums</option>
                                                <option value="02">Restaurant</option>
                                                <option value="03">Party Center</option>
                                                <option value="04">Fitness Zone</option>
                                                <option value="05">Game Field</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-md-4">
                                    <div class="filter-right">
                                        {{-- <ul class="filter-nav">
                                            <li><a href="listing-grid.html" class="active"><i class="ti-view-grid"></i></a></li>
                                            <li><a href="listing-list.html"><i class="ti-view-list-alt"></i></a></li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listing-grid-wrapper">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="listing-item listing-grid-item-two mb-30">

                                        <div class="listing-content">
                                            <h3 class="title"><a href="/program-details">MSc Computer Science (Software Engineering)</a></h3>
                                            <span class="phone-meta"><i class="ti-location-pin"></i><a href="/program-details">Staffordshire University, United Kingdom</a></span>
                                            <span class="phone-meta"><i class="ti-calendar"></i><a>1-2 years MSc, PgCert, PgDip</a><span class="status st-open">$17,000</span></span>
                                            <span class="phone-meta"><i class="ti-money"></i><a>Application fee:</a><span class="status st-open">0 USD</span></span>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-link"></i><a href="/program-details">Program Details</a></span></li>
                                                    <li><span class="status st-close"><a href="/program-details">Apply Now</a></span></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="listing-item listing-grid-item-two mb-30">

                                        <div class="listing-content">
                                            <h3 class="title"><a href="/program-details">MSc Computer Science (Software Engineering)</a></h3>
                                            <span class="phone-meta"><i class="ti-location-pin"></i><a href="/program-details">Staffordshire University, United Kingdom</a></span>
                                            <span class="phone-meta"><i class="ti-calendar"></i><a>1-2 years MSc, PgCert, PgDip</a><span class="status st-open">$17,000</span></span>
                                            <span class="phone-meta"><i class="ti-money"></i><a>Application fee:</a><span class="status st-open">0 USD</span></span>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-link"></i><a href="#">Program Details</a></span></li>
                                                    <li><span class="status st-close"><a href="/program-details">Apply Now</a></span></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="listing-item listing-grid-item-two mb-30">

                                        <div class="listing-content">
                                            <h3 class="title"><a href="#">MSc Computer Science (Software Engineering)</a></h3>
                                            <span class="phone-meta"><i class="ti-location-pin"></i><a href="#">Staffordshire University, United Kingdom</a></span>
                                            <span class="phone-meta"><i class="ti-calendar"></i><a>1-2 years MSc, PgCert, PgDip</a><span class="status st-open">$17,000</span></span>
                                            <span class="phone-meta"><i class="ti-money"></i><a>Application fee:</a><span class="status st-open">0 USD</span></span>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-link"></i><a href="#">Program Details</a></span></li>
                                                    <li><span class="status st-close"><a href="#">Apply Now</a></span></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="listing-item listing-grid-item-two mb-30">

                                        <div class="listing-content">
                                            <h3 class="title"><a href="#">MSc Computer Science (Software Engineering)</a></h3>
                                            <span class="phone-meta"><i class="ti-location-pin"></i><a href="#">Staffordshire University, United Kingdom</a></span>
                                            <span class="phone-meta"><i class="ti-calendar"></i><a>1-2 years MSc, PgCert, PgDip</a><span class="status st-open">$17,000</span></span>
                                            <span class="phone-meta"><i class="ti-money"></i><a>Application fee:</a><span class="status st-open">0 USD</span></span>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-link"></i><a href="#">Program Details</a></span></li>
                                                    <li><span class="status st-close"><a href="#">Apply Now</a></span></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="listing-item listing-grid-item-two mb-30">

                                        <div class="listing-content">
                                            <h3 class="title"><a href="#">MSc Computer Science (Software Engineering)</a></h3>
                                            <span class="phone-meta"><i class="ti-location-pin"></i><a href="#">Staffordshire University, United Kingdom</a></span>
                                            <span class="phone-meta"><i class="ti-calendar"></i><a>1-2 years MSc, PgCert, PgDip</a><span class="status st-open">$17,000</span></span>
                                            <span class="phone-meta"><i class="ti-money"></i><a>Application fee:</a><span class="status st-open">0 USD</span></span>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-link"></i><a href="#">Program Details</a></span></li>
                                                    <li><span class="status st-close"><a href="#">Apply Now</a></span></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="listing-item listing-grid-item-two mb-30">

                                        <div class="listing-content">
                                            <h3 class="title"><a href="#">MSc Computer Science (Software Engineering)</a></h3>
                                            <span class="phone-meta"><i class="ti-location-pin"></i><a href="#">Staffordshire University, United Kingdom</a></span>
                                            <span class="phone-meta"><i class="ti-calendar"></i><a>1-2 years MSc, PgCert, PgDip</a><span class="status st-open">$17,000</span></span>
                                            <span class="phone-meta"><i class="ti-money"></i><a>Application fee:</a><span class="status st-open">0 USD</span></span>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-link"></i><a href="#">Program Details</a></span></li>
                                                    <li><span class="status st-close"><a href="#">Apply Now</a></span></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Listing Section ======-->
