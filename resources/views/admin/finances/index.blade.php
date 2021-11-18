@extends('admin.home')

@section('cdns')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
@endsection
@section('rightDashboardContent')
<div class="chart container">
    <div class="row">
        <div class="col-12">
            <h1 class="txt-oxford">Finances</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-12"><h4 class="txt-oxford">Total</h4></div>
        <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <!-- Stats income per month -->
                <div class="carousel-item active">
                    <canvas id="myChart"></canvas>
                </div>
                <!-- Stats orders per month -->
                <div class="carousel-item">
                    <canvas id="myChart2"></canvas>
                </div>
                <!--Amount Total Stats-->
                <div class="carousel-item">
                    <canvas id="myChart3"></canvas>
                </div>
                <!--Orders Total Stats-->
                <div class="carousel-item">
                    <canvas id="myChart4"></canvas>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    const monthly_orders = {!! json_encode($monthly_orders) !!};
    const monthly_income = {!! json_encode($monthly_income) !!};

    /* Monthly Income */
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',    
        data: {
            datasets: [{
                label: 'Monthly Income',
                data: monthly_income,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)'
                ],
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
    /* Monthly Orders */
    const ctx2 = document.getElementById('myChart2').getContext('2d');
    const myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            datasets: [{
                label: 'Monthly Orders',
                data: monthly_orders,
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)'
                ],
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
    /* Total income */
    const ctx3 = document.getElementById('myChart3').getContext('2d');
    const myChart3 = new Chart(ctx3, {
        type: 'bar',    
        data: {
            labels: ['Amount Total'],
            datasets: [{
                label: 'Amount Total',
                data: [{{$total}}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)'
                ],
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
    /* Total orders number */
    const ctx4 = document.getElementById('myChart4').getContext('2d');
    const myChart4 = new Chart(ctx4, {
        type: 'bar',    
        data: {
            labels: ['Orders Total'],
            datasets: [{
                label: 'Orders Total',
                data: [{{count($orders)}}],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)'
                ],
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
</script>
@endsection