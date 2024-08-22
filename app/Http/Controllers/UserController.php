<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('backend.user.index', compact('users'));
    }


    public function create()
    {
        return view('backend.user.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email',
            'password' => 'required|string|min:8|max:255',
        ]);

        $data = $request->all();

        $user = User::create($data);

        if ($user) {
            return redirect('/user')->withSuccess('Data berhasil Ditambah');
        } else {
            return back()->withInput()->withErrors('Data gagal Ditambah');
        }
    }


    public function show(User $user)
    {
        return view('backend.user.show', compact('user'));
    }


    public function edit(User $user)
    {
        return view('backend.user.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email',
            'password' => 'nullable|string|min:8|max:255',
        ]);

        $data = $request->all();
        unset($data['password']);

        if ($request->password) {
            $data['password'] = $request->password;
        }

        $user->update($data);

        if ($user) {
            return redirect('/user')->withSuccess('Data berhasil Diubah');
        } else {
            return back()->withInput()->withErrors('Data gagal Diubah');
        }
    }


    public function destroy(User $user)
    {
        $user->delete();

        if ($user) {
            return back()->withSuccess('Data berhasil Dihapus');
        } else {
            return back()->withErrors('Data gagal Dihapus');
        }
    }
}
