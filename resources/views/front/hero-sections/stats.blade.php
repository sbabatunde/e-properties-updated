<div class="container">
    <div class="container mb-4 mt-5 d-flex justify-content-center">
        <h3><b>E-properties in Numbers</b></h3>
    </div>
    <div class="row d-flex justify-content-between">
        <div class="mb-2 text-center">
            <h3 style="color: blue"><b>{{ number_format($data['rented']) }}</b></h3>
            <a href="" style="color: black"><b>Rented Properties</b></a>
        </div>
        <div class="mb-2 text-center">
            <h3 style="color: blue"><b>{{ number_format($data['sold']) }}</b></h3>
            <a href="" style="color: black"><b>Sold Properties</b></a>
        </div>
        <div class="mb-2 text-center">
            <h3 style="color: red"><b>{{ number_format($data['liveAuction']) }}</b></h3>
            <a href="{{ route('user.live-auction') }}" style="color: red"><b>Ongoing Auction</b></a>
        </div>
        <div class="mb-2 text-center">
            <h3 style="color: blue"><b>{{ number_format($data['tenants']) }}</b></h3>
            <a href="" style="color: black"><b>Registered Tenants</b></a>
        </div>
        <div class="mb-2 text-center">
            <h3 style="color: blue"><b>{{ number_format($data['landlords']) }}</b></h3>
            <a href="{{ route('all.landlords') }}" style="color: black"><b>Registered Landlords</b></a>
        </div>
        {{-- <div class="mb-2 text-center">
            <h3 style="color: red"><b>{{ number_format($blacklist) }}</b></h3>
            <a href="{{ route('blacklist.all') }}" style="color: red"><b>Blacklist</b></a>
        </div> --}}
    </div>
</div>
