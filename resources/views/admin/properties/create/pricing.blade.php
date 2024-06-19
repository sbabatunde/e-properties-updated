<div class="col-md-11 mt-2">
    <div class="col-md-12">
        <h5>
            <strong style="color:black">
                Pricing Details
            </strong>
        </h5>
    </div>
    <div class="form-group col-md-4">
        <input type="number" placeholder="Starting price" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="starting_price">
        @error('starting_price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-4">
        <select type="text" placeholder="Denomination" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="auction_denomination">
            <option disabled selected value="">Denomination</option>
            <option value="€">EUR(€)</option>
            <option value="$">USD($)</option>
            <option value="£">GBP(£)</option>
            <option value="₦">Naira(₦)</option>
        </select>
        @error('auction_denomination')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-4">
        <select type="text" placeholder="Append to" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="auction_append_to">
            <option disabled selected value="">Append to</option>
            <option>Monthly</option>
            <option>Annually</option>
        </select>
        @error('auction_append_to')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
