@extends('master')
@section('title', 'Dashboard Promosi')
@section('btn-table', 'print')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @if(auth()->user()->role == 'karyawan')
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>Aktif</h3>

                    <p>Status Karyawan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                <div class="inner">
                    <h3>Karyawan</h3>

                    <p>Jabatan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                </div>
            </div>
            @else
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>15</h3>

                        <p>Jumlah Karyawan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>25</h3>

                        <p>Jumlah Pelamar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    </div>
                </div>
            @endif
        <!-- ./col -->
        </div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h1>DASHBOARD SIMPEG</h1>
                </div>
            </div>
        </div>
    </div>
@endsection