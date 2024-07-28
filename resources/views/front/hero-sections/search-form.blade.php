<div class="tab-container">
    <div class="tab-button active" onclick="showTab('Sale')">Sales</div>
    <div class="tab-button" onclick="showTab('Rent')">Rent</div>
    {{-- <div class="tab-button" onclick="showTab('buy')">Buy</div> --}}
    <div class="tab-button" onclick="showTab('Let')">Lets</div>
    <div class="tab-button" onclick="showTab('Land')">Land</div>
</div>

{{-- <input type="text" class="search-input" placeholder="Search...">
    <button class="search-button">Search</button> --}}

<form action="{{ route('property.search') }}" enctype="multipart/form-data" method="GET">
    @csrf
    <div class="select-container">
        <div class="group-input">
            <div class="select-group">
                <input type="text" class="input" name="keyword" style="width: 70%"
                    placeholder="Enter search keyword">
                <select id="level1-1" name="area" style="width: 30%">
                    <option value="">Area</option>
                    @foreach ($data['localty'] as $item)
                        <option value="{{ $item->localty }}">
                            {{ $item->localty }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="select-group">
                <div class="level2-group">
                    <select id="level2-1" name="min_price">
                        <option value=""> Minimum Price </option>
                        @foreach ($data['minPrice'] as $item)
                            <option value="{{ $item->initial_pay }}">
                                {{ $item->initial_denomination }}
                                {{ $item->initial_pay }}
                            </option>
                        @endforeach
                    </select>
                    <select id="level2-2" name="max_price">
                        <option value="">Maximum Price</option>
                        @foreach ($data['maxPrice'] as $item)
                            <option value="{{ $item->initial_pay }}">
                                {{ $item->initial_denomination }}
                                {{ $item->initial_pay }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <input type="text" hidden id="searchType" name="type" value="sale">

        </div>
        <div class="group-input">
            <div class="select-group">
                <select id="level2-1" name="min_bedroom">
                    <option value="">Minimum Bedroom</option>
                    @foreach ($data['minBedroom'] as $item)
                        <option value="{{ $item->bedrooms }}">
                            {{ $item->bedrooms }}
                        </option>
                    @endforeach
                </select>
                <select id="level2-2" name="max_bedroom">
                    <option value="">Maximum Bedroom</option>
                    @foreach ($data['maxBedroom'] as $item)
                        <option value="{{ $item->bedrooms }}">
                            {{ $item->bedrooms }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="select-group">
                <div class="level2-group">
                    <select id="level2-1" name="furnished">
                        <option value=""> Furnished </option>
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                    </select>
                    <select id="level2-2" name="p_type">
                        <option value="">Property Type</option>
                        @foreach ($data['type'] as $item)
                            <option value="{{ $item->id }}">
                                {{ $item->property_type }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <input type="hidden" id>
        </div>
        <div class="search">
            <button type="submit" class="search-button">Search</button>
        </div>

    </div>
</form>
