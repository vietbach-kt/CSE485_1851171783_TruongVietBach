@extends('layouts.forumpage.master')
@section('title', 'Forum-Event')
@section('content')
<div class="container">
  <div class="listItemContent">
    @foreach($events as $event)
    <div class="itemContent publicBackground">
      <div class="contentMicropostOrEvent">
        <div class="contentDetail">
          <div class="textContent">
            <div class="informationContent">
              <i class='fas fa-user-edit'></i>
              <b>{{$event->user->name}}(Admin)</b>
            </div>
            <h6>Topic: <b>{{$event->name}}</b></h6>
            <span>Content: {{$event->content}}</span>
            <ul>
              <li>Start: {{$event->start_time}}</li>
              <li>End: {{$event->end_time}}</li>
            </ul>
          </div>
          <div class="listImage">
          </div>
        </div>
        <div class="liveLikeAndQuantity">
        </div>
      </div>
      <div class="liveLikeAndQuantity">
        <div class="quantityLikeComment">
          <div class="row">
            <div class="col-md-5">
              5 Like
            </div>
            <div class="col-md-7">
              10 Comments
            </div>
          </div>
        </div>
        <div class="functionCommentLike">
          <div class="row">
            <div class="col-md-6">
              <i class="far fa-thumbs-up"></i>Like
            </div>
            <div class="col-md-6">
              <i class="far fa-comment-alt"></i>Comment
            </div>
          </div>
        </div>
        <form action="{!! Route('createMicropost') !!}" method="post">
          <div class="postComment">
            <div class="form-group" style="margin-top: 5px;">
              <div class="row">
                <div class="col-md-10">
                  <input type="text" class="form-control" id="uname" placeholder="Write something..." name="content" required>
                  <!-- <%= f.hidden_field :user_id, :value => current_user.id %> -->
                </div>
                <div class="col-md-2">
                  <button type="submit" class="btn btn-primary" style="width: 100%;">Post</button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <div class="listComment">
          <div class="listItem">
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection