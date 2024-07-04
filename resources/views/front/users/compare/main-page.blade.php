@extends('layouts.front.login-site')
@section('content')
    <div style="background:#394293;height:30vh">
    </div>

    <div class="compare-header">
        <div class="comp-add-more">
            <div class="add-comp border-md shadow-gray-400 shadow-md" style="color: brown;font-size:50px;text-align:center">
                <span class="comp-plus mb-2" style="font-size: 20px;color:brown">&#10133</span>
            </div>
            <div style="color: black;font-weight:550;margin-top:20px;font-size:18px" class="text-center">Add More</div>
        </div>

        @foreach ($compareList as $item)
            <div class="comp-prop-1">
                <div class="comp-image-box">
                    <img class="comp-img" src="{{ asset($item->property->thumbnail) }}" alt="">
                    <span class="comp-price">
                        Price:
                        <span style="font:bolder;color:#fff">
                            {{ $item->payment->initial_denomination }} {{ $item->payment->initial_pay }}
                        </span>
                    </span>
                    <i class="fa fa-user comp-user-icon"></i>
                </div>
                <div class="comp-desc-box">
                    <p>
                        <span> {{ $item->property->title }}</span><br>
                        {{ $item->property->area }}
                    </p>
                    <a href="{{ route('property.details', $item->property->id) }}">View</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="comp-tab-body">
        <div class="compare-table">
            <div class="commp-row">
                <div class="comp-cell head">Property ID</div>
                <div class="comp-cell head">Price</div>
                <div class="comp-cell head">Payment Method</div>
                <div class="comp-cell head">Status</div>
                <div class="comp-cell head">Region</div>
                <div class="comp-cell head">Neighborhood</div>
                <div class="comp-cell head">Date Posted</div>
                <div class="comp-cell head">Documentation</div>
                <div class="comp-cell head">Essential Verification</div>
            </div>
            @foreach ($compareList as $item)
                <div class="commp-row">
                    <div class="comp-cell">{{ $item->property->property_code }}</div>
                    <div class="comp-cell">
                        {{ $item->payment->initial_denomination }}
                        {{ $item->payment->initial_pay }}
                    </div>
                    <div class="comp-cell">{{ $item->payment->sequence }}</div>
                    <div class="comp-cell">For {{ $item->property->status }}</div>
                    <div class="comp-cell">{{ $item->property->area }}</div>
                    <div class="comp-cell">{{ $item->property->localty }}</div>
                    <div class="comp-cell">{{ Carbon\Carbon::parse($item->property->created_at)->format('d/m/Y') }}</div>
                    <div class="comp-cell">100% Complete</div>
                    <div class="comp-cell">Verified</div>
                </div>
            @endforeach

            {{-- <div class="commp-row">
                <div class="comp-cell">EP5467</div>
                <div class="comp-cell"># 1,925,000</div>
                <div class="comp-cell">6 Months</div>
                <div class="comp-cell">For Rent</div>
                <div class="comp-cell">Ikeja Lagos</div>
                <div class="comp-cell">Underbridge</div>
                <div class="comp-cell">3/11/2023</div>
                <div class="comp-cell">70% Complete</div>
                <div class="comp-cell">Not Verified</div>
            </div> --}}
        </div>
    </div>
@endsection
