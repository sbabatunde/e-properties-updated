<div class="hero-category">
    <div class="hero-meet-expert">
        <h5 style="color: black">Category</h5>
        <a href="{{ route('category.all') }}" style="color: red;text-decoration:none;cursor: pointer;">
            <h5 style="color: red;">See more</h5>
        </a>
    </div>

    <div class="hero-sub-category">
        @foreach ($data['category'] as $key => $item)
            <a href="{{ route('property.by.type', $item->property_type_slug) }}">
                <div class="category-card category">
                    <div class="image">
                        <img src="{{ asset($item['image_path']) }}" alt="{{ asset($item['property_type']) }}"
                            style="width:100%;" height="150" width="100">
                        <div class="category-card-sub ">
                            <div class="card-text mb-0">
                                <h5>{{ $item['property_type'] }}</h5>
                                <p>Available: <b>{{ count($item['property']) }}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
