@extends('layouts.admin')

@section('title', 'Dashboard')
@section('title-2', 'Dashboard')
@section('title-3', 'Dashboard')
@section('describ')
    Ini adalah halaman dashboard awal untuk admin
@endsection
@section('icon-l', 'icon-home')
@section('icon-r', 'icon-home')
@section('link')
    {{ route('admin.index') }}
@endsection

@section('content')
<div class="row">
    {{-- sale revenue card start --}}
    <div class="col-md-12 col-xl-8">
        <div class="card sale-card">
            <div class="card-header">
                <h5>Grafik</h5>
            </div>
            <div class="card-block">
                <div id="sales-analytics" class="chart-shadow" style="height:380px"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xl-4">
        <div class="card comp-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-b-25">E-Book</h6>
                        <h3 class="f-w-700 text-c-blue">{{ rand(10, 100) }}</h3>
                        <p class="m-b-0">May 23 - June 01 ({{ date('Y') }})</p>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book-open bg-c-blue"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="card comp-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-b-25">Audio Book</h6>
                        <h3 class="f-w-700 text-c-green">{{ rand(10, 100) }}</h3>
                        <p class="m-b-0">May 23 - June 01 ({{ date('Y') }})</p>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-file-audio bg-c-green"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="card comp-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-b-25">Video Book</h6>
                        <h3 class="f-w-700 text-c-yellow">{{ rand(10, 100) }}</h3>
                        <p class="m-b-0">May 23 - June 01 ({{ date('Y') }})</p>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-file-video bg-c-yellow"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Project statustic start --}}
    <div class="col-xl-12">
        <div class="card proj-progress-card">
            <div class="card-block">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <h6>Siswa</h6>
                        <h5 class="m-b-30 f-w-700">532<span class="text-c-green m-l-10">+1.69%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-c-red" style="width:25%"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <h6>Guru</h6>
                        <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-c-blue" style="width:65%"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <h6>Sekolah</h6>
                        <h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+0.99%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-c-green" style="width:85%"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <h6>Kota/Kabupaten</h6>
                        <h5 class="m-b-30 f-w-700">365<span class="text-c-green m-l-10">+0.35%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- testimonial and top selling start --}}
    <div class="col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Sekolah</h5>
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
                <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                        <thead>
                            <tr>
                                <th>Nama Sekolah</th>
                                <th>Kota/Kab</th>
                                <th>Jumlah Siswa</th>
                                <th>Jumlah Guru</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>SMA N 1 Medan</td>
                                <td>Medan</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ rand(10,1000) }}</td>
                            </tr>
                            <tr>
                                <td>SMA N 1 Brandan Barat</td>
                                <td>Langkat</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ rand(10,1000) }}</td>
                            </tr>
                            <tr>
                                <td>SMA N 1 Babalan</td>
                                <td>Langkat</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ rand(10,1000) }}</td>
                            </tr>
                            <tr>
                                <td>SMA N 1 Besitang</td>
                                <td>Langkat</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ rand(10,1000) }}</td>
                            </tr>
                            <tr>
                                <td>SMK YPT Maju</td>
                                <td>Besitang</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ rand(10,1000) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script type="text/javascript" src="{{ asset('assets/pages/dashboard/custom-dashboard.min.js') }}"></script>
@endpush