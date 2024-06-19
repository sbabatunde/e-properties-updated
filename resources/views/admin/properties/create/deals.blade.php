<div class="col-md-12 mt-2">
    <div class="col-md-12">
        <h5>
            <strong style="color:black">

                <label class="container">
                    <input type="checkbox" id="myDeal" value="Yes"
                        style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                        class="rounded-md shadow-sm border-gray-300 mt-1" onclick="propertyDeal()" name="deal">
                    <strong style="color: black;font-size:15px" class="mt-1 ml-5">
                        Make Property Deal?
                    </strong>
                    <span class="checkmark"></span>
                </label>
                @error('deal')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </strong>
        </h5>
    </div>
    <div id="PropDeal" style="display: none">
        <div class="form-group col-md-5">
            <label for="">Deal Start Date</label>
            <input type="date" placeholder="Start Date"
                style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="deal_start_date">
            @error('deal_start_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-5 ml-5">
            <label for="">Deal Start Time</label>
            <input type="time" placeholder="Start Time"
                style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="deal_start_time">
            @error('deal_start_time')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-5">
            <label for="">Deal End Date</label>
            <input type="date" placeholder="End Date" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="deal_end_date">
            @error('deal_end_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-5 ml-5">
            <label for="">Deal End Time</label>
            <input type="time" placeholder="End Time" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="deal_end_time">
            @error('deal_end_time')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-12">
            <h5>
                <strong style="color:black">
                    Deal Pricing Details
                </strong>
            </h5>
        </div>
        <div class="form-group col-md-4">
            <input type="number" placeholder="Amount" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="deal_price">
            @error('deal_price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <select type="text" placeholder="Denomination"
                style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="deal_denomination">
                <option disabled selected value="">Denomination</option>
                <option value="€">EUR(€)</option>
                <option value="$">USD($)</option>
                <option value="£">GBP(£)</option>
                <option value="₦">Naira(₦)</option>
            </select>
            @error('deal_denomination')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <select type="text" placeholder="Append to"
                style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="deal_append_to">
                <option disabled selected value="">Append to</option>
                <option>NA</option>
            </select>
            @error('deal_append_to')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
