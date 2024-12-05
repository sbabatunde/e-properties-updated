<div class="grp-anonymous group-content hidden" id="showAnonymous">
    <form action="{{ route('group.post') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="hidden" name="annonymous" value="1">
        <div class="post-comment">
            <img src="{{ auth()->user()->photo ?? '' }}" alt="{{ auth()->user()->firstname ?? '' }}">
            <input type="text" name="post" placeholder="  Write Something..." value="{{ old('post') }}"
                required>
        </div>
        <div class="post-anonymous">
            <div class="anonymous">
                <i style="color: gray" class="fa fa-user  mr-1"></i>
                <p class="ml-1 align-middle d-flex justify-center mt-3">
                    Anonymous Post
                </p>
            </div>
            <button type="submit" class="btn post-submit cursor-pointer">
                Post
            </button>
        </div>
    </form>

    @foreach ($anonymousPosts as $item)
        <div class="comment-view">
            <div class="header">
                <div class="poster-name">
                    <div class="comment-dot mr-1"></div>
                    <h3 class="header-left">Unknown<br>
                        <span style="font-weight: 200;font-size: 16px">
                            {{ \Carbon\Carbon::parse($item->created_at)->format('H:i A') }}
                        </span>
                    </h3>
                </div>
                <div class="poster-title">
                    Unknown
                </div>
            </div>
            <p>
                {{ $item->post }}
            </p>
            <div class="reaction-icons mb-0">

                <i class="fa fa-thumbs-up anonymous-like-button {{ $item->likes && $item->likes->where('ip_address', request()->ip())->isNotEmpty() ? 'liked' : '' }}"
                    data-type="post" data-id="{{ $item->id }}"> Like
                    <span id="likes-anon-post-{{ $item->id }}"
                        class="">{{ $item->likes ? $item->likes->count() : 0 }}</span>
                </i>

                <i class="fa fa-comment" style="cursor: pointer"
                    onclick="focusCommentInputAnonnymous({{ $item->id }}, 'anonymous')">
                    <span class="ml-2" style="color: rgb(184, 182, 182);font-size:17px">Comment</span>
                    <span>{{ $item->comments->count() }}</span>
                </i>
                <i class="fa fa-share-alt">
                    <span class="ml-2" style="color: rgb(184, 182, 182);font-size:17px">Share</span>
                </i>
                <span>{{ $item->views ?? '0' }} views</span>
            </div>
            <div class="header view-comment{{ $item->id }} mb-0">
                <li>
                    <button class="view" data-view-id="{{ $item->id }}"
                        style="border: none;cursor: pointer; color:gray">
                        View More Comments
                    </button>
                </li>
            </div>
            <div class="view-more{{ $item->id }} mt-0">
                @isset($item->comments)
                    <div class="header">
                        @foreach ($item->comments as $comment)
                            <div class="poster-name ml-3 mt-2">
                                <div class="comment-dot mr-2" style="width:30px;height:30px"></div>
                                <h3 class="header-left">{{ $comment->user->firstname ?? 'Unknown' }}
                                    {{ $comment->user->lastname ?? 'Unknown' }}<br>
                                    <span style="font-weight: 200;font-size: 16px">
                                        {{ \Carbon\Carbon::parse($comment->created_at)->format('H:i A') }}
                                    </span>
                                </h3>
                            </div>
                            <p>
                                {{ $comment->content }}
                            </p>
                            <!-- Like button for comment -->
                            <div class="mini-reaction">
                                @php
                                    $repliesCount = App\Models\Comment::where('parent_id', $comment->id)->count();
                                    $likes = App\Models\PostLike::where('comment_id', $comment->id)->count();
                                    $totalCommentViews = $likes + $repliesCount;
                                @endphp
                                <span class="icons-span">
                                    {{-- <i class="fa fa-thumbs-up {{ $comment->likes->where('user_id', auth()->id())->isNotEmpty() ? 'liked' : '' }}"
                                        data-id="{{ $comment->id }}" data-type="comment"> Like </i> --}}
                                    <i class="fa fa-thumbs-up anonymous-like-button {{ $comment->likes->where('ip_address', request()->ip())->isNotEmpty() ? 'liked' : '' }}"
                                        data-type="comment" data-id="{{ $comment->id }}"> Like
                                        <span id="likes-anon-comment-{{ $comment->id }}"
                                            class="likes-anon-comment-{{ $comment->id }}">{{ $comment->likes->count() }}</span>
                                    </i>

                                    <button class="btn-replyanonympus" data-comment-id="{{ $comment->id }}">
                                        <i style="color: grey" class="fa fa-comment"> Comment</i>
                                        <span class="ml-2">{{ $repliesCount }}</span>

                                    </button>

                                </span>

                                <span>{{ $totalCommentViews ?? '0' }} views</span>
                            </div>
                            <!-- Nested Replies -->
                            @if ($comment->replies->isNotEmpty())
                                <div class="comment-reply ml-2 d-none" data-comment-id="{{ $comment->id }}">
                                    @foreach ($comment->replies as $reply)
                                        <div class="reply">
                                            <h6>{{ $reply->user->firstname . ' ' . $reply->user->lastname ?? 'Anonymous' }}
                                            </h6>
                                            <p>{{ $reply->content }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            <!-- Reply Form -->
                            <form id="replyForm-{{ $comment->id }}" action="{{ route('comment.reply', $comment->id) }}"
                                method="POST" class="reply-form d-none mini-reaction">
                                @csrf
                                <div class="reply-something">
                                    <div class="comment-dot mr-2"></div>
                                    <input type="text" name="content" placeholder="Write a reply..."
                                        value="{{ old('content') }}">
                                </div>
                            </form>
                        @endforeach
                    </div>
                @endisset

            </div>
            <!-- Comment input -->
            <form id="postForm-{{ $item->id }}" action="{{ route('group.comment', $item->id) }}" method="POST">
                @csrf
                <div class="post-something">
                    <div class="comment-dot mr-2"></div>
                    <input type="text" id="postInput-{{ $item->id }}" name="content"
                        value="{{ old('content') }}" placeholder="Write something...">
                </div>
            </form>
        </div>
    @endforeach
</div>

{{-- Script to focus on the comment input for anonymous post --}}
<script>
    function focusCommentInputAnonnymous(postId) {
        const inputContainer = document.getElementById(`commentInputContainer-${postId}`);
        const inputField = document.getElementById(`postInput-${postId}`);
        inputField.focus();
    }
</script>

<script>
    document.querySelectorAll('.btn-replyanonympus').forEach(button => {
        button.addEventListener('click', function() {
            const commentId = button.getAttribute('data-comment-id');
            const form = document.querySelector(`#replyForm-${commentId}`);
            const replyContainer = document.querySelector(
                `.comment-reply[data-comment-id="${commentId}"]`);

            // Toggle form visibility
            form.classList.toggle('d-none');
            replyContainer.classList.toggle('d-none');
            // Handle form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                // Get the form data
                const formData = new FormData(form);

                // Submit the form using fetch
                fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector(
                                'meta[name="csrf-token"]').content,
                        },
                        body: formData,
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Create a new reply element
                            const newReply = document.createElement('div');
                            newReply.classList.add('reply');
                            newReply.innerHTML = `
                                <h6>${data.user.firstname ?? 'Anonymous'} ${data.user.lastname ?? ''}</h6>
                                <p>${data.reply.content}</p>
                            `;

                            // Append the new reply to the `.comment-reply` container
                            replyContainer.appendChild(newReply);

                            // Clear and hide the form
                            form.reset();
                            form.classList.add('d-none');
                        } else {
                            alert('Failed to submit reply. Please try again.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred. Please try again.');
                    });
            });
        });
    });
</script>

<script>
    document.querySelectorAll('.anonymous-like-button').forEach(button => {
        button.addEventListener('click', function() {
            const type = this.dataset.type; // 'post' or 'comment'
            const id = this.dataset.id;
            const likeCountElement = document.getElementById(`likes-anon-comment-${id}`);
            const likeCountPost = document.getElementById(`likes-anon-post-${id}`);

            fetch(`/anonymous-like/${type}/${id}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        console.error(data.error);
                    } else {
                        // Update like count and toggle button state
                        // Update the like count
                        if (type === "comment") {
                            likeCountElement.innerText = data.likesCount;
                        } else {
                            likeCountPost.innerText = data.likesCount;
                        }


                        this.classList.toggle('liked', data.liked);
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    });
</script>
