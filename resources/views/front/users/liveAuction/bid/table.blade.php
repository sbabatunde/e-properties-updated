<div class="bid-table">
    <div class="p-table-header">
        <strong class="ml-3">
            Property Details
        </strong>
    </div>
    <div class="p-table-elements">
        <div class="row col-md-10 col-md-12">
            <div class="col-md-4 auct-th-val">
                <strong>
                    Property Type
                </strong>
            </div>
            <div class="col-md-6 auct-td-val">
                {{ $bidProperty->property->type->property_type }}
            </div>
        </div>
    </div>
    <div class="p-table-elements">
        <div class="row col-md-10 col-md-12">
            <div class="col-md-4 auct-th-val">
                <strong>
                    Property Status
                </strong>
            </div>
            <div class="col-md-6 auct-td-val">
                {{ $bidProperty->property->status }}
            </div>
        </div>
    </div>
    <div class="p-table-elements">
        <div class="row col-md-10 col-md-12">
            <div class="col-md-4 auct-th-val">
                <strong>
                    Essential Verified
                </strong>
            </div>
            <div class="col-md-6 auct-td-val">
                Yes
            </div>
        </div>
    </div>
    <div class="p-table-elements">
        <div class="row col-md-10 col-md-12">
            <div class="col-md-4 auct-th-val">
                <strong>
                    Property ID
                </strong>
            </div>
            <div class="col-md-6 auct-td-val">
                {{ $bidProperty->property->property_code }}

            </div>
        </div>
    </div>
    <div class="p-table-elements">
        <div class="row col-md-10 col-md-12">
            <div class="col-md-4 auct-th-val">
                <strong>
                    Landlord
                </strong>
            </div>
            <div class="col-md-6 auct-td-val">
                {{ $bidProperty->property->landlord }}
                Landlord in buiding
            </div>
        </div>
    </div>
    <div class="p-table-elements">
        <div class="row col-md-10 col-md-12">
            <div class="col-md-4 auct-th-val">
                <strong>
                    Payment Method
                </strong>
            </div>
            <div class="col-md-6 auct-td-val">
                <span>
                    {{ $bidProperty->property->payment->initial_denomination }}
                    {{ number_format($bidProperty->property->payment->initial_pay) }}
                </span>
                <span>
                    {{ $bidProperty->property->payment->initial_append }}

                </span>
            </div>
        </div>
    </div>
    <div class="p-table-elements">
        <div class="row col-md-10 col-md-12">
            <div class="col-md-4 auct-th-val">
                <strong>
                    Subsequent Payment
                </strong>
            </div>
            <div class="col-md-6 auct-td-val">
                <span class="mr-3">
                    {{ $bidProperty->property->payment->subsequent_denomination }}
                    {{ number_format($bidProperty->property->payment->subsequent_pay) }}
                </span>
                <span>
                    {{ $bidProperty->property->payment->subsequent_append }}

                </span>
            </div>
        </div>
    </div>
    <div class="p-table-elements">
        <div class="row col-md-10 col-md-12">
            <div class="col-md-4 auct-th-val">
                <strong>
                    Deed of Assignment
                </strong>
            </div>
            <div class="col-md-6 auct-td-val">
                {{ $bidProperty->property->deed_of_ass }}

            </div>
        </div>
    </div>
    <div class="p-table-elements">
        <div class="row col-md-10 col-md-12">
            <div class="col-md-4 auct-th-val">
                <strong>
                    Updated
                </strong>
            </div>
            <div class="col-md-6 auct-td-val">
                {{ Carbon\Carbon::parse($bidProperty->property->updated_at)->format('d/m/y') }}

            </div>
        </div>
    </div>
    <div class="p-table-elements">
        <div class="row col-md-10 col-md-12">
            <div class="col-md-4 auct-th-val">
                <strong>
                    Average Room Size
                </strong>
            </div>
            <div class="col-md-6 auct-td-val">
                {{ $bidProperty->property->avg_room_size }} m<sup>2</sup>

            </div>
        </div>
    </div>
    <div class="p-table-elements">
        <div class="row col-md-10 col-md-12">
            <div class="col-md-4 auct-th-val">
                <strong>
                    Location
                </strong>
            </div>
            <div class="col-md-6 auct-td-val">
                {{ $bidProperty->property->localty }}

            </div>
        </div>
    </div>
    <div class="p-table-elements">
        <div class="row col-md-10 col-md-12">
            <div class="col-md-4 auct-th-val">
                <strong>
                    Land Marks
                </strong>
            </div>
            <div class="col-md-6 auct-td-val">
                {{ $bidProperty->property->area }}

            </div>
        </div>
    </div>
    <div class="p-table-elements ">
        <div class="row col-md-10 col-md-12 pb-4 ">
            <div class="col-md-4 auct-th-val">
                <strong>
                    Address
                </strong>
            </div>
            <div class="col-md-6 auct-td-val">
                {{ $bidProperty->property->street }}
            </div>
        </div>
    </div>
</div>
