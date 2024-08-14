@extends('admin.index')
@section('content')
    <!-- page content -->
    <div class="" style="background-color: #eff0ff" role="main">
        <div class="post-prop-header">
            <div class="prop-form-header">
                <div class="post-prop">
                    <h3>
                        <strong style="color: black">
                            All Sliders
                        </strong>
                    </h3>
                </div>
                @include('admin.user.details')
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="">
                        <div class="">
                            <br />
                            <form class="form" action="{{ route('admin.sliders.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row justify-content-md-center">
                                    <div class="col-md-11">
                                        <div class="form-body">
                                            <div class="row">

                                                {{-- Material Details --}}
                                                {{-- @include('admin.building-material.form.details') --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
