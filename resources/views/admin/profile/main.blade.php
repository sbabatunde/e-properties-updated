  @extends('admin.index')
  @section('content')
      <!-- page content -->
      <div class="" style="background-color: #eff0ff" role="main">
          <div class="post-prop-header">
              <div class="prop-form-header">
                  <div class="post-prop">
                      <h3>
                          <strong style="color: black">
                              Post A property
                          </strong>
                      </h3>
                  </div>
                  @include('admin.user.details')
              </div>
          </div>
          <div class="profile-body">
              <div class="all-group-btn container">
                  <button onclick="myProfile()" class="all-group-btn active-btn-group">
                      <strong>
                          My Profile
                      </strong>
                  </button>
                  <button onclick="editProfile()" class="all-group-btn active-btn-group">
                      <strong>
                          Edit Profile
                      </strong>
                  </button>
              </div>
              @include('admin.profile.edit')
              @include('admin.profile.my-profile')
          </div>

      </div>

      </div>
      <!-- /page content -->
  @endsection
