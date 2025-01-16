<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\RekamMedis;
use Illuminate\Http\Request;

class DataRekamMedisController extends Controller
{
    public function index(Request $request)
    {
        $records = RekamMedis::with('patient')->get();
        return view('pages.admin.data_rekam_medis.index', compact('records'));
    }

    public function create()
     {
         $patients = Patient::all();
         return view('pages.admin.data_rekam_medis.create', compact('patients'));
     }

     public function store(Request $request)
     {
         $request->validate([
             'patient_id' => 'required',
             'diagnosa' => 'required',
             'tekanan_darah' => 'required',
             'nafas' => 'required',
             'nadi' => 'required',
             'suhu' => 'required',
             'tinggi_badan' => 'required',
             'berat_badan' => 'required',
         ]);

         $rekamMedis = new RekamMedis();
         $rekamMedis->patient_id = $request->patient->id;
         $rekamMedis->diagnosa = $request->diagnosa;
         $rekamMedis->tekanan_darah = $request->tekanan_darah;
         $rekamMedis->nafas = $request->nafas;
         $rekamMedis->nadi = $request->nadi;
         $rekamMedis->suhu = $request->suhu;
         $rekamMedis->tinggi_badan = $request->tinggi_badan;
         $rekamMedis->berat_badan = $request->berat_badan;
         $rekamMedis->save();


         RekamMedis::create($request->all());
         return redirect()->route('data-rekam-medis.index')->with('success', 'Rekam Medis created successfully.');
     }
    //  show
     public function show($id)
     {
         $rekamMedis = RekamMedis::find($id);
         return view('pages.admin.rekam_medis.show', compact('rekamMedis'));
     }
    //  edit
     public function edit($id)
     {
         $rekamMedis = RekamMedis::find($id);
         return view('pages.admin.data_rekam_medis.edit', compact('rekamMedis'));
     }
    //  update
    public function update(Request $request, $id)
    {
        $request->validate([
            'patient_id' => 'required',
            'diagnosa' => 'required',
            'tekanan_darah' => 'required',
            'nafas' => 'required',
            'nadi' => 'required',
            'suhu' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
        ]);

        $rekamMedis = RekamMedis::find($id);
        $rekamMedis->patient_id = $request->patient_id;
        $rekamMedis->diagnosa = $request->diagnosa;
        $rekamMedis->tekanan_darah = $request->tekanan_darah;
        $rekamMedis->nafas = $request->nafas;
        $rekamMedis->nadi = $request->nadi;
        $rekamMedis->suhu = $request->suhu;
        $rekamMedis->tinggi_badan = $request->tinggi_badan;
        $rekamMedis->berat_badan = $request->berat_badan;
        $rekamMedis->save();

        return redirect()->route('data-rekam-medis.index')->with('success', 'Rekam Medis updated successfully.');
    }
    // destroy
    public function destroy($id)
    {
        $rekamMedis = RekamMedis::find($id);
        $rekamMedis->delete();
        return redirect()->route('data-rekam-medis.index')->with('success', 'Rekam Medis deleted successfully.');
    }

}
