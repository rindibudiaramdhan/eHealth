<?php

namespace App\Http\Controllers;

use App\Exports\PatientsExport;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

class PatientController extends Controller
{
    public function index(): View
    {
        $patient = Patient::get()->toArray();

        $columns = Schema::getColumnListing('patients');
        // Kolom yang ingin disembunyikan
        $hiddenColumns = ['id', 'is_active', 'created_at', 'updated_at'];

        // Filter kolom yang ingin disembunyikan
        $visibleColumns = array_diff($columns, $hiddenColumns);

        // Map kolom ke label deskriptif
        $columnLabels = [
            'medical_record_number' => 'Nomor Rekam Medis',
            'name' => 'Nama Lengkap',
            'birth_date' => 'Tanggal Lahir',
            'gender' => 'Jenis Kelamin',
            'address' => 'Alamat',
            'phone' => 'Nomor Telepon',
            'emergency_contact' => 'Kontak Darurat',
            'blood_type' => 'Golongan Darah',
            'allergies' => 'Alergi',
            'is_active' => 'Status Aktif',
        ];

        // Ubah kolom menjadi label yang lebih deskriptif
        $readableColumns = array_map(function($column) use ($columnLabels) {
            return $columnLabels[$column] ?? $column;
        }, $visibleColumns);

        $templateData = [
            'sidebar' => 'patient',
            'access' => 'admin',
            'columns' => $visibleColumns,
            'readable_columns' => $readableColumns,
            'data' => $patient,
        ];

        return view('patient', $templateData);
    }

    public function export()
    {
        return Excel::download(new PatientsExport, 'patients.xlsx');
    }
}
