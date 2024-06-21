<div class="hero-category">
    <div class="hero-meet-expert">
        <h5 style="color: black">New Listing</h5>
        <a href="{{ route('all.residential') }}" style="text-decoration: none">
            <h5 style="color: red">See more</h5>
        </a>
    </div>

    <div class="hero-listing">
        <div class="pic">
            <img src="{{ asset('../assets/images/hero-images/listing-1.png') }}" alt="">
            <span class="listing-text">
                <h5 class="mt-3" style="font-weight:700;width:inherit">4 bedroom Terrace with Bq at Ajah</h5>
                <p>
                    <span style="font-size:15px">Lagos, Nigeria </span><br>
                    <span style="font-size:20px;font-weight:bold"># 930,000</span>
                </p>
                <a href="" class="btn btn-info listing-anchor">View</a>
            </span>
        </div>
        {{-- <div class="pic">
            <img src="{{ asset('../assets/images/hero-images/listing-4.png') }}" alt="">
            <span class="listing-text">
                <h5 class="mt-3" style="font-weight:700;width:inherit" >4 bedroom Terrace with Bq at Ajah</h5>
                <p>
                    <span style="font-size:15px">Lagos, Nigeria </span><br>
                    <span style="font-size:20px;font-weight:bold"># 930,000</span>
                </p>
                <a href="" class="btn btn-info listing-anchor">View</a>
            </span>
        </div>
        <div class="pic">
            <img src="{{ asset('../assets/images/hero-images/listing-2.png') }}" alt="">
            <span class="listing-text">
                <h5 class="mt-3" style="font-weight:700;width:inherit" >4 bedroom Terrace with Bq at Ajah</h5>
                <p>
                    <span style="font-size:15px">Lagos, Nigeria </span><br>
                    <span style="font-size:20px;font-weight:bold"># 930,000</span>
                </p>
                <a href="" class="btn btn-info listing-anchor">View</a>
            </span>
        </div>
        <div class="pic">
            <img src="{{ asset('../assets/images/hero-images/listing-4.png') }}" alt="">
            <span class="listing-text">
                <h5 class="mt-3" style="font-weight:700;width:inherit" >4 bedroom Terrace with Bq at Ajah</h5>
                <p>
                    <span style="font-size:15px">Lagos, Nigeria </span><br>
                    <span style="font-size:20px;font-weight:bold"># 930,000</span>
                </p>
                <a href="" class="btn btn-info listing-anchor">View</a>
            </span>
        </div> --}}
        <div class="pic">
            <img src="{{ asset('../assets/images/hero-images/listing-3.png') }}" alt="">
            <span class="listing-text">
                <h5 class="mt-3" style="font-weight:700;width:inherit">4 bedroom Terrace with Bq at Ajah</h5>
                <p>
                    <span style="font-size:15px">Lagos, Nigeria </span><br>
                    <span style="font-size:20px;font-weight:bold"># 930,000</span>
                </p>
                <a href="" class="btn btn-info listing-anchor">View</a>
            </span>
        </div>
        {{-- <div class="pic">
            <img src="{{ asset('../assets/images/hero-images/listing-2.png') }}" alt="">
            <span class="listing-text">
                <h5 class="mt-3" style="font-weight:700;width:inherit" >4 bedroom Terrace with Bq at Ajah</h5>
                <p>
                    <span style="font-size:15px">Lagos, Nigeria </span><br>
                    <span style="font-size:20px;font-weight:bold"># 930,000</span>
                </p>
                <a href="" class="btn btn-info listing-anchor">View</a>
            </span>
        </div>
        <div class="pic">
            <img src="{{ asset('../assets/images/hero-images/listing-3.png') }}" alt="">
            <span class="listing-text">
                <h5 class="mt-3" style="font-weight:700;width:inherit" >4 bedroom Terrace with Bq at Ajah</h5>
                <p>
                    <span style="font-size:15px">Lagos, Nigeria </span><br>
                    <span style="font-size:20px;font-weight:bold"># 930,000</span>
                </p>
                <a href="" class="btn btn-info listing-anchor">View</a>
            </span>
        </div> --}}

        @foreach ($data['properties'] as $key => $item)
            <div class="pic">
                <img src="{{ asset($item['thumbnail']) }}" alt="">
                <span class="listing-text">
                    <h5 class="mt-3" style="font-weight:700;width:inherit">{{ $item['title'] }}</h5>
                    <p>
                        <span style="font-size:15px">{{ $item['area'] }}</span><br>
                        <span style="font-size:20px;font-weight:bold">{{ $item['initial_denomiation'] }}
                            {{ number_format($item['initial_pay']) }}</span>
                    </p>
                    <a href="{{ route('property.details', $item['id']) }}" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
        @endforeach
    </div>
</div>
