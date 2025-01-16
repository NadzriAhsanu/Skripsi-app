<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bidan;
use App\Models\BidanSchedule;
use Illuminate\Http\Request;

class DataBidanScheduleController extends Controller
{
    public function index (Request $request)
    {
        $bidanSchedules = BidanSchedule::with('bidan')
        ->when($request->input('bidan_id'), function($query, $bidan_id){
            return $query->where('bidan_id', $bidan_id);
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('pages.admin.data_bidan_schedule.index', compact('bidanSchedules'));
    }
    public function create()
    {
        $bidans = Bidan::all();
        return view('pages.admin.data_bidan_schedule.create', compact('bidans'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'bidan_id' => 'required',
            'status' => 'required',
            'note' => 'required',

        ]);

        //if senin is not empty
        if ($request->senin) {
            $bidanSchedule = new BidanSchedule;
            $bidanSchedule->bidan_id = $request->bidan_id;
            $bidanSchedule->day = 'Senin';
            $bidanSchedule->time = $request->senin;
            $bidanSchedule->save();
        }

        //if selasa is not empty
        if ($request->selasa) {
            $bidanSchedule = new BidanSchedule;
            $bidanSchedule->bidan_id = $request->bidan_id;
            $bidanSchedule->day = 'Selasa';
            $bidanSchedule->time = $request->selasa;
            $bidanSchedule->save();
        }

        //if rabu is not empty
        if ($request->rabu) {
            $bidanSchedule = new BidanSchedule;
            $bidanSchedule->bidan_id = $request->bidan_id;
            $bidanSchedule->day = 'Rabu';
            $bidanSchedule->time = $request->rabu;
            $bidanSchedule->save();
        }

        //if kamis is not empty
        if ($request->kamis) {
            $bidanSchedule = new BidanSchedule;
            $bidanSchedule->bidan_id = $request->bidan_id;
            $bidanSchedule->day = 'Kamis';
            $bidanSchedule->time = $request->kamis;
            $bidanSchedule->save();
        }

        //if jumat is not empty
        if ($request->jumat) {
            $bidanSchedule = new BidanSchedule;
            $bidanSchedule->bidan_id = $request->bidan_id;
            $bidanSchedule->day = 'Jumat';
            $bidanSchedule->time = $request->jumat;
            $bidanSchedule->save();
        }

        //if sabtu is not empty
        if ($request->sabtu) {
            $bidanSchedule = new BidanSchedule;
            $bidanSchedule->bidan_id = $request->bidan_id;
            $bidanSchedule->day = 'Sabtu';
            $bidanSchedule->time = $request->sabtu;
            $bidanSchedule->save();
        }

        //if minggu is not empty
        if ($request->minggu) {
            $bidanSchedule = new BidanSchedule;
            $bidanSchedule->bidan_id = $request->bidan_id;
            $bidanSchedule->day = 'Minggu';
            $bidanSchedule->time = $request->minggu;
            $bidanSchedule->save();
        }

        return redirect()->route('data-bidan-schedules.index')->with('success', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $bidanSchedule = BidanSchedule::find($id);
        $bidans = Bidan::all();
        return view('pages.admin.data_bidan_schedule.edit', compact('bidanSchedule', 'bidans'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'bidan_id' => 'required',
            'day' => 'required',
            'time' => 'required',
            'status' => 'required',
            'note' => 'required',
        ]);

        $bidanSchedules = BidanSchedule::find($id);
        $bidanSchedules->bidan_id = $request->bidan_id;
        $bidanSchedules->day = $request->day;
        $bidanSchedules->time = $request->time;
        $bidanSchedules->status = $request->status;
        $bidanSchedules->note = $request->note;
        $bidanSchedules->save();

        return redirect()->route('data-bidan-schedules.index');
    }
    public function destroy($id)
    {
        BidanSchedule::find($id)->delete();
        return redirect()->route('data-bidan-schedules.index')->with('success', 'Data berhasil dihapus');
    }
}
