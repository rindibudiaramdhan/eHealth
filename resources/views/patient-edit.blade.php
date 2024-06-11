@extends('layout.layout')

@extends('patient.head')
@extends('layout.sidebar')
@extends('layout.navbar')
@extends('layout.footer')
@extends('layout.modal')
@extends('patient.script')
@extends('layout.success')
@extends('layout.errors')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Edit Pasien</div>
                    <div class="card-body">
                        <form action="{{ route('patient/update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="medical_record_number">Nomor Rekam Medis</label>
                                <input type="text" name="medical_record_number" id="medical_record_number" class="form-control" value="{{ $data->medical_record_number }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" id="nik" class="form-control" value="{{ $data->nik }}" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $data->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="birth_date">Tanggal Lahir</label>
                                <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ $data->birth_date }}" required>
                            </div>
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value="male" {{ $data->gender === 'male' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="female" {{ $data->gender === 'female' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <textarea name="address" id="address" class="form-control" required>{{ $data->address }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ $data->phone }}" required>
                            </div>
                            <div class="form-group">
                                <label for="emergency_contact">Kontak Darurat</label>
                                <input type="text" name="emergency_contact" id="emergency_contact" class="form-control" value="{{ $data->emergency_contact }}" required>
                            </div>
                            <div class="form-group">
                                <label for="blood_type">Golongan Darah</label>
                                <input type="text" name="blood_type" id="blood_type" class="form-control" value="{{ $data->blood_type }}" required>
                            </div>
                            <div class="form-group">
                                <label for="allergies">Alergi</label>
                                <textarea name="allergies" id="allergies" class="form-control" required>{{ $data->allergies }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="is_active">Status Aktif</label>
                                <select name="is_active" id="is_active" class="form-control" required>
                                    <option value="1" {{ $data->is_active ? 'selected' : '' }}>Aktif</option>
                                    <option value="0" {{ !$data->is_active ? 'selected' : '' }}>Non-Aktif</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="#" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
