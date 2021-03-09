@extends('layouts.superadmin')

@section('title', 'Dashboard')
@section('title-2', 'Dashboard')
@section('title-3', 'Dashboard')
@section('describ')
    Ini adalah halaman dashboard awal untuk superadmin
@endsection
@section('icon-l', 'icon-home')
@section('icon-r', 'icon-home')
@section('link')
    {{ route('superadmin.index') }}
@endsection

@section('content')
<div class="row">
    {{-- sale revenue card start --}}
    <div class="col-md-12 col-xl-8">
        <div class="card sale-card">
            <div class="card-header">
                <h5>Grafik Siswa per TA</h5>
            </div>
            <div class="card-block">
                <div id="siswa-chart" class="chart-shadow" style="height:380px"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xl-4">
        <div class="card comp-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-b-25">Siswa</h6>
                        <h3 class="f-w-700 text-c-blue">{{ $siswa }}</h3>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users bg-c-blue"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="card comp-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-b-25">Guru</h6>
                        <h3 class="f-w-700 text-c-green">{{ $guru }}</h3>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users bg-c-green"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="card comp-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-b-25">Orang Tua</h6>
                        <h3 class="f-w-700 text-c-yellow">{{ $orangtua }}</h3>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users bg-c-yellow"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Project statustic start --}}
    <div class="col-xl-12">
        <div class="card shadow-sm">
            <div class="card-header">
                <h5>Pengumuman</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                        <li><i class="feather icon-maximize full-card"></i></li>
                        <li><i class="icon-minus minimize-card"></i></li>
                        <li><i class="feather icon-refresh-cw reload-card"></i></li>
                        <li><i class="icon-trash close-card"></i></li>
                        <li><i class="feather icon-chevron-left open-card-option"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block p-b-0">
                <p class="text-muted">
                    Tidak ada pengumuman.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <!-- <script type="text/javascript" src="{{ asset('assets/pages/dashboard/custom-dashboard.min.js') }}"></script> -->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

    <script>
        am4core.useTheme(am4themes_animated);

        const chart = am4core.create("siswa-chart", am4charts.XYChart);
        chart.dataSource.url = "{{ route('admin.siswa.by.tahun') }}";
        chart.dataSource.parser = new am4core.JSONParser();
        chart.dataSource.parser.options.emptyAs = 0;

        chart.data = [
            @foreach ($siswasByTahun as $siswa)
                {
                    "tahun": "{{ $siswa->tahun }}",
                    "siswa": {{ $siswa->total }}
                },
            @endforeach
        ];
// chart.data = [{
//   "tahun": "USA",
//   "visits": 2025
// },]; 
// {
//   "country": "China",
//   "visits": 1882
// }, {
//   "country": "Japan",
//   "visits": 1809
// }, {
//   "country": "Germany",
//   "visits": 1322
// }, {
//   "country": "UK",
//   "visits": 1122
// }, {
//   "country": "France",
//   "visits": 1114
// }, {
//   "country": "India",
//   "visits": 984
// }, {
//   "country": "Spain",
//   "visits": 711
// }, {
//   "country": "Netherlands",
//   "visits": 665
// }, {
//   "country": "Russia",
//   "visits": 580
// }, {
//   "country": "South Korea",
//   "visits": 443
// }, {
//   "country": "Canada",
//   "visits": 441
// }, {
//   "country": "Brazil",
//   "visits": 395
// }];

// Create axes

        const categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "tahun";
        categoryAxis.renderer.grid.template.location = 0;
        categoryAxis.renderer.minGridDistance = 30;

        categoryAxis.renderer.labels.template.adapter.add("dy", function(dy, target) {
        if (target.dataItem && target.dataItem.index & 2 == 2) {
            return dy + 25;
        }
        return dy;
        });

        const valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

        // Create series
        const series = chart.series.push(new am4charts.ColumnSeries());
        series.dataFields.valueY = "siswa";
        series.dataFields.categoryX = "tahun";
        series.name = "Siswa";
        series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";
        series.columns.template.fillOpacity = .8;

        const columnTemplate = series.columns.template;
        columnTemplate.strokeWidth = 2;
        columnTemplate.strokeOpacity = 1;</script>
@endpush