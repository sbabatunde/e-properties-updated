<div id= "TypeRent" style="display:none">
    <div class="container res-properties">
        @foreach ($propertiesRents as $item)
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
                            {{ $item->payment->initial_denomination }}
                            {{ number_format($item->payment->initial_pay) }}
                        </b>
                    </span>
                    <span style="color: #394293" class="mr-2">{{ $item->payment->sequence }}</span>
                </div>
                <div class="comp-like-share">
                    <span style="font-weight:550">
                        <a aria-label="Add To Compare" class="action-btn" id="{{ $item->id }}"
                            onclick="addToCompare(this.id)">Compare</a>
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
