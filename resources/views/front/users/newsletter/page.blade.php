{{-- Subscribe to News Letter Begins --}}
<div class="container">
    <div class="news-letter-body">
        <div class="news-letter-image">
            <img src="../assets/images/newsletter.png" alt="">
        </div>
        <div class="news-letter-form">
            <h2>Subscribe to our Newsletter</h2>
            <p>Don't miss out on latest updates and information</p>
            <form action="{{ route('newsletter.subscribe') }}" method="POST">
                @csrf
                <div class="news-letter-subscribe">
                    <input type="email" name="email" class="form-control subscribe-input blog-input mb-3"
                        placeholder="Your Email" required>
                    <button class="btn btn-danger btn-subscribe" type="submit">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Subscribe to News Letter Ends --}}
