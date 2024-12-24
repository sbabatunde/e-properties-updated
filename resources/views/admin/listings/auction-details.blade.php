<div class="modal fade" id="viewAuctionDetails{{ $auction->property->id }}" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="auctionDetailsLabel" aria-hidden="true">
    <div class="post-form modal-dialog modal-lg" style="margin-top:20vh">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="auctionDetailsLabel">Auction Details</h5>
                <button type="button" class="btn-close pt-1 pb-1 pr-2 pl-2" data-bs-dismiss="modal"
                    aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Property Details Section -->
                    <div class="col-12">
                        <h5 class="mb-3">Property Details</h5>
                        @if (!empty($auction->property->thumbnail))
                            <div class="text-center mb-3">
                                <img src="{{ asset($auction->property->thumbnail) ?? $auction->property->thumbnail }}"
                                    alt="Property Thumbnail" class="img-fluid rounded-circle"
                                    style="max-width: 200px; height: 200px;">
                            </div>
                        @else
                            <p class="text-center">No thumbnail available for this property.</p>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <p><strong>Property Type:</strong> {{ $auction->property->type->property_type ?? 'N/A' }}</p>
                        <p><strong>Property Status:</strong> {{ $auction->property->status ?? 'N/A' }}</p>
                        <p><strong>Property ID:</strong> {{ $auction->property->property_code ?? 'N/A' }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Location:</strong> {{ $auction->property->localty ?? 'N/A' }}</p>
                        <p><strong>Address:</strong> {{ $auction->property->street ?? 'N/A' }}</p>
                    </div>

                    <!-- Auction Details Section -->
                    <div class="col-12 mt-4">
                        <h5 class="mb-3">Auction Details</h5>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Auction Start:</strong>
                            {{ \Carbon\Carbon::parse($auction->start_date . ' ' . $auction->start_time)->format('g:i A, F j, Y') }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Auction End:</strong>
                            {{ \Carbon\Carbon::parse($auction->end_date . ' ' . $auction->end_time)->format('g:i A, F j, Y') }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Starting Price:</strong> {{ $auction->denomination ?? '₦' }}
                            {{ number_format($auction->starting_price, 2) ?? 'N/A' }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Status:</strong> {{ $auction->status ?? 'N/A' }}</p>
                    </div>

                    <!-- Bids Details Section -->
                    <div class="col-12 mt-4">
                        <h5 class="mb-3">Bids</h5>
                    </div>
                    <div class="col-12">
                        @if ($auction->auctionBid->isNotEmpty())
                            <ul class="list-group">
                                @foreach ($auction->auctionBid as $bid)
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><strong>Bidder:</strong> {{ $bid->bidder->firstname ?? 'N/A' }}
                                                    {{ $bid->bidder->lastname ?? 'N/A' }}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><strong>Bid Amount:</strong> {{ $auction->denomination ?? '₦' }}
                                                    {{ number_format($bid->bid_amount, 2) ?? 'N/A' }}</p>
                                            </div>
                                            <div class="col-md-12">
                                                <p><strong>Bid Time:</strong>
                                                    {{ $bid->created_at->format('d/m/Y  g:i A') ?? 'N/A' }}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No bids available for this auction.</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="post-footer">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<style>
    .modal-content,
    .list-group-item {
        color: black;
        background-color: #edeef5;
    }

    .modal-header,
    .modal-footer {
        border-bottom: 1px solid #ddd;
    }

    .post-footer {
        padding: 1rem;
        text-align: center;
    }

    .list-group-item {
        background-color: #f8f9fa !important;
    }

    p {
        font-size: 15px;
    }

    h5 {
        font-size: 18px;
        font-weight: 600;
    }

    .text-center {
        text-align: center;
    }

    .btn-outline-primary {
        color: #007bff;
        border-color: #007bff;
    }

    .btn-outline-primary:hover {
        background-color: #007bff;
        color: white;
    }
</style>
