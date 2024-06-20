@extends('admin.index')
@section('content')
    <div class="post-prop-header">
        <div class="prop-form-header">
            <div class="post-prop">
                <h3>
                    <strong style="color: black">
                        Hello, {{ Auth::user()->firstname }}
                    </strong>
                </h3>
                <h5>
                    <strong style="color: black">
                        Joined {{ Auth::user()->created_at }}
                    </strong>
                </h5>
            </div>
            @include('admin.user.details')
        </div>
    </div>

    <div class="media mt-4">
        <div class="add-post">
            <a href="#" data-bs-toggle="modal" data-bs-target="#addPost">
                <div class="plus">
                    &#8853
                </div>
            </a>
            <div class="add-text">Add Post</div>
        </div>
        <div class="mind border-gray-600 shadow-md">
            What is going on today
        </div>
    </div>

    @include('admin.media.files')
    @include('admin.media.post-form')

    <script>
        document.getElementById('imageUpload').addEventListener('change', function() {
            document.getElementById('uploadType').value = 'image';
        });

        document.getElementById('videoUpload').addEventListener('change', function() {
            document.getElementById('uploadType').value = 'video';
        });
    </script>
    <script>
        document.getElementById('imageUpload').addEventListener('change', function() {
            document.getElementById('uploadType').value = 'image';
        });

        document.getElementById('videoUpload').addEventListener('change', function() {
            document.getElementById('uploadType').value = 'video';
        });
    </script>
@endsection
