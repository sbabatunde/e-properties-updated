<div class="grp-members group-content hidden" id="showMembers">
    @isset($members)
        @foreach ($members as $key => $member)
            <div class="grp-members-card">
                <img src="{{ $member->photo ?? asset('/assets/admin/images/no_image.jpg') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">{{ $member->firstname }} {{ $member->lastname }}</h4>
                    <p>5 Followers </p>
                    <a href="" class="btn btn-info mb-3"
                        style="background-color:#394293;font-weight:500;font-size:20px">Connect</a>
                </span>
            </div>
        @endforeach
        {{-- Pagination links --}}
        @if (count($members) > 8)
            <div class="comment-view">
                <div class="d-flex justify-content-center">
                    {{-- {{ $grpMembers->links('vendor.pagination.custom') }} --}}
                </div>
            </div>
        @endif
    @endisset

</div>
