<div class="container res-similar-prop">
    <h3 style="color: black;font-weight:600">Similar Properties</h3>
    <div class="res-similar-properties">
        @foreach ($similarProperties as $item)
            <div class="res-similar-prop-items mt-4">
                <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->title }}">
                <p style="color: black">
                    <span style="font-weight:550;" class="truncate">{{ $item->title }}</span><br>
                    {{ $item->area }}
                </p>
                <a href="{{ route('property.details', $item->id) }}" class="btn res-prop-view"> View</a><br>
                <div class="res-price">
                    <span style="color: black">Price:
                        <b>
                            {{ $item->payment->initial_denomiation }}
                            {{ number_format($item->payment->initial_pay) }}
                        </b>
                    </span>
                    <span style="color: #394293" class="mr-2">{{ $item->payment->sequence }}</span>
                </div>
                <div class="comp-like-share">
                    <span style="font-weight:550">
                        <a href="#" onclick="addToCompare({{ $item->id }}); return false;">Compare</a>
                    </span>
                    <span>
                        <a href="#" onclick="addToFav({{ $item->id }}); return false;">
                            <i class="fa fa-heart ml-2" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>

                        <a href="#" id="shareLink" data-id="{{ $item->id }}">
                            <i class="fa fa-share-alt" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                    </span>
                </div>
            </div>
        @endforeach


    </div>
</div>
