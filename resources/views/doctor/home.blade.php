
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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style>
.validate{
   background-color:black;
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}

//calendar
/* 
.calendar-wrapper {
   height: auto;
   max-width: 730px;
   margin: 0 auto;
}

.calendar-header {
   background-color: rgba(18, 15, 25, 0.25);
   height: 100%;
   padding: 20px;
   color: #fff;
   font-family: 'Roboto', sans-serif;
   font-weight: 300;
   position: relative;
}

.header-title {
   padding-left: 15%;
}

.header-background {
   background-image: url("https://raw.githubusercontent.com/JustMonk/codepen-resource-project/master/img/compressed-header.jpg");
   height: 200px;
   background-position: center right;
   background-size: cover;
}

.calendar-content {
   background-color: #fff;
   padding: 20px;
   padding-left: 15%;
   padding-right: 15%;
   overflow: hidden;
}

.event-mark {
   width: 5px;
   height: 5px;
   background-color: teal;
   border-radius: 100px;
   position: absolute;
   left: 46%;
   top: 70%;
}

.calendar-footer {
   height: 200px;
   font-family: 'Roboto', sans-serif;
   font-weight: 300;
   text-align: center;
   background-color: #4b6289 !important;
   position: relative;
   overflow: hidden;
}

.addForm {
   position: absolute;
   top: 100%;
   width: 100%;
   height: 100%;
   background-color: #4b5889 !important;
   transition: top 0.5s cubic-bezier(1, 0, 0, 1);
   padding: 0 5px 0 5px;
}

.addForm input {
   color: #fff;
}

.addForm .row {
   padding-left: 0.75rem;
   padding-right: 0.75rem;
   margin-bottom: 0;
}

.addForm h4 {
   color: #fff;
   margin-bottom: 1rem;
}

.addEventButtons {
   text-align: right;
   padding: 0 0.75rem 0 0.75rem;
}

.addEventButtons a {
   color: black;
   font-weight: 300;
}

.emptyForm {
   padding: 20px;
   padding-left: 15%;
   padding-right: 15%;
}

.emptyForm h4 {
   color: #fff;
   margin-bottom: 2rem;
}

.sidebar-wrapper {
   color: #fff;
   background-color: #5a649c !important;
   padding-top: 0;
   padding-bottom: 20px;
   font-family: 'Roboto', sans-serif;
   font-weight: 300;
   padding-left: 0;
   padding-right: 0;
}

.sidebar-title {
   padding: 50px 6% 50px 12%;
}

.sidebar-title h4 {
   margin-top: 0;
}

.sidebar-events {
   overflow-x: hidden;
   overflow-y: hidden;
   margin-bottom: 70px;
}

.empty-message {
   font-size: .8rem;
   padding: 15px 6% 15px 12%;
}

.eventCard {
   background-color: #fff;
   color: black;
   padding: 12px 24px 12px 24px;
   border-bottom: 1px solid #E5E5E5;
   white-space: nowrap;
   position: relative;
   animation: slideInDown 0.5s;
}

.eventCard-header {
   font-weight: bold;
}

.eventCard-description {
   color: grey;
}

.eventCard-mark-wrapper {
   position: absolute;
   right: 0;
   top: 0;
   height: 100%;
   width: 60px;
   background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 25%, rgba(255, 255, 255, 1) 100%);
}

.eventCard-mark {
   width: 8px;
   height: 8px;
   background-color: #b39ddb;
   border-radius: 100px;
   position: absolute;
   left: 50%;
   top: 45%;
}

.day-mark {
   width: 7px;
   height: 7px;
   background-color: #b39ddb;
   border-radius: 100px;
   position: absolute;
   left: 47%;
   top: 67%;
}

.content-wrapper {
   padding-top: 50px;
   padding-bottom: 50px;
   margin-left: 300px;
}

#table-body .col:hover {
   cursor: pointer;
   /*border: 1px solid grey;*/
   /*
   background-color: #E0E0E0;
}

.empty-day:hover {
   cursor: default !important;
   background-color: #fff !important;
}

#table-body .row .col {
   padding: .75rem;
}

#table-body .col {
   border: 1px solid transparent;
}

#table-body {}

#table-body .row {
   margin-bottom: 0;
}

#table-body .col {
   padding-top: 1.3rem !important;
   padding-bottom: 1.3rem !important;
}

#calendar-table {
   text-align: center;
}

.prev-button {
   position: absolute;
   cursor: pointer;
   left: 0%;
   top: 35%;
   color: grey !important;
}

.prev-button i {
   font-size: 4em;
}

.next-button {
   position: absolute;
   cursor: pointer;
   right: 0%;
   top: 35%;
   color: grey !important;
}

.next-button i {
   font-size: 4em;
}

.addEvent {
   box-shadow: 0 5px 15px rgb(57, 168, 228);
   background-color: #39a8e4;
   padding: 10px;
   padding-left: 3em;
   padding-right: 3em;
   cursor: pointer;
   border-radius: 25px;
   color: #fff !important;
   background-image: linear-gradient(135deg, #8d8dd4, #45ced4);
}

.addEvent:hover {
   transition: box-shadow 0.5s;
   box-shadow: 0 4px 25px rgb(57, 168, 228);
}

.mobile-header {
   padding: 0;
   display: none;
   padding-top: 20px;
   padding-bottom: 20px;
   position: fixed;
   z-index: 99;
   width: 100%;
   background-color: #5a649c !important;
}

.mobile-header a i {
   color: #fff;
   font-size: 38px;
}

.mobile-header h4 {
   color: #fff;
}

.mobile-header .row {
   margin-bottom: 0;
}

.mobile-header h4 {
   margin: 0;
   font-family: 'Roboto', sans-serif;
   font-weight: 300;
}

@media (min-width:992px) {
   .content-wrapper {
      margin-left: 0;
   }
   .mobile-header {
      display: block;
   }
   .calendar-wrapper {
      margin-top: 80px;
   }
   .sidebar-wrapper {
      background-color: #EEEEEE !important;
   }
   .sidebar-title {
      background-color: #5A649C !important;
   }
   .empty-message {
      color: black;
   }
   .lighten-3{
       background:#E0E0E0;
   }
}

@media (min-width:767px) {
   .content-wrapper .container {
      width: auto;
   }
   .calendar-content {
      padding-left: 5%;
      padding-right: 5%;
   }
   body .row {
      margin-bottom: 0;
   }
   .lighten-3{
       background:#E0E0E0;
   }
}

@media (min-width:450px) {
   .content-wrapper {
      padding-left: 0;
      padding-right: 0;
   }
   .content-wrapper .container {
      padding-left: 0;
      padding-right: 0;
   }
   .lighten-3{
       background:#E0E0E0;
   }
} */
//date picker dates color changeMonthNext
.datepicker table tr td.disabled,
.datepicker table tr td.disabled:hover {
  background: red !important;
  color: #999999;
  cursor: default;
}
</style>
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
@if($event)
   @foreach($event as $ev)
    disableDates.push("{{$ev->eventdate}}");
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
<!-- <script>
var calendar = document.getElementById("calendar-table");
var gridTable = document.getElementById("table-body");
var currentDate = new Date();
var selectedDate = currentDate;
var selectedDayBlock = null;
var globalEventObj = {};

var sidebar = document.getElementById("sidebar");

function createCalendar(date, side) {
   var currentDate = date;
   var startDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);

   var monthTitle = document.getElementById("month-name");
   var monthName = currentDate.toLocaleString("en-US", {
      month: "long"
   });
   var yearNum = currentDate.toLocaleString("en-US", {
      year: "numeric"
   });
   monthTitle.innerHTML = `${monthName} ${yearNum}`;

   if (side == "left") {
      gridTable.className = "animated fadeOutRight";
   } else {
      gridTable.className = "animated fadeOutLeft";
   }

   setTimeout(() => {
      gridTable.innerHTML = "";

      var newTr = document.createElement("div");
      newTr.className = "row";
      var currentTr = gridTable.appendChild(newTr);

      for (let i = 1; i < startDate.getDay(); i++) {
         let emptyDivCol = document.createElement("div");
         emptyDivCol.className = "col empty-day";
         currentTr.appendChild(emptyDivCol);
      }

      var lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
      lastDay = lastDay.getDate();

      for (let i = 1; i <= lastDay; i++) {
         if (currentTr.children.length >= 7) {
            currentTr = gridTable.appendChild(addNewRow());
         }
         let currentDay = document.createElement("div");
         currentDay.className = "col";
         if (selectedDayBlock == null && i == currentDate.getDate() || selectedDate.toDateString() == new Date(currentDate.getFullYear(), currentDate.getMonth(), i).toDateString()) {
            selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), i);

            document.getElementById("eventDayName").innerHTML = selectedDate.toLocaleString("en-US", {
               month: "long",
               day: "numeric",
               year: "numeric"
            });

            selectedDayBlock = currentDay;
            setTimeout(() => {
               currentDay.classList.add("blue");
               currentDay.classList.add("lighten-3");
            }, 900);
         }
         currentDay.innerHTML = i;

         //show marks
         if (globalEventObj[new Date(currentDate.getFullYear(), currentDate.getMonth(), i).toDateString()]) {
            let eventMark = document.createElement("div");
            eventMark.className = "day-mark";
            currentDay.appendChild(eventMark);
         }

         currentTr.appendChild(currentDay);
      }

      for (let i = currentTr.getElementsByTagName("div").length; i < 7; i++) {
         let emptyDivCol = document.createElement("div");
         emptyDivCol.className = "col empty-day";
         currentTr.appendChild(emptyDivCol);
      }

      if (side == "left") {
         gridTable.className = "animated fadeInLeft";
      } else {
         gridTable.className = "animated fadeInRight";
      }

      function addNewRow() {
         let node = document.createElement("div");
         node.className = "row";
         return node;
      }

   }, !side ? 0 : 270);
}

createCalendar(currentDate);

var todayDayName = document.getElementById("todayDayName");
todayDayName.innerHTML = "Today is " + currentDate.toLocaleString("en-US", {
   weekday: "long",
   day: "numeric",
   month: "short"
});

var prevButton = document.getElementById("prev");
var nextButton = document.getElementById("next");

prevButton.onclick = function changeMonthPrev() {
   currentDate = new Date(currentDate.getFullYear(), currentDate.getMonth() - 1);
   createCalendar(currentDate, "left");
}
nextButton.onclick = function changeMonthNext() {
   currentDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1);
   createCalendar(currentDate, "right");
}

function addEvent(title, desc) {
   if (!globalEventObj[selectedDate.toDateString()]) {
      globalEventObj[selectedDate.toDateString()] = {};
   }
   globalEventObj[selectedDate.toDateString()][title] = desc;
}

function showEvents() {
   let sidebarEvents = document.getElementById("sidebarEvents");
   let objWithDate = globalEventObj[selectedDate.toDateString()];

   sidebarEvents.innerHTML = "";

   if (objWithDate) {
      let eventsCount = 0;
      for (key in globalEventObj[selectedDate.toDateString()]) {
         let eventContainer = document.createElement("div");
         eventContainer.className = "eventCard";

         let eventHeader = document.createElement("div");
         eventHeader.className = "eventCard-header";

         let eventDescription = document.createElement("div");
         eventDescription.className = "eventCard-description";

         eventHeader.appendChild(document.createTextNode(key));
         eventContainer.appendChild(eventHeader);

         eventDescription.appendChild(document.createTextNode(objWithDate[key]));
         eventContainer.appendChild(eventDescription);

         let markWrapper = document.createElement("div");
         markWrapper.className = "eventCard-mark-wrapper";
         let mark = document.createElement("div");
         mark.classList = "eventCard-mark";
         markWrapper.appendChild(mark);
         eventContainer.appendChild(markWrapper);

         sidebarEvents.appendChild(eventContainer);

         eventsCount++;
      }
      let emptyFormMessage = document.getElementById("emptyFormTitle");
      emptyFormMessage.innerHTML = `${eventsCount} events now`;
   } else {
      let emptyMessage = document.createElement("div");
      emptyMessage.className = "empty-message";
      emptyMessage.innerHTML = "Sorry, no events to selected date";
      sidebarEvents.appendChild(emptyMessage);
      let emptyFormMessage = document.getElementById("emptyFormTitle");
      emptyFormMessage.innerHTML = "No events now";
   }
}

gridTable.onclick = function (e) {

   if (!e.target.classList.contains("col") || e.target.classList.contains("empty-day")) {
      return;
   }

   if (selectedDayBlock) {
      if (selectedDayBlock.classList.contains("blue") && selectedDayBlock.classList.contains("lighten-3")) {
         selectedDayBlock.classList.remove("blue");
         selectedDayBlock.classList.remove("lighten-3");
      }
   }
   selectedDayBlock = e.target;
   selectedDayBlock.classList.add("blue");
   selectedDayBlock.classList.add("lighten-3");

   selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), parseInt(e.target.innerHTML));
   /*formating date to match datepicker php*/
   function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    return [year, month, day].join('-');
}
 
var ele= document.getElementById('hidden-date').value=formatDate(selectedDate);
ele.dispatchEvent(new Event('input'));
   showEvents();

   document.getElementById("eventDayName").innerHTML = selectedDate.toLocaleString("en-US", {
      month: "long",
      day: "numeric",
      year: "numeric"
   });

}

var changeFormButton = document.getElementById("changeFormButton");
var addForm = document.getElementById("addForm");
changeFormButton.onclick = function (e) {
   addForm.style.top = 0;
}

var cancelAdd = document.getElementById("cancelAdd");
cancelAdd.onclick = function (e) {
   addForm.style.top = "100%";
   let inputs = addForm.getElementsByTagName("input");
   for (let i = 0; i < inputs.length; i++) {
      inputs[i].value = "";
   }
   let labels = addForm.getElementsByTagName("label");
   for (let i = 0; i < labels.length; i++) {
      labels[i].className = "";
   }
}

var addEventButton = document.getElementById("addEventButton");
addEventButton.onclick = function (e) {
   let title = document.getElementById("eventTitleInput").value.trim();
   let desc = document.getElementById("eventDescInput").value.trim();

   if (!title || !desc) {
      document.getElementById("eventTitleInput").value = "";
      document.getElementById("eventDescInput").value = "";
      let labels = addForm.getElementsByTagName("label");
      for (let i = 0; i < labels.length; i++) {
         labels[i].className = "";
      }
      return;
   }

   addEvent(title, desc);
   showEvents();

   if (!selectedDayBlock.querySelector(".day-mark")) {
      selectedDayBlock.appendChild(document.createElement("div")).className = "day-mark";
   }

   let inputs = addForm.getElementsByTagName("input");
   for (let i = 0; i < inputs.length; i++) {
      inputs[i].value = "";
   }
   let labels = addForm.getElementsByTagName("label");
   for (let i = 0; i < labels.length; i++) {
      labels[i].className = "";
   }

}
</script> -->
</body>
</html>
