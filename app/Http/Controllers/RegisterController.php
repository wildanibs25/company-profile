<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{

    public function index()
    {
        $registers = Register::latest()->get();
        return view('backend.register.index', compact('registers'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name'       => 'required|string|max:255',
            'last_name'        => 'required|string|max:255',
            'email'            => 'required|email|max:255',
            'phone'            => 'required|string',
            'gender'           => 'required|string|in:Laki-laki,Perempuan',
            'major'            => 'required|string',
            'file'             => 'required|mimes:pdf|max:10000',
            'address'          => 'required|string',
        ]);

        $data = $request->all();
        unset($data['first_name']);
        unset($data['last_name']);

        $data['name'] = $request->first_name . ' ' . $request->last_name;

        if ($file = $request->file('file')) {
            $data['file'] = Storage::putFileAS('public/file-register', $file, date("d-m-Y") . '-' . $data['name']);
        }

        $register = Register::create($data);

        if ($register) {
            return redirect('/register')->withSuccess('Anda Berhasil Mendaftar');
        } else {
            return back()->withInput()->withErrors('Anda Gagal Mendaftar');
        }
    }


    public function show(Register $register)
    {
        return view('backend.register.show', compact('register'));
    }


    public function edit(Register $register)
    {
        $majors = Major::all();
        return view('backend.register.edit', compact('register', 'majors'));
    }


    public function updateStatus(Request $request, Register $register)
    {
        $register->status = $request->status;
        $register->save();

        if ($register) {
            return back()->withSuccess('Status Berhasil Diubah');
        } else {
            return back()->withSuccess('Status Gagal Diubah');
        }
    }

    public function update(Request $request, Register $register)
    {
        $request->validate([
            'name'             => 'required|string|max:255',
            'email'            => 'required|email|max:255',
            'phone'            => 'required|string',
            'gender'           => 'required|string|in:Laki-laki,Perempuan',
            'major'            => 'required|string',
            'file'             => 'nullable|mimes:pdf|max:10000',
            'address'          => 'required|string',
        ]);

        $data = $request->all();
        unset($data['file']);

        if ($file = $request->file('file')) {
            if ($register->file && Storage::exists($register->file)) {
                Storage::delete($register->file);
            }
            $data['file'] =
                Storage::putFileAS('public/file-register', $file, date("d-m-Y") . '-' . $data['name']);
        }

        $register->update($data);

        if ($register) {
            return redirect('/get-register')->withSuccess('Data berhasil Diubah');
        } else {
            return back()->withInput()->withErrors('Data gagal Diubah');
        }
    }


    public function destroy(Register $register)
    {
        if ($register->file && Storage::exists($register->file)) {
            Storage::delete($register->file);
        }

        $register->delete();

        if ($register) {
            return back()->withSuccess('Data berhasil Dihapus');
        } else {
            return back()->withErrors('Data gagal Dihapus');
        }
    }
}
