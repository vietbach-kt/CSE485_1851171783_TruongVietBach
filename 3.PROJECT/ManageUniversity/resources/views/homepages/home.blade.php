@extends('layouts.master')
@section('title', 'Home')
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
              <img src="https://lh3.googleusercontent.com/proxy/UDgMmLMRbDfupYTphgU3pCRFZ7hy8BseyQn1ikYYvw7nT-dHzK5gAtdH05XpqFcfXSlxwpQcl2E1HYFBW1aklznv4NMVwMBnIXPEOtpjfgPFYn9zeFjSyVPsM5gJkimBVmR3" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
              <img src="https://lh3.googleusercontent.com/proxy/UDgMmLMRbDfupYTphgU3pCRFZ7hy8BseyQn1ikYYvw7nT-dHzK5gAtdH05XpqFcfXSlxwpQcl2E1HYFBW1aklznv4NMVwMBnIXPEOtpjfgPFYn9zeFjSyVPsM5gJkimBVmR3" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://lh3.googleusercontent.com/proxy/UDgMmLMRbDfupYTphgU3pCRFZ7hy8BseyQn1ikYYvw7nT-dHzK5gAtdH05XpqFcfXSlxwpQcl2E1HYFBW1aklznv4NMVwMBnIXPEOtpjfgPFYn9zeFjSyVPsM5gJkimBVmR3" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection 