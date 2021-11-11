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
        <!--Orders Total Stats-->
        <div class="col col-md-6">
            <canvas id="myChart"></canvas>
        </div>
        <!--Amount Total Stats-->
        <div class="col col-md-6">
            <canvas id="myChart2"></canvas>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Order Total'],
            datasets: [{
                label: 'Order Total',
                data: [{{count($orders)}}],
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
    const ctx2 = document.getElementById('myChart2').getContext('2d');
    const myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Amount'],
            datasets: [{
                label: 'Amount Total',
                data: [{{$total}}],
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