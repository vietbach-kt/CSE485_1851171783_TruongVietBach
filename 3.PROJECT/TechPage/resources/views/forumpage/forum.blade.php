@extends('layouts.forumpage.master')
@section('title', 'Home')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="GroupInlineComposer">
        <div class="EnterComment publicBackground">
          <div class="row mainFunction">
            <div class="col-md-3">
              <div class="iconUser">
                <i class='fas fa-user-circle' style='font-size:38px'></i><b>ABCSS</b>
              </div>
            </div>
            <div class="col-md-9">
              <div class="postComment">
                <button type="button" class="btn" data-toggle="modal" data-target="#createMicropost" style="width:24em">
                  What's on you mind?
                </button>
                <div class="modal fade" id="createMicropost">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Create Post</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                    <form action="{!! Route('createMicropost') !!}" method="post">
                      {!! csrf_field() !!}
                      <div class="modal-body">
                          <div class="form-group">
                            <label for="uname">Content</label>
                            <input type="text" class="form-control" id="uname" placeholder="Write something..." name="content" required>
                          </div>
                          <div class="row uploadFile" style="width: 100%;">
                            <div class="col-md-6">
                              <h6>Add to your photo</h6>
                            </div>
                            <div class="col-md-6">
                              <ul class="listChosse">
                                <li><a href="#"><i class="fas fa-video"></i></a></li>
                                <li><a href="#"><i class="fas fa-images"></i></a></li>
                                <li><a href="#"><i class="fas fa-user-friends"></i></a></li>
                              </ul>
                            </div>
                          </div>
                      </div>
                      <!-- Modal footer -->
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" style="width: 100%;">Post</button>
                        <!-- commetn -->
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row NoFunction">
            <div class="col-md-4"><button type="button" class="btn btn-outline-light text-dark">Room</button></div>
            <div class="col-md-4"><button type="button" class="btn btn-outline-light text-dark">Image/Video</button></div>
            <div class="col-md-4"><button type="button" class="btn btn-outline-light text-dark">Tag People</button></div>
          </div>
        </div>
        <div class="listItemContent">
          @foreach($microposts as $micropost)
            <div class="itemContent publicBackground">
              <div class="contentMicropostOrEvent">
                <div class="contentDetail">
                  <div class="textContent">
                    <div class="informationContent">
                      <i class='fas fa-user-edit'></i>
                      <b>{{$micropost->user->name}}</b>
                    </div>
                    <span>{{$micropost->content}}</span>
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
    </div>
    <div class="col-md-4">
      <div class="aboutThisForum publicBackground">
        <h5 class="marginForpage">About</h5>
        <div class="row marginForpage">
          <div class="col-md-2">
            <i class='fas fa-lock-open'></i>
          </div>
          <div class="col-md-10">
            <div class="correspondingContetn">
              <h6>Public</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection