<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{

    public function index()
    {
        $about = About::first();
        return view('backend.about.index', compact('about'));
    }


    public function edit(About $about)
    {
        return view('backend.about.edit', compact('about'));
    }


    public function update(Request $request, About $about)
    {
        $request->validate([
            'school_logo'           => 'nullable|mimes:jpg,bmp,png',
            'school_name'           => 'required|string|max:255',
            'school_tagline'        => 'required|string|max:255',
            'school_description'    => 'required|string',
            'school_since'          => 'required|date',
        ]);

        $data = $request->all();
        unset($data['school_logo']);

        if ($file = $request->file('school_logo')) {
            if ($about->school_logo && Storage::exists($about->school_logo)) {
                Storage::delete($about->school_logo);
            }
            $data['school_logo'] = Storage::putFile('public/about', $file);
        }

        $about->update($data);

        if ($about) {
            return redirect('/about')->withSuccess('Data berhasil Diubah');
        } else {
            return back()->withInput()->withErrors('Data gagal Diubah');
        }
    }
}
