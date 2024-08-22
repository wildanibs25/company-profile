<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('backend.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('backend.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('backend.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email',
            'password' => 'nullable|string|min:8|max:255',
        ]);

        $data = $request->all();
        unset($data['password']);

        if($request->password){
            $data['password'] = $request->password;
        }

        $user->update($data);

        if ($user) {
            return redirect('/user')->withSuccess('Data berhasil Diubah');
        } else {
            return back()->withInput()->withErrors('Data gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
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
