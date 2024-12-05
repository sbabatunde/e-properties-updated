<style>
    .mini-reaction .icons-span {
        display: flex;
        justify-content: space-between;
        margin-top: 2px;
        padding: auto 5px;
        width: 50%;
    }

    .comment-view .reaction-icons .fa-thumbs-up,
    .fa-thumbs-up {
        color: #857f7f;
        cursor: pointer;
    }

    .comment-view .reaction-icons .fa-thumbs-up.liked,
    .fa-thumbs-up.liked {
        color: #394293;
        /* Change to your preferred color */
    }

    .comment-reply {
        color: gray;
        display: flex;
        flex-direction: column;
        width: 100%;
        padding-left: 5%;
        justify-content: space-between;
        margin-top: 0;
    }

    .comment-reply .reply {

        width: 90%;
        margin: 5px auto;
    }

    .reply-comment {
        display: flex;
        justify-content: space-around;
        margin: 2px auto padding: auto 5px;
        width: 90%;
    }

    .reply-something {
        /* Mimicking the post form style */
        width: 97%;
        margin: auto;
        display: flex;
        flex-shrink: 1;
        padding: 5px;
        align-items: center;
        margin-bottom: 15px;
    }

    .reply-something .comment-dot {
        width: 30px;
        /* Smaller than post form */
        height: 30px;
        border: 1px solid rgb(175, 174, 174);
        border-radius: 50%;
        background: rgb(175, 174, 174);
    }

    .reply-something input {
        background-color: #cfd2f8;
        border: 1px solid #cfd2f8;
        border-radius: 7px;
        width: 90%;
        margin-bottom: 2px;
    }

    .btn-reply,
    .btn-replyanonympus {
        cursor: pointer;
        border: none
    }
</style>

<div class="grp-anonymous group-content" id="showPost">
    <form action="{{ route('group.post') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="hidden" name="anonymous" value="0">
        <div class="post-comment">
            <img src="{{ auth()->user()->photo ?? '' }}" alt="{{ auth()->user()->firstname ?? '' }}">
            <input type="text" name="post" placeholder="Write Something..." value="{{ old('post') }}" required>
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
                        @php
                            $serviceType = $item->user->serviceTypes->first();
                        @endphp
                        <h3>
                            {{ $serviceType->service }}
                        </h3>
                    @endif
                </div>
            </div>
            <p>{{ $item->post }}</p>
            <div class="reaction-icons mb-0">
                <i class="fa fa-thumbs-up {{ $item->likes && $item->likes->where('user_id', auth()->user()->id ?? '')->exists() ? 'liked' : '' }}"
                    data-id="{{ $item->id }}" data-type="post">
                    Like
                    <span
                        id="likes-count-post-{{ $item->id }}">{{ $item->likes ? $item->likes->count() : 0 }}</span>
                </i>
                <!-- Comment button -->
                <i class="fa fa-comment" style="cursor: pointer" onclick="focusCommentInput({{ $item->id }})">
                    <span class="ml-2" style="color: rgb(184, 182, 182); font-size: 17px">Comment</span>
                    <span>{{ $item->comments->count() }}</span>
                </i>

                <!-- Share button -->
                <i class="fa fa-share-alt" style="cursor: pointer"
                    onclick="showShareCommentModal(event,{{ $item->id }},'{{ $item->post }}', '{{ route('post.show', $item->id) }}');">
                    <span class="ml-2" style="color: rgb(184, 182, 182); font-size: 17px">Share</span>
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
            <div class="view-more{{ $item->id }} mt-0" style="display: none;">
                @isset($item->comments)
                    <div class="header">
                        @foreach ($item->comments as $comment)
                            <div class="poster-name ml-3 mt-2">
                                <div class="comment-dot mr-2" style="width:30px;height:30px"></div>
                                <h3 class="header-left">{{ $comment->user->firstname }}
                                    {{ $comment->user->lastname }}<br>
                                    <span style="font-weight: 200;font-size: 16px">
                                        {{ \Carbon\Carbon::parse($comment->created_at)->format('H:i A') }}
                                    </span>
                                </h3>
                            </div>
                            <p>{{ $comment->content }}</p>

                            <!-- Like button for comment -->
                            <div class="mini-reaction">
                                @php
                                    $repliesCount = App\Models\Comment::where('parent_id', $comment->id)->count();
                                    $likes = App\Models\PostLike::where('comment_id', $comment->id)->count();
                                    $totalCommentViews = $likes + $repliesCount;
                                @endphp
                                <span class="icons-span">
                                    <i class="fa fa-thumbs-up {{ $comment->likes->where('user_id', auth()->id())->isNotEmpty() ? 'liked' : '' }}"
                                        data-id="{{ $comment->id }}" data-type="comment"> Like
                                        <span id="likes-count-comment-{{ $comment->id }}"
                                            class="">{{ $item->likes ? $item->likes->count() : 0 }}</span></i>
                                    <button class="btn-reply" data-comment-id="{{ $comment->id }}">
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
    {{-- Pagination links --}}
    @if (count($knownPosts) > 2)
        <div class="comment-view">
            <div class="d-flex justify-content-center">
                {{ $knownPosts->links('vendor.pagination.custom') }}
            </div>
        </div>
    @endif
</div>

{{-- Script to be able to submit the comment form with enter button --}}
<script>
    function focusCommentInput(postId) {
        const inputContainer = document.getElementById(`commentInputContainer-${postId}`);
        const inputField = document.getElementById(`postInput-${postId}`);
        inputField.focus();
        // Toggle visibility of the comment input container

    }
</script>
{{-- Script to handle like toggle functionality --}}
<script>
    document.querySelectorAll('.fa-thumbs-up').forEach(likeButton => {
        likeButton.addEventListener('click', function() {
            const entityId = likeButton.getAttribute('data-id'); // Post or Comment ID
            const entityType = likeButton.getAttribute('data-type'); // Either 'post' or 'comment'
            const likeCountElement = document.getElementById(`likes-count-comment-${entityId}`);
            const likeCountPost = document.getElementById(`likes-count-post-${entityId}`);
            console.log(likeCountElement, likeCountPost);

            // Ensure likeCountElement exists
            if (!likeCountElement && !likeCountPost) {
                console.error(`Like count element not found for ID ${entityId}`);
                return;
            }

            // Send the like/unlike request to the server
            fetch(`/likes/${entityType}/${entityId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content'),
                    },
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`Error: ${response.status} ${response.statusText}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.error) {
                        alert(data.error);
                        return;
                    }

                    // Update the like count
                    if (entityType === "comment") {
                        likeCountElement.innerText = data.likesCount;
                    } else {
                        likeCountPost.innerText = data.likesCount;
                    }


                    // Toggle the "liked" class to change the button color
                    likeButton.classList.toggle('liked', data.liked);
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                });
        });
    });
</script>

{{-- For Replying on a comment  --}}
<script>
    document.querySelectorAll('.btn-reply').forEach(button => {
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

{{-- For view more comment  --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select all "View More Comments" buttons
        const viewCommentButtons = document.querySelectorAll('.view');

        viewCommentButtons.forEach(button => {
            // When a button is clicked, toggle the corresponding comments
            button.addEventListener('click', function() {
                const postId = button.getAttribute(
                    'data-view-id'); // Get the post ID from the data attribute
                const commentsContainer = document.querySelector(
                    `.view-more${postId}`); // Get the comments container
                console.log(commentsContainer);

                // Toggle the visibility of the comments container
                if (commentsContainer) {
                    commentsContainer.style.display = commentsContainer.style.display ===
                        'none' ? 'block' : 'none';
                }

                // Change the button text based on the visibility of the comments
                if (commentsContainer.style.display === 'none') {
                    button.textContent = 'View More Comments';
                } else {
                    button.textContent = 'Hide Comments';
                }
            });
        });
    });
</script>

<script>
    function showShareCommentModal(event, postId, postTitle, postUrl) {
        event.preventDefault();

        // Pass the dynamic post content and URL to generate share links
        let shareLinks = generateShareLinks(postUrl, postTitle);

        // Show the modal
        document.getElementById('shareCommentModal').style.display = 'block';

        // Update modal content
        let socialLinksContainer = document.querySelector('.social-links');
        socialLinksContainer.innerHTML = ''; // Clear existing links

        // Loop through generated links and add them to the modal
        for (const platform in shareLinks) {
            let link = shareLinks[platform];
            let iconClass = 'fa-brands fa-' + platform;

            let linkElement = document.createElement('a');
            linkElement.href = link;
            linkElement.target = '_blank';
            linkElement.classList.add('social-icon', platform);
            linkElement.title = platform.charAt(0).toUpperCase() + platform.slice(1);

            let iconElement = document.createElement('i');
            iconElement.classList.add(iconClass);

            linkElement.appendChild(iconElement);
            socialLinksContainer.appendChild(linkElement);
        }
    }

    function generateShareLinks(postUrl, postTitle) {
        // Generate the share links
        return {
            facebook: `https://www.facebook.com/sharer.php?u=${encodeURIComponent(postUrl)}&title=${encodeURIComponent(postTitle)}`,
            twitter: `https://twitter.com/share?url=${encodeURIComponent(postUrl)}&text=${encodeURIComponent(postTitle)}`,
            linkedin: `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(postUrl)}`,
            telegram: `https://t.me/share/url?url=${encodeURIComponent(postUrl)}&text=${encodeURIComponent(postTitle)}`,
            whatsapp: `https://wa.me/?text=${encodeURIComponent(postTitle)} ${encodeURIComponent(postUrl)}`,
            reddit: `https://www.reddit.com/submit?url=${encodeURIComponent(postUrl)}&title=${encodeURIComponent(postTitle)}`
        };
    }

    function closeShareModal() {
        document.getElementById('shareCommentModal').style.display = 'none';
    }
</script>
