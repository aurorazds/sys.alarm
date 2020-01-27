<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alarm;
use App\Alarmtime;

class AlarmController extends Controller
{
    //
    public function addAlarm(Request $req){
        $dataAlarm = new Alarm();
        $dataAlarm->title = $req->alarmtitle;
        $dataAlarm->message = $req->alarmmessage;
        $dataAlarm->time = $req->alarmtime;
        $dataAlarm->sound = '';
        $dataAlarm->status = 'Active';
        $dataAlarm->save();

        foreach($req->alarmday as $alarmday){
            $dataAlarmtime = new Alarmtime();
            $dataAlarmtime->alarmid = $dataAlarm->id;
            $dataAlarmtime->day = $alarmday;
            $dataAlarmtime->save();
        }

        return redirect()->back();
        

    }
}
