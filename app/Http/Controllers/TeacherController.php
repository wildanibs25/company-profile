<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{

    public function index()
    {
        $teachers = Teacher::all();
        return view('backend.teacher.index', compact('teachers'));
    }


    public function create()
    {
        return view('backend.teacher.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'teacher_photo' => 'required|mimes:jpg,bmp,png',
            'teacher_name'  => 'required|string|max:255',
            'teacher_major' => 'required|string|max:255',
        ]);

        $data = $request->all();

        if ($file = $request->file('teacher_photo')) {
            $data['teacher_photo'] = Storage::putFile('public/teacher', $file);
        }

        $teacher = Teacher::create($data);

        if ($teacher) {
            return redirect('/teacher')->withSuccess('Data berhasil Ditambah');
        } else {
            return back()->withInput()->withErrors('Data gagal Ditambah');
        }
    }


    public function show(Teacher $teacher)
    {
        return view('backend.teacher.show', compact('teacher'));
    }


    public function edit(Teacher $teacher)
    {
        return view('backend.teacher.edit', compact('teacher'));
    }


    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'teacher_photo' => 'nullable|mimes:jpg,bmp,png',
            'teacher_name'  => 'required|string|max:255',
            'teacher_major' => 'required|string|max:255',
        ]);

        $data = $request->all();
        unset($data['teacher_photo']);

        if ($file = $request->file('teacher_photo')) {
            if ($teacher->teacher_photo && Storage::exists($teacher->teacher_photo)) {
                Storage::delete($teacher->teacher_photo);
            }
            $data['teacher_photo'] = Storage::putFile('public/teacher', $file);
        }

        $teacher->update($data);

        if ($teacher) {
            return redirect('/teacher')->withSuccess('Data berhasil Diubah');
        } else {
            return back()->withInput()->withErrors('Data gagal Diubah');
        }
    }


    public function destroy(Teacher $teacher)
    {
        if ($teacher->teacher_photo && Storage::exists($teacher->teacher_photo)) {
            Storage::delete($teacher->teacher_photo);
        }

        $teacher->delete();

        if ($teacher) {
            return back()->withSuccess('Data berhasil Dihapus');
        } else {
            return back()->withErrors('Data gagal Dihapus');
        }
    }
}
