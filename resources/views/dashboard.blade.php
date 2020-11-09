@extends('../layouts/master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <i class="mdi mdi-human-male-female font-20 text-info"></i>
                            <p class="font-16 m-b-5">Kepala Keluarga</p>
                        </div>
                        <div class="col-5">
                            <h1 class="font-light text-right mb-0">{{ $total }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <i class="mdi mdi-human-child font-20 text-success"></i>
                            <p class="font-16 m-b-5">Jumlah Penduduk</p>
                        </div>
                        <div class="col-5">
                            <h1 class="font-light text-right mb-0">{{ $penduduk }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <i class="mdi mdi-human-male font-20 text-purple"></i>
                            <p class="font-16 m-b-5">Jumlah Laki - Laki</p>
                        </div>
                        <div class="col-5">
                            <h1 class="font-light text-right mb-0">{{ $male }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <i class="mdi mdi-human-female font-20 text-danger"></i>
                            <p class="font-16 m-b-5">Jumlah Perempuan</p>
                        </div>
                        <div class="col-5">
                            <h1 class="font-light text-right mb-0">{{ $female }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Agama</h4>
                    <div class="row ">
                        <!-- column -->
                        <div class="col-6">
                            <div class="agama mt-3"></div>
                        </div>
                        <!-- column -->
                        <div class="col-5 ml-auto mt-2 label-text">
                            <ul class="list-style-none">
                                <li class="m-b-10"> <span class="label-color"></span> <span class="text-muted">Islam</span></li>
                                <li class="m-b-10"> <span class="label-color"></span> <span class="text-muted">Kristen</span></li>
                                <li class="m-b-10"> <span class="label-color"></span> <span class="text-muted">Katolik</span></li>
                                <li class="m-b-10"> <span class="label-color"></span> <span class="text-muted">Hindu</span></li>
                                <li class="m-b-10"> <span class="label-color"></span> <span class="text-muted">Budha</span></li>
                            </ul>
                        </div>
                        <!-- column -->
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Gender</h4>
                    <div class="row ">
                        <!-- column -->
                        <div class="col-6">
                            <div class="gender mt-3"></div>
                        </div>
                        <!-- column -->
                        <div class="col-5 ml-auto mt-5 label-text">
                            <ul class="list-style-none">
                                <li class="m-b-10"> <span class="label-color"></span> <span class="text-muted">Laki - Laki</span></li>
                                <li class="m-b-10"> <span class="label-color"></span> <span class="text-muted">Perempuan</span></li>
                            </ul>
                        </div>
                        <!-- column -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('javascript')
<script type="text/javascript">
    var dataAgama = {!! json_encode($dataAgama) !!};
    var dataGender = {!! json_encode($dataGender) !!};
    $(function () {
        "use strict";

        var dataChartAgama = {
            series: dataAgama
        };

        var dataChartGender = {
            series: dataGender
        };

        var sum = function (a, b) {
            return a + b
        };

        var chart = Chartist.Pie(
            ".agama",
            dataChartAgama, {
                labelInterpolationFnc: function (value) {
                    return Math.round(value / dataChartAgama.series.reduce(sum) * 100) + '%';
                },
                donut: true,
                donutWidth: 30,
            });

        var chart = Chartist.Pie(
            ".gender",
            dataChartGender, {
                labelInterpolationFnc: function (value) {
                    return Math.round(value / dataChartGender.series.reduce(sum) * 100) + '%';
                },
                donut: true,
                donutWidth: 30,
            });

        var chart = [chart];
    });

</script>
@endsection
