<div id= "residentialSales" style="display:block">
    <div class="container res-properties">
        @foreach ($salesProperties as $item)
            <div class="res-prop-items mt-4">
                <img src="{{ asset($item->thumbnail) ?? $item->thumbnail }}" alt="">
                <p style="color: black;font-size;4vmin">
                    <span style="font-weight:550;">{{ $item->title }}</span><br>
                    {{ $item->area }}
                </p>
                <a href="{{ route('property.details', $item->id) }}" class="btn res-prop-view"> View</a><br>
                <div class="res-price">
                    <span style="color: black">Price:
                        @if (Route::is('properties.deals.all'))
                            <span class="old-price" style="text-decoration: line-through; color: grey;">
                                {{ $item->payment->initial_denomination }}
                                {{ number_format($item->payment->initial_pay, 2) }}
                            </span>
                            <br>
                            <b
                                class="ml-5">{{ $item->deals->denomination }}{{ number_format($item->deals->deal_price, 2) }}</b>
                        @else
                            <b>
                                {{ $item->payment->initial_denomination }}
                                {{ number_format($item->payment->initial_pay) }}
                            </b>
                        @endif

                    </span>
                    <span style="color: #394293" class="mr-2">{{ $item->payment->sequence }}</span>
                </div>
                <div class="comp-like-share">
                    <span style="font-weight:550">
                        <a href="#" onclick="addToCompare({{ $item->id }}); return false;">Compare</a>
                    </span>
                    <span>
                        <a href="#" onclick="addToFav({{ $item->id }}); return false;">
                            <i class="fa fa-heart ml-2" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>

                        {{-- <a href="#" onclick="showShareModal(event);checkAuthMessage();" id="shareLink"
                            data-id="{{ $item->id }}">
                            <i class="fa fa-share-alt" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a> --}}
                        <a href="#"
                            onclick="showShareModal({{ $item->id }}); return false;checkAuthMessage();">
                            <i class="fa fa-share-alt" style="color: rgb(131, 131, 131); font-size: 25px;"></i>
                        </a>

                    </span>
                </div>
            </div>
        @endforeach
    </div>

    @if (count($salesProperties) > 0)
        <div class="pagination mt-5 ml-2">
            {{ $salesProperties->links('vendor.pagination.custom') }}
        </div>
    @endif

</div>


<script>
    function showShareModal(propertyId) {
        event.preventDefault();

        // Fetch the modal
        const modal = document.getElementById('shareModal');

        // Dynamically generate share links
        const baseUrl = "{{ url('/') }}";
        const propertyUrl = `${baseUrl}/property/${propertyId}`;

        const platforms = {
            facebook: `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(propertyUrl)}`,
            twitter: `https://twitter.com/intent/tweet?url=${encodeURIComponent(propertyUrl)}`,
            linkedin: `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(propertyUrl)}`,
            telegram: `https://telegram.me/share/url?url=${encodeURIComponent(propertyUrl)}`,
            whatsapp: `https://api.whatsapp.com/send?text=${encodeURIComponent(propertyUrl)}`,
            reddit: `https://www.reddit.com/submit?url=${encodeURIComponent(propertyUrl)}`
        };

        // Update modal content
        const socialLinksContainer = modal.querySelector('.social-links');
        socialLinksContainer.innerHTML = ''; // Clear existing links

        for (const [platform, link] of Object.entries(platforms)) {
            const anchor = document.createElement('a');
            anchor.href = link;
            anchor.target = '_blank';
            anchor.className = `social-icon ${platform}`;
            anchor.title = platform.charAt(0).toUpperCase() + platform.slice(1);
            anchor.innerHTML = `<i class="fa-brands fa-${platform}"></i>`;
            socialLinksContainer.appendChild(anchor);
        }

        // Show the modal
        modal.style.display = 'block';
    }

    function closeShareModal() {
        document.getElementById('shareModal').style.display = 'none';
    }
</script>
