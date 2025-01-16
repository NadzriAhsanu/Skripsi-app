<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPatientController extends Controller
{
    public function index(Request $request)
    {
        $patients = DB::table('patients')
            ->when($request->input('patient_name'), function ($query, $name) {
                return $query->where('patient_name', 'like', '%' . $name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('pages.admin.data_patient.index', compact('patients'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|integer',
            'other_field' => 'required|string', // Sesuaikan dengan kebutuhan
        ]);

        // Simpan data
        Patient::create($request->all());
        return response()->json(['message' => 'Data berhasil disimpan.']);
    }

    public function register(PatientRequest $request)
    {
        $request->validated();

        $patient =[
            'patient_name' => $request->patient_name,
            'patient_nik' => $request->patient_nik,
            'patient_kk' => $request->patient_kk,
            'patient_phone' => $request->patient_phone,
            'patient_email' => $request->patient_email,
            'birth_date' => $request->birth_date,
            'address_line' => $request->address_line,
        ];
        $patient = Patient::create($patient);
        return response()->json([
            'status' => 'success',
            'message' => 'Patient registered successfully.',
        ]);
    }
}
