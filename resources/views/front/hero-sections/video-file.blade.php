{{-- // videos.blade.php
For Dynamic Video display

@extends('layouts.app')

@section('content')
    <div class="videos-grid">
        @foreach ($videos as $video)
            <div class="video-container">
                <!-- Add your video embed code here -->
                <iframe width="300" height="200" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
            </div>
        @endforeach
    </div>
@endsection --}}



<!-- videos.blade.php -->
<div class="hero-category">
    <div class="hero-meet-expert">
        <h5 style="color: black">Short Videos</h5>
        <a href="{{ route('all.properties.listing') }}" style="text-decoration: none">
            <h5 style="color: red">See more</h5>
        </a>
    </div>

    <div class="hero-listing">
        <div class="hero-media-files">
            @foreach ($data['media'] as $postMedia)
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
    </div>
</div>
