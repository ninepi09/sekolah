@extends('layouts.siswa')

@section('title', 'Dashboard')
@section('title-2', 'Dashboard')
@section('title-3', 'Dashboard')
@section('describ')
    Ini adalah halaman dashboard awal untuk siswa
@endsection
@section('icon-l', 'icon-home')
@section('icon-r', 'icon-home')
@section('link')
    {{ route('admin.index') }}
@endsection

@section('content')
<div class="row" >
    {{-- sale revenue card start --}}
    <div class="col-md-12 col-xl-8" >
        <div class="card  text-white bg-dark mb-3 sale-card text-center">
            <div class="card-header" >
            <head>
<style>
div.ex1 {
  background-color: dark;
  width: 650px;
  height: 350px;
  overflow: auto;
  
}
</style>
</head>
<body>
<h2 class="text-left">Pengumuman</h2>
            </div>
            <div class="card-block text-left"> 
            <div class="ex1">
                <h5>14 Juni 2021 | Penerimaan Siswa Baru</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis dolor quis excepturi adipisci voluptas incidunt pariatur repudiandae, provident nisi facere et voluptatibus voluptatem odit reprehenderit quam ipsum vitae deleniti amet!</p>
                <a>&nbsp</a>
                
                <h5>23 Juni 2021 | Masuk Sekolah</h5>
                <p>Dolorem rem quae adipisci enim sed tempore suscipit vero quibusdam nam fugit numquam, perspiciatis autem magni dolor! Illum eos architecto sequi expedita commodi ea voluptatem quam, aperiam sit ducimus reprehenderit.</p>
                <a>&nbsp</a>
                
                <h5>19 Agustus 2021 | Libur Nasional</h5>
                <p>Dolorem rem quae adipisci enim sed tempore suscipit vero quibusdam nam fugit numquam, perspiciatis autem magni dolor! Illum eos architecto sequi expedita commodi ea voluptatem quam, aperiam sit ducimus reprehenderit.</p>
                <a>&nbsp</a>

                <h5>20 September 2021 | Ujian Akhir Sekolah</h5>
                <p>Dolorem rem quae adipisci enim sed tempore suscipit vero quibusdam nam fugit numquam, perspiciatis autem magni dolor! Illum eos architecto sequi expedita commodi ea voluptatem quam, aperiam sit ducimus reprehenderit.</p>
                <a>&nbsp</a>

                <h5>20 Oktober 2021 | Kenaikan Kelas</h5>
                <p>Dolorem rem quae adipisci enim sed tempore suscipit vero quibusdam nam fugit numquam, perspiciatis autem magni dolor! Illum eos architecto sequi expedita commodi ea voluptatem quam, aperiam sit ducimus reprehenderit.</p>
                <a>&nbsp</a>

                <h5>16 Desember 2021 | Libur Nasional</h5>
                <p>Dolorem rem quae adipisci enim sed tempore suscipit vero quibusdam nam fugit numquam, perspiciatis autem magni dolor! Illum eos architecto sequi expedita commodi ea voluptatem quam, aperiam sit ducimus reprehenderit.</p>
                <a>&nbsp</a>
            </div>
        </div>
    </div>
</div>
</body>
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

    {{-- testimonial and top selling start --}}
    <div class="col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Leaderboard</h5>
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
                                <th width= 15%>Minggu Ini</th>
                                <th width= 15%>Minggu Lalu</th>
                                <th width= 25%>Nama</th>
                                <th width= 15%>E-Book</th>
                                <th width= 15%>Audio Book</th>
                                <th width= 15%>Video Book</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>SMA N 1 Medan</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ 60 }}</td>
                                <td>{{ 60 }}</td>
                            </tr>
                            <tr>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>SMA N 1 Brandan Barat</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ 60 }}</td>
                                <td>{{ 60 }}</td>
                            </tr>
                            <tr>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>SMA N 1 Babalan</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ 60 }}</td>
                                <td>{{ 60 }}</td>
                            </tr>
                            <tr>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>SMA N 1 Besitang</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ 20 }}</td>
                                <td>{{ 60 }}</td>
                            </tr>
                            <tr>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>SMK YPT Maju</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ 30 }}</td>
                                <td>{{ 60 }}</td>
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