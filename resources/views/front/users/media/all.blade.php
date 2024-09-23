{{-- resources/views/media/index.blade.php --}}
@extends('layouts.front.login-site')

@section('content')
    <div class="page-hero bg-image mt-2">
        <div class="hero-section" style="background:#394293;">
            <div class="hero-auction-banner">
            </div>
        </div>
    </div>

    <div class="container mt-1 mb-5">
        <div class="row mx-auto">
            @foreach ($mediaItems as $media)
                <div class="col-12 mb-4">
                    <div class="media-card d-flex">
                        <div class="media-content">
                            @if ($media->file_type === 'video')
                                <video controls class="video-responsive">
                                    <source src="{{ $media->file_url }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @elseif ($media->file_type === 'image')
                                <img src="{{ $media->file_url }}" alt="{{ $media->comment }}" class="image-responsive">
                            @endif
                        </div>
                        <div class="media-details">
                            <div class="user-info">
                                <img src="{{ $media->user->photo }}" alt="{{ $media->user->firstname }}"
                                    class="user-avatar">
                                <span>{{ $media->user->firstname }}</span>
                            </div>
                            <p class="likes">{{ $media->comment }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @if (count($mediaItems) > 0)
        <div class="pagen">
            {{ $mediaItems->links('vendor.pagination.custom') }}
        </div>
    @endif

    <style>
        .media-card {
            display: flex;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            /* height: 400px; */
            /* Fixed height for uniformity */
        }

        .media-content {
            flex: 1;
            overflow: hidden;
            background: black;
        }

        .video-responsive,
        .image-responsive {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Ensures the content covers the area without distortion */
        }

        .media-details {
            padding: 16px;
            flex: 1.5;
            background: #f9f9f9;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 8px;
        }

        .likes {
            font-weight: bold;
            margin-top: auto;
        }

        .pagen {
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: center;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .media-card {
                flex-direction: column;
                /* Stack video/image and details vertically */
                height: auto;
                /* Allow height to adjust */
            }

            .media-content {
                height: 200px;
                /* Set a specific height for smaller screens */
            }

            .media-details {
                padding: 12px;
            }

            .user-avatar {
                width: 35px;
                height: 35px;
            }
        }

        @media (max-width: 576px) {
            .media-content {
                height: 150px;
                /* Set a smaller height for very small screens */
            }

            .user-avatar {
                width: 30px;
                height: 30px;
            }

            .media-details {
                padding: 8px;
            }
        }
    </style>
@endsection
