<div class="residential-left left-item hidden">
    <h4 class="ml-4 mt-4" style="font-weight: 550">Compare Properties</h4>
    <div id="compareList">


    </div>
    <div class="res-comp-button mt-5 pt-5">
        <a href="{{ route('compare.property.page') }}" class="btn res-compare" style="font-weight:550;">Compare</a>
        <a href="" onclick="clearPropertyCompare( {{ Auth::id() }}); return false;"
            class="btn btn-danger res-cancel">Cancel</a>
    </div>
    <button class="toggle-button compare">Compare</button>

</div>
