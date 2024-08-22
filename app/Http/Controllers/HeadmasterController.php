<?php

namespace App\Http\Controllers;

use App\Models\Headmaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeadmasterController extends Controller
{

    public function index()
    {
        $headmaster = Headmaster::first();
        return view('backend.headmaster.index', compact('headmaster'));
    }


    public function edit(Headmaster $headmaster)
    {
        return view('backend.headmaster.edit', compact('headmaster'));
    }


    public function update(Request $request, Headmaster $headmaster)
    {
        $request->validate([
            'headmaster_name'           => 'required|string|max:255',
            'headmaster_photo'           => 'nullable|mimes:jpg,jpeg,bmp,png',
            'headmaster_description'    => 'required|string',
        ]);

        $data = $request->all();
        unset($data['headmaster_photo']);

        if ($file = $request->file('headmaster_photo')) {
            if ($headmaster->headmaster_photo && Storage::exists($headmaster->headmaster_photo)) {
                Storage::delete($headmaster->headmaster_photo);
            }
            $data['headmaster_photo'] = Storage::putFile('public/headmaster', $file);
        }

        $headmaster->update($data);

        if ($headmaster) {
            return redirect('/headmaster')->withSuccess('Data berhasil Diubah');
        } else {
            return back()->withInput()->withErrors('Data gagal Diubah');
        }
    }
}
