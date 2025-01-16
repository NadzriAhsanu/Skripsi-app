<?php

namespace App\Http\Controllers\bidan;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\RekamMedis;
use Illuminate\Http\Request;

class BidanController extends Controller
{
    public function listPatients()
    {
        $patients = Patient::all();
        return view('pages.bidan.patients', compact('patients'));
    }

    public function createRekamMedis($patientId)
    {
        $patients = Patient::all();
        $patient = Patient::findOrFail($patientId);
        return view('pages.bidan.create_rekam_medis_record', compact('patients', 'patient'));
    }

    public function storeRekamMedis(Request $request, $patientId)
{
    $request->validate([
        'diagnosa' => 'required',
        'tekanan_darah' => 'required',
        'nafas' => 'required',
        'nadi' => 'required',
        'suhu' => 'required',
        'tinggi_badan' => 'required',
        'berat_badan' => 'required',
    ]);

    RekamMedis::create([
        'patient_id' => $patientId,
        'diagnosa' => $request->diagnosa,
        'tekanan_darah' => $request->tekanan_darah,
        'nafas' => $request->nafas,
        'nadi' => $request->nadi,
        'suhu' => $request->suhu,
        'tinggi_badan' => $request->tinggi_badan,
        'berat_badan' => $request->berat_badan,
    ]);

    return redirect()->route('patients')->with('success', 'Rekam medis berhasil dibuat');
}

    public function destroyRekamMedis($id)
    {
        $RekamMedis = RekamMedis::findOrFail($id);
        $RekamMedis->delete();
        return redirect()->route('patients')->with('success', 'Rekam medis berhasil dihapus');
    }

}
