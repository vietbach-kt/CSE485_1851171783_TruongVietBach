@extends('layouts.master')
@section('title', 'Home')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="10000">
            <img src="https://previews.123rf.com/images/mathier/mathier1905/mathier190500001/134557215-no-thumbnail-images-placeholder-for-forums-blogs-and-websites.jpg" class="d-block w-100" alt="..." style="max-height: 30em;">
          </div>
          <div class="carousel-item" data-interval="2000">
            <img src="https://previews.123rf.com/images/mathier/mathier1905/mathier190500001/134557215-no-thumbnail-images-placeholder-for-forums-blogs-and-websites.jpg" class="d-block w-100" alt="..." style="max-height: 30em;">
          </div>
          <div class="carousel-item">
            <img src="https://previews.123rf.com/images/mathier/mathier1905/mathier190500001/134557215-no-thumbnail-images-placeholder-for-forums-blogs-and-websites.jpg" class="d-block w-100" alt="..." style="max-height: 30em;">
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
<div class="listStatistical">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <div clas="statisticalItem">
          <div class="member">
            <h2 class="counter">1000</h2>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div clas="statisticalItem">
          <div class="event">
            <h2 class="counter">1000</h2>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div clas="statisticalItem">
          <div class="document">
            <h2 class="counter">1000</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="listEvent">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="sideBarRight"></div>
      </div>
      <div class="col-md-4">
        <div class="sideBarLeft"></div>
      </div>
    </div>
  </div>
</div>
@endsection