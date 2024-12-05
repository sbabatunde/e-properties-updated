<div class="col-md-12 mt-2">
    <div class="col-md-12">
        <h5>
            <strong style="color:black">
                <label class="container">
                    <input type="checkbox" id="myDeal" value="Yes"
                        style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                        class="rounded-md shadow-sm border-gray-300 mt-1" onclick="propertyDeal()" name="deal"
                        {{ old('deal', $property->deals ? 'checked' : '') }}>
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
    <div id="PropDeal" style="{{ old('deal', $property->deal ? 'display: block;' : 'display: none;') }}">
        <!-- Deal Start Date -->
        <div class="form-group col-md-5">
            <label for="">Deal Start Date</label>
            <input type="date" placeholder="Start Date"
                style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="deal_start_date" value="{{ old('deal_start_date', $property->dealsDetails->start_date ?? '') }}">
            @error('deal_start_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Deal Start Time -->
        <div class="form-group col-md-5 ml-5">
            <label for="">Deal Start Time</label>
            <input type="time" placeholder="Start Time"
                style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="deal_start_time" value="{{ old('deal_start_time', $property->dealsDetails->start_time ?? '') }}">
            @error('deal_start_time')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Deal End Date -->
        <div class="form-group col-md-5">
            <label for="">Deal End Date</label>
            <input type="date" placeholder="End Date" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="deal_end_date" value="{{ old('deal_end_date', $property->dealsDetails->end_date ?? '') }}">
            @error('deal_end_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Deal End Time -->
        <div class="form-group col-md-5 ml-5">
            <label for="">Deal End Time</label>
            <input type="time" placeholder="End Time" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="deal_end_time" value="{{ old('deal_end_time', $property->dealsDetails->end_time ?? '') }}">
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

        <!-- Deal Price -->
        <div class="form-group col-md-4">
            <input type="number" placeholder="Amount" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="deal_price" value="{{ old('deal_price', $property->dealsDetails->deal_price ?? '') }}">
            @error('deal_price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Denomination -->
        <div class="form-group col-md-4">
            <select name="deal_denomination" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option disabled selected value="">Denomination</option>
                <option value="€"
                    {{ old('deal_denomination', $property->dealsDetails->denomination ?? '') == '€' ? 'selected' : '' }}>
                    EUR(€)</option>
                <option value="$"
                    {{ old('deal_denomination', $property->dealsDetails->denomination ?? '') == '$' ? 'selected' : '' }}>
                    USD($)</option>
                <option value="£"
                    {{ old('deal_denomination', $property->dealsDetails->denomination ?? '') == '£' ? 'selected' : '' }}>
                    GBP(£)</option>
                <option value="₦"
                    {{ old('deal_denomination', $property->dealsDetails->denomination ?? '') == '₦' ? 'selected' : '' }}>
                    Naira(₦)</option>
            </select>
            @error('deal_denomination')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Append To -->
        <div class="form-group col-md-4">
            <select name="deal_append_to" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option disabled selected value="">Append to</option>
                <option value="Monthly"
                    {{ old('deal_append_to', $property->dealsDetails->append ?? '') == 'Monthly' ? 'selected' : '' }}>
                    Monthly
                </option>
                <option value="Annually"
                    {{ old('deal_append_to', $property->dealsDetails->append ?? '') == 'Annually' ? 'selected' : '' }}>
                    Annually</option>
            </select>
            @error('deal_append_to')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
