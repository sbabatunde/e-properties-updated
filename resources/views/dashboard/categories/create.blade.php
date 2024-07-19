@extends('admin.index')
@section('content')
    <!-- page content -->
    <div class="" style="background-color: #eff0ff" role="main">
        <div class="post-prop-header">
            <div class="prop-form-header">
                <div class="post-prop">
                    <h3>
                        <strong style="color: black">
                            Create Building Material Category
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
                            <form class="form" action="{{ route('admin.categories.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row justify-content-md-center">
                                    <div class="col-md-11">
                                        <div class="form-body">
                                            <div class="row">
                                                @include('dashboard.categories.create-form')
                                            </div>
                                        </div>
                                        <div class="item form-group  col-md-12 mt-4">
                                            <div class="col-md-6 col-sm-6 offset-md-3 mt-2">
                                                <button class="btn btn-outline btn-info"
                                                    style="color:#394293;background-color:transparent;border: 2px solid #394293;font-size:10px bold"
                                                    type="button">Cancel</button>
                                                <button type="submit" class="btn btn-success"
                                                    style="color:#fff;background-color:#394293;border: 2px solid #394293;font-size:10px bold">Submit</button>
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
