<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;

class AnnouncementController extends Controller
{
    //
    public function addAnnouncement(Request $req){
        $dataAnnouncement = new Announcement();
        $dataAnnouncement->title = $req->announcementtitle;
        $dataAnnouncement->message = $req->announcemenmessage;
        $dataAnnouncement->date = $req->announcementdate;
        $dataAnnouncement->alarmtime = $req->announcementtime;
        $dataAnnouncement->sound = '0';
        $dataAnnouncement->status = 'Active';
        $dataAnnouncement->save();

        return redirect()->back();
    }
}
