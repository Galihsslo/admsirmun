
@extends('layout.bendahara')
@section('table')
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <h4 class="card-title">Line chart</h4>
                <canvas id="lineChart" width="279" height="139" style="display: block; width: 279px; height: 139px;"
                    class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
@endsection
