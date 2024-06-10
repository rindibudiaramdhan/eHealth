@extends('layout.layout')

@extends('patient.head')
@extends('layout.sidebar')
@extends('layout.navbar')
@extends('layout.footer')
@extends('patient.modal')
@extends('patient.script')
@extends('layout.success')
@extends('layout.errors')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Master Data Pasien</h1>
    <p class="mb-4">Halaman Master Data Pasien adalah pusat informasi untuk mengelola data pasien dalam sistem manajemen rumah sakit atau klinik. Halaman ini dirancang untuk menyediakan akses mudah dan cepat kepada staf medis dan administrasi untuk melihat, menambah, mengubah, dan menghapus informasi pasien. Akses ke halaman ini dibatasi hanya untuk pengguna dengan hak akses admin untuk memastikan keamanan dan integritas data pasien.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
        </div>
        <div class="card-body">
            <div class="col-xl-8 col-lg-7 pb-3">
                <a class="btn btn-sm btn-primary" href="{{ route('patient/add') }}"><i class="fas fa-plus"></i> Tambah Pasien</a>
                <a class="btn btn-sm btn-success" href="{{ route('patient-export') }}"><i class="fas fa-file-excel"></i> Export</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            @foreach ($readable_columns as $col)
                            <th>{{ $col }}</th>
                            @endforeach
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            @foreach ($readable_columns as $col)
                            <th>{{ $col }}</th>
                            @endforeach
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $val)
                        <tr>
                            @foreach ($columns as $col)
                            <td>{{ $val[$col] }}</td>
                            @endforeach
                            <td>
                                <a class="btn btn-sm btn-block btn-info" href="{{ route('patient/edit', $val['id']) }}">Edit</a>
                                <a class="btn btn-sm btn-block btn-danger" href="#" data-toggle="modal" data-target="#deleteModal" data-id="{{ $val['id'] }}">Hapus</a>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
