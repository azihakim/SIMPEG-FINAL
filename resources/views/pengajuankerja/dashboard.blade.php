@extends('master')
@section('title', 'Dashboard Recruitment')
@section('content')
    @include('pengajuankerja.modal')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                {{-- @if (auth()->user()->jabatan == 'Admin') --}}
                <div class="row">
                    <div class="col-sm-10">
                        <h2>Data Pengajuan Kerja</h2>
                    </div>
                    <div class="col-sm-2">
                        <a class="btn btn-block btn-outline-primary" type="button" data-toggle="modal" data-target="#modal-default-1">Tambah Pengajuan</a>
                    </div>
                </div>
                {{-- @endif --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>BERKAS</th>
                        <th>WAKTU SUBMIT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>BERKAS</th>
                        <th>WAKTU SUBMIT</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        </div>
    </div>
    </div>
@endsection
