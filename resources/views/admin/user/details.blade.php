<div class="user-details">
    <img class="user-pic"
        src="{{ !empty(Auth::user()->photo) ? url(asset(Auth::user()->photo)) : url('/assets/admin/images/no_image.jpg') }}"
        alt="profile">
    <span>
        <h5 style="color: black">
            {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
        </h5>
        <h6>
            {{ Auth::user()->email }}
        </h6>
    </span>
    <i class="fa fa-bell"></i>
</div>
