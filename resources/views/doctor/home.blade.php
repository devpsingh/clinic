
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>Doctor | Home</title>
   <head>
   <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
 
   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@livewireStyles
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  @livewire('doctor.header')

 
@if($message = Session::get('inf'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
  
  @livewire('doctor.home')
<script src="{{asset('js/app.js')}}"></script>

@livewireScripts
<script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
  </script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript">
//var a="{{$event}}";
var disableDates = [];
@php
function dateDiff($date1, $date2)
{
   $date1_ts = strtotime($date1);
   $date2_ts = strtotime($date2);
   $diff = $date2_ts - $date1_ts;
   return round($diff / 86400);
}
@endphp
@if($event)

   @foreach($event as $ev)
        
        @php
           $days = dateDiff($ev->eventdate,$ev->eventdateto);
           $newdate=array();
            for($i=1;$i<=$days;$i++)
            {
               $newdate[] = date('Y-m-d',strtotime($ev->eventdate.'+'.$i.'days'));
            
            }
         //print_r($newdate);
        @endphp
        @foreach($newdate as $dt)
             disableDates.push("{{$dt}}");
         @endforeach
        @endforeach
      @endif
 
        
  
    $('#datefrom').datepicker({ 
        startDate: new Date(),
        format: 'yyyy-mm-dd',
        datesDisabled: disableDates,
        autoclose: true,
        daysOfWeekDisabled: [0], //sundays are disabled
    });
    $('#dateto').datepicker({ 
        startDate: new Date(),
        format: 'yyyy-mm-dd',
        datesDisabled: disableDates,
        autoclose: true,
      
    });
   
</script>

</body>
</html>
