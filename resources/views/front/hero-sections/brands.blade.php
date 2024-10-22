{{-- Essential Group Brands Begins --}}


<div class="home-container mt-2">
    <div class="main-title">
        <span>List of Essential Group Brands</span>
    </div>
    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="product-card">
                        <img src="{{ asset('../assets/images/hero-images/enews.jpeg') }}" alt="E-News">
                        <p> <span><Strong style="color: #394293">E-News</strong>:</span> <br>
                            Stay informed with instant access to breaking newsand updates
                            from around the globe, tailored to your interests and preferences.
                        </p>
                        <a href="http://essentialnews.ng/" class="btn btn-primary"
                            style="background-color: #5d5db8">Visit</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-card">
                        <img src="{{ asset('../assets/images/hero-images/edirect.jpeg') }}" alt="E-News">
                        <p> <span><Strong style="color: #394293">E-Direct</strong>:</span> <br>
                            Simplify your shopping experience with direct access to products and services from
                            manufacturers or service providers, ensuring quality and reliability.
                        </p>
                        <a href="https://edirect.ng/" class="btn btn-primary" style="background-color: #5d5db8">
                            Visit
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-card">
                        <img src="{{ asset('../assets/images/hero-images/estores.gif') }}" alt="E-Stores">
                        <p> <span><Strong style="color: #394293">E-Stores</strong>:</span> <br>
                            Browse and shop from a variety of online stores offering everything from fashion and
                            electronics to specialty goods, all in one convenient marketplace.
                        </p>
                        <a href="http://estores.ng/" class="btn btn-primary" style="background-color: #5d5db8">Visit</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-card">
                        <img src="{{ asset('../assets/images/hero-images/ecompanion2.jpeg') }}" alt="E-News">
                        <p> <span><Strong style="color: #394293">E-Companion</strong>:</span> <br>
                            Connect with like-minded individuals or professionals for companionship, collaboration, or
                            shared interests in a safe and supportive online environment.
                        </p>
                        <a href="" class="btn btn-primary" style="background-color: #5d5db8">Visit</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-card">
                        <img src="{{ asset('../assets/images/hero-images/ejobs.jpeg') }}" alt="E-News">
                        <p> <span><Strong style="color: #394293">E-Jobs</strong>:</span> <br>
                            Find your next career opportunity with ease through a comprehensive platform connecting job
                            seekers and employers seamlessly.
                        </p>
                        <a href="https://ejobs.com/" class="btn btn-primary" style="background-color: #5d5db8">Visit</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-card">
                        <img src="{{ asset('../assets/images/hero-images/eproperties.jpeg') }}" alt="E-News">
                        <p> <span><Strong style="color: #394293">E-Properties</strong>:</span> <br>
                            Explore a diverse range of properties available for sale or rent online, making it easy to
                            find your dream home or investment opportunity.
                        </p>
                        <a href="https://eproperties.ng/" class="btn btn-primary"
                            style="background-color: #5d5db8">Visit</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-card">
                        <img src="{{ asset('../assets/images/hero-images/ebnb-hotels.jpeg') }}" alt="E-News">
                        <p> <span><Strong style="color: #394293">EBNB-Hotels</strong>:</span> <br>
                            Experience unique stays and accommodations through a curated selection of ebnb hotels,
                            offering comfort and convenience wherever you travel.
                        </p>
                        <a href="https://ebnbhotel.com/" class="btn btn-primary"
                            style="background-color: #5d5db8">Visit</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-card">
                        <img src="{{ asset('../assets/images/hero-images/evenue.jpeg') }}" alt="E-News">
                        <p> <span><Strong style="color: #394293">E-Venue</strong>:</span> <br>
                            Discover and book the perfect virtual venue for your next online event or gathering,
                            ensuring a seamless and memorable experience.
                        </p>
                        <a href="http://evenue.ng/" class="btn btn-primary" style="background-color: #5d5db8">Visit</a>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
{{-- Essential Group Brands Ends --}}

<style>
    /* styles.css */
    .home-container {
        padding: 20px;
    }

    .product-card {
        background: #fff;
        border: 1px solid #ddd;
        padding: 20px;
        text-align: center;
    }

    .product-card img {
        max-width: 100%;
        height: 200px;
    }

    .product-card {
        background: #fff;
        border: 1px solid #ddd;
        padding: 20px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        /* Ensures the card stretches to accommodate the content */
    }

    .product-card p {
        flex-grow: 1;
        /* This makes the text take up the available space */
    }

    .product-card a {
        margin-top: 10px;
    }

    /* Swiper styles */
    .swiper-container {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media (min-width: 600px) {
        .swiper-slide {
            flex: 0 0 50%;
            /* Two slides visible */
        }
    }

    @media (min-width: 900px) {
        .swiper-slide {
            flex: 0 0 33.33%;
            /* Three slides visible */
        }
    }

    @media (min-width: 1200px) {
        .swiper-slide {
            flex: 0 0 25%;
            /* Four slides visible */
        }
    }
</style>


<script>
    // script.js
    document.addEventListener('DOMContentLoaded', () => {
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            spaceBetween: 10,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                600: {
                    slidesPerView: 2,
                },
                900: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 4,
                },
            },
        });
    });
</script>
