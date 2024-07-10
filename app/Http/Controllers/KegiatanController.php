<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::all();
        // $item = Kegiatan::findOrFail($id);
        return view('operator.kegiatan.index', ['kegiatan' => $kegiatan]);
        // $kegiatan = $this->Kegiatan->find($id);

        // return view('operator.kegiatan.index', ['kegiatan' => $kegiatan]);

        // return view('operator.kegiatan.index');
    }
    // public function edit()
    // {
    //     $kegiatan = Kegiatan::all();
    //     return view('operator.kegiatan.edit', ['kegiatan' => $kegiatan]);
    // }
    public function update(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'kegiatan' => 'required|string|max:255',
        //     'waktu' => 'required|date',
        //     'lokasi' => 'required|string|max:255',
        //     'media' => 'mimes:jpg,jpeg,png|max:5048',
        //     'keterangan' => 'required|string',

        // ]);




        // $request->validate([
        //     'kegiatan' => 'required|string|max:255',
        //     'waktu' => 'required|date',
        //     'lokasi' => 'required|string|max:255',
        //     'media' => 'string|max:255',
        //     'keterangan' => 'required|string',
        // ]);

        // $kegiatan = Kegiatan::findOrFail($id);
        // $kegiatan->update($request->all());
        // dd($request);
        return redirect()->route('operator.Kegiatan.edit')->with('success', 'Activity updated successfully');
    }
    public function create(){
        return view('operator.kegiatan.tambah');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'kegiatan' => 'required|string|max:255',
            'waktu' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'media' => 'mimes:jpg,jpeg,png|max:2048',
            'keterangan' => 'required|string',

        ]);
        if ($validator->fails()) return redirect('kegiatan/create')->withErrors($validator)->withInput();
        // dd($request->all());


        $media = $request->file('media');
        // $foto_extension = $media->extension();
        $filename = date('YmdHis').$media->getClientOriginalName();
        $lokasi = 'media-kegiatan/'.$filename;

        Storage::disk('public')->put($lokasi, file_get_contents($media));

        $data['kegiatan']   = $request->kegiatan;
        $data['waktu']      = $request->waktu;
        $data['lokasi']     = $request->lokasi;
        $data['media']      = $filename;
        $data['keterangan'] = $request->keterangan;
        // dd($data);
        Kegiatan::create($data);


        return redirect()->route('kegiatan-index')->with('success', 'Activity created successfully');
    }
    public function destroy($id, Kegiatan $kegiatan)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->delete();
        return redirect()->route('kegiatan-index')->with('success', 'Activity deleted successfully');
    }

}
