<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Major;
use App\Models\Register;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $registers     = Register::all();

        $registerDate  = collect(range(1, 12))->map(function ($month) use ($registers) {
            $monthName = date('F', mktime(0, 0, 0, $month, 1));
            $data = $registers->filter(function ($register) use ($month) {
                return $register->created_at->format('n') == $month;
            });
            return [
                'month' => $monthName,
                'count' => $data->count(),
            ];
        });

        $registerGender = $registers->filter(function ($item) {
            return $item->status === 2;
        })->groupBy(function ($item) {
            return $item->gender;
        })->map(function ($group) {
            return $group->count();
        });

        $teacher       = Teacher::count();
        $major         = Major::count();
        $register      = $registers->filter(function ($item) {
            return $item->created_at->format('Y');
        })->count();
        $student       = $registers->filter(function ($item) {
            return $item->status === 2;
        })->count();

        return view(
            'backend.dashboard.index',
            compact(
                'registerDate',
                'registerGender',
                'teacher',
                'major',
                'register',
                'student'
            )
        );
    }
}
