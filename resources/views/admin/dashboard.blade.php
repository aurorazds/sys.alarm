@extends('layout.admin')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Dashboard</h3>
        </div>

        <div class="title_right">
          
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Content</h2>
              
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <div class="row">
                 <div class="col-lg-6">
                  <div class="x_title">
                    <h2>Alarms Schedules</h2>
                    
                    <div class="clearfix"></div>
                  </div>
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
                      <tr>
                        <td>1st Period</td>
                        <td>8:00</td>
                        <td>MON,WED,FRI</td>
                        <td>Lorem Ipsum</td>
                        <td>
                          <a href="" data-id="" data-days="date" data-time="" data-title="" class="btn btn-success alarm-edit"><i class="fa fa-pencil"></i></a>
                          <a href="" data-id="" data-days="date" data-time="" data-title="" class="btn btn-danger alarm-delete"><i class="fa fa-times"></i></a>
                        </td>
                      </tr> 
                      <tr>
                        <td>2nd Period</td>
                        <td>9:00</td>
                        <td>MON,WED,FRI</td>
                        <td>Lorem Ipsum</td>
                        <td>
                          <a href="" data-id="" data-days="date" data-time="" data-title="" class="btn btn-success alarm-edit"><i class="fa fa-pencil"></i></a>
                          <a href="" data-id="" data-days="date" data-time="" data-title="" class="btn btn-danger alarm-delete"><i class="fa fa-times"></i></a>
                        </td>
                      </tr> 
                      <tr>
                        <td>3rd Period</td>
                        <td>10:00</td>
                        <td>MON,WED,FRI</td>
                        <td>Lorem Ipsum</td>
                        <td>
                          <a href="" data-id="" data-days="date" data-time="" data-title="" class="btn btn-success alarm-edit"><i class="fa fa-pencil"></i></a>
                          <a href="" data-id="" data-days="date" data-time="" data-title="" class="btn btn-danger alarm-delete"><i class="fa fa-times"></i></a>
                        </td>
                      </tr> 
                      <tr>
                        <td>4th Period</td>
                        <td>11:00</td>
                        <td>MON,WED,FRI</td>
                        <td>Lorem Ipsum</td>
                        <td>
                          <a href="" data-id="" data-days="date" data-time="" data-title="" class="btn btn-success alarm-edit"><i class="fa fa-pencil"></i></a>
                          <a href="" data-id="" data-days="date" data-time="" data-title="" class="btn btn-danger alarm-delete"><i class="fa fa-times"></i></a>
                        </td>
                      </tr> 
                    </tbody>
                  </table>
                 </div>
                 <div class="col-lg-6">
                  <div class="x_title">
                    <h2>Announcement Schedules</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>No Class</td>
                        <td>Lorem Ipsum</td>
                        <td>01-20-2020</td>
                        <td>8:00 AM</td>
                        <td>
                          <a href="" data-id="" data-days="date" data-time="" data-title="" class="btn btn-info alarm-edit"><i class="fa fa-play"></i></a>
                          <a href="" data-id="" data-days="date" data-time="" data-title="" class="btn btn-success alarm-edit"><i class="fa fa-pencil"></i></a>
                          <a href="" data-id="" data-days="date" data-time="" data-title="" class="btn btn-danger alarm-delete"><i class="fa fa-times"></i></a>
                        </td>
                      </tr> 
                      <tr>
                        <td>Uniform Announcement</td>
                        <td>Lorem Ipsum</td>
                        <td>01-21-2020</td>
                        <td>8:00 AM</td>
                        <td>
                          <a href="" data-id="" data-days="date" data-time="" data-title="" class="btn btn-info alarm-edit"><i class="fa fa-play"></i></a>
                          <a href="" data-id="" data-days="date" data-time="" data-title="" class="btn btn-success alarm-edit"><i class="fa fa-pencil"></i></a>
                          <a href="" data-id="" data-days="date" data-time="" data-title="" class="btn btn-danger alarm-delete"><i class="fa fa-times"></i></a>
                        </td>
                      </tr> 
                    </tbody>
                  </table>
                 </div>
               </div>
              
            </div>
           
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
              <button type="button" class="btn btn-info btn-lg ">Mic On</button>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  @endsection