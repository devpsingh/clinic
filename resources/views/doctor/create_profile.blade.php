
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>Doctor | Home</title>
 
    
    <!-- <script src="{{ asset('js/app.js') }}" defer></script>
  -->
  
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
 
   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@livewireStyles
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  @livewire('doctor.header')
<h1 class="text-center">Create profile</h1>
 
  @livewire('doctor.create-profile')
  
<script src="{{asset('js/app.js')}}"></script>
@livewireScripts
</body>
</html>
