<?php

namespace App\Http\Controllers;

use App\Exports\RegistrationExport;
use App\Models\Patient;
use App\Models\Polis;
use App\Models\Registration;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

class RegistrationController extends Controller
{
    public function index(): View
    {
        $data = Registration::with(['patient', 'poli'])
        ->get();

        $readableColumns = [
            'medical_record_number' => 'Nomor Rekam Medis',
            'nik' => 'NIK',
            'patient_name' => 'Nama Pasien',
            'poli_name' => 'Nama Poli',
            'registration_date' => 'Tanggal Pendaftaran',
            'status' => 'Status',
        ];

        $templateData = [
            'sidebar' => 'registration',
            'access' => '',
            'readable_columns' => $readableColumns,
            'data' => $data,
        ];

        return view('registration', $templateData);
    }

    public function export()
    {
        return Excel::download(new RegistrationExport, 'registration.xlsx');
    }

    public function add()
    {
        $patients = Patient::orderBy('name', 'asc')->get();
        $polis = Polis::orderBy('name', 'asc')->get();

        $templateData = [
            'sidebar' => 'registration',
            'access' => '',
            'patients' => $patients,
            'polis' => $polis,
        ];

        return view('registration-add', $templateData);
    }

    /**
     * Menyimpan data pendaftaran yang dikirimkan melalui formulir.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'poli_id' => 'required|exists:polis,id',
            'registration_date' => 'required',
            'is_cancelled' => 'boolean',
        ]);

        $registration = new Registration();
        $registration->patient_id = $request->patient_id;
        $registration->poli_id = $request->poli_id;
        $registration->registration_date = $request->registration_date;
        $registration->is_cancelled = $request->is_cancelled;
        $registration->save();

        return redirect('registration')->with('success', 'Data pendaftaran berhasil disimpan.');
    }

    /**
     * Menampilkan formulir edit untuk pendaftaran yang diberikan.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registration = Registration::findOrFail($id);
        $patients = Patient::orderBy('name', 'asc')->get();
        $polis = Polis::orderBy('name', 'asc')->get();

        $templateData = [
            'sidebar' => 'registration',
            'access' => '',
            'data' => $registration,
            'patients' => $patients,
            'polis' => $polis,
        ];

        return view('registration-edit', $templateData);
    }

    /**
     * Menyimpan perubahan data pendaftaran yang diedit.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo json_encode(['request' => $request->all(), 'id' => $id]);

        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'poli_id' => 'required|exists:polis,id',
            'registration_date' => 'required',
            'is_cancelled' => '',
        ]);

        $registration = Registration::findOrFail($id);

        $registration->update($request->all());

        return redirect('registration')->with('success', 'Data pendaftaran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->delete();

        return response()->json(['message' => 'Pendaftaran berhasil dihapus'], JsonResponse::HTTP_OK);
    }

    public function cancel($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->update([
            'is_cancelled' => 1,
        ]);

        return response()->json(['message' => 'Data pendaftaran berhasil dibatalkan'], JsonResponse::HTTP_OK);
    }

    public function pay($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->update([
            'paid_at' => date('Y-m-d H:i:s'),
        ]);

        return response()->json(['message' => 'Data layanan berhasil dibayarkan'], JsonResponse::HTTP_OK);
    }
}
