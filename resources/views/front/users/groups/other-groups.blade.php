<div id="join-group" class="other-grp">
    @foreach ($groups as $item)
        <div class="grp-members-card">
            <img src="{{ $item->photo ?? asset('/assets/admin/images/no_image.jpg') }}" alt="{{ $item->group_name }}">
            <span class="hero-expert-text">
                <h4 class="mb-0">{{ $item->group_name }}</h4>
                <p>{{ $item->members_count }} Members <span class="ml-2">{{ $item->posts_count }} Post Today</span></p>
                <a href="javascript:void(0);" class="btn btn-info mb-3" onclick="joinGroup({{ $item->id }})"
                    style="background-color:#394293;font-weight:500;font-size:20px">Join</a>

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


{{-- script for checking authorized user and submitting user details --}}

<script>
    function joinGroup(groupId) {
        // Submit the hidden form programmatically
        document.getElementById('joinGroupForm-' + groupId).submit();
    }
</script>
