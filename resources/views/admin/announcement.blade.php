  @extends('layout.admin')
  @section('content')
  <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Announcement</h3>
          </div>

          
        </div>

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-lg-4 col-sm-12  ">
            <div class="x_panel">
              <div class="x_title">
                <h2>Announcement</h2>
                
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form action="{{route('addAnnouncement')}}" method="post">
                    @csrf
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="form-group col-lg-12">
                            <label for="Title">Title</label>
                            <input type="text" class="form-control" name="announcementtitle">
                          </div>
                          <div class="form-group col-lg-12">
                            <label for="Date">Date</label>
                            <input type="date" class="form-control" name="announcementdate">
                          </div>
                          <div class="form-group col-lg-12">
                            <label for="Time">Time</label>
                            <input type="time" class="form-control" name="announcementtime">
                          </div>
                        
                        <div class="col-lg-12">
                          <br>
                          <label for="message">Message (20 chars min, 100 max) :</label>
                          <textarea id="message" required="required" class="form-control" name="announcemenmessage" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                        </div>
                        <div class="form-group col-lg-7">
                          <br>
                          <label for="Sound">Sound</label>
                          <input type="file" class="form-control-file " id="file" name="announcemenfile">
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
                <h2>List</h2>
                
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                
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
                    @foreach($dataAnnouncement as $Announcement)
                    <tr>
                      <td>{{$Announcement->title}}</td>
                      <td>{{$Announcement->message}}</td>
                      <td>{{$Announcement->date}}</td>
                      <td>{{$Announcement->alarmtime}}</td>
                      <td>
                        <a href="" data-id="{{$Announcement->id}}"  data-days="date" data-time="" data-title="" class="btn btn-info alarm-edit"><i class="fa fa-play"></i></a>
                        <a href="" data-id="{{$Announcement->id}}" 
                            data-days="date" 
                            data-time="{{$Announcement->alarmtime}}"
                            data-message="{{$Announcement->message}}" 
                            data-title="{{$Announcement->title}}" class="btn btn-success alarm-edit"><i class="fa fa-pencil"></i></a>
                        <a href="" data-id="{{$Announcement->id}}"  class="btn btn-danger alarm-delete"><i class="fa fa-times"></i></a>
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