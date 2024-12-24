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
                        {{ $property->type->property_type }}

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
                        {{ $property->status }}
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
                        {{ $property->property_code }}
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
                        {{ $property->landlord }} Landlord in buiding
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
                            {{ $property->payment->sequence }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="p-table-elements">
                <div class="row col-md-10 col-md-12">
                    <div class="col-md-4">
                        <strong>
                            Initial Payment
                        </strong>
                    </div>
                    <div class="col-md-6">
                        <span class="mr-3">
                            ₦ {{ number_format($property->payment->initial_pay) }}
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
                            Subsequent Payment
                        </strong>
                    </div>
                    <div class="col-md-6">
                        <span class="mr-3">
                            ₦ {{ number_format($property->payment->subsequent_pay) }}
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
                            Property Deal?
                        </strong>
                    </div>
                    <div class="col-md-6">
                        {{ $property->deal }}
                    </div>
                </div>
            </div>
            @if ($property->deal === 'Yes')
                <div class="p-table-elements">
                    <div class="row col-md-10 col-md-12">
                        <div class="col-md-4">
                            <strong>
                                Deal Price
                            </strong>
                        </div>
                        <div class="col-md-6">
                            {{ $property->deals->denomination }}
                            {{ number_format($property->deals->deal_price, 2) }}
                        </div>
                    </div>
                </div>
            @endif

            <div class="p-table-elements">
                <div class="row col-md-10 col-md-12">
                    <div class="col-md-4">
                        <strong>
                            Deed of Assignment
                        </strong>
                    </div>
                    <div class="col-md-6">
                        {{ $property->deed_of_ass }}
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
                        {{ Carbon\Carbon::parse($property->updated_at)->format('d/m/y') }}
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
                        {{ $property->avg_room_size }} m<sup>2</sup>
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
                        {{ $property->localty }}
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
                        {{ $property->area }}
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
                        {{ $property->street }}

                    </div>
                </div>
            </div>
        </div>
    </div>
