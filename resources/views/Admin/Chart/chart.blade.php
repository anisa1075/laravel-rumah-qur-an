@extends('template.base')
@section('title', 'Chart User')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Chart User</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
    </ol>
</div>

{{-- chart --}}
<section class="content mb-5">
    <div class="container-fluid">
        <h1 class="text-center"></h1>
        <div id="chart"></div>
    </div>
</section>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/10/highcharts.js"></script>

<script type="text/javascript">
    var user = <?php echo json_encode($user) ?>;
    Highcharts.chart('chart', {
        title: {
            text: "Chart Data User"
        },
        xAxis: {
            categories: ['Admin', 'Guru', 'Santri']
        },
        yAxis: {
            title: {
                text: "Jumlah User"
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true,
            }
        },
        series: [{
            name: 'user',
            data:user
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    })
</script>


@endsection