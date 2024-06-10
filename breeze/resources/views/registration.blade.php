@extends('layout.layout')

@extends('patient.head')
@extends('layout.sidebar')
@extends('layout.navbar')
@extends('layout.footer')
@extends('registration.modal')
@extends('registration.script')
@extends('layout.success')
@extends('layout.errors')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pendaftaran</h1>
    <p class="mb-4">Halaman Pendaftaran Pasien adalah fitur yang memungkinkan pengguna untuk melakukan berbagai tindakan terkait pendaftaran dan pengelolaan pasien di rumah sakit atau pusat kesehatan.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran</h6>
        </div>
        <div class="card-body">
            <div class="col-xl-8 col-lg-7 pb-3">
                <a class="btn btn-sm btn-primary" href="{{ route('registration/add') }}"><i class="fas fa-plus"></i> Tambah Pendaftaran</a>
                <a class="btn btn-sm btn-success" href="{{ route('registration-export') }}"><i class="fas fa-file-excel"></i> Export</a>
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
                            <td>{{ $val->patient->medical_record_number }}</td>
                            <td>{{ $val->patient->nik }}</td>
                            <td>{{ $val->patient->name }}</td>
                            <td>{{ $val->poli->name }}</td>
                            <td>{{ $val->registration_date }}</td>
                            @if($val->status == 'Batal')
                            <td><span class="badge badge-danger">{{ $val->status }}</span></td>
                            @elseif($val->status == 'Lunas')
                            <td><span class="badge badge-success">{{ $val->status }}</span></td>
                            @else
                            <td><span class="badge badge-primary">{{ $val->status }}</span></td>
                            @endif
                            <td>
                                @if(!$val->is_cancelled && !$val->paid_at)
                                <a class="btn btn-sm btn-block btn-info" href="{{ route('registration/edit', $val->id) }}"><i class="fas fa-pen"></i> Edit</a>
                                <a class="btn btn-sm btn-block btn-success" href="#" data-toggle="modal" data-target="#payModal" data-id="{{ $val->id }}"><i class="fas fa-money-bill"></i> Bayar</a>
                                <a class="btn btn-sm btn-block btn-danger" href="#" data-toggle="modal" data-target="#cancelModal" data-id="{{ $val->id }}"><i class="fas fa-times-circle"></i> Batal Daftar</a>
                                @endif
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
