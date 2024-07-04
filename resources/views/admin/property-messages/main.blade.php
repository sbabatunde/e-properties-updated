    @extends('admin.index')
    @section('content')
        <!-- page content -->
        <div class="" style="background-color: #eff0ff" role="main">
            <div class="post-prop-header">
                <div class="prop-form-header">
                    <div class="post-prop">
                        <h3>
                            <strong style="color: black">
                                Hello, {{ $user->firstname }}
                            </strong>
                        </h3>
                    </div>
                    @include('admin.user.details')
                </div>
            </div>
            <div class="profile-body">
                @include('admin.property-messages.sub-main')
            </div>

        </div>

        </div>
        <!-- /page content -->
    @endsection
