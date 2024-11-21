<div class="grp-members group-content hidden" id="showMembers">
    <div class="grp-members-card">
        <img src="{{ asset('../assets/images/services/service9.png') }}" alt="">
        <span class="hero-expert-text">
            <h4 class="mb-0">Mally Cleff</h4>
            <p>5 Followers </p>
            <a href="" class="btn btn-info mb-3"
                style="background-color:#394293;font-weight:500;font-size:20px">Connect</a>
        </span>
    </div>
    @foreach ($groups->take(8) as $item)
        @isset($item->members)
            @foreach ($item->members as $key => $member)
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
        @endisset
    @endforeach

</div>
