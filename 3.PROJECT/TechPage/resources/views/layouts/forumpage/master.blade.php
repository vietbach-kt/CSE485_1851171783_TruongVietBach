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
    <link rel="stylesheet" href="{!! asset('sass/customhomepage.scss') !!}">
</head>
<style>
      .container{
    max-width: 980px !important;
  }
  .GroupInlineComposer{
    margin-top: 5px;
    height: 45em;
    max-height: 50em;
  }
  .header{
    border: 1px #e8e8e8 solid; 
    box-shadow: 1px 1px 5px #f3f3f3;
    border-radius: 8px; 
  }
  .EnterComment{
    height: 8em;
  }
  .publicBackground{
    margin: 20px 10px;
    border: 1px #e8e8e8 solid;
    background-color: white;
    box-shadow: 1px 1px 5px #f3f3f3;
    border-radius: 8px;
  }
  .NoFunction{
    margin: 10px 10px;
  }
  .mainFunction{
    margin: 10px 10px; 
  }
  .contentMicropostOrEvent{
    margin: 10px 10px;
  }
  .aboutThisForum{
    max-height: 15em;
    height: 13em;
  }
  .marginForpage{
    margin: 5px 5px;
  }
</style>
</head>

<body>

    @include('partial.forumpage.header')
    @yield('content')
</body>

</html>