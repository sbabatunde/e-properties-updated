<div class="col-lg-8 col-md-12 ">
    <div>
      <div class="property-table">
          <div class="p-table-header">
             <strong class="ml-3">
                  Property Details
              </strong> 
          </div>
        <div class="p-table-elements">
            <div class="row col-md-10 col-md-12">
                <div class="col-md-4">
                   <strong>
                        Property Type
                    </strong>
                </div>
                <div class="col-md-6">
                    Apartment
                </div>
            </div>
        </div>
        <div class="p-table-elements">
            <div class="row col-md-10 col-md-12">
                <div class="col-md-4">
                   <strong>
                        Property Status
                    </strong>
                </div>
                <div class="col-md-6">
                    {{$property->type}}
                </div>
            </div>
        </div>
        <div class="p-table-elements">
            <div class="row col-md-10 col-md-12">
                <div class="col-md-4">
                   <strong>
                        Essential Verified
                    </strong>
                </div>
                <div class="col-md-6">
                    Yes
                </div>
            </div>
        </div>
        <div class="p-table-elements">
            <div class="row col-md-10 col-md-12">
                <div class="col-md-4">
                   <strong>
                        Property ID
                    </strong>
                </div>
                <div class="col-md-6">
                    EP3456
                </div>
            </div>
        </div>
        <div class="p-table-elements">
            <div class="row col-md-10 col-md-12">
                <div class="col-md-4">
                   <strong>
                        Landlord
                    </strong>
                </div>
                <div class="col-md-6">
                    No Landlord in buiding
                </div>
            </div>
        </div>
        <div class="p-table-elements">
            <div class="row col-md-10 col-md-12">
                <div class="col-md-4">
                   <strong>
                        Payment Method
                    </strong>
                </div>
                <div class="col-md-6">
                    <span>
                    

                        ₦ {{number_format($property->initial_pay)}}
                    </span>
                    <span>
                        {{$property->sequence}}
                    </span>
                </div>
            </div>
        </div>
        <div class="p-table-elements">
            <div class="row col-md-10 col-md-12">
                <div class="col-md-4">
                   <strong>
                        Subsequent Payment
                    </strong>
                </div>
                <div class="col-md-6">
                    <span class="mr-3">
                        ₦ {{ number_format($property->initial_pay)}}
                    </span>
                    <span>
                        {{-- {{$property->subsequent_pay}} --}}
                    </span>
                </div>
            </div>
        </div>
        <div class="p-table-elements">
            <div class="row col-md-10 col-md-12">
                <div class="col-md-4">
                   <strong>
                        Deed of Assignment
                    </strong>
                </div>
                <div class="col-md-6">
                    {{$property->deed_of_ass}}
                </div>
            </div>
        </div>
        <div class="p-table-elements">
            <div class="row col-md-10 col-md-12">
                <div class="col-md-4">
                   <strong>
                        Updated
                    </strong>
                </div>
                <div class="col-md-6">
                    {{-- 20/10/2023 --}}
                    {{$property->updated_at}}
                </div>
            </div>
        </div>
        <div class="p-table-elements">
            <div class="row col-md-10 col-md-12">
                <div class="col-md-4">
                   <strong>
                        Average Room Size
                    </strong>
                </div>
                <div class="col-md-6">
                    {{-- 2100 sqm --}}
                    NA
                </div>
            </div>
        </div>
        <div class="p-table-elements">
            <div class="row col-md-10 col-md-12">
                <div class="col-md-4">
                   <strong>
                        Location
                    </strong>
                </div>
                <div class="col-md-6">
                    {{$property->localty}}
                    {{-- Ikeja, Lagos State --}}
                </div>
            </div>
        </div>
        <div class="p-table-elements">
            <div class="row col-md-10 col-md-12">
                <div class="col-md-4">
                   <strong>
                        Land Marks
                    </strong>
                </div>
                <div class="col-md-6">
                    {{$property->area}}
                    {{-- Ikeja Shoprite --}}
                </div>
            </div>
        </div>
        <div class="p-table-elements ">
            <div class="row col-md-10 col-md-12 pb-4 ">
                <div class="col-md-4">
                   <strong>
                        Address
                    </strong>
                </div>
                <div class="col-md-6">
                    {{$property->street}}
                    
                </div>
            </div>
        </div>
      </div>
    </div>