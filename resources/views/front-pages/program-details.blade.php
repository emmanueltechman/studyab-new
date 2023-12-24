@extends('template.front.main')
@section('content')


<section class="blog-area pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-wrapper mb-30">
                    <div class="blog-post-item">
                        <div class="post-thumbnail">
                            <img src="{{config('app.url')}}front-assets/images/blog/blog-single-11.jpg" alt="Blog Image">
                        </div>
                        <div class="entry-content">
                            <div class="post-meta">
                                <ul>
                                    <li><span><i class="ti-location-pin"></i><a href="#">Full-time, Staffordshire University London, with a placement year</a></span></li>
                                    <li><span><i class="ti-money"></i><a href="#">15,000.00 USD</a></span></li>
                                    <li><span><i class="ti-tag">Award</i><a href="#">MSc</a></span></li>
                                    <li><span><i class="ti-calendar"></i><a href="#">25 September 2023</a></span></li>
                                </ul>
                            </div>
                            <h3 class="title">Computer Science</h3>
                            <p>Penatibus cursus Luctus taciti nibheren congue sollicitudin placerat an tempus turpis magnis tempus inte vivamus rhoncus roin habitasse diam mattis vivamus per. Neque nibh purus, donec taciti donec parturient Nec neque facilisi etiam nibh urna taciti tortor auctor ullamcorper ridiculus hendrerit duis accumsan iaculis elit per gravida vel gravida magnis pretium hac litora eu molestie aptent. Eget mollis vehicula cursus ate netus iaculis vel praesent aliquam malesuada faucibus in <span class="highlight">condimentum</span> egestas vivamus quisque condimen tum purus dapibus accumsan fames nisi dapibus ultrices velit urna. Enim fats etiam elementum ipsum sem netus dapibus molestie dictum aenean. Montes ridiculus bibendum malesuada cras nisi nibh porttitor site facilisi lacinia consequat integer sed mattis nec ultricies vulputate velit congue pede nceptos elit vulputat metus suspendisse faller the sociology nullam.</p>
                            <p>pretium hac litora eu <span class="highlight">molestie</span> aptent. Eget mollis vehicula cursus ated netus iaculis vel praesent aliquam malesuada faucibus in condimentum egestas vivamus quisque  condimen drutum purus dapibus accumsan fames nisi dapibus ultrices velit urna. Enim fats etiam elementum ipsum sem netus dapibus fallen molestie dictum aenean. Montes ridiculus <span class="highlight">bibendum</span> malesuada cras nis nibh porttitor site facilisi lacinia consequat integer sed mattis nec ultricies vulputate velit congue pede nceptos elit vulputat </p>
                            <h4>Traveling is the spice of life</h4>
                            <p>Suspendisse malesuada felis diam arcu sed velit nisi auctor dolor tempor phasellus varius nisl elit donece malesuada suscipit ide natoque commodo dictumst facilisi risus vehicula iaculis dolor ener ligula bibendum Dignissim, nunc vulputate. Fringilla porta conubia neque eros lacinia hymenaeos dictumst placerat sed cum vivamus tellus consequat magnis dis auctor hymenaeos turpis et metus orci aliquet fermentum tincidunt parturient eget montes convallis nunc lacus feugiat nonummy</p>
                            <blockquote class="fioxen-blockquote text-center">
                                <img src="{{config('app.url')}}front-assets/images/quote-1.png" alt="quote">
                                <h5>Eleifend metus commodo taciti purus dictum porttitor etiam condimen blandit lacus libero tristique donec ornarehac </h5>
                                <h6>Emelie Marchent</h6>
                            </blockquote>
                            <p>Malesuada felis diam arcu sed velit nisi auctor an dolor tempor phasellus varius nisl elit donece malesuada suscipit ide natoque commodo dictumst facilisi risus vehicula iaculis dolor ener to ligula bibendum digniss imergen from the nunc vulputate fringilla porta conubia neque eros lacinia hymenaeos dictumst placerat sed cum vivamus tellus consequat magnis dis auctor hymenaeos turpis et metus orci th aliquet fermentum tincidunt parturient eget montes convallis nunc lacus feugiat nonummy sociis phasellus etiam auctor inte justo semper volutpat mi morbi ornare ultrices vehicula augue parturient placerat </p>
                            <h4>We make dreams come true!</h4>
                            <p>Ligula bibendum digniss imergen from the nunc vulputate fringilla porta conubia neque eros lacinia hymenaeos dictumst placerat sed cum vivamus tellus consequat magnis dis auctor hymenaeos turpis et metus orci th aliquet fermentum tincidunt parturient eget montes convallis nunc lacus feugiat nonummy sociis phasellus etiam auctor inte justo semper volutpat mi morbi ornare</p>
                            <div class="content-img">
                                {{-- <img src="{{config('app.url')}}front-assets/images/blog/blog-single-2.jpg" alt="Blog Image"> --}}
                            </div>
                            <p>Consequat magnis dis auctor hymenaeos turpis et metus orci th aliquet fermentum tincidunt parturient eget montes convallis nunc lacus feugiat nonummy sociis phasellus etiam auctor inte justo semper voluter pat mi morbi ornare nunc </p>
                            <ul class="list">
                                <li class="item">
                                    Class Lorem convallis nibh quam te enim consectetuer nunc nisi interdum mollis risu per ultricies nulla nostra tortor primis libero elementum nunc pede enim
                                </li>
                                <li class="item">
                                    Nnunc nisi interdum mollis risu per ultricies nulla nostra tortor primis libero elementum nunc pede
                                </li>
                                <li class="item">
                                    Adipiscing mattis dis risus rutrum feugiat maecenas nunc nullam congue pe placerat potenti hendreri felis odio ad dignissim posuere.
                                </li>
                            </ul>
                            <div class="post-tag">
                                <a href="#">Feature</a>
                                <a href="#">Tourism</a>
                                <a href="#">Job & Feed</a>
                                <a href="#">Musemus</a>
                            </div>
                        </div>
                    </div>
                    <div class="post-navigation">
                        <h4 class="comments-title mb-35">Related Programs</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="prev-post post-nav-item">
                                    <a href="blog-details.html" class="btn-link">Previous Post</a>
                                    <h5><a href="blog-details.html">Felis feugiat tellus puruse
                                        dui lectus nisi</a></h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="next-post post-nav-item">
                                    <a href="blog-details.html" class="btn-link">Next Post</a>
                                    <h5><a href="blog-details.html">dapibus luctus do gravida
                                        feugiat fermtum</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="comments-area">
                        <h4 class="comments-title mb-35">Comment (2)</h4>
                        <ul class="comments-list">
                            <li class="comment">
                                <div class="comment-avatar">
                                    <img src="{{config('app.url')}}front-assets/images/blog/comment-avatar-1.jpg" alt="comment author one">
                                </div>
                                <div class="comment-wrap">
                                    <div class="comment-author-content">
                                        <span class="author-name">Moriana Steve<span class="date">Sep 02, 2021</span></span>
                                        <p>Musutrum orci montes hac at neque mollis taciti parturient vehicula interdum verra cubilia ipsum duis amet nullam sit ut ornare mattis urna. </p>
                                        <a href="#comment-respond" class="reply"><i class="ti-share-alt"></i>Reply</a>
                                    </div>
                                </div>
                            </li>
                            <li class="comment">
                                <div class="comment-avatar">
                                    <img src="{{config('app.url')}}front-assets/images/blog/comment-avatar-2.jpg" alt="comment author two">
                                </div>
                                <div class="comment-wrap">
                                    <div class="comment-author-content">
                                        <span class="author-name">Richard Coleum<span class="date">Sep 02, 2021</span></span>
                                        <p>Musutrum orci montes hac at neque mollis taciti parturient vehicula interdum verra cubilia ipsum duis amet nullam sit ut ornare mattis urna. </p>
                                        <a href="#comment-respond" class="reply"><i class="ti-share-alt"></i> Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="comments-respond">
                        <h4 class="comments-heading mb-20">Write a Review</h4>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <textarea class="form_control" name="message" placeholder="Write Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_group">
                                        <input type="text" class="form_control" placeholder="Full Name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Type your email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_checkbox">
                                        <div class="single-checkbox d-flex">
                                            <input type="checkbox" id="check1" name="checkbox" checked>
                                            <label for="check1"><span>Save my name, email, and website in this browser for the next time i comment.</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <button class="main-btn">Submit Review</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-widget-area">
                    {{-- <div class="widget search-widget mb-30">
                        <h4 class="widget-title">Search</h4>
                        <form>
                            <div class="form_group">
                                <input type="email" class="form_control" placeholder="Search..." name="email" required>
                                <i class="ti-location-arrow"></i>
                            </div>
                        </form>
                    </div>
                    <div class="widget categories-widget mb-30">
                        <h4 class="widget-title">Categories</h4>
                        <ul class="categories-nav">
                            <li><a href="#">Restaurant <span>(10)</span></a></li>
                            <li><a href="#">Museums <span>(12)</span></a></li>
                            <li><a href="#">Business <span>(05)</span></a></li>
                            <li><a href="#">Tour & Travel <span>(10)</span></a></li>
                            <li><a href="#">Uncategory <span>(03)</span></a></li>
                        </ul>
                    </div> --}}
                    <div class="widget recent-post-widget mb-30">
                        <h4 class="widget-title">Information</h4>
                        <ul class="recent-post-list">
                            <li class="post-thumbnail-content">
                                {{-- <img src="{{config('app.url')}}front-assets/images/elements/thumb-1.jpg" class="img-fluid" alt=""> --}}
                                <div class="post-title-date">
                                    <span class="posted-on">Recognised qualifications
                                        {{-- <a href="#">02 Sep - 2021</a> --}}
                                    </span>
                                    <h6><a href="blog-details.html">Gain certifications from Microsoft, CISCO, and Amazon, and a Google approved curriculum</a></h6>
                                </div>
                            </li>
                            <li class="post-thumbnail-content">
                                {{-- <img src="{{config('app.url')}}front-assets/images/elements/thumb-2.jpg" class="img-fluid" alt=""> --}}
                                <div class="post-title-date">
                                    <span class="posted-on">All-round course structure</i></span>
                                    <h6><a href="blog-details.html">Gain expertise in a broad field of computer science</a></h6>
                                </div>
                            </li>
                            <li class="post-thumbnail-content">
                                <div class="form_group">
                                    <button class="main-btn icon-btn">Start Application</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget add-widget mb-30">
                        <div class="add-img-box">
                            {{-- <img src="{{config('app.url')}}front-assets/images/elements/add-1.jpg" alt="Add Image"> --}}
                        </div>
                    </div>
                    {{-- <div class="widget tag-cloud-widget mb-30">
                        <h4 class="widget-title">Popular Tag</h4>
                        <a href="#">Decor</a>
                        <a href="#">Love</a>
                        <a href="#">Trendy</a>
                        <a href="#">Interior</a>
                        <a href="#">Architect</a>
                        <a href="#">Feature</a>
                        <a href="#">Modern</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
