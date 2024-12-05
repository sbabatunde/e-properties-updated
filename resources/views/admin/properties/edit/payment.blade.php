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
            <option value="Monthly"
                {{ old('payment_mthd', $property->payment->sequence ?? '') == 'Monthly' ? 'selected' : '' }}>Monthly
            </option>
            <option value="Annually"
                {{ old('payment_mthd', $property->payment->sequence ?? '') == 'Annually' ? 'selected' : '' }}>
                Annually</option>
        </select>
        @error('payment_mthd')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-md-12 mt-2">
    <!-- Initial Payment -->
    <div class="form-group col-md-3">
        <input type="text" placeholder="Initial Payment" required
            style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="init_pay" value="{{ old('init_pay', $property->payment->initial_pay ?? '') }}">
        @error('init_pay')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Initial Denomination -->
    <div class="form-group col-md-4 pl-5">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px" required
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="init_denomination">
            <option disabled selected value="">Denomination</option>
            <option value="€"
                {{ old('init_denomination', $property->payment->initial_denomination ?? '') == '€' ? 'selected' : '' }}>
                EUR(€)</option>
            <option value="$"
                {{ old('init_denomination', $property->payment->initial_denomination ?? '') == '$' ? 'selected' : '' }}>
                USD($)</option>
            <option value="£"
                {{ old('init_denomination', $property->payment->initial_denomination ?? '') == '£' ? 'selected' : '' }}>
                GBP(£)</option>
            <option value="₦"
                {{ old('init_denomination', $property->payment->initial_denomination ?? '') == '₦' ? 'selected' : '' }}>
                Naira(₦)</option>
        </select>
        @error('init_denomination')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Initial Append -->
    <div class="form-group col-md-3 ml-4">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px" required
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="init_append">
            <option disabled selected value="">Append to</option>
            <option value="Monthly"
                {{ old('init_append', $property->payment->sequence ?? '') == 'Monthly' ? 'selected' : '' }}>
                Monthly
            </option>
            <option value="Annually"
                {{ old('init_append', $property->payment->sequence ?? '') == 'Annually' ? 'selected' : '' }}>
                Annually</option>
        </select>
        @error('init_append')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-md-12 mt-2">
    <!-- Subsequent Payment -->
    <div class="form-group col-md-3">
        <input type="text" placeholder="Subsequent Payment" required
            style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="subs_pay" value="{{ old('subs_pay', $property->payment->subsequent_pay ?? '') }}">
        @error('subs_pay')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Subsequent Denomination -->
    <div class="form-group col-md-4 pl-5">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px" required
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="subs_denomination">
            <option disabled selected value="">Denomination</option>
            <option value="€"
                {{ old('subs_denomination', $property->payment->subsequent_denomination ?? '') == '€' ? 'selected' : '' }}>
                EUR(€)</option>
            <option value="$"
                {{ old('subs_denomination', $property->payment->subsequent_denomination ?? '') == '$' ? 'selected' : '' }}>
                USD($)</option>
            <option value="£"
                {{ old('subs_denomination', $property->payment->subsequent_denomination ?? '') == '£' ? 'selected' : '' }}>
                GBP(£)</option>
            <option value="₦"
                {{ old('subs_denomination', $property->payment->subsequent_denomination ?? '') == '₦' ? 'selected' : '' }}>
                Naira(₦)</option>
        </select>
        @error('subs_denomination')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Subsequent Append -->
    <div class="form-group col-md-3 ml-4">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px" required
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="subs_append">
            <option disabled selected value="">Append to</option>
            <option value="Monthly"
                {{ old('subs_append', $property->payment->subsequent_append ?? '') == 'Monthly' ? 'selected' : '' }}>
                Monthly
            </option>
            <option value="Annually"
                {{ old('subs_append', $property->payment->subsequent_append ?? '') == 'Annually' ? 'selected' : '' }}>
                Annually</option>
        </select>
        @error('subs_append')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
