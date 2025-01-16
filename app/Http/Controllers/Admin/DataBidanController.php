<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bidan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DataBidanController extends Controller
{
    public function index(Request $request)
    {
        $bidans = DB::table('bidans')
            ->when($request->input('name'), function ($query, $bidan_name) {
                return $query->where('bidan_name', 'like', '%' . $bidan_name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('pages.admin.data_bidan.index', compact('bidans'));
    }

    //create
    public function create()
    {
        return view('pages.admin.data_bidan.create');
    }
    // store
    public function store(Request $request)
    {
        $request->validate([
            'bidan_name' => 'required',
            'bidan_phone' => 'required',
            'bidan_email' => 'required|email',
            'bidan_password' => 'required',
            'role' => 'required',
            'photo' => 'required',
            'address' => 'required',
            'sip' => 'required',
            'id_ihs' => 'required',
            'nik' => 'required',
            'birth_date' => 'required|date'

        ]);



        $bidan = new Bidan();
        $bidan->bidan_name = $request->bidan_name;
        $bidan->bidan_phone = $request->bidan_phone;
        $bidan->bidan_email = $request->bidan_email;
        $bidan->bidan_password = Hash::make($request->bidan_password);
        $bidan->role = $request->role;
        $bidan->photo = $request->photo;
        $bidan->address = $request->address;
        $bidan->sip = $request->sip;
        $bidan->id_ihs = $request->id_ihs;
        $bidan->nik = $request->nik;
        $bidan->birth_date = $request->birth_date;
        $bidan->save();

        if($request->hasFile('photo')){
            $request->file('photo')->move('images/', $request->file('photo')->getClientOriginalName());
            $bidan->photo = $request->file('photo')->getClientOriginalName();
            $bidan->save();
        }
        // memanggil photo di view dengan route diatas

     return redirect()->route('data-bidans.index')->with('success', 'Bidan created successfully.');
    }




    //show
    public function show($id)
    {
        $bidan = DB::table('bidans')->where('id', $id)->first();
        return view('pages.admin.data_bidan.show', compact('bidan'));
    }

    //edit
    public function edit($id)
    {
        $bidan = DB::table('bidans')->where('id', $id)->first();
        return view('pages.admin.data_bidan.edit', compact('bidan'));
    }

    // update
    public function update(Request $request, $id)
    {
        $request->validate([
            'bidan_name' => 'required',
            'bidan_phone' => 'required',
            'bidan_email' => 'required|email',
            'bidan_password' => 'required',
            'role' => 'required',
            'photo' => 'required',
            'address' => 'required',
            'sip' => 'required',
            'id_ihs' => 'required',
            'nik' => 'required',
            'birth_date' => 'required|date'

        ]);

        DB::table('bidans')->where('id', $id)->update([
            'bidan_name' => $request->bidan_name,
            'bidan_phone' => $request->bidan_phone,
            'bidan_email' => $request->bidan_email,
            'bidan_password' => Hash::make($request->bidan_password),
            'role' => $request->role,
            'photo' => $request->photo,
            'address' => $request->address,
            'sip' => $request->sip,
            'id_ihs' => $request->id_ihs,
            'nik' => $request->nik,
            'birth_date' => $request->birth_date,
        ]);

        return redirect()->route('data-bidans.index')->with('success', 'Bidan updated successfully.');
    }

    //destroy
    public function destroy($id)
    {
        // menghapus data bidan tetapi tidak mengganggu data yang berelasi
        DB::table('bidans')->where('id', $id)->delete();
        return redirect()->route('data-bidans.index')->with('success', 'Bidan deleted successfully.');
    }
}
