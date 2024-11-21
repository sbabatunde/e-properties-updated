<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner ">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>About</h4>
                    <div class="Subscribe-box">
                        <p>
                            E-Properties is a comprehensive platform dedicated to connecting agents, landlords, and
                            tenants. Our mission is to simplify property interactions by providing an easy-to-use space
                            for listing, discovering, and managing properties. Whether you're seeking your next home,
                            uploading property listings, or interacting with stakeholders, E-Properties bridges the gap
                            for a seamless real estate experience.
                        </p>
                        <a href="{{ route('about-us') }}" name="submitNewsletter" class="btn btn-block btn-color">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 pl-5">
                <div class="footer-item">
                    <h4 class="pl-4">Service</h4>
                    <ul class="contact-info">
                        <li>
                            <a href="{{ route('all.properties.listing') }}">Buy</a>
                        </li>
                        <li>
                            <a href="{{ route('all.properties.listing') }}">Rent</a>
                        </li>
                        <li>
                            <a href="{{ route('all.properties.listing') }}">Let</a>
                        </li>
                        <li>
                            <a href="{{ route('all.properties.listing') }}">Lease</a>
                        </li>
                        <li>
                            <a href="{{ route('landlord.index') }}">Landlords</a>
                        </li>
                        <li>
                            <a href="{{ route('tenant.index') }}">Tenants</a>
                        </li>
                        <li>
                            <a href="{{ route('services.find') }}">Property Management</a>
                        </li>
                        <li>
                            <a href="{{ route('user.buiding-materials.index') }}">Building Materials</a>
                        </li>
                        <li>
                            <a href="{{ route('all.properties.listing') }}">Short lets</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6  pl-5">
                <div class="footer-item">
                    {{-- <h4>
                        Useful Links
                    </h4> --}}
                    <ul class="links">
                        <li>
                            <a href="{{ route('land-verification') }}">Land Verification Procedure</a>
                        </li>
                        <li>
                            <a href="{{ route('policy') }}">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="{{ route('terms') }}">Terms and conditions</a>
                        </li>
                        <li>
                            <a href="{{ route('FAQs') }}">FAQs</a>
                        </li>
                        <li>
                            <a href="{{ route('contact-us') }}">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{ route('blog.post.all') }}">Blogs</a>
                        </li>
                        {{-- <li>
                            <a href="#">Trends</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6  pl-5">
                <div class="footer-item recent-posts">
                    <h4>Follow us</h4>
                    <div class="media mb-4">
                        <div class="row">
                            <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                <div style="width: 60px; height: 60px; position: relative">
                                    <div
                                        style="width: 50px; height: 49.88px; left: 5px; top: 5px; position: absolute; background: #F8F8F8; border-radius:4px">
                                        <a href="#" class="facebook-bg pl-2 pt-2"
                                            style="background-color: white"><i class="fa fa-facebook fa-3x"
                                                style="color:rgba(24, 38, 226, 0.705);background-color: white"></i></a>
                                    </div>
                                </div>
                                <div style="width: 60px; height: 60px; position: relative">
                                    <div
                                        style="width: 50px; height: 49.88px; left: 5px; top: 5px; position: absolute; background: #F8F8F8; border-radius:4px">
                                        <a href="#" class="instagram-bg pl-2 pt-2"
                                            style="background-color: white"><i class="fa fa-instagram fa-3x"
                                                style="color:rgba(24, 38, 226, 0.705);background-color: white"></i></a>
                                    </div>
                                </div>

                                <div style="width: 60px; height: 60px; position: relative">
                                    <div
                                        style="width: 50px; height: 49.88px; left: 5px; top: 5px; position: absolute; background: #F8F8F8; border-radius:4px">
                                        <a href="#" class="facebook-bg pl-2 pt-2"
                                            style="background-color: white"><i class="fa fa-linkedin fa-3x"
                                                style="color:rgba(24, 38, 226, 0.705);background-color: white"></i></a>
                                    </div>
                                </div>
                                <div style="width: 60px; height: 60px; position: relative">
                                    <div
                                        style="width: 50px; height: 49.88px; left: 5px; top: 5px; position: absolute; background: #F8F8F8; border-radius:4px">
                                        <a href="#" class="facebook-bg pl-2 pt-2"
                                            style="background-color: white"><i class="fa fa-twitter fa-3x"
                                                style="color:rgba(24, 38, 226, 0.705);background-color: white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#" class="search">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

<!-- Property Video Modal -->
<div class="modal property-modal fade" id="propertyModal" tabindex="-1" role="dialog"
    aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">
                    Find Your Dream Properties
                </h5>
                <p>
                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> E-Properties.
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 modal-left">
                        <div class="modal-left-content">
                            <div id="modalCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <iframe class="modalIframe" src="https://www.youtube.com/embed/5e0LxrLSzok"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="http://placehold.it/400x267" alt="Test ALT">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="http://placehold.it/400x267" alt="Test ALT">
                                    </div>
                                </div>
                                <a class="control control-prev" href="#modalCarousel" role="button"
                                    data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="control control-next" href="#modalCarousel" role="button"
                                    data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            <div class="description">
                                <h3>Description</h3>
                                <p>
                                    Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque
                                    massa, viverra interdum eros ut, imperdiet pellentesque mauris. Proin sit amet
                                    scelerisque
                                    risus. Donec
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 modal-right">
                        <div class="modal-right-content bg-white">
                            <strong class="price">
                                ₦178,000
                            </strong>
                            <section>
                                <h3>Features</h3>
                                <ul class="bullets">
                                    <li><i class="flaticon-bed"></i> Double Bed</li>
                                    <li><i class="flaticon-swimmer"></i> Swimming Pool</li>
                                    <li><i class="flaticon-bath"></i> 2 Bathroom</li>
                                    <li><i class="flaticon-car-repair"></i> Garage</li>
                                    <li><i class="flaticon-parking"></i> Parking</li>
                                    <li><i class="flaticon-theatre-masks"></i> Home Theater</li>
                                    <li><i class="flaticon-old-typical-phone"></i> Telephone</li>
                                    <li><i class="flaticon-green-park-city-space"></i> Private space</li>
                                </ul>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <dl>
                                    <dt>Area</dt>
                                    <dd>2500 Sq Ft:3400</dd>
                                    <dt>Condition</dt>
                                    <dd>New</dd>
                                    <dt>Year</dt>
                                    <dd>2018</dd>
                                    <dt>Price</dt>
                                    <dd>₦178,000</dd>
                                </dl>
                            </section>
                            <a href="properties-details.html" class="btn btn-show btn-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Off-canvas sidebar -->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper">
        <div class="off-canvas-header">
            <a class="close-offcanvas" href="#"><span class="fa fa-times"></span></a>
        </div>
        <div class="off-canvas-content">
            <aside class="canvas-widget">
                <div class="logo-sitebar text-center">
                    <img src="assets/img/logos/logo.png" alt="logo">
                </div>
            </aside>
            <aside class="canvas-widget">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="properties-grid-leftside.html">Properties List</a></li>
                    <li class="menu-item"><a href="properties-details.html">Property Detail</a></li>
                    <li class="menu-item"><a href="blog-single-sidebar-right.html">Blog</a></li>
                    <li class="menu-item"><a href="about.html">About US</a></li>
                    <li class="menu-item"><a href="contact-3.html">Contact US</a></li>
                </ul>
            </aside>
            <aside class="canvas-widget">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>
