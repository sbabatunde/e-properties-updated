{{-- <div class="media-files">
    <div class="post-media">
        <img src="{{ asset('../assets/images/post/post-1.png') }}" alt="">
    </div>
    <div class="post-media">
        <img src="{{ asset('../assets/images/post/post-2.png') }}" alt="">
    </div>
    <div class="post-media">
        <img src="{{ asset('../assets/images/post/post-3.png') }}" alt="">
    </div>
    <div class="post-media">
        <img src="{{ asset('../assets/images/post/post-1.png') }}" alt="">
    </div>
    <div class="post-media">
        <img src="{{ asset('../assets/images/post/post-2.png') }}" alt="">
    </div>
    <div class="post-media">
        <img src="{{ asset('../assets/images/post/post-3.png') }}" alt="">
    </div>
</div> --}}

<div class="media-files">
    @foreach ($media as $postMedia)
        @if ($postMedia->file_type === 'image')
            <div class="post-media">
                <img src="{{ $postMedia->file_url }}" alt="Image">
            </div>
        @elseif ($postMedia->file_type === 'video')
            <div class="post-media">
                <video controls>
                    <source src="{{ $postMedia->file_url }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="play-button"></div>
            </div>
        @else
            <div class="post-media">
                <p>No media available</p>
            </div>
        @endif
    @endforeach
</div>


@if (count($media) > 0)
    <div class="pagination mt-5 ml-2 d-flex justify-content-center">
        {{ $media->links('vendor.pagination.custom') }}
    </div>
@endif
