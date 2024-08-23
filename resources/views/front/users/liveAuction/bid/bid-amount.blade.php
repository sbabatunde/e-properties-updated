<form id="bidPlacement" class="form-group" action="{{ route('user.auction.place-bid.amount', $bidProperty->id) }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="placeBid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="placeBidLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="margin-top:20vh">
            <div class="modal-content" style="background:#ececee;">
                <div class="modal-header  w-full">

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group name2 col-md-12">
                            <div class="row">
                                <div class="col-3">
                                    <span><b>Days</b></span><br>
                                    <span><b>50</b></span>
                                </div>
                                <div class="col-3">
                                    <span><b>Hours</b></span><br>
                                    <span><b>20</b></span>
                                </div>
                                <div class="col-3">
                                    <span><b>Minutes</b></span><br>
                                    <span><b>12</b></span>
                                </div>
                                <div class="col-3">
                                    <button type="button" class="btn-close pl-2 pr-2 pt-1 pb-1" data-bs-dismiss="modal"
                                        aria-label="Close" style="cursor: pointer">
                                        <div><strong>X</strong></div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group name2 col-md-12">
                        <label for="exampleInputEmail1## Heading ##" class="formText"
                            style="font-size:16px"><strong>Enter your Bid: </strong></label>
                        <input type="text" name="amount" id="currency-field"
                            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            pattern="^\₦ \d{1,3}(,\d{3})*(\.\d+)?₦" data-type="currency" placeholder="₦"
                            style="border: 1px solid #2626ac">
                    </div>
                    <label class="form-group name2 col-md-12 mt-0">
                        <div class="bid-amount-modal mb-1">
                            <div>Min {{ $bidProperty->denomination }} {{ number_format($bidProperty->starting_price) }}
                            </div>
                            <div>
                                <span style="border: 1px solid black;border-radius:7px;padding:0.5rem 2rem">
                                    Current Bid
                                </span>
                                <span class="pl-1"> {{ $bidProperty->denomination }}
                                    {{ number_format($highestBid) }}</span>
                            </div>
                            <div>{{ $counts }} Bids</div>
                        </div>
                        <button type="submit" style="cursor: pointer" class="btn btn-place-bid mt-1">
                            Place a Bid
                        </button>
                    </label>
                </div>
                <div class="d-flex">
                    <hr style="width:50%;text-align:left;margin-left:0;margin-bottom:1px">
                    or
                    <hr style="width:50%;text-align:left;margin-right:0">
                </div>
            </div>
            {{-- <div class="modal-footer">
                <hr>
            </div> --}}
        </div>
    </div>
    </div>
</form>
