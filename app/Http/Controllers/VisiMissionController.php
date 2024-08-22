<?php

namespace App\Http\Controllers;

use App\Models\VisiMission;
use Illuminate\Http\Request;

class VisiMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visiMissions = VisiMission::all();
        return view('backend.visi_mission.index' ,compact('visiMissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.visi_mission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category'        => 'required|string|in:visi,misi',
            'text'            => 'required|string',
        ]);

        if($request->category == 'visi' && VisiMission::where('category', 'visi')->first()){
            return back()->withInput()->withErrors('Visi sudah ada, Tidak boloh Ditambah');
        }

        $data = $request->all();

        $visiMission = VisiMission::create($data);

        if ($visiMission) {
            return redirect('/visi-mission')->withSuccess('Data berhasil Ditambah');
        } else {
            return back()->withInput()->withErrors('Data gagal Ditambah');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(VisiMission $visiMission)
    {
        return view('backend.visi_mission.show', compact('visiMission'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VisiMission $visiMission)
    {
        return view('backend.visi_mission.edit', compact('visiMission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VisiMission $visiMission)
    {
        $request->validate([
            'category'        => 'required|string|in:visi,misi',
            'text'            => 'required|string',
        ]);

        if ($request->category == 'visi' && $visiMission->category != 'visi'  && VisiMission::where('category', 'visi')->first()) {
            return back()->withInput()->withErrors('Visi sudah ada, Tidak boloh Ditambah');
        }

        $data = $request->all();

        $visiMission->update($data);

        if ($visiMission) {
            return redirect('/visi-mission')->withSuccess('Data berhasil Diubah');
        } else {
            return back()->withInput()->withErrors('Data gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VisiMission $visiMission)
    {
        if($visiMission->category == 'visi'){
            return back()->withErrors('Visi tidak boleh Dihapus');
        }

        $visiMission->delete();

        if ($visiMission) {
            return back()->withSuccess('Data berhasil Dihapus');
        } else {
            return back()->withErrors('Data gagal Dihapus');
        }
    }
}
