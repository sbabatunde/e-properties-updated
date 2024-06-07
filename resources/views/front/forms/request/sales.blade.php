<form class="d-inline" method="POST" action="{{route('submit.request')}}">
    @csrf
    <div style="display: block" id="salesRequest">
        <input type="hidden" name="request_type" value="sales">
        @include('front.forms.request.request-form')
        <div class="col-lg-4 pt-3">
            <button type="submit" class="btn btn-success form-control " style="background-color: #394293;cursor: pointer;">
                <strong>
                    {{ __('Send Request') }}
                </strong>  
            </button>
        </div>
    </div>
</form>