<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;

class CalendarController extends Controller
{
    //
    public function addCalendar(Request $req){
        $dataCalendar = new Calendar();
        $dataCalendar->title = $req->caltitle;
        $dataCalendar->schoolyear = $req->calschoolyr;
        $dataCalendar->caldate = $req->caldate;
        $dataCalendar->status = 'active';
        $dataCalendar->save();

        return redirect()->back();
    }
}
