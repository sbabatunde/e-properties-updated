<div class="container res-similar-prop" style="margin-bottom: 70px">
    <h3 style="color: black;font-weight:600">Similar Properties</h3>
    <div class="res-similar-properties">
        @isset($similarProperties)
            @foreach ($similarProperties as $property)
                <div class="res-similar-prop-items mt-4">
                    <img src="{{ asset($property->thumbnail) }}" alt="">
                    <p style="color: black">
                        <span style="font-weight:550;" class="truncate">{{ $property->title }}</span><br>
                        {{ $property->localty }}
                    </p>
                    <a href="{{ route('property.details', $property->id) }}" class="btn res-prop-view"> View</a><br>
                    <div class="res-price">
                        <span style="color: black">Price: <b>₦ {{ number_format($property->initial_pay) }}</b></span>
                        <span style="color: #394293" class="mr-2">{{ $property->sequence }}</span>
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
        @endisset
    </div>
</div>
