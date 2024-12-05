<div class="col-md-12 mt-2">
    <h5>
        <strong style="color:black;font-size:17px;">
            Property Info
        </strong>
        <strong style="color: black;font-size:13px">
            (Please tick the available ones for your property)
        </strong>
    </h5>
</div>

<!-- C of O Checkbox -->
<div class="form-group col-md-12 flex align-item-center">
    <label class="container">
        <input type="checkbox" value="Yes" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="rounded-md shadow-sm border-gray-300 mt-1" name="C_of_O"
            {{ old('C_of_O', $property->C_of_O ?? '') == 'Yes' ? 'checked' : '' }}>
        <strong style="color: black;font-size:15px" class="ml-5">
            C of O
        </strong>
        <span class="checkmark"></span>
    </label>
    @error('C_of_O')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<!-- Survey Plan Checkbox -->
<div class="form-group col-md-12 flex align-item-center">
    <label class="container">
        <input type="checkbox" value="Yes" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="rounded-md shadow-sm border-gray-300 mt-1" name="survey_plan"
            {{ old('survey_plan', $property->survey_plan ?? '') == 'Yes' ? 'checked' : '' }}>
        <strong style="color: black;font-size:15px" class="mt-1 ml-5">
            Survey Plan
        </strong>
        <span class="checkmark"></span>
    </label>
    @error('survey_plan')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<!-- Deed of Assignment Checkbox -->
<div class="form-group col-md-12 flex align-item-center">
    <label class="container">
        <input type="checkbox" value="Yes" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="rounded-md shadow-sm border-gray-300 mt-1" name="deed_ass"
            {{ old('deed_ass', $property->deed_of_ass ?? '') == 'Yes' ? 'checked' : '' }}>
        <strong style="color: black;font-size:15px" class="mt-1 ml-5">
            Deed of Assignment
        </strong>
        <span class="checkmark"></span>
    </label>
    @error('deed_ass')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<!-- Land/Property Receipt Checkbox -->
<div class="form-group col-md-12 flex align-item-center">
    <label class="container">
        <input type="checkbox" value="Yes" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="rounded-md shadow-sm border-gray-300 mt-1" name="land_receipt"
            {{ old('land_receipt', $property->land_receipt ?? '') == 'Yes' ? 'checked' : '' }}>
        <strong style="color: black;font-size:15px" class="mt-1 ml-5">
            Land/Property Receipt
        </strong>
        <span class="checkmark"></span>
    </label>
    @error('land_receipt')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<!-- Grant of Probate Checkbox -->
<div class="form-group col-md-12 flex align-item-center">
    <label class="container">
        <input type="checkbox" value="Yes" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="rounded-md shadow-sm border-gray-300 mt-1" name="grant_prob"
            {{ old('grant_prob', $property->grant_of_prob ?? '') == 'Yes' ? 'checked' : '' }}>
        <strong style="color: black;font-size:15px" class="mt-1 ml-5">
            Grant of Probate
        </strong>
        <span class="checkmark"></span>
    </label>
    @error('grant_prob')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<!-- Deed of Mortgage Checkbox -->
<div class="form-group col-md-12 flex align-item-center">
    <label class="container">
        <input type="checkbox" value="Yes" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="rounded-md shadow-sm border-gray-300 mt-1" name="deed_mortgage"
            {{ old('deed_mortgage', $property->deed_of_mort ?? '') == 'Yes' ? 'checked' : '' }}>
        <strong style="color: black;font-size:15px" class="mt-1 ml-5">
            Deed of Mortgage
        </strong>
        <span class="checkmark"></span>
    </label>
    @error('deed_mortgage')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<!-- Deed of Gift Checkbox -->
<div class="form-group col-md-12 flex align-item-center">
    <label class="container">
        <input type="checkbox" value="Yes" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="rounded-md shadow-sm border-gray-300 mt-1" name="deed_gift"
            {{ old('deed_gift', $property->deed_of_gift ?? '') == 'Yes' ? 'checked' : '' }}>
        <strong style="color: black;font-size:15px" class="mt-1 ml-5">
            Deed of Gift
        </strong>
        <span class="checkmark"></span>
    </label>
    @error('deed_gift')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<!-- Property Document Checkbox -->
<div class="form-group col-md-12 flex align-item-center">
    <label class="container">
        <input type="checkbox" value="Yes" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="rounded-md shadow-sm border-gray-300 mt-1" name="property_doc"
            {{ old('property_doc', $property->property_doc ?? '') == 'Yes' ? 'checked' : '' }}>
        <strong style="color: black;font-size:15px" class="mt-1 ml-5">
            Property Document
        </strong>
        <span class="checkmark"></span>
    </label>
    @error('property_doc')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
