<div class="container res-similar-prop" style="margin-bottom: 70px">
    <h3 style="color: black;font-weight:600">Similar Properties</h3>
    <div class="res-similar-properties">
        @isset($similarProperties)
            @foreach ($similarProperties->take(3) as $property)
                <div class="res-similar-prop-items mt-4">
                    <img src="{{ asset($property->thumbnail) }}" alt="">
                    <p style="color: black">
                        <span style="font-weight:550;" class="truncate">{{ $property->title }}</span><br>
                        {{ $property->localty }}
                    </p>
                    <a href="{{ route('property.details', $property->id) }}" class="btn res-prop-view"> View</a><br>
                    <div class="res-price">
                        <span style="color: black">Price: <b>₦
                                {{ number_format($property->payment->initial_pay) }}</b></span>
                        <span style="color: #394293" class="mr-2">{{ $property->payment->sequence }}</span>
                    </div>
                    <div class="comp-like-share">
                        <span style="font-weight:550">
                            <a href="#" onclick="addToCompare({{ $property->id }}); return false;">Compare</a>
                        </span>
                        <span>
                            <a href="#" onclick="addToFav({{ $property->id }}); return false;">
                                <i class="fa fa-heart ml-2" style="color: rgb(131, 131, 131);font-size:25px"></i>
                            </a>

                            <a href="#" id="shareLink" data-id="{{ $property->id }}">
                                <i class="fa fa-share-alt" style="color: rgb(131, 131, 131);font-size:25px"></i>
                            </a>
                        </span>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>
</div>


<style>
    .left-item {
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.5s ease-in-out;
        position: absolute;
        left: 0;
        width: 100%;
    }

    .left-item.active {
        transform: translateX(0);
    }

    .left-item.hidden {
        transform: translateX(100%);
        visibility: hidden;
    }

    .toggle-button {
        position: absolute;
        bottom: 50%;
        rotate: 90deg;
        left: -10%;
        padding: 5px 15px;
        border: 1px solid black;
        font-weight: bold;
        border-radius: 7px 7px 0 0;
        transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out
    }

    .toggle-button:hover {
        cursor: pointer;
    }

    .toggle-button.compare {
        position: absolute;
        bottom: 50%;
        rotate: 90deg;
        width: fit-content;
        left: 94%;
    }
</style>
