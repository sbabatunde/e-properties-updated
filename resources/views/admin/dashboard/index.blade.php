@extends('admin.index')

@section('content')
    <div class="container card-wrapper">
        <div class="left-card">
            <div class="row">
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card border-left-primary dashboard-card shadow h-100 py-0" style="border-radius: 15px">
                        <div class="card-body">
                            <div class="row no-gutters align-items-left">
                                <div class="col">
                                    <div class="h5 mb-1 font-weight-bold text-gray-800">
                                        Total Request
                                    </div>
                                    <div class="h1 mb-0 font-weight-bold text-gray-800">
                                        10,680
                                    </div><br>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">

                                        <p> <i class="fa fa-star"></i><b>-12.76%</b>
                                            than last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card border-left-primary dashboard-card shadow h-100 py-0" style="border-radius: 15px">
                        <div class="card-body">
                            <div class="row no-gutters align-items-left">
                                <div class="col">
                                    <div class="h5 mb-1 font-weight-bold text-gray-800">
                                        Total Listings
                                    </div>
                                    <div class="h1 mb-0 font-weight-bold text-gray-800">
                                        40,100
                                    </div><br>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">

                                        <p> <i class="fa fa-star alt-star"></i>
                                            <b>+343%</b>
                                            than last month
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card border-left-primary dashboard-card shadow h-100 py-0" style="border-radius: 15px">
                        <div class="card-body">
                            <div class="row no-gutters align-items-left">
                                <div class="col">
                                    <div class="h5 mb-1 font-weight-bold text-gray-800">
                                        Done Deals
                                    </div>
                                    <div class="h1 mb-0 font-weight-bold text-gray-800">
                                        10,680
                                    </div><br>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">

                                        <p> <i class="fa fa-star"></i><b>-12.76%</b>
                                            than last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chart_div">
                <div class="card  border-left-primary shadow h-100 py-0">
                    <div class="card-body" id="chart_div">
                        <div class="row no-gutters align-items-left">
                            <div class="col">
                                {{-- <div id="chart_div"></div> --}}
                                <br />
                                <div id="btn-group">
                                    <button class="button button-blue" id="none">No Format</button>
                                    <button class="button button-blue" id="scientific">Scientific Notation</button>
                                    <button class="button button-blue" id="decimal">Decimal</button>
                                    <button class="button button-blue" id="short">Short</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="right-card">
            <div class="chart_div_2">
                <div class="card border-left-primary shadow h-100 py-0" style="border-radius: 15px">
                    <div class="card-body">
                        <div class="row no-gutters align-items-left">
                            <div class="col">
                                <div id="donutchart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container card-wrapper">

    </div>

    <script src="{{ asset('assets/admin/build/js/performance-chart.js') }}"></script>
    <script src="{{ asset('assets/admin/build/js/profile-visits-chart.js') }}"></script>
@endsection
