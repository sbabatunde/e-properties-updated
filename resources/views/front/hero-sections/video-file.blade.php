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
<div class="videos-grid">
    <div class="row">
        <div class="col-3">
            <!-- Video 1 -->
            <div class="video-container">
                <iframe width="300" height="200"
                    src="https://www.youtube.com/playlist?list=PLUs62aqkjy8lFWZON72434Sf4kXVAHdzk" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-3">
            <!-- Video 2 -->
            <div class="video-container">
                <iframe width="300" height="200" src="https://www.youtube.com/embed/VIDEO_ID_2" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-3">
            <!-- Video 3 -->
            <div class="video-container">
                <iframe width="300" height="200" src="https://www.youtube.com/embed/VIDEO_ID_3" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-3">
            <!-- Video 4 -->
            <div class="video-container">
                <iframe width="300" height="200" src="https://www.youtube.com/embed/VIDEO_ID_4" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <!-- Video 5 -->
            <div class="video-container">
                <iframe width="300" height="200" src="https://www.youtube.com/embed/VIDEO_ID_5" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-3">
            <!-- Video 6 -->
            <div class="video-container">
                <iframe width="300" height="200" src="https://www.youtube.com/embed/VIDEO_ID_6" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-3">
            <!-- Video 7 -->
            <div class="video-container">
                <iframe width="300" height="200" src="https://www.youtube.com/embed/VIDEO_ID_7" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-3">
            <!-- Video 8 -->
            <div class="video-container">
                <iframe width="300" height="200" src="https://www.youtube.com/embed/VIDEO_ID_8" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
