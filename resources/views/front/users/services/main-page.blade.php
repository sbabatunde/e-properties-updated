@extends('layouts.front.login-site')
@section('content')
    <div class="page-hero bg-image " style="background-image: url(../assets/images/services/banner.png);">

    </div>

    <div style="background-color:white;">
        <div class="page-section py-1 mt-md-n5 custom-index ml-5">
            <div class="col-md-12">
                <div class="col-md-12 mt-3 " style="">
                    <div class="btn service-btn-group btn-mat-group" style="display: flex; justify-content:center">
                        <button onclick="maintenance()">
                            <strong>
                                Maintenance
                            </strong>
                        </button>
                        <button onclick="property()">
                            <strong>
                                Property
                            </strong>
                        </button>
                        <button onclick="b_development()">
                            <strong>
                                Building Development
                            </strong>
                        </button>
                        <button onclick="legal()">
                            <strong>
                                Legal
                            </strong>
                        </button>
                    </div>
                </div>
                @include('front.users.services.find.maintenance')
                @include('front.users.services.find.buildin-dev')
                @include('front.users.services.find.legal')
                @include('front.users.services.find.property')

            </div> <!-- .page-section -->
        </div>

        <!-- Connect Property Expert start -->
        @include('front.hero-sections.experts')
        <!-- Connect Property Expert  end -->
    </div>
@endsection
