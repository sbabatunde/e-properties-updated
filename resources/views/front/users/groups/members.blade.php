<div class="grp-members group-content hidden" id="showMembers">
    @isset($members)
        @foreach ($members as $key => $member)
            <div class="grp-members-card" data-member-id="{{ $member->user->id }}">
                <img src="{{ $member->user->photo ?? asset('/assets/admin/images/no_image.jpg') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">{{ $member->user->firstname }} {{ $member->user->lastname }}</h4>
                    <p class="follower-count">{{ $member->user->followers_count }} Followers</p>
                    <button class="btn btn-info mb-3 connect-button" style="cursor: pointer;"
                        style="background-color:#394293;font-weight:500;font-size:20px">Connect</button>
                </span>
            </div>
        @endforeach
        {{-- Pagination links --}}
        @if (count($members) > 6)
            <div class="comment-view">
                <div class="d-flex justify-content-center">
                    {{-- {{ $grpMembers->links('vendor.pagination.custom') }} --}}
                </div>
            </div>
        @endif
    @endisset
</div>


<script>
    $(document).ready(function() {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        $('.connect-button').click(function() {
            var memberId = $(this).closest('.grp-members-card').data(
                'member-id'); // Get member ID from data attribute
            console.log(memberId);

            $.ajax({
                url: '{{ route('connect.member', ':id') }}'.replace(':id', memberId),
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}' // CSRF token for security
                },

                success: function(response) {
                    if (response.success) {
                        // Increment the follower count in the UI
                        var followerCountElement = $(this).closest('.grp-members-card')
                            .find('.follower-count');
                        var currentCount = parseInt(followerCountElement.text());
                        followerCountElement.text((currentCount + 1) + " Followers");

                        // Display success message using Toastr
                        toastr.success("You are now following this user!");
                    } else {
                        // Display warning message using Toastr
                        toastr.warning(response
                            .message); // Show message if already following
                    }
                }.bind(this), // Bind 'this' context to access the button element
                error: function(xhr) {
                    // Display detailed error message using Toastr
                    var errorMessage = xhr.responseJSON && xhr.responseJSON.message ? xhr
                        .responseJSON.message :
                        'An error occurred while trying to follow the user.';
                    toastr.error(errorMessage);
                }
            });
        });
    });
</script>
