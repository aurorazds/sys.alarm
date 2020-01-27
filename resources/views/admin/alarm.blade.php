@extends('layout.admin')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Alarm</h3>
        </div>
      </div>

      <div class="clearfix"></div>
    
     
      <div class="row">
        <div class="col-lg-4 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Alarms</h2>
              
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <form action="{{route('addAlarm')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group col-lg-12">
                          <label for="Title">Title</label>
                          <input type="text" class="form-control" name="alarmtitle">
                        </div>
                        <div class="form-group col-lg-4">
                          <label for="Time">Time</label>
                          <input type="time" class="form-control" name="alarmtime">
                        </div>
                      <div class="col-lg-9 col-sm-9 ">
                        <br>
                        <label for="Repeat">Repeat</label>
                        <div class="checkbox daycheck" >
                          <label class="">
                            <div class="icheckbox_flat-green" style="position: relative;">
                              <input type="checkbox" class="flat datebutton" style="position: absolute; opacity: 0;" value="MON" name="alarmday[]">
                                <ins class="iCheck-helper" class="checkboxday"></ins>
                            </div> MON
                          </label>
                          <label class="">
                            <div class="icheckbox_flat-green" style="position: relative;">
                              <input type="checkbox" class="flat datebutton" style="position: absolute; opacity: 0;" value="TUE"  name="alarmday[]">
                              <ins class="iCheck-helper" class="checkboxday"></ins>
                            </div> TUE
                          </label>
                          <label class="">
                            <div class="icheckbox_flat-green" style="position: relative;">
                              <input type="checkbox" class="flat datebutton" style="position: absolute; opacity: 0;" value="WED"  name="alarmday[]">
                              <ins class="iCheck-helper" ></ins></div> WED
                          </label>
                          <label class="">
                            <div class="icheckbox_flat-green" style="position: relative;">
                              <input type="checkbox" class="flat datebutton" style="position: absolute; opacity: 0;" value="THU"  name="alarmday[]">
                              <ins class="iCheck-helper" class="checkboxday"></ins></div> THU
                          </label>
                          <label class="">
                            <div class="icheckbox_flat-green" style="position: relative;">
                              <input type="checkbox" class="flat datebutton" style="position: absolute; opacity: 0;" value="FRI"  name="alarmday[]">
                              <ins class="iCheck-helper" class="checkboxday"></ins></div> FRI
                          </label>
                          <label class="">
                            <div class="icheckbox_flat-green" style="position: relative;">
                              <input type="checkbox" class="flat datebutton" style="position: absolute; opacity: 0;" value="SAT"  name="alarmday[]">
                              <ins class="iCheck-helper" class="checkboxday"></ins></div> SAT
                          </label>
                          <label class="">
                            <div class="icheckbox_flat-green" style="position: relative;">
                              <input type="checkbox" class="flat datebutton" style="position: absolute; opacity: 0;" value="SUN"  name="alarmday[]">
                            <ins class="iCheck-helper" class="checkboxday"></ins></div> SUN
                          </label>
                         
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <br>
                        <label for="message">Message (20 chars min, 100 max) :</label>
                        <textarea id="message" required="required" class="form-control" name="alarmmessage" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100" data-parsley-minlength-message="You need to enter at least a 10 characters long message.." data-parsley-validation-threshold="10"></textarea>
                      </div>
                      <div class="form-group col-lg-7">
                        <br>
                        <label for="Sound">Sound</label>
                        <input type="file" class="form-control-file " id="file" name="alarmsound">
                      </div>

                      <div class="form-group col-lg-7">
                        <button type="submit" class="btn btn-success">Save</button>
                      </div>
                    </div>
                    
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Alarms</h2>
              
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
               
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Alarm Time</th>
                    <th>Days</th>
                    <th>Message</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dataAlarm as $Alarm)
                    <tr>
                    <td>{{$Alarm->title}}</td>
                      <td>{{$Alarm->time}}</td>
                      <td>{{$Alarm->time}}</td>
                      <td>{{$Alarm->message}}</td>
                      <td>
                        <a href="" 
                          data-id="{{$Alarm->id}}" 
                          data-days="date" 
                          data-time="{{$Alarm->time}}" 
                          data-title="{{$Alarm->title}}" class="btn btn-success alarm-edit"><i class="fa fa-pencil"></i></a>
                        <a href="" 
                          data-id="{{$Alarm->id}}" 
                         class="btn btn-danger alarm-delete"><i class="fa fa-times"></i></a>
                      </td>
                    </tr> 
                  @endforeach
                 
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection