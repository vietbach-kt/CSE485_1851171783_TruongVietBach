<!doctype html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="stylesheet" href="{{ asset('css/custom.css') }}"> -->
  <!-- Bootstrap CSS -->
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<style>
  .topHeader {
  ul li a {
  color: black;
  font-size: 12px;
  }
  ul li a:hover{
    color: blue;
  } 
  p{
      font-size: 12px;  
  }
  p:hover{
    color: blue;
  }
}
.footHeader{
  ul li a {
    color: black;
    font-size: 15px;
    }
  ul li a:hover{
    color: blue;
  }
}
.fixed-top{
  background-color: white;
}
.listStatistical{
  margin-top: 2em;
}
.member{
  background-color: #8080804f;
  height: 14em;
  max-height: 15em;
}
.event{
  background-color: #8080804f;
  height: 14em;
  max-height: 15em;
}
.document{
  background-color: #8080804f;
  height: 14em;
  max-height: 15em;
}
.listEvent{
  margin-top: 2em;
}
.sideBarRight{
  border: 1px gray solid;
  height: 40em;
}
.sideBarLeft{
  border: 1px gray solid;
  height: 40em;
}
#forumPageBackground{
  background-color: #f3f3f3
}
</style>
</head>

<body>

  @include('partial.header')
  @yield('content')
  @include('partial.footer')
  <script>
    $(function() {
      createSticky($(".footHeader"));
    });

    function createSticky(sticky) {
      if (typeof sticky !== "undefined") {
        var pos = sticky.offset().top,
          win = $(window);
        win.on("scroll", function() {
          win.scrollTop() >= pos ? sticky.addClass("fixed-top") : sticky.removeClass("fixed-top");
        });
      }
    }
  </script>
  <script>
    $(document).ready(function() {
      $('.counter').counterUp({
        delay: 100,
        time: 2000
      });
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js" integrity="sha512-kIRDPWIBoKpF79HJv3xBPQgZKjhxzqMGG2N68svvId45w9vp/hTXoR7cDERYhVEhLJTuSGb/c3+ZHgeQfLm0Hg==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>
</body>

</html>