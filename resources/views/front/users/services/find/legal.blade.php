<div id="legalView" style="display: none">
    <!-- Service Category -->
    <div class="container mt-2">
        <div class="row col-12 d-flex justify-content-between">
            <div class="meet-header">
                <h5 style="font-weight: 700;font-size:x-large">
                    Legal
                </h5>
            </div>
        </div>
    </div>
    {{-- Services Provided Pictures --}}
    <div class="container">
        <div class="category-card-container mt-3">
            @foreach ($legal as $item)
                <a href="{{ route('services.type.all', $item->slug) }}">
                    <div class="category-card category">
                        <div class="image">
                            <img src="{{ asset($item->image) }}" alt="{{ asset($item->service) }}" style="width:100%;"
                                height="150" width="100">
                            <div class="category-card-sub ">
                                <div class="card-text mb-0">
                                    <h5>{{ $item->service }}</h5>
                                    <p>Available: <b>{{ count($item->providers) }}</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    {{-- End of Services Provided pictures --}}
</div>
