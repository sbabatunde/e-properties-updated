<div id= "residentialRents" style="display:none">
    <div class="container res-properties">
        <div class="res-properties">
            <div class="res-prop-items mt-4">
                <img src="{{ asset('../assets/images/houses/residential/res-1.png') }}" alt="">
                <p style="color: black">
                    <span style="font-weight:550;">3 Bedroom Flat</span><br>
                    Lagos, Nigeria
                </p>
                <a href="" class="btn res-prop-view"> View</a><br>
                <div class="res-price">
                    <span style="color: black">Price: <b># 1,930,000</b></span>
                    <span style="color: #394293" class="mr-2">Annually</span>
                </div>
                <div class="comp-like-share">
                    <span style="font-weight:550">
                        <a href="">Compare</a>
                    </span>
                    <span>
                        <a href="">
                            <i class="fa fa-heart ml-2" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-share-alt" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                    </span>
                </div>
            </div>
            <div class="res-prop-items mt-4">
                <img src="{{ asset('../assets/images/houses/residential/res-2.png') }}" alt="">
                <p style="color: black">
                    <span style="font-weight:550;">5 Bedroom 3 Bath</span><br>
                    Lagos, Nigeria
                </p>
                <a href="" class="btn res-prop-view"> View</a><br>
                <div class="res-price">
                    <span style="color: black">Price: <b># 1,930,000</b></span>
                    <span style="color: #394293" class="mr-2">Annually</span>
                </div>
                <div class="comp-like-share">
                    <span style="font-weight:550">
                        <a href="">Compare</a>
                    </span>
                    <span>
                        <a href="">
                            <i class="fa fa-heart ml-2" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-share-alt" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                    </span>
                </div>
            </div>
            <div class="res-prop-items mt-4">
                <img src="{{ asset('../assets/images/houses/residential/res-3.png') }}" alt="">
                <p style="color: black">
                    <span style="font-weight:550;">Student Apartment</span><br>
                    Lagos, Nigeria
                </p>
                <a href="" class="btn res-prop-view"> View</a><br>
                <div class="res-price">
                    <span style="color: black">Price: <b># 1,930,000</b></span>
                    <span style="color: #394293" class="mr-2">Annually</span>
                </div>
                <div class="comp-like-share">
                    <span style="font-weight:550">
                        <a href="">Compare</a>
                    </span>
                    <span>
                        <a href="">
                            <i class="fa fa-heart ml-2" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-share-alt" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                    </span>
                </div>
            </div>
            @foreach ($salesProperties as $item)
                <div class="res-prop-items mt-4">
                    <img src="{{ asset($item->thumbnail) }}" alt="">
                    <p style="color: black">
                        <span style="font-weight:550;">{{ $item->title }}</span><br>
                        {{ $item->area }}
                    </p>
                    <a href="{{ route('property.details', $item->id) }}" class="btn res-prop-view"> View</a><br>
                    <div class="res-price">
                        <span style="color: black">Price:
                            <b>
                                {{ $item->initial_denomiation }}
                                {{ number_format($item->initial_pay) }}
                            </b>
                        </span>
                        <span style="color: #394293" class="mr-2">Annually</span>
                    </div>
                    <div class="comp-like-share">
                        <span style="font-weight:550">
                            <a href="">Compare</a>
                        </span>
                        <span>
                            <a href="">
                                <i class="fa fa-heart ml-2" style="color: rgb(131, 131, 131);font-size:25px"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-share-alt" style="color: rgb(131, 131, 131);font-size:25px"></i>
                            </a>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
