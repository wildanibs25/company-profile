<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Major::all();
        return view('backend.major.index', compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.major.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'major_image'       => 'required|mimes:jpg,bmp,png',
            'major_name'        => 'required|string|max:255',
            'head'              => 'required|string|max:255',
            'major_description' => 'required|string',
        ]);

        $data = $request->all();

        if ($file = $request->file('major_image')) {
            $data['major_image'] = Storage::putFile('public/major', $file);
        }

        $major = Major::create($data);

        if ($major) {
            return redirect('/major')->withSuccess('Data berhasil Ditambah');
        } else {
            return back()->withInput()->withErrors('Data gagal Ditambah');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Major $major)
    {
        return view('backend.major.show', compact('major'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Major $major)
    {
        return view('backend.major.edit', compact('major'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Major $major)
    {
        $request->validate([
            'major_image'       => 'nullable|mimes:jpg,bmp,png',
            'major_name'        => 'required|string|max:255',
            'head'              => 'required|string|max:255',
            'major_description' => 'required|string',
        ]);

        $data = $request->all();
        unset($data['major_image']);

        if ($file = $request->file('major_image')) {
            if ($major->major_image && Storage::exists($major->major_image)) {
                Storage::delete($major->major_image);
            }
            $data['major_image'] = Storage::putFile('public/major', $file);
        }

        $major->update($data);

        if ($major) {
            return redirect('/major')->withSuccess('Data berhasil Diubah');
        } else {
            return back()->withInput()->withErrors('Data gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $major)
    {
        if ($major->major_image && Storage::exists($major->major_image)) {
            Storage::delete($major->major_image);
        }

        $major->delete();

        if ($major) {
            return back()->withSuccess('Data berhasil Dihapus');
        } else {
            return back()->withErrors('Data gagal Dihapus');
        }
    }
}
