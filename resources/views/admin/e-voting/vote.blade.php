@extends('layouts.admin')

{{-- config 1 --}}
@section('title', 'E-Voting | Vote')
@section('title-2', 'Vote')
@section('title-3', 'Vote')

@section('describ')
    Ini adalah halaman vote untuk admin
@endsection

@section('icon-l', 'fa fa-poll-h')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('admin.e-voting.vote') }}
@endsection

{{-- main content --}}
@section('content')


    <div class="row container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Pemilihan Ketua OSIS</h5>
                </div>
                <div class="card-block">
                    <form id="form-voting">
                        @csrf
                    <div class="row">
                        @foreach($names as $name)
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>#{{ $no++ }}</h4>
                                </div>
                                <div class="card-block">
                                    <center>
                                        <img src="{{ asset('img/avatar.png') }}" style="width: 200px; height: 200px;">
                                        <br><br>
                                        <h4>{{ $name->name }}</h4>
                                        <input type="text" name="calon_kandidat_id" id="calon_kandidat_id" class="form-control" value="{{ $name->name }}" readonly>
                                        <p>Pilih Saya sebagai Ketua OSIS</p>
                                        <input type="hidden" name="hidden_id" id="hidden_id">
                                        <input type="hidden" id="action" val="add">
                                        <input type="submit" class="btn btn-sm btn-outline-success" value="Vote" id="btn">
                                    </center>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    </form>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Hasil Voting</h5>
                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                </div>
                                <div class="card-block">
                                    <canvas id="myChart" width="284" height="284" style="display: block; width: 284px; height: 284px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- addons css --}}
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
    <style>
        .btn i {
            margin-right: 0px;
        }
    </style>
@endpush

{{-- addons js --}}
@push('js')
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('bower_components/chart.js/js/Chart.js') }}"></script>
    <!-- <script src="{{ asset('bower_components/chart.js/js/chartjs-custom.js') }}"></script> -->
    <script>
        $(document).ready(function () {
            $('#order-table').DataTable();

            $('#form-voting').on('submit', function (event) {
                event.preventDefault();

                var url = '';
                if ($('#nama_calon').val() == 'add') {
                    url = "{{ route('admin.e-voting.vote') }}";
                }

                if ($('#action').val() == 'edit') {
                    url = "{{ route('admin.e-voting.vote-update') }}";
                }

                $.ajax({
                    url: url,
                    method: 'POST',
                    dataType: 'JSON',
                    data: $(this).serialize(),
                    success: function (data) {
                        var html = ''
                        if (data.errors) {
                            html = data.errors[0];
                            $('#nama_calon').addClass('is-invalid');
                            toastr.error(html);
                        }

                        if (data.success) {
                            toastr.success('Sukses!');
                            $('#nama_calon').removeClass('is-invalid');
                            $('#form-voting')[0].reset();
                            $('#action').val('add');
                            $('#btn')
                                .removeClass('btn-outline-info')
                                .addClass('btn-outline-success')
                                .val('Vote');
                        }
                        $('#form_result').html(html);
                    }
                });
            });

        });
    </script>
    <script>
        "use strict";
        $(document).ready(function(){
        /*Doughnut chart*/
        var ctx = document.getElementById("myChart");
        var data = {
            labels: [
                "Ramadhan", "Mulya"
            ],
            datasets: [{
                data: [40, 10],
                backgroundColor: [
                    "#1ABC9C",
                    "#FCC9BA",
                    "#B8EDF0",
                    "#B4C1D7"
                ],
                borderWidth: [
                    "0px",
                    "0px",
                    "0px",
                    "0px"
                ],
                borderColor: [
                    "#1ABC9C",
                    "#FCC9BA",
                    "#B8EDF0",
                    "#B4C1D7"

                ]
            }]
        };

        var myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: data
        });

    });
    </script>
@endpush