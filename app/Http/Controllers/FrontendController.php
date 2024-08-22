<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Announcement;
use App\Models\Headmaster;
use App\Models\Major;
use App\Models\Teacher;
use App\Models\VisiMission;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $about          = About::first();
        $majors         = Major::all();
        $headmaster     = Headmaster::first();
        $teachers       = Teacher::all();
        $visi           = VisiMission::where('category', 'visi')->first();
        $misi           = VisiMission::where('category', 'misi')->get();
        $announcement   = Announcement::latest()->get();
        return view(
            'frontend.base.index',
            compact(
                'about',
                'majors',
                'headmaster',
                'teachers',
                'visi',
                'misi',
                'announcement',
            )
        );
    }

    public function about()
    {
        $about          = About::first();
        $headmaster     = Headmaster::first();
        $teachers       = Teacher::all();
        $visi           = VisiMission::where('category', 'visi')->first();
        $misi           = VisiMission::where('category', 'misi')->get();
        return view(
            'frontend.base.about',
            compact(
                'about',
                'headmaster',
                'teachers',
                'visi',
                'misi',
            )
        );
    }

    public function contact()
    {
        $about          = About::first();
        $headmaster     = Headmaster::first();
        $teachers       = Teacher::all();
        $visi           = VisiMission::where('category', 'visi')->first();
        $misi           = VisiMission::where('category', 'misi')->get();
        return view(
            'frontend.base.contact',
            compact(
                'about',
                'headmaster',
                'teachers',
                'visi',
                'misi',
            )
        );
    }
}
