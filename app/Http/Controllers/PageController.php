<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function notices()
    {
        return view('pages.notices');
    }

    public function notice_details(){
        return view('pages.notice_details');
    }

    public function alumni(){
        return view('pages.alumni');
    }

    public function recorded_classroom() {
        return view('pages.recorded_classroom');
    }
    public function student_support(){
        return view('pages.student_support');
    }

    public function industrial_collaboration() {
        return view('pages.industrial_collaboration');
    }

    public function admission() {
        return view('pages.admission');
    }

    public function apply_online_admission() {
        return view('pages.apply_online_admission');
    }
}
