<div class="tab-container">
    <div class="tab-button active" onclick="showTab('sales')">Sales</div>
    <div class="tab-button" onclick="showTab('rent')">Rent</div>
    {{-- <div class="tab-button" onclick="showTab('buy')">Buy</div> --}}
    <div class="tab-button" onclick="showTab('lets')">Lets</div>
    <div class="tab-button" onclick="showTab('land')">Land</div>
</div>

{{-- <input type="text" class="search-input" placeholder="Search...">
    <button class="search-button">Search</button> --}}

<form action="" enctype="multipart/form-data" method="POST">
    <div class="select-container">
        <div class="group-input">
            <div class="select-group">
                <input type="text" class="input" style="width: 70%" placeholder="Enter search keyword">
                <select id="level1-1" style="width: 30%">
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

<div id="sales" class="tab-content active">
    <h2>Sales Listings</h2>
    <p>Here you can find properties for sale.</p>
</div>

<div id="rent" class="tab-content">
    <h2>Rent Listings</h2>
    <p>Here you can find properties for rent.</p>
</div>

<div id="buy" class="tab-content">
    <h2>Buy Listings</h2>
    <p>Here you can find properties to buy.</p>
</div>
<div id="lets" class="tab-content">
    <h2>Lets Listings</h2>
    <p>Here you can find properties to Lets.</p>
</div>
<div id="land" class="tab-content">
    <h2>Land Listings</h2>
    <p>Here you can find properties to buy.</p>
</div>
