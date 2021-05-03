<div>
    {{-- Be like water. --}}
    
    @if(!empty($drdetail[0]))
    <div class="container emp-profile">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{ asset('/storage/avatar/'.$drdetail[0]->dr_photo_path)}}" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" wire:model="avatar" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                   Dr. {{$drdetail[0]->name}}
                                    </h5>
                                    <h6>
                                       Doctor
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Planner</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>NA</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{$drdetail[0]->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{$drdetail[0]->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{$drdetail[0]->mobile}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{$drdetail[0]->address}}</p>
                                            </div>
                                        </div>
                            </div>
                            @if($tab=='list')
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" wire:model.defer="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                @error('title') <span class="text-danger">{{$message}}</span> @enderror
                             </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea wire:model.defer="desc" class="form-control" id="exampleInputPassword1"></textarea>
                                @error('desc') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class='input-group date'  >
                                <input type='text' class="form-control" id="date" placeholder="YYYY-MM-DD" wire:model.defer="eventdate" 
                                data-provide="datepicker"  data-date-today-highlight="true" 
                                autocomplete="off" 
                                onchange="this.dispatchEvent(new InputEvent('input'))"
                                />
                                @error('eventdate') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                           <button wire:click.prevent="addEvent" class="btn btn-primary mt-2">Submit</button>
                            </form> 
                            @if($msg=Session::get('success'))
                            <div class="alert alert-success">{{$msg}}</div>
                            @endif
                                <!-- <div class="row">
                                     <div class="col-md-12">
                                  <div class="main-wrapper row" style="border:1px solid blue">
                                    <div class="sidebar-wrapper side-nav fixed col-md-3" id="sidebar">
                                        <div class="sidebar-title">
                                            <h6>Events</h6>
                                            <h6 id="eventDayName">Date</h6>
                                        </div>
                                        <div class="sidebar-events" id="sidebarEvents">
                                            <div class="empty-message">Sorry, no events to selected date</div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="header-background">
                                            <div class="calendar-header">
                                                <a class="prev-button" id="prev">
                                                    <i class="fas fa-arrow-left"></i>
                                                </a>
                                                <a class="next-button" id="next">
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                                <div class="row header-title">
                                                    <div class="header-text">
                                                        <h3 id="month-name">February</h3>
                                                        <h5 id="todayDayName">Today is Friday 7 Feb</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calendar-content">
                                            <div id="calendar-table" class="calendar-cells">
                                                <div id="table-header">
                                                    <div class="row">
                                                    <div class="col">Mon</div>
                                                    <div class="col">Tue</div>
                                                    <div class="col">Wed</div>
                                                    <div class="col">Thu</div>
                                                    <div class="col">Fri</div>
                                                    <div class="col">Sat</div>
                                                    <div class="col">Sun</div>
                                                </div>
                                        </div>
                                       <div id="table-body" class=""></div>
                                   </div>
                                </div> -->

                                <!-- <div class="calendar-footer">
                                    <div class="emptyForm" id="emptyForm">
                                        <h4 id="emptyFormTitle">No events now</h4>
                                        <a class="addEvent" id="changeFormButton">Add new</a>
                                    </div>
                                    <form>
                                    <div class="addForm" id="addForm">
                                        <h5>Add plan</h5>
                                        <div class="row">
                                            <div class="input-field col s6">
                                            <label for="eventTitleInput">Title</label>
                                            <input id="eventTitleInput" wire:model="title" type="text" class="validate">
                                            @error('title') <span class="text-danger error">{{ $message }}</span> @enderror
                                          
                                            <input type="hidden" wire:model="eventdate" id="hidden-date"/>
                                            </div>
                                            <div class="input-field col s6">
                                            <label for="eventDescInput">Description</label>
                                            <input id="eventDescInput" wire:model="desc" type="text" class="validate">
                                            @error('desc') <span class="text-danger error">{{ $message }}</span> @enderror
                                           
                                            </div>
                                        </div>

                                        <div class="addEventButtons">
                                            <a class="btn btn-primary" wire:click.prevent="addEvent" id="addEventButton">Add</a>
                                            <a class=" btn btn-danger" id="cancelAdd">Cancel</a>
                                        </div>
                                        @if($msg = Session::get('success'))
                                            <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $msg }}</strong>
                                            </div>
                                         @endif
                                    </form>
                                </div> -->
                            </div>  
                            @endif
                          </div>
                       </div>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>           
    </div>
     @endif

        <!-- <script>
        document.addEventListener('livewire:load', function () {
            
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
   @if($event)
   {{$event}}
        @foreach($event as $ev)
        addEvent({{$ev->title}}, {{$ev->desc}});
        @endforeach
        @else
        addEvent(title, desc);
      @endif
  
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

                //var ele= document.getElementById('hidden-date').value=formatDate(selectedDate);
                @this.set('eventdate',formatDate(selectedDate));
                showEvents();

                document.getElementById("eventDayName").innerHTML = selectedDate.toLocaleString("en-US", {
                month: "long",
                day: "numeric",
                year: "numeric"
                });
               
                }
           
 })
 
    </script> -->

</div>
