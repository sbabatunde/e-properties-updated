<div class="col-md-12 mt-2">
    <div class="col-md-3">
        <h5>
            <strong style="color:black;font-size:15px;">
                Select Payment Methods
            </strong>
        </h5>
    </div>
    <div class="col-md-2">
        <select type="text" placeholder="Payment Method" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="payment_mthd">
            <option selected>Monthly</option>
            <option>Annually</option>
        </select>
        @error('payment_mthd')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="col-md-12 mt-2">
    <div class="form-group col-md-3">
        <input type="text" placeholder="Initial Payment"
            style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="init_pay">
        @error('init_pay')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group col-md-4 pl-5">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:rin3g focus:ring-indigo-200 focus:ring-opacity-50"
            name="init_denomination">
            <option disabled selected value="">Denomination</option>
            <option value="€">EUR(€)</option>
            <option value="$">USD($)</option>
            <option value="£">GBP(£)</option>
            <option value="₦">Naira(₦)</option>
        </select>
        @error('init_denomination')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group col-md-3 ml-4">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="init_append">
            <option disabled selected value="">Append to</option>
            <option>Monthly</option>
            <option>Annually</option>
        </select>
        @error('init_append')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="col-md-12 mt-2">
    <div class="form-group col-md-3">
        <input type="text" placeholder="Subsequent Payment"
            style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="subs_pay">
        @error('subs_pay')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-4 pl-5">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:rin3g focus:ring-indigo-200 focus:ring-opacity-50"
            name="subs_denomination">
            <option disabled selected value="">Denomination</option>
            <option value="€">EUR(€)</option>
            <option value="$">USD($)</option>
            <option value="£">GBP(£)</option>
            <option value="₦">Naira(₦)</option>
        </select>
        @error('subs_denomination')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-3 ml-4">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="subs_append">
            <option disabled selected value="">Append to</option>
            <option>Monthly</option>
            <option>Annually</option>
        </select>
        @error('subs_append')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
</div>
