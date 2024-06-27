<div class="" id="editProfile" style="display:none;">
    <form class="form" action="{{ route('admin.profile.edit', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-body">
                    <div class="row">
                        @include('admin.profile.edit-sections.general-info')
                        @include('admin.profile.edit-sections.contact')
                        @include('admin.profile.edit-sections.address')
                        @include('admin.profile.edit-sections.organization-details')
                        @include('admin.profile.edit-sections.experience')
                        @include('admin.profile.edit-sections.social')
                    </div>
                </div>
            </div>
        </div>

        <div class="ln_solid"></div>
        <div class="form-group col-md-10 mr-4 pt-4 d-flex justify-content-end">
            <button class="btn btn-outline btn-info mr-3"
                style="color:#394293;background-color:transparent;border: 2px solid #394293;font-size:20px bold;
                border-radius:10px; width:6em"
                type="button">Cancel</button>
            <button type="submit" class="btn"
                style="color:white;background-color:#394293;border: 2px solid #394293;font-size:20px bold;
                border-radius:10px; width:6em">Submit</button>
        </div>
    </form>
</div>
