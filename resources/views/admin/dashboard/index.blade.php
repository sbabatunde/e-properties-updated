@extends('admin.index')

@section('content')
    <style>
        /* Style for the chart container */
        #donutchart {
            width: 600px;
            height: 400px;
        }

        /* Style for label container */
        #labels-container {
            display: flex;
            flex-wrap: wrap;
            /* Allows wrapping to the next line */
            gap: 20px;
            /* Space between label items */
            margin-top: 20px;
        }

        /* Style for each label item */
        .label-item {
            display: flex;
            align-items: center;
            width: 50%;
            /* Two items per row */
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        /* Style for icons */
        .label-item .icon {
            width: 30px;
            /* Icon width */
            height: 30px;
            /* Icon height */
            margin-right: 10px;
            color: #000;
            /* Default color, to be updated with JS */
        }

        /* Style for text */
        .label-item .text {
            font-size: 16px;
            line-height: 30px;
            /* Align text with icon height */
        }
    </style>

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
                            <div id="donutchart"></div>
                            <div id="labels-container">
                                <div class="label-item">
                                    <i class="fa fa-heart icon"></i> Likes - 20%
                                </div>
                                <div class="label-item">
                                    <i class="fa fa-eye icon"></i> Views - 45%
                                </div>
                                <div class="label-item">
                                    <i class="fa fa-share-alt icon"></i> Shares - 10%
                                </div>
                                <div class="label-item">
                                    <i class="fa fa-star icon"></i> Reviews - 25%
                                </div>
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
