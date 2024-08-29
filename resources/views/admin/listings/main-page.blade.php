@extends('admin.index')
@section('content')
    <!-- page content -->
    <div class="post-prop-header">
        <div class="prop-form-header">
            <div class="post-prop">
                <h3>
                    <strong style="color: black">
                        My Listings
                    </strong>
                </h3>
            </div>
            @include('admin.user.details')
        </div>
    </div>
    <div class="profile-body list-body">
        <div class="all-group-btn listing-search">
            <button onclick="salesL()" class="active-btn-group">
                <strong>
                    Sales ( {{ count($sales) }} )
                </strong>
            </button>
            <button onclick="rentsL()" class="active-btn-group">
                <strong>
                    Rents ({{ count($rents) }} )
                </strong>
            </button>
            <button onclick="shortletsL()" class="active-btn-group">
                <strong>
                    Short Lets({{ count($lets) }} )
                </strong>
            </button>
            <button onclick="landL()" class="active-btn-group">
                <strong>
                    Land ({{ count($lands) }} )
                </strong>
            </button>
        </div>
        @include('admin.listings.search.rents')
        @include('admin.listings.search.sales')
        @include('admin.listings.search.shortlets')
        @include('admin.listings.search.land')

        <div class="listing-result">
            @if (count($myListings) < 1)
                <input type="text" readonly placeholder="List is empty"
                    style="border: 1px solid rgb(224, 223, 223);border-radius:7px;
                background-color:#eff0ff;font-weight:bold"
                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            @endif

        </div>
    </div>

    @foreach ($myListings as $item)
        <div class="listing-items">
            <div class="listing-picture">
                <img src="{{ $item->thumbnail ?? asset($item->thumbnail) }}" alt="{{ $item->title }}" width="100">
                <div class="price">
                    <span class="pb-3" style="font-size: medium"><b style="font-size: large">{{ $item->title }}</b> <br>
                        <span>
                            <i class="fa fa-location"></i>
                            {{ $item->address }}
                        </span>
                    </span>
                    <span>
                        <b style="color:black;font-size:1rem;border: 1px solid black;border-height:20px;padding:3px">
                            <i class="fa fa-tag"></i> Price
                        </b>
                        <span style="font-size: x-large;margin-left:1rem">
                            {{ $item->payment->initial_denomination ?? '' }}
                            {{ number_format($item->payment->initial_pay ?? '') }}
                        </span>
                        <span>
                </div>
            </div>

            <div class="interactions">
                <div class="total">
                    <i class="fa fa-finger"></i>
                    Total Interactions
                </div>
                <div class="statistics">
                    <div>
                        <span class="span-1">
                            <i class="fa fa-eye "></i>
                            Views
                        </span>
                        <span class="span-2">{{ count($item->views) }}</span>
                    </div>
                    <div>
                        <span class="span-1">
                            <i class="fa fa-heart "></i>
                            Likes
                        </span>
                        <span class="span-2"> {{ count($item->likes) }}</span>
                    </div>
                    <div>
                        <span class="span-1">
                            <i class="fa fa-share-alt"></i>
                            Share
                        </span>
                        <span class="span-2"> {{ count($item->shares) }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <p class="pt-4" style="font-size:1.5rem">
        @if (count($myListings) > 0)
            <div class="pagination mt-5 ml-2 d-flex justify-content-center">
                {{ $myListings->links('vendor.pagination.custom') }}
            </div>
        @endif
    </p>

    <!-- /page content -->
@stop
