@extends('layouts.admin.master')
@section('title', 'Admin Manager')
@section('content')
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
   <!-- ---------------------------- Manager User --------------------------------- -->
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="container">
      <h2>List Users</h2>
      <table id="listUsers" class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td><%= index + 1 %></td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <script>
      $(document).ready(function() {
        $('#listUsers').DataTable();
      });
    </script>
  </div>

  <!-- ---------------------------- Manager Event --------------------------------- -->
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <div class="container">
      <h2>List Events</h2>
      <!-- Button to Open the Modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myEvent">
        Create Event
      </button>

      <!-- The Modal -->
      <div class="modal fade" id="myEvent">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Create Event</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            
            <form action="{!! Route('createMicropost') !!}" method="post">
            {!! csrf_field() !!}
            <div class="modal-body">
              <div class="form-group row">
                <label class="col-2 col-form-label">Name</label>
                <input type="text" class="form-control" id="uname" placeholder="Write something..." name="content" required>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Content</label>
                <input type="text" class="form-control" id="uname" placeholder="Write something..." name="content" required>
              </div>
              <div class="form-group row">
                <label for="example-datetime-local-input" class="col-2 col-form-label">Start</label>
                <div class="col-10">
                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-datetime-local-input" class="col-2 col-form-label">End</label>
                <div class="col-10">
                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                </div>
              </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" style="width: 100%;">Post</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <table id="listEvents" class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Content</th>
            <th>Time Start</th>
            <th>Time End</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($events as $event)
          <tr>
            <td><%= index + 1 %></td>
            <td>{{$event->name}}</td>
            <td>{{$event->content}}</td>
            <td>{{$event->start_time}}</td>
            <td>{{$event->end_time}}</td>
            <th>Action</th>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <script>
      $(document).ready(function() {
        $('#listEvents').DataTable();
      });
    </script>
  </div>
</div>
@endsection