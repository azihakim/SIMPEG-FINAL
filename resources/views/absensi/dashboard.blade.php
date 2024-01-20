@extends('master')
@section('title', 'Dashboard Absensi')
@section('btn-table', 'print')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-10">
                        <h2>Absensi</h2>
                    </div>
                    @if (auth()->user()->role == 'karyawan')
                        <div class="col-sm-2">
                            <a class="btn btn-block btn-outline-primary" type="button" data-toggle="modal" data-target="#modal-default-1">Absensi</a>
                        </div>
                    @endif
                    
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('absensi.filter') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-3">
                            <label>Dari Tanggal</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input name="dari_tgl" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Hingga Tanggal</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input name="hingga_tgl" type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Filter</label>
                                <div class="input-group">
                                    <button class="btn btn-md btn-outline-primary">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NAMA</th>
                        <th>LOKASI</th>
                        <th>ABSEN</th>
                        <th>TANGGAL</th>
                        <th>FOTO</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absensi as $item)
                        <tr>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td>{{ $item->jenis }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <img src="{{ asset('storage/dokument/' . $item->foto) }}" alt="Deskripsi Gambar" style="max-width: 150px; max-height: 360px;">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>NAMA</th>
                        <th>LOKASI</th>
                        <th>ABSEN</th>
                        <th>TANGGAL</th>
                        <th>FOTO</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        </div>
    </div>
    </div>
    @include('absensi.modal')
@endsection
