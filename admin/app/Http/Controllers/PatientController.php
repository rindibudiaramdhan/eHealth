<?php

namespace App\Http\Controllers;

use App\Exports\PatientsExport;
use App\Models\Patient;
use Illuminate\Http\JsonResponse;
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
        $hiddenColumns = ['id', 'is_active', 'created_at', 'updated_at', 'deleted_at'];
        $visibleColumns = array_diff($columns, $hiddenColumns);
        $columnLabels = [
            'medical_record_number' => 'Nomor Rekam Medis',
            'name' => 'Nama Lengkap',
            'nik' => 'NIK',
            'birth_date' => 'Tanggal Lahir',
            'gender' => 'Jenis Kelamin',
            'address' => 'Alamat',
            'phone' => 'Nomor Telepon',
            'emergency_contact' => 'Kontak Darurat',
            'blood_type' => 'Golongan Darah',
            'allergies' => 'Alergi',
            'is_active' => 'Status Aktif',
        ];

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

    public function add()
    {
        $templateData = [
            'sidebar' => 'patient',
            'access' => 'admin',
        ];

        return view('patient-add', $templateData);
    }

    /**
     * Menyimpan data pasien yang dikirimkan melalui formulir.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'medical_record_number' => 'required|unique:patients',
            'name' => 'required',
            'nik' => 'required|min:16|max:16',
            'birth_date' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'emergency_contact' => 'required',
            'blood_type' => 'required',
            'allergies' => 'required',
            'is_active' => 'required',
        ]);

        $patient = new Patient();
        $patient->medical_record_number = $request->medical_record_number;
        $patient->name = $request->name;
        $patient->birth_date = $request->birth_date;
        $patient->gender = $request->gender;
        $patient->address = $request->address;
        $patient->phone = $request->phone;
        $patient->emergency_contact = $request->emergency_contact;
        $patient->blood_type = $request->blood_type;
        $patient->allergies = $request->allergies;
        $patient->is_active = $request->is_active;
        $patient->save();

        return redirect('patient')->with('success', 'Data pasien berhasil disimpan.');
    }

    /**
     * Menampilkan formulir edit untuk pasien yang diberikan.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);

        $templateData = [
            'sidebar' => 'patient',
            'access' => 'admin',
            'data' => $patient,
        ];

        return view('patient-edit', $templateData);
    }

    /**
     * Menyimpan perubahan data pasien yang diedit.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo json_encode(['request' => $request->all(), 'id' => $id]);

        $request->validate([
            'medical_record_number' => 'required',
            'name' => 'required',
            'nik' => 'required|min:16|max:16',
            'birth_date' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'emergency_contact' => 'required',
            'blood_type' => 'required',
            'allergies' => 'required',
            'is_active' => 'required',
        ]);

        $patient = Patient::findOrFail($id);

        $patient->update($request->all());

        return redirect('patient')->with('success', 'Data pasien berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return response()->json(['message' => 'Pasien berhasil dihapus'], JsonResponse::HTTP_OK);
    }
}
