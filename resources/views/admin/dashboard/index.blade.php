@extends('admin.index')

@section('content')
    <div class="container-fluid dashboard-container">
        <div class="row">
            <!-- Left Section -->
            <div class="col-lg-9">
                <!-- Overview Cards -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card overview-card shadow">
                            <h6>Total Request</h6>
                            <h1>{{ number_format($reqStats['totalRequests']) }}</h1>
                            <p>
                                <i
                                    class="fa fa-star {{ $reqStats['percentageChange'] >= 0 ? 'text-success' : 'text-danger' }}"></i>

                                <span
                                    style="color: {{ $reqStats['percentageChange'] >= 0 ? 'rgb(41, 141, 41)' : 'rgba(218, 20, 20, 0.774)' }}; font-weight: 550;">
                                    {{ $reqStats['percentageChange'] }}
                                </span>
                                <span style="color:#232ca8;font-weight:550">than last month</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card overview-card shadow">
                            <h6>Total Listings</h6>
                            <h1>{{ number_format($stats['totalListings']) }}</h1>
                            <p><i
                                    class="fa fa-star {{ $stats['percentageChange'] >= 0 ? 'text-success' : 'text-danger' }}"></i>
                                <span
                                    style="color: {{ $stats['percentageChange'] >= 0 ? 'rgb(41, 141, 41)' : 'rgba(218, 20, 20, 0.774)' }}; font-weight: 550;">
                                    {{ $stats['percentageChange'] }}
                                </span>
                                <span style="color:#232ca8;font-weight:550">than last month</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card overview-card shadow">
                            <h6>Done Deals</h6>
                            <h1>{{ $dealsStats['totalDoneDeals'] }}</h1>
                            <p><i
                                    class="fa fa-star {{ $dealsStats['percentageChange'] >= 0 ? 'text-success' : 'text-danger' }}"></i>
                                <span
                                    style="color: {{ $dealsStats['percentageChange'] >= 0 ? 'rgb(41, 141, 41)' : 'rgba(218, 20, 20, 0.774)' }}; font-weight: 550;">
                                    {{ $dealsStats['percentageChange'] }}
                                </span>
                                <span style="color:#232ca8;font-weight:550">than last month</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Profile Visits Chart -->
                <div class="card shadow mt-4 profile-visits-card">
                    <h6>Profile Visits</h6>
                    <canvas id="profileVisitsChart"></canvas>
                </div>
            </div>

            <!-- Right Section -->
            <div class="col-lg-3">
                <!-- Previous Month Performance Doughnut Chart -->
                <div class="card shadow performance-card position-relative">
                    <h6>Previous Month Performance</h6>
                    <canvas id="performanceChart"></canvas>
                    <div class="doughnut-legend mt-4 text-left  w-100 p-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="legend-item">
                                    <div class="icon-circle bg-success"><i class="fa fa-heart"></i></div>
                                    <p>Likes</p>
                                </div>
                                <div class="legend-item">
                                    <div class="icon-circle bg-primary"><i class="fa fa-eye"></i></div>
                                    <p>Views</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="legend-item">
                                    <div class="icon-circle bg-warning"><i class="fa fa-share-alt"></i></div>
                                    <p>Shares</p>
                                </div>
                                <div class="legend-item">
                                    <div class="icon-circle bg-danger"><i class="fa fa-star"></i></div>
                                    <p>Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 foot-card">
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card shadow text-center chart-card">
                            <h6>Reached Audience</h6>
                            <canvas id="reachedAudienceChart"></canvas>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow text-center chart-card">
                            <h6>Target</h6>
                            <canvas id="targetChart"></canvas> <!-- Target chart -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow text-center chart-card">
                            <h6>Engagements</h6>
                            <canvas id="engagementChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Parse the profile visits data passed from the controller
        const profileVisitsData = @json($profileVisits);

        // Profile Visits Bar Chart
        const ctxProfileVisits = document.getElementById('profileVisitsChart').getContext('2d');
        new Chart(ctxProfileVisits, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Visits',
                    data: profileVisitsData, // Use dynamic data here
                    backgroundColor: 'rgba(83, 104, 223, 0.5)',
                    borderColor: '#5368df',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Reached Audience Doughnut Chart
        // Use the performance data passed from the controller
        const targetAudience = {{ $reachedAudience['targetAudience'] }};
        const regularAudience = {{ $reachedAudience['totalViews'] }};

        // Reached Audience Doughnut Chart
        const ctxReachedAudience = document.getElementById('reachedAudienceChart').getContext('2d');
        new Chart(ctxReachedAudience, {
            type: 'doughnut',
            data: {
                labels: ['Target Audience', 'Regular Audience'],
                datasets: [{
                    data: [targetAudience, regularAudience],
                    backgroundColor: ['#394293', '#d3d7f6']
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                cutoutPercentage: 70, // Fixes the doughnut size
                aspectRatio: 1 // Ensures it remains circular
            }
        });

        // Target Line Chart
        const ctxTarget = document.getElementById('targetChart').getContext('2d');
        const target = @json($target);
        new Chart(ctxTarget, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Target Progress',
                    data: target,
                    borderColor: '#394293',
                    backgroundColor: 'rgba(83, 104, 223, 0.2)',
                    fill: true,
                    tension: 0.4,
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Engagement Doughnut Chart
        const others = {{ $interactions['totalEngagements'] }};
        const interactions = {{ $reachedAudience['targetAudience'] }};
        const ctxEngagement = document.getElementById('engagementChart').getContext('2d');
        new Chart(ctxEngagement, {
            type: 'doughnut',
            data: {
                labels: ['Interactions', 'Others'],
                datasets: [{
                    data: [interactions, others],
                    backgroundColor: ['#394293', '#d3d7f6']
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                cutoutPercentage: 70, // Fixes the doughnut size
                aspectRatio: 1 // Ensures it remains circular
            }
        });


        // Use the performance data passed from the controller
        const likes = {{ $interactions['totalLikes'] }};
        const views = {{ $interactions['totalViews'] }};
        const shares = {{ $interactions['totalShares'] }};
        const reviews = {{ $interactions['totalReviews'] }};

        // Previous Month Performance Doughnut Chart
        const ctxPerformance = document.getElementById('performanceChart').getContext('2d');
        new Chart(ctxPerformance, {
            type: 'doughnut',
            data: {
                labels: ['Likes', 'Views', 'Shares', 'Reviews'],
                datasets: [{
                    data: [likes, views, shares, reviews],
                    backgroundColor: ['#28a745', '#007bff', '#ffc107', '#dc3545']
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                cutoutPercentage: 70,
                aspectRatio: 1
            }
        });
    </script>

    <style>
        .dashboard-container {
            padding: 20px;
        }

        .overview-card {
            padding: 20px;
            border-radius: 15px;
            text-align: left;
            color: #232ca8;
            background-color: hsl(236, 62%, 85%);
        }

        .overview-card h1 {
            font-size: 36px;
            margin: 0;
        }

        .overview-card p {
            font-size: 14px;
            color: gray;
        }

        .profile-visits-card,
        .chart-card {
            height: 350px;
        }

        .performance-card {
            height: 500px;
        }

        .chart-card canvas {
            height: 70% !important;
            width: 100% !important;
        }

        .performance-card .icon-circle {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            /* Circle width */
            height: 40px;
            /* Circle height */
            border-radius: 50%;
            /* Ensures the element is a circle */
            color: white;
            font-size: 18px;
            margin-right: 10px;
            /* Space between icon and text */
            flex-shrink: 0;
            /* Prevents the circle from shrinking */
        }

        .doughnut-legend {
            display: flex;
            flex-wrap: wrap;
            /* Allows items to wrap onto a new row if needed */
            justify-content: flex-start;
            /* Align to the left */
            margin-top: 20px;
        }

        .legend-item {
            display: flex;
            align-items: center;
            /* Vertically centers text with the icon */
            margin-bottom: 10px;
            margin-right: 20px;
            /* Space between legend items */
            font-size: 14px;
        }

        .doughnut-legend p {
            font-size: 14px;
            color: #444;
            font-weight: 500;
            margin: 0;
        }

        .performance-card .icon-circle {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            /* Circle size */
            height: 40px;
            /* Circle size */
            border-radius: 50%;
            color: white;
            font-size: 18px;
            margin-right: 10px;
            /* Space between icon and text */
        }

        .doughnut-legend {
            display: flex;
            flex-wrap: wrap;
            /* Allows items to wrap onto a new row if needed */
            justify-content: flex-start;
            /* Align to the left */
            margin-top: 20px;
        }

        .legend-item {
            display: flex;
            align-items: center;
            /* Vertically centers text with the icon */
            margin-bottom: 10px;
            margin-right: 20px;
            /* Space between legend items */
            font-size: 14px;
        }

        .doughnut-legend p {
            font-size: 14px;
            color: #444;
            font-weight: 500;
            margin: 0;
        }



        .card {
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .card h6 {
            font-weight: bold;
            font-size: 16px;
        }

        canvas {
            width: 100% !important;
            height: auto !important;
        }

        /* Ensuring the charts are on the same row with equal sizes */
        .col-md-4 {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .col-md-4 .chart-card {
            width: 100%;
            /* Ensures equal width for all charts */
            height: 450px;
        }

        @media(max-width:992px) {
            .foot-card {
                margin-bottom: 200px
            }
        }
    </style>
@endsection
