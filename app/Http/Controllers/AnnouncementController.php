<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::all();
        return view('backend.announcement.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.announcement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'announcement_title'        => 'required|string|max:255',
            'announcement_image'       => 'required|mimes:jpg,bmp,png',
            'announcement_description' => 'required|string',
        ]);

        $data = $request->all();

        if ($file = $request->file('announcement_image')) {
            $data['announcement_image'] = Storage::putFile('public/announcement', $file);
        }

        $announcement = Announcement::create($data);

        if ($announcement) {
            return redirect('/announcement')->withSuccess('Data berhasil Ditambah');
        } else {
            return back()->withInput()->withErrors('Data gagal Ditambah');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        return view('backend.announcement.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        return view('backend.announcement.edit', compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
    {
        $request->validate([
            'announcement_title'        => 'required|string|max:255',
            'announcement_image'        => 'nullable|mimes:jpg,bmp,png',
            'announcement_description'  => 'required|string',
        ]);

        $data = $request->all();
        unset($data['announcement_image']);

        if ($file = $request->file('announcement_image')) {
            if ($announcement->announcement_image && Storage::exists($announcement->announcement_image)) {
                Storage::delete($announcement->announcement_image);
            }
            $data['announcement_image'] = Storage::putFile('public/announcement', $file);
        }

        $announcement->update($data);

        if ($announcement) {
            return redirect('/announcement')->withSuccess('Data berhasil Diubah');
        } else {
            return back()->withInput()->withErrors('Data gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        if ($announcement->announcement_image && Storage::exists($announcement->announcement_image)) {
            Storage::delete($announcement->announcement_image);
        }

        $announcement->delete();

        if ($announcement) {
            return back()->withSuccess('Data berhasil Dihapus');
        } else {
            return back()->withErrors('Data gagal Dihapus');
        }
    }
}
