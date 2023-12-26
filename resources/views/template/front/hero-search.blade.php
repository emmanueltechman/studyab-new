<!--====== Start Hero Section ======-->
<section class="hero-area">
    <div class="hero-wrapper-three bg_cover" style="background-image: url({{config('app.url')}}/front-assets/images/hero/hero-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content text-center">
                        <h1>Find Your Perfect <br>Study Abroad Program</h1>
                        <h3></h3>
                        <div class="hero-search-wrapper">
                            <form method="GET" action="{{ route('courses.index') }}">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="search-nav mb-10">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#flight"><i class="far fa-plane-departure"></i>UK</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#hotels"><i class="far fa-building"></i>USA</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#rentcar"><i class="far fa-car"></i>CANADA</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="tags mb-15"><span>Popular Courses:</span><a href="#">Computer Science</a>,<a href="#">Machine Learning</a>,<a href="#">Business</a></p>
                                    </div>
                                </div>
                                <div class="hero-search-form tab-content">
                                    <div class="tab-pane fade show active">
                                        <div class="row">

                                            <div class="col-lg-3 col-md-6">
                                                <div class="form_group">
                                                    <select name="country" id="country" class="form-control">
                                                        <option data-dsplay="Country" placeholder="Country"> Country </option>

                                                            @foreach ($countries as $country)
                                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                                            @endforeach

                                                        <!-- <input type="text" class="form_control" placeholder="Location" name="location" required> -->
                                                        <i class="ti-location-pin"></i>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-lg-3 col-md-6">
                                                <div class="form_group">
                                                    <select name="discipline" id="discipline" class="form-control">
                                                        <option data-dsplay="discipline" placeholder="Discipline"> Course Area </option>

                                                        @foreach($newestCourses as $courseFilter)
                                                            @foreach ($courseFilter->disciplines as $disciplineFilter)
                                                            <option value="{{$disciplineFilter->id}}">{{$disciplineFilter->name}}</option>
                                                            @endforeach
                                                        @endforeach
                                                        <!-- <input type="text" class="form_control" placeholder="Location" name="location" required> -->
                                                        <i class="ti-ink-pen"></i>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Search Course" name="course_name" required>

                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6">
                                                <div class="form_group">
                                                    <button type="submit" class="main-btn icon-btn">Search Now</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Hero Section ======-->
