<style>
    .post-anonymous {
        display: flex;
        flex-wrap: nowrap;
        width: 89%;
        margin-bottom: 10px;
        align-items: center;
        /* Ensures both elements are vertically centered */
    }

    .post-anonymous div {
        border: 1px solid #cfd2f8;
        border-radius: 7px 0 0 7px;
        height: 40px;
        display: flex;
        justify-content: left;
        align-items: center;
        /* Ensures the content inside the div is centered vertically */
        width: 50%;
        background: #cfd2f8;
    }

    .post-anonymous .post-submit {
        color: #fff;
        background: #394293;
        border-radius: 0 7px 7px 0;
        width: 50%;
        height: 40px;
        font-weight: bold;
        display: flex;
        justify-content: center;
        /* Centers the button text horizontally */
        align-items: center;
        /* Centers the button text vertically */
        margin: 0;
        /* Ensures no extra margin is added */
    }
</style>

<div class="grp-anonymous group-content" id="showPost">
    <form action="{{ route('group.post') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="hidden" name="anonymous" value="0">
        <div class="post-comment">
            <img src="{{ auth()->user()->photo ?? '' }}" alt="">
            <input type="text" name="post" placeholder="  Write Something..." value="{{ old('post') }}"
                required>
        </div>
        <div class="post-anonymous">
            <div class="anonymous">
                <i style="color: gray" class="fa fa-user  mr-1"></i>
                <p class="ml-1 align-middle d-flex justify-center ">
                    Annonymous Post
                </p>
            </div>
            <button type="submit" class="btn post-submit cursor-pointer">
                Post
            </button>
        </div>
    </form>

    @foreach ($knownPosts as $item)
        <div class="comment-view">
            <div class="header">
                <div class="poster-name">
                    <div class="comment-dot mr-1"></div>
                    <h3 class="header-left">{{ $item->user->firstname . ' ' . $item->user->lastname ?? 'N/A' }} <br>
                        <span style="font-weight: 200;font-size: 16px">
                            {{ \Carbon\Carbon::parse($item->created_at)->format('H:i A') }}
                        </span>
                    </h3>
                </div>
                <div class="poster-title">
                    @if ($item->user && $item->user->serviceTypes->isNotEmpty())
                        <!-- Get the first service type (or loop through them if needed) -->
                        @php
                            $serviceType = $post->user->serviceTypes->first();
                        @endphp
                        <h3>
                            {{ $serviceType->service }}
                        </h3>
                        <!-- Assuming 'service' is the field name in the ServiceType model -->
                    @else
                        <h3>

                        </h3>
                    @endif

                </div>
            </div>
            <p>
                {{ $item->post }}
            </p>
            <div class="reaction-icons mb-0">
                <i class="fa fa-thumbs-up">
                    <span class="ml-2" style="color: rgb(184, 182, 182);font-size:17px">Like</span>
                </i>
                <i class="fa fa-comment">
                    <span class="ml-2" style="color: rgb(184, 182, 182);font-size:17px">Comment</span>
                </i>
                <i class="fa fa-share-alt">
                    <span class="ml-2" style="color: rgb(184, 182, 182);font-size:17px">Share</span>
                </i>
                <span>39,145 views</span>
            </div>
            {{-- @dd($item) --}}
            <div class="view-more mt-0">
                @isset($item->comments)
                    <div class="header">
                        <li>View More Comments</li>
                        @foreach ($item->comments as $comment)
                            <div class="poster-name ml-3 mt-2">
                                <div class="comment-dot mr-2" style="width:30px;height:30px"></div>
                                <h3 class="header-left">{{ $comment->user->firstname }} {{ $comment->user->lastname }}<br>
                                    <span style="font-weight: 200;font-size: 16px">
                                        {{ \Carbon\Carbon::parse($comment->created_at)->format('H:i A') }}
                                    </span>
                                </h3>
                            </div>
                            <p>
                                {{ $comment->content }}
                            </p>
                            <div class="mini-reaction">
                                <span>
                                    <i style="color: grey" class="fa fa-thumbs-up mr-3"> Like </i>
                                    <i style="color: grey" class="fa fa-comment"> Comment</i>
                                </span>

                                <span>39,145 views</span>
                            </div>
                        @endforeach
                    </div>
                @endisset
                <form id="postForm" action="{{ route('group.comment', $item->id) }}" method="POST">
                    @csrf
                    <div class="post-something">
                        <div class="comment-dot mr-2"></div>
                        <input type="text" id="postInput" name="content" value="{{ old('content') }}"
                            placeholder="Write something...">
                    </div>
                </form>



            </div>
        </div>
    @endforeach
</div>

{{-- Script to be able to submit the comment form with enter button --}}
<script>
    document.getElementById('postInput').addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            document.getElementById('postForm').submit(); // Submit the form
        }
    });
</script>
