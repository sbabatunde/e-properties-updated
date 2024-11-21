{{-- Join Groups Begins --}}
<div class="hero-category">
    <div class="hero-meet-expert">
        <a href="">
            <h5 style="color: black;font-weight:550">Groups you may like</h5>
        </a>
        <a href="{{ route('group.index') }}" style="text-decoration: none">
            <h5 style="color: red;font-weight:550">See more</h5>
        </a>
    </div>

    <div class="hero-sub-category">
        @foreach ($data['groups'] as $item)
            <div class="hero-cat-venue">
                <img src="{{ $item->photo }}" alt="{{ $item->group_name }}">
                <span class="hero-expert-text">
                    <h4 class="mb-0">{{ $item->group_name }}</h4>
                    <p>{{ $item->members_count }} Members <span class="ml-2">{{ $item->posts_count }} Post
                            Today</span></p>
                    <!-- Anchor acting as a button -->
                    <a href="javascript:void(0);" class="btn btn-info mb-3"
                        style="background-color:#394293;font-weight:500;font-size:20px"
                        onclick="joinGroup({{ $item->id }})">Join</a>

                    <!-- Hidden form -->
                    <form id="joinGroupForm-{{ $item->id }}" action="{{ route('group.join') }}" method="POST"
                        style="display: none;">
                        @csrf
                        <input type="hidden" name="group_id" value="{{ $item->id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}"> <!-- Authenticated user -->
                    </form>
                </span>
            </div>
        @endforeach
    </div>
</div>
{{-- Join Groups Ends --}}


{{-- script for checking authorized user and submitting user details --}}

<script>
    function joinGroup(groupId) {
        // Submit the hidden form programmatically
        document.getElementById('joinGroupForm-' + groupId).submit();
    }
</script>
