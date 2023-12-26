@extends('template.front.main')

@section('content')
    @include('template.front.hero-search')

    <!--====== End Hero Section ======-->
    <!--====== Start category Section ======-->
    <section class="category-area">
        <div class="category-wrapper-bg bg_cover pt-75 pb-50" style="background-image: url({{config('app.url')}}/front-assets/images/bg/catgory-bg-1.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title section-title-white text-center mb-60">
                            <span class="sub-title">How it works</span>
                            <h2>Start with a Search</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="category-item category-item-three mb-30">
                            <div class="icon">
                                <i class="flaticon-location"></i>
                            </div>
                            <div class="info">
                                <h4 class="title"><a href="#">Location</a></h4>
                                <p>Where would you like to study</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="category-item category-item-three mb-30">
                            <div class="icon">
                                <i class="flaticon-books"></i>
                            </div>
                            <div class="info">
                                <h4 class="title"><a href="#">Program Type</a></h4>
                                <p>Diploma, Bachelor, Masters</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="category-item category-item-three mb-30">
                            <div class="icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="info">
                                <h4 class="title"><a href="#">Course</a></h4>
                                <p>Select from popular Courses</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section><!--====== End category Section ======-->
    <!--====== Start Listing Section ======-->
    <section class="listing-grid-area light-bg pt-115 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-60">
                        <span class="sub-title">Popular Universities</span>
                        <h2>Explore Schools and Programs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($newestCourses as $course)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="listing-item listing-grid-item-three mb-30">

                            <div class="listing-content">
                                <span class="featured-btn">{{ $course->getPrice() }}</span>
                                <hr>
                                <h3 class="title"><a href="{{ route('courses.show', $course->id) }}">{{ $course->name }}</a></h3>
                                <p>{{ Str::limit($course->description, 100) }}</p>
                                <!-- <span class="city"><img src="https://edvoy-strapi-assets.s3.ap-south-1.amazonaws.com/university_of_birmingham_eb3cde53d3.svg" alt="city image">University of Birmingham, UK</span> -->
                                <hr>
                                @if($course->institution)
                                    <span class="city">
                                        <!-- <img src="{{ optional($course->institution->logo)->thumbnail ?? asset('img/no_image.png') }}" class="rounded-circle"> -->
                                        <a href="{{ route('courses.index') }}?institution={{ $course->institution->id }}">{{ $course->institution->name }}</a>
                                    </span>
                                    <span>
                                        <div class="featured-btn">
                                            <a href="#">{{ $course->institution->country->code }}</a>
                                        </div>
                                    </span>

                                    <hr>
                                    <span>
                                        <div class="button">
                                            <a href="{{ route('courses.show', $course->id) }}" class="main-btn icon-btn">Start Application</a>
                                        </div>
                                    </span>
                                @endif

                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section><!--====== End Listing Section ======-->


    <!--====== Start CTA Section ======-->
    <div class="cta-area">
        <div class="cta-wrapper-three bg_cover pt-50 pb-50" style="background-image: url({{config('app.url')}}/front-assets/images/bg/cta-bg-3.jpg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="cta-content-box">
                            <h3>Search from over 100+ courses and schools</h3>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="button text-center">
                            <a href="/courses" class="main-btn icon-btn">Search Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--====== End CTA Section ======-->



    <!--====== Start Features Section ======-->


    <!--====== Start Testimonial Section ======-->
    <section class="testimonial-area pt-120 pb-120">
        <div class="container">
            <div class="testimonial-wrapper-two">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="testimonial-bg bg_cover" style="background-image: url({{config('app.url')}}/front-assets/images/testimonial/student.png);"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-content-box bg_cover" style="background-image: url({{config('app.url')}}/front-assets/images/bg/testimonial-bg-3.jpg);">
                            <div class="section-title section-title-left mb-45">
                                <span class="sub-title">Success Stories</span>
                                <h2>What People Say</h2>
                            </div>
                            <div class="testimonial-review-area">
                                <div class="testimonial-thumb-slider-one">
                                    <div class="single-thumb">
                                        <img src="https://www.edvisor.io/hubfs/Bruna%20do%20Erre%20Malvern%20International.png" alt="testimonial thumb">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="https://www.edvisor.io/hubfs/LAL_Caete%20Da%20Silva.png" alt="testimonial thumb">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="https://www.edvisor.io/hubfs/Bruna%20do%20Erre%20Malvern%20International.png" alt="testimonial thumb">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="https://www.edvisor.io/hubfs/LAL_Caete%20Da%20Silva.png" alt="testimonial thumb">
                                    </div>
                                </div>
                                <div class="testimonial-content-slider-one">
                                    <div class="testimonial-item">
                                        <div class="testimonial-content">
                                            <p>I have been able to secure admission to my choice university on this platform, after over 3 years of trying to further my education on my own. </p>
                                            <div class="author-info d-flex">
                                                <div class="quote">
                                                    <img src="{{config('app.url')}}/front-assets/images/quote.png" alt="">
                                                </div>
                                                <div class="author-title">
                                                    <h4>Kenny Powels</h4>
                                                    <span class="position">Student</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <div class="testimonial-content">
                                            <p>My students have been able to secure admission to choice university on this platform, after over 3 years. </p>
                                        </p>
                                            <div class="author-info d-flex">
                                                <div class="quote">
                                                    <img src="{{config('app.url')}}/front-assets/images/quote.png" alt="">
                                                </div>
                                                <div class="author-title">
                                                    <h4>Martin Ojo</h4>
                                                    <span class="position">Agent</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="testimonial-item">
                                        <div class="testimonial-content">
                                            <p>multiply given all hath given may meat god abundant appear lioud
                                                fourth madman mane said god dominion great gathering called very shall after cre ated from fruitful place over the mitual </p>
                                            <div class="author-info d-flex">
                                                <div class="quote">
                                                    <img src="{{config('app.url')}}/front-assets/images/quote.png" alt="">
                                                </div>
                                                <div class="author-title">
                                                    <h4>Alesha Mature</h4>
                                                    <span class="position">Sr. Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <div class="testimonial-content">
                                            <p>multiply given all hath given may meat god abundant appear lioud
                                                fourth madman mane said god dominion great gathering called very shall after cre ated from fruitful place over the mitual </p>
                                            <div class="author-info d-flex">
                                                <div class="quote">
                                                    <img src="{{config('app.url')}}/front-assets/images/quote.png" alt="">
                                                </div>
                                                <div class="author-title">
                                                    <h4>Martyn Decode</h4>
                                                    <span class="position">Sr. Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Testimonial Section ======-->
    <!--====== Start Client Section ======-->
    <section class="client-area">
        <div class="client-wrapper-two bg_cover pt-120 pb-70" style="background-image: url({{config('app.url')}}/front-assets/images/bg/testimonial-bg-1.jpg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="client-content-box mb-50">
                            <div class="section-title section-title-left section-title-white mb-35">
                                <span class="sub-title">Agents & Partners</span>
                                <h2>Become an Agent</h2>
                            </div>
                            <p>Access programs and courses from top university and give your students the competitive edge. </p>
                            <a href="/login" class="main-btn icon-btn">Create Account</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="client-item-wrapper mb-50">
                            <div class="client-item client-item-two">
                                <a href="#"><img src="https://didmdw8v48h5q.cloudfront.net/wp-content/uploads/2022/11/Yorkville-University-1.svg" alt="client image"></a>
                            </div>
                            <div class="client-item client-item-two">
                                <a href="#"><img src="https://photos.applyboard.com/schools/000/000/347/logos/original/University-of-Ottawa-Logo-May-2021.png?1620407034" alt="client image"></a>
                            </div>
                            {{-- <div class="client-item client-item-two">
                                <a href="#"><img src="https://photos.applyboard.com/schools/000/000/150/logos/original/Queen's-University-Logo-Jan2022.png?1641399839" alt="client image"></a>
                            </div>
                            <div class="client-item client-item-two">
                                <a href="#"><img src=https://photos.applyboard.com/schools/000/002/182/logos/original/Toronto-Metropolitan-University-Logo-May2022.png?1652121116" alt="client image"></a>
                            </div>
                            <div class="client-item client-item-two">
                                <a href="#"><img src=https://photos.applyboard.com/schools/000/001/622/logos/original/Carleton-Logo-September2022.png?1664197243" alt="client image"></a>
                            </div>
                            <div class="client-item client-item-two">
                                <a href="#"><img src="https://photos.applyboard.com/schools/000/000/272/logos/original/York_University.png?1522346370" alt="client image"></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Client Section ======-->
    <!--====== Start Blog Section ======-->
    {{-- <section class="blog-area pt-115 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-60">
                        <span class="sub-title">Recent Articles</span>
                        <h2>Every Single Journal</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-item blog-post-item-three mb-40">
                        <div class="post-thumbnail">
                            <a href="blog-details.html"><img src="{{config('app.url')}}/front-assets/images/blog/blog-7.jpg" alt="Blog Image"></a>
                            <div class="post-date"><a href="#">20 <span>Oct</span></a></div>
                        </div>
                        <div class="entry-content">
                            <a href="#" class="cat-btn"><i class="ti-bookmark-alt"></i>Tours & Travel</a>
                            <h3 class="title"><a href="blog-details.html">Duis nonummy socios mattis
                                tempus penatibus</a></h3>
                            <div class="post-meta">
                                <ul>
                                    <li><span><i class="ti-comments-smiley"></i><a href="#">0 Comment</a></span></li>
                                    <li><span><i class="ti-id-badge"></i><a href="#">By admin</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-item blog-post-item-three mb-40">
                        <div class="post-thumbnail">
                            <a href="blog-details.html"><img src="{{config('app.url')}}/front-assets/images/blog/blog-8.jpg" alt="Blog Image"></a>
                            <div class="post-date"><a href="#">20 <span>Oct</span></a></div>
                        </div>
                        <div class="entry-content">
                            <a href="#" class="cat-btn"><i class="ti-bookmark-alt"></i>Tours & Travel</a>
                            <h3 class="title"><a href="blog-details.html">Litora phasellus in phasellus
                                curabitur porta eun</a></h3>
                            <div class="post-meta">
                                <ul>
                                    <li><span><i class="ti-comments-smiley"></i><a href="#">0 Comment</a></span></li>
                                    <li><span><i class="ti-id-badge"></i><a href="#">By admin</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-item blog-post-item-three mb-40">
                        <div class="post-thumbnail">
                            <a href="blog-details.html"><img src="{{config('app.url')}}/front-assets/images/blog/blog-9.jpg" alt="Blog Image"></a>
                            <div class="post-date"><a href="#">20 <span>Oct</span></a></div>
                        </div>
                        <div class="entry-content">
                            <a href="#" class="cat-btn"><i class="ti-bookmark-alt"></i> Tours & Travel</a>
                            <h3 class="title"><a href="blog-details.html">Mattis parturent tortor lectus
                                lestie sapien Dapus</a></h3>
                            <div class="post-meta">
                                <ul>
                                    <li><span><i class="ti-comments-smiley"></i><a href="#">0 Comment</a></span></li>
                                    <li><span><i class="ti-id-badge"></i><a href="#">By admin</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="button text-center mt-40">
                        <a href="blog.html" class="main-btn icon-btn">View Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--====== End Blog Section ======-->
@endsection
