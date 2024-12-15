@extends('layouts.DashAdmin_nav')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
            <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="flex-shrink-0">
                            <div class="icon transition rounded-circle">
                                <i class="flaticon-goal"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="body-font fw-bold fs-3 mb-2">{{$totalProject}}</h3>
                            <span>Total Project</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
            <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="flex-shrink-0">
                            <div class="icon transition rounded-circle bg-00b69b">
                                <i class="flaticon-learning"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="body-font fw-bold fs-3 mb-2">{{$totalArticle}}</h3>
                            <span>Total Article</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
            <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="flex-shrink-0">
                            <div class="icon transition rounded-circle bg-ee368c">
                                <i class="flaticon-struggle"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="body-font fw-bold fs-3 mb-2">{{ $totalVisits }}</h3>
                            <span>Total number of visits</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
            <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="flex-shrink-0">
                            <div class="icon transition rounded-circle bg-00b69b">
                                <i class="flaticon-learning"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="body-font fw-bold fs-3 mb-2">{{$totalVideos}}</h3>
                            <span>Total Video</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
            <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="flex-shrink-0">
                            <div class="icon transition rounded-circle bg-ff8a54">
                                <i class="flaticon-idea"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="body-font fw-bold fs-3 mb-2">{{$totalDesigns}}</h3>
                            <span>Total Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
            <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="flex-shrink-0">
                            <div class="icon transition rounded-circle bg-2db6f5">
                                <i class="flaticon-purpose"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="body-font fw-bold fs-3 mb-2">{{$totalEmails}}</h3>
                            <span>Total Email</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-0">Visits Chart</h4>
            </div>
            <canvas id="visitChart" width="500" height="200"></canvas>
        </div>
    </div>

    <!-- Include Chart.js from CDN -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <script>
        $(document).ready(function () {
            $.ajax({
                url: "{{ route('visit-chart-data') }}",
                method: 'GET',
                success: function (data) {
                    const ctx = document.getElementById('visitChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: Object.keys(data),
                            datasets: [{
                                label: 'Nombre de visites',
                                data: Object.values(data),
                                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching chart data:', error);
                }
            });
        });
    </script>
@endsection

