@extends('admin.index')
@section('content')
    <!-- page content -->
    <div class="" style="background-color: #eff0ff" role="main">
        <div class="post-prop-header">
            <div class="prop-form-header">
                <div class="post-prop">
                    <h3>
                        <strong style="color: black">
                            Sliders
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

                                                <div class="form-group col-md-6">
                                                    <input type="text"
                                                        style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                        placeholder="Slide title" autocomplete=""
                                                        value="{{ old('title') }}" required name="title">
                                                    @error('title')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <input type="file"
                                                        style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                        name="photo[]" multiple>
                                                    @error('photo')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-11 d-flex justify-content-end">
                                            <button class="btn btn-outline btn-info"
                                                style="color:#394293;background-color:transparent;border: 2px solid #394293;font-size:10px bold"
                                                type="button">Save</button>
                                            <button type="submit" class="btn btn-success"
                                                style="color:#fff;background-color:#394293;border: 2px solid #394293;font-size:10px bold">Submit</button>
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
