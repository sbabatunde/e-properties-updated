<div class="col-md-11 mt-2">
    <div class="col-md-12">
        <h5>
            <strong style="color:black">
                Pricing Details
            </strong>
        </h5>
    </div>
    {{-- @dd($property) --}}
    <!-- Starting Price -->
    <div class="form-group col-md-4">
        <input type="number" placeholder="Starting price" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="starting_price" value="{{ old('starting_price', $property->auctionDetails->starting_price ?? '') }}">
        @error('starting_price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Denomination -->
    <div class="form-group col-md-4">
        <select name="auction_denomination" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option disabled selected value="">Denomination</option>
            <option value="€"
                {{ old('auction_denomination', $property->auctionDetails->denomination) == '€' ? 'selected' : '' }}>
                EUR(€)</option>
            <option value="$"
                {{ old('auction_denomination', $property->auctionDetails->denomination) == '$' ? 'selected' : '' }}>
                USD($)</option>
            <option value="£"
                {{ old('auction_denomination', $property->auctionDetails->denomination) == '£' ? 'selected' : '' }}>
                GBP(£)</option>
            <option value="₦"
                {{ old('auction_denomination', $property->auctionDetails->denomination) == '₦' ? 'selected' : '' }}>
                Naira(₦)</option>
        </select>
        @error('auction_denomination')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Append to -->
    <div class="form-group col-md-4">
        <select name="auction_append_to" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option disabled selected value="">Append to</option>
            <option value="Monthly"
                {{ old('auction_append_to', $property->auctionDetails->append) == 'Monthly' ? 'selected' : '' }}>
                Monthly</option>
            <option value="Annually"
                {{ old('auction_append_to', $property->auctionDetails->append) == 'Annually' ? 'selected' : '' }}>
                Annually</option>
        </select>
        @error('auction_append_to')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
