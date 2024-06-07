<div class="col-md-12 mt-2">
    <h5>
    <strong style="color:black;font-size:17px;">
        Property Info 
    </strong>
    <strong style="color: black;font-size:13px">
        (Please thick the available once for your property)
    </strong>  
    </h5>
</div>
<div class="form-group col-md-12 flex align-item-center">
      <label class="container">
        <input type="checkbox" value="Yes" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
        class="rounded-md shadow-sm border-gray-300 mt-1"
        name="C_of_O">
        <strong style="color: black;font-size:15px" class="ml-5">
            C of O
        </strong> 
        <span class="checkmark"></span>
      </label>
      @error("C_of_O")
      <span class="text-danger">{{$message}}</span>
      @enderror
</div>

<div class="form-group col-md-12 flex align-item-center">
    <label class="container">
        <input type="checkbox" value="Yes"  style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
        class="rounded-md shadow-sm border-gray-300 mt-1"
        name="survey_plan">
        <strong style="color: black;font-size:15px" class="mt-1 ml-5">
            Survey Plan
        </strong> 
        <span class="checkmark"></span>
      </label>
    @error("survey_plan")
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group col-md-12 flex align-item-center">
    <label class="container">
        <input type="checkbox" value="Yes"  style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
        class="rounded-md shadow-sm border-gray-300 mt-1"
        name="deed_ass">
        <strong style="color: black;font-size:15px" class="mt-1 ml-5">
        Deed of Assignment
        </strong> 
        <span class="checkmark"></span>
    </label>
    @error("deed_ass")
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group col-md-12 flex align-item-center">
    <label class="container">
        <input type="checkbox"  value="Yes" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
        class="rounded-md shadow-sm border-gray-300 mt-1"
        name="land_receipt">
        <strong style="color: black;font-size:15px" class="mt-1 ml-5">
        Land/Property Reciept
        </strong> 
        <span class="checkmark"></span>
    </label>
    @error("land_receipt")
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group col-md-12 flex align-item-center">
    <label class="container">
        <input type="checkbox" value="Yes"  style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
        class="rounded-md shadow-sm border-gray-300 mt-1"
        name="grant_prob">
        <strong style="color: black;font-size:15px" class="mt-1 ml-5">
        Grant of Probate
        </strong> 
        <span class="checkmark"></span>
    </label>
    @error("grant_prob")
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group col-md-12 flex align-item-center">
    <label class="container">
        <input type="checkbox" value="Yes"  style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
        class="rounded-md shadow-sm border-gray-300 mt-1"
        name="deed_mortgage">
        <strong style="color: black;font-size:15px" class="mt-1 ml-5">
        Deed of Mortgage
        </strong> 
        <span class="checkmark"></span>
    </label>
    @error("deed_mortgage")
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group col-md-12 flex align-item-center">
    <label class="container">
        <input type="checkbox" value="Yes" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
        class="rounded-md shadow-sm border-gray-300 mt-1"
        name="deed_gift">
        <strong style="color: black;font-size:15px" class="mt-1 ml-5">
        Deed of Gift
        </strong> 
        <span class="checkmark"></span>
    </label>
    @error("deed_gift")
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group col-md-12 flex align-item-center">
    <label class="container">
        <input type="checkbox" value="Yes"  style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
        class="rounded-md shadow-sm border-gray-300 mt-1"
        name="property_doc">
        <strong style="color: black;font-size:15px" class="mt-1 ml-5">
        Property Document
        </strong> 
        <span class="checkmark"></span>
    </label>
    @error("property_doc")
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
