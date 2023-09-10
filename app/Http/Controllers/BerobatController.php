<?php

namespace App\Http\Controllers;

use App\Models\Berobat;
use App\Models\Dokter;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\Resep;
use Illuminate\Http\Request;

class BerobatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $obat = Obat::all();
        return view('berobat.tambah', compact('pasien', 'dokter', 'obat'));
    }
    public function tambah($nik)
    {
        $pasien = $nik;
        $dokter = Dokter::all();
        $obat = Obat::all();
        return view('berobat.tambah', compact('pasien', 'dokter', 'obat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = Berobat::create([
            'id_pasien' => $request->pasien,
            'nip_dokter' => $request->dokter,
            'keluhan_pasien' => $request->keluhan,
            'tgl_berobat' => now(),
            'hasil_diagnosa' => $request->diagnosa
        ]);
        foreach ($request->obat as $key => $value) {
            Resep::create([
                'id_berobat' => $id->id,
                'kode_obat' => $value,
                'dosis' => $request->dosis[$key],
                'aturan_minum' => $request->aturan[$key],
                'lama' => $request->lama[$key]

            ]);
        }
        $pasien=Pasien::where('nik',$request->pasien)->first();
        return redirect()->route('pasien.show',$pasien);
    }

    /**
     * Display the specified resource.
     */
    public function show(Berobat $berobat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berobat $berobat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berobat $berobat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berobat $berobat)
    {
        //
    }
}
