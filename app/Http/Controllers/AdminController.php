<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alarm;
use App\Announcement;
use App\Calendar;

class AdminController extends Controller
{
    //
    public function alarm(){
        $dataAlarm = Alarm::get();
        return view('admin.alarm', compact('dataAlarm'));

    }
    public function announcement(){
        $dataAnnouncement = Announcement::get();
        return view('admin.announcement', compact('dataAnnouncement'));
    }

    public function emergency(){
        return view('admin.emergency');
    }
    public function settings(){
        $dataCalendar = Calendar::get();
        return view('admin.settings', compact('dataCalendar'));
    }
}
