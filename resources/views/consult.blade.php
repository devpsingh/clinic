<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Clinic | Doctors</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" integrity="sha512-rxThY3LYIfYsVCWPCW9dB0k+e3RZB39f23ylUYTEuZMDrN/vRqLdaCBo/FbvVT6uC2r0ObfPzotsfKF9Qc5W5g==" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles
        <style>
    body{margin-top:20px;
background:#eee;
}


.profile .grid-header {
    background: url('https://bootdey.com/img/Content/bg1.jpg') no-repeat center center;
	background-size: cover;
	color: #f5f5f5;
}

.profile img {
	max-width: 100px;
}

.profile .grid-header img {
	margin: 1em .5em;
}

.profile .grid-header h3 {
	color: #f5f5f5 !important;
	font-weight: 400;
	margin: 30px 0 20px 0;
}

.profile .grid-header p {
	margin-bottom: 5px;
}

.profile .grid-header p a {
	color: #f5f5f5;
}

.profile .grid-body {
	font-size: 1em;
}

.profile .tab-content {
	padding-bottom: 0px;
}

.profile .stats {
	margin-top: 20px;
	padding: 0px 0px 20px;
	background: #eee;
	text-align: center;
	border-top: 1px solid #ccc;
}

.profile .stats h1 {
	font-weight: 400;
	margin-bottom: 0px;
}

.profile .stats span {
	margin: 5px 0 10px 0;
	display: block;
}

.profile .stats .btn {
	padding-right: 4em;
	padding-left: 4em;
}

.profile .timeline-centered {
	font-size: 1.15em;
}

.profile .timeline-centered:before {
	background: #eee;
}

.profile .bg-default {
	border: 1px solid #bbb;
}


.grid {
    position: relative;
	width: 100%;
	background: #fff;
	color: #666666;
	border-radius: 2px;
	margin-bottom: 25px;
	box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
}

.grid .grid-header {
	position: relative;
	border-bottom: 1px solid #ddd;
	padding: 15px 10px 10px 20px;
}

.grid .grid-header:before,
.grid .grid-header:after {
	display: table;
	content: " ";
}

.grid .grid-header:after {
	clear: both;
}

.grid .grid-header span,
.grid .grid-header > .fa {
	display: inline-block;
	margin: 0;
	font-weight: 300;
	font-size: 1.5em;
	float: left;
}

.grid .grid-header span {
	padding: 0 5px;
}

.grid .grid-header > .fa {
	padding: 5px 10px 0 0;
}

.grid .grid-header > .grid-tools {
	padding: 4px 10px;
}

.grid .grid-header > .grid-tools a {
	color: #999999;
	padding-left: 10px;
	cursor: pointer;
}

.grid .grid-header > .grid-tools a:hover {
	color: #666666;
}

.grid .grid-body {
	padding: 15px 20px 15px 20px;
	font-size: 0.9em;
	line-height: 1.9em;
}

.grid .full {
	padding: 0 !important;
}

.grid .transparent {
	box-shadow: none !important;
	margin: 0px !important;
	border-radius: 0px !important;
}

.grid.top.black > .grid-header {
	border-top-color: #000000 !important;
}

.grid.bottom.black > .grid-body {
	border-bottom-color: #000000 !important;
}

.grid.top.blue > .grid-header {
	border-top-color: #007be9 !important;
}

.grid.bottom.blue > .grid-body {
	border-bottom-color: #007be9 !important;
}

.grid.top.green > .grid-header {
	border-top-color: #00c273 !important;
}

.grid.bottom.green > .grid-body {
	border-bottom-color: #00c273 !important;
}

.grid.top.purple > .grid-header {
	border-top-color: #a700d3 !important;
}

.grid.bottom.purple > .grid-body {
	border-bottom-color: #a700d3 !important;
}

.grid.top.red > .grid-header {
	border-top-color: #dc1200 !important;
}

.grid.bottom.red > .grid-body {
	border-bottom-color: #dc1200 !important;
}

.grid.top.orange > .grid-header {
	border-top-color: #f46100 !important;
}

.grid.bottom.orange > .grid-body {
	border-bottom-color: #f46100 !important;
}

.grid.no-border > .grid-header {
	border-bottom: 0px !important;
}

.grid.top > .grid-header {
	border-top-width: 4px !important;
	border-top-style: solid !important;
}

.grid.bottom > .grid-body {
	border-bottom-width: 4px !important;
	border-bottom-style: solid !important;
}


.timeline-centered {
    position: relative;
    margin-bottom: 30px;
}

.timeline-centered:before, .timeline-centered:after,
.timeline-centered .timeline-entry:before, .timeline-centered .timeline-entry:after,
.timeline-centered .timeline-entry .timeline-entry-inner:before, .timeline-centered .timeline-entry .timeline-entry-inner:after {
    content: " ";
    display: table;
}

.timeline-centered:after,
.timeline-centered .timeline-entry:after,
.timeline-centered .timeline-entry .timeline-entry-inner:after  {
    clear: both;
}

.timeline-centered:before {
    content: '';
    position: absolute;
    display: block;
    width: 4px;
    background: #fff;
    left: 50%;
    top: 20px;
    bottom: 20px;
    margin-left: -4px;
}

.timeline-centered .timeline-entry {
    position: relative;
    width: 50%;
    float: right;
    margin-bottom: 70px;
    clear: both;
}

.timeline-centered .timeline-entry.begin {
    margin-bottom: 0;
}

.timeline-centered .timeline-entry.left-aligned {
    float: left;
}

.timeline-centered .timeline-entry.left-aligned .timeline-entry-inner {
    margin-left: 0;
    margin-right: -18px;
}

.timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-time {
    left: auto;
    right: -100px;
    text-align: left;
}

.timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-icon {
    float: right;
}

.timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label {
    margin-left: 0;
    margin-right: 70px;
}

.timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label:after {
    left: auto;
    right: 0;
    margin-left: 0;
    margin-right: -9px;
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg);
}

.timeline-centered .timeline-entry .timeline-entry-inner {
    position: relative;
    margin-left: -22px;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-time {
    position: absolute;
    margin-top: -12px;
    left: -100px;
    text-align: right;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-time > span {
    display: block;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-time > span:first-child {
    font-size: 1.2em;
    font-weight: 400;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-time > span:last-child {
    font-size: 0.9em;
    font-weight: 300;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon {
    background: #fff;
    color: #737881;
    display: block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    font-size: 1.3em;
    text-align: center;
    float: left;
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding;
    background-clip: padding-box;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    -webkit-box-shadow: 0 0 0 4px #fff;
    -moz-box-shadow: 0 0 0 4px #fff;
    box-shadow: 0 0 0 4px #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label:after {
    content: '';
    display: block;
    position: absolute;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 9px 9px 9px 0;
    border-color: transparent #eee transparent transparent;
    left: 0;
    top: 10px;
    margin-left: -9px;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label {
    position: relative;
    background: #fff;
    padding: 1.7em;
    margin-left: 70px;
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding;
    background-clip: padding-box;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    border: 1px solid #ddd;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2, .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p {
    color: #666666;
    font-size: 0.9em;
    line-height: 1.9em;
    margin: 0;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p + p {
    margin-top: 15px;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 {
    font-size: 1.2em;
    line-height: 1.2em;
    margin-bottom: 10px;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 span {
    color: #999;
}

.timeline-centered .timeline-entry .timeline-entry-inner blockquote {
    font-size: 0.9em;
    line-height: 1.9em;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-default {
    background-color: #fff;
    color: #999;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-primary {
    background-color: #428bca;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-success {
    background-color: #5cb85c;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-info {
    background-color: #5bc0de;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-warning {
    background-color: #f0ad4e;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-danger {
    background-color: #d9534f;
    color: #fff;
}


.popup-gallery a img {
    margin: 2px 0;
}

.popup-gallery a img:hover {
    opacity: 0.6;
	filter: alpha(opacity=60); /* For IE8 and earlier */
}



     </style>
     
    <style>
    .datepicker table tr td.disabled
    {
    background-color:red !imortant;
    }
    
    </style>
    </head>
    <body class="bg-light font-sans antialiased">
     @livewire('header')
     @livewire('consult')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
     @livewireScripts
      <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
  </script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript">
    
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
//removing dates if event updated by doctor
function removeItem(array, item){
    for(var i in array){
        if(array[i]==item){
            array.splice(i,1);
            break;
        }
    }
}

      @if(count($updatedEvents)>0)
            @foreach($updatedEvents as $val)
                    removeItem(disableDates,'{{$val->updated_date}}');
                    console.log({{$val->updated_date}});
            @endforeach
     @endif

    $('#date').datepicker({ 
        startDate: new Date(),
        format: 'yyyy-mm-dd',
        datesDisabled: disableDates,
        autoclose: true,
        daysOfWeekDisabled: [0], //sundays are disabled
    });
   
</script>
     <script>
     
     /*
        $(document).ready(function(){
    var date = new Date();
    var today = date.getDate();
    // Set click handlers for DOM elements
    $(".right-button").click({date: date}, next_year);
    $(".left-button").click({date: date}, prev_year);
    $(".month").click({date: date}, month_click);
    $("#add-button").click({date: date}, new_event);
    // Set current month as active
    $(".months-row").children().eq(date.getMonth()).addClass("active-month");
    init_calendar(date);
    var events = check_events(today, date.getMonth()+1, date.getFullYear());
    show_events(events, months[date.getMonth()], today);
});

// Initialize the calendar by appending the HTML dates
function init_calendar(date) {
    $(".tbody").empty();
    $(".events-container").empty();
    var calendar_days = $(".tbody");
    var month = date.getMonth();
    var year = date.getFullYear();
    var day_count = days_in_month(month, year);
    var row = $("<tr class='table-row'></tr>");
    var today = date.getDate();
    // Set date to 1 to find the first day of the month
    date.setDate(1);
    var first_day = date.getDay();
    // 35+firstDay is the number of date elements to be added to the dates table
    // 35 is from (7 days in a week) * (up to 5 rows of dates in a month)
    for(var i=0; i<35+first_day; i++) {
        // Since some of the elements will be blank, 
        // need to calculate actual date from index
        var day = i-first_day+1;
        // If it is a sunday, make a new row
        if(i%7===0) {
            calendar_days.append(row);
            row = $("<tr class='table-row'></tr>");
        }
        // if current index isn't a day in this month, make it blank
        if(i < first_day || day > day_count) {
            var curr_date = $("<td class='table-date nil'>"+"</td>");
            row.append(curr_date);
        }   
        else {
            var curr_date = $("<td class='table-date'>"+day+"</td>");
            var events = check_events(day, month+1, year);
            if(today===day && $(".active-date").length===0) {
                curr_date.addClass("active-date");
                show_events(events, months[month], day);
            }
            // If this date has any events, style it with .event-date
            if(events.length!==0) {
                curr_date.addClass("event-date");
            }
            // Set onClick handler for clicking a date
            curr_date.click({events: events, month: months[month], day:day}, date_click);
            row.append(curr_date);
        }
    }
    // Append the last row and set the current year
    calendar_days.append(row);
}

// Get the number of days in a given month/year
function days_in_month(month, year) {
    var monthStart = new Date(year, month, 1);
    var monthEnd = new Date(year, month + 1, 1);
    return (monthEnd - monthStart) / (1000 * 60 * 60 * 24);    
}

// Event handler for when a date is clicked
function date_click(event) {
    $(".events-container").show(250);
    $("#dialog").hide(250);
    $(".active-date").removeClass("active-date");
    $(this).addClass("active-date");
    show_events(event.data.events, event.data.month, event.data.day);
};

// Event handler for when a month is clicked
function month_click(event) {
    $(".events-container").show(250);
    $("#dialog").hide(250);
    var date = event.data.date;
    $(".active-month").removeClass("active-month");
    $(this).addClass("active-month");
    var new_month = $(".month").index(this);
    date.setMonth(new_month);
    init_calendar(date);
}

// Event handler for when the year right-button is clicked
function next_year(event) {
    $("#dialog").hide(250);
    var date = event.data.date;
    var new_year = date.getFullYear()+1;
    $("year").html(new_year);
    date.setFullYear(new_year);
    init_calendar(date);
}

// Event handler for when the year left-button is clicked
function prev_year(event) {
    $("#dialog").hide(250);
    var date = event.data.date;
    var new_year = date.getFullYear()-1;
    $("year").html(new_year);
    date.setFullYear(new_year);
    init_calendar(date);
}

// Event handler for clicking the new event button
function new_event(event) {
    // if a date isn't selected then do nothing
    if($(".active-date").length===0)
        return;
    // remove red error input on click
    $("input").click(function(){
        $(this).removeClass("error-input");
    })
    // empty inputs and hide events
    $("#dialog input[type=text]").val('');
    $("#dialog input[type=number]").val('');
    $(".events-container").hide(250);
    $("#dialog").show(250);
    // Event handler for cancel button
    $("#cancel-button").click(function() {
        $("#name").removeClass("error-input");
        $("#count").removeClass("error-input");
        $("#dialog").hide(250);
        $(".events-container").show(250);
    });
    // Event handler for ok button
    $("#ok-button").unbind().click({date: event.data.date}, function() {
        var date = event.data.date;
        var name = $("#name").val().trim();
        var count = parseInt($("#count").val().trim());
        var day = parseInt($(".active-date").html());
        // Basic form validation
        if(name.length === 0) {
            $("#name").addClass("error-input");
        }
        else if(isNaN(count)) {
            $("#count").addClass("error-input");
        }
        else {
            $("#dialog").hide(250);
            console.log("new event");
            new_event_json(name, count, date, day);
            date.setDate(day);
            init_calendar(date);
        }
    });
}

// Adds a json event to event_data
function new_event_json(name, count, date, day) {
    var event = {
        "patient_name": name,
        "mobile_number": count,
        "year": date.getFullYear(),
        "month": date.getMonth()+1,
        "day": day
    };
    event_data["events"].push(event);
    console.log(event["year"]);
}

// Display all events of the selected date in card views
function show_events(events, month, day) {
    // Clear the dates container
    $(".events-container").empty();
    $(".events-container").show(250);
  
    // If there are no events for this date, notify the user
    if(events.length===0) {
        var event_card = $("<div class='event-card'></div>");
        var event_name = $("<div class='event-name'>There is no appointment planned for "+month+" "+day+".</div>");
        $(event_card).css({ "border-left": "10px solid #FF1744" });
        $(event_card).append(event_name);
        $(".events-container").append(event_card);
    }
    else {
        // Go through and add each event as a card to the events container
        for(var i=0; i<events.length; i++) {
            var event_card = $("<div class='event-card'></div>");
            var event_name = $("<div class='event-name'> Name: "+events[i]["patient_name"]+"</div>");
            var event_count = $("<div class='event-count'> Mobile: "+events[i]["mobile_number"]+"</div>");
            if(events[i]["cancelled"]===true) {
                $(event_card).css({
                    "border-left": "10px solid #FF1744"
                });
                event_count = $("<div class='event-cancelled'>Cancelled</div>");
            }
            $(event_card).append(event_name).append(event_count);
            $(".events-container").append(event_card);
        }
        //console.log(day+"-"+month+"-"+year);
    }
}

// Checks if a specific date has any events
function check_events(day, month, year) {
    var events = [];
    for(var i=0; i<event_data["events"].length; i++) {
        var event = event_data["events"][i];
        if(event["day"]===day &&
            event["month"]===month &&
            event["year"]===year) {
                events.push(event);
            }
    }
    return events;
}

// Given data for events in JSON format
var event_data = {
    "events": [
    {
        "patient_name": " Repeated Test Event ",
        "mobile_number": 120,
        "year": 2017,
        "month": 5,
        "day": 10,
        "cancelled": true
    },
    {
        "patient_name": " Repeated Test Event ",
        "mobile_number": 120,
        "year": 2017,
        "month": 5,
        "day": 10,
        "cancelled": true
    },
     
    ]
};

const months = [ 
    "January", 
    "February", 
    "March", 
    "April", 
    "May", 
    "June", 
    "July", 
    "August", 
    "September", 
    "October", 
    "November", 
    "December" 
];
*/
     </script>
    </body>
</html>