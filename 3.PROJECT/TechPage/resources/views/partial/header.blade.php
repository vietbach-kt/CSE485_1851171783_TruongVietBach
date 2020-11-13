<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <div class="topHeader">
        <ul class="nav justify-content-center">

          @if (Auth::check())
            <li class="nav-item">
              <a class="nav-link" href="users/logout">Đăng xuất</a>
            </li>
          @else
            <li class="nav-item"><a class="nav-link" href="/users/register">Register</a></li>
            <li class="nav-item"><a class="nav-link" href="/users/login">Login</a></li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="#">Thông báo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Liên hệ</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Ngôn ngữ
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Tiếng Anh</a>
              <a class="dropdown-item" href="#">Tiếng Việt</a>
              <a class="dropdown-item" href="#">Tiếng Nhật</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-12 col-xs-12">
      <div class="footHeader">
        <div class="navbar navbar-expand-sm">
          <a class="navbar-brand" href="/">
            <img src="http://cse.tlu.edu.vn/cse/assets/images/logo.jpg" class="d-inline-block align-top" alt="" loading="lazy">
          </a>
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" href="/"><i class="fa fa-home" aria-hidden="true"></i>Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Giới thiệu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nghiên cứu khoa học</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('forum') }}">Diễn đàn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tin tức</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>