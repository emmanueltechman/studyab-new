 <!--====== Start Header Section ======-->
 <header class="header-area header-area-three transparent-header">
    <div class="header-navigation">
        <div class="container">
            <div class="primary-menu">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-5">
                        <div class="site-branding">
                            <a href="/" class="brand-logo"><img src="{{config('app.url')}}/front-assets/images/logo-3.png" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-2">
                        <div class="nav-menu">
                            <div class="navbar-close"><i class="ti-close"></i></div>
                            <nav class="main-menu">
                                <ul>

                                    @if($menuInstitutions->count())
                                        <li class="menu-item has-children"><a href="#">Institution</a>
                                            <ul class="sub-menu">
                                                @foreach($menuInstitutions as $id=>$institution)
                                                    <li class="menu-item"><a href="{{ route('courses.index') }}?institution={{ $id }}">{{ $institution }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif

                                    @foreach($menuDisciplines->count())
                                        <li class="menu-item has-children"><a href="{{ route('courses.index') }}">Programs</a>
                                            <ul class="sub-menu">
                                                @foreach($menuDisciplines as $id=>$discipline)
                                                    <li class="menu-item"><a href="{{ route('courses.index') }}?discipline={{ $id }}">{{ $discipline }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                    <li class="menu-item"><a href="#">Agents & Partners</a></li>
                                    <li class="nav-btn"><a href="#" class="main-btn icon-btn">Add Listing</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-5">
                        <div class="header-right-nav">
                            <ul class="d-flex align-items-center">
                                <li class="user-btn"><a href="/dashboard" class="icon"><i class="flaticon-avatar"></i></a></li>
                                <li class="hero-nav-btn"><a href="/dashboard" class="main-btn icon-btn">Get Started</a></li>
                                <li class="nav-toggle-btn">
                                    <div class="navbar-toggler">
                                        <span></span><span></span><span></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== End Header Section ======-->
