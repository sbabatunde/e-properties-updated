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
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="">
                        <div class="">
                            <br />
                            <form class="form" action="{{ route('admin.properties.update', $property->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row justify-content-md-center">
                                    <div class="col-md-11">
                                        <div class="form-body">
                                            <div class="row">
                                                {{-- Property details Highlight --}}
                                                @include('admin.properties.edit.details')

                                                {{-- Property Auction details --}}
                                                @include('admin.properties.edit.auction')
                                                {{-- Pricing Details --}}
                                                @include('admin.properties.edit.pricing')
                                                {{-- Property Deal details --}}
                                                @include('admin.properties.edit.deals')
                                                {{-- Property Address Details --}}
                                                @include('admin.properties.edit.address')
                                                {{-- Payment Method --}}
                                                @include('admin.properties.edit.payment')
                                                {{-- Property Info Checkboxes --}}
                                                @include('admin.properties.edit.checkboxes')
                                                {{-- Property Description And Images --}}
                                                @include('admin.properties.edit.description-images')
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
