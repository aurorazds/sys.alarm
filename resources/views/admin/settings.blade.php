@extends('layout.admin')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Settings</h3>
        </div> 
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-lg-4 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Activities</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <form action="{{route('addCalendar')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group col-lg-12">
                          <label for="Title">Title</label>
                          <input type="text" class="form-control" name="caltitle">
                        </div>
                        <div class="form-group col-lg-12">
                          <label for="Date">Date</label>
                          <input type="date" class="form-control" name="caldate">
                        </div>
                        <div class="form-group col-lg-12">
                          <label for="School Year">School Year</label>
                          <select name="calschoolyr" id="calschoolyr" class="form-control">
                              <option value="2020-2021">2020-2021</option>
                              <option value="2021-2022">2021-2022</option>
                              <option value="2022-2023">2022-2023</option>
                              <option value="2023-2024">2023-2024</option>
                              <option value="2024-2025">2024-2025</option>
                              <option value="2025-2026">2025-2026</option>
                              <option value="2026-2027">2026-2027</option>
                              <option value="2027-2028">2027-2028</option>
                              <option value="2028-2029">2028-2029</option>
                              <option value="2029-2030">2029-2030</option>
                          </select>
                        </div>
          
                      <div class="form-group col-lg-7">
                        <button type="submit" class="btn btn-success">Save</button>
                      </div>
                    </div>
              </form>      
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Calendar of Activities</h2>
              
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
               
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Title</th>
                   
                    <th>Date</th>
                    <th>School Year</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($dataCalendar as $Calendar)
                  <tr>
                    <td>{{$Calendar->title}}</td>
                    <td>{{$Calendar->caldate}}</td>
                    <td>{{$Calendar->schoolyear}}</td>
                    <td>
                      <a href="" data-id="{{$Calendar->id}}" 
                        data-date="{{$Calendar->caldate}}" 
                        data-schoolyear="{{$Calendar->schoolyear}}" class="btn btn-success alarm-edit"><i class="fa fa-pencil"></i></a>
                      <a href="" data-id="{{$Calendar->id}}"  class="btn btn-danger alarm-delete"><i class="fa fa-times"></i></a>
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