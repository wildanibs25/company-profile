<?php

namespace App\Http\Controllers;

use App\Models\VisiMission;
use Illuminate\Http\Request;

class VisiMissionController extends Controller
{

    public function index()
    {
        $visiMissions = VisiMission::all();
        return view('backend.visi_mission.index', compact('visiMissions'));
    }


    public function create()
    {
        return view('backend.visi_mission.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'category'        => 'required|string|in:visi,misi',
            'text'            => 'required|string',
        ]);

        if ($request->category == 'visi' && VisiMission::where('category', 'visi')->first()) {
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


    public function show(VisiMission $visiMission)
    {
        return view('backend.visi_mission.show', compact('visiMission'));
    }


    public function edit(VisiMission $visiMission)
    {
        return view('backend.visi_mission.edit', compact('visiMission'));
    }


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


    public function destroy(VisiMission $visiMission)
    {
        if ($visiMission->category == 'visi') {
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
