@extends('layout.layout')

@extends('registration.head')
@extends('layout.sidebar')
@extends('layout.navbar')
@extends('layout.footer')
@extends('layout.modal')
@extends('registration.script')
@extends('layout.success')
@extends('layout.errors')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Ubah Pendaftaran</div>
                    <div class="card-body">
                        <form action="{{ route('registration/update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="patient_id">Pilih Pasien</label>
                                <select class="form-control select2" id="patient_id" name="patient_id">
                                    <option value="">Cari pasien...</option>
                                    @foreach($patients as $patient)
                                        <option value="{{ $patient->id }}" {{ $patient->id == $data->patient_id ? 'selected' : '' }}>{{ $patient->name }} (NRM: {{ $patient->medical_record_number }}) (NIK: {{ $patient->nik }})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="poli_id">Poli</label>
                                <select class="form-control" id="poli_id" name="poli_id" required>
                                    @foreach ($polis as $poli)
                                    <option value="{{ $poli->id }}" {{ $poli->id == $data->poli_id ? 'selected' : '' }}>{{ $poli->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="is_cancelled" value="0" readonly>
                            <div class="form-group">
                                <label for="registration_date">Tanggal Pendaftaran</label>
                                <input type="date" class="form-control" id="registration_date" name="registration_date" value="{{ date('Y-m-d') }}" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Daftarkan Pasien</button>
                                <a href="#" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
