<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
  <!-- @if($details)
    @foreach($details as $d)
        {{$d}}
    @endforeach
  @endif -->
  
<div class="container bootstrap snippets bootdey">
<div class="row">
    <!-- BEGIN USER PROFILE -->
    <div class="col-md-12">
      <div class="grid profile">
        <div class="grid-header">
          <div class="col-xs-2">
            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle" alt="">
          </div>
          <div class="col-xs-7 mt-3">

          @if($details)
            <h3>Dr. {{$details[0]->name}}</h3>
            <p>{{$details[0]->speciality}}</p>
            <p>Website Developer, Programmer</p>
            <p>{{$details[0]->clinic_name}} Hospital</p>
            <p>{{$details[0]->city}}</p>
          @endif
          </div>
          <div class="col-xs-3 text-right">
            <p><a href="" title="Everyone can see your profile"><i class="fa fa-globe"></i> Everyone</a></p>
          </div>
        </div>
        <div class="grid-body">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
            <li class=""><a href="#timeline" data-toggle="tab">Timeline</a></li>
            <li class=""><a href="#photos" data-toggle="tab">Photos</a></li>
            <li class=""><a href="#settings" data-toggle="tab">Settings</a></li>
          </ul>
          <div class="tab-content">
            <!-- BEGIN PROFILE -->
            <div class="tab-pane active" id="profile">
              <p class="lead">My Profile</p>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <p><strong>Email:</strong> <a href="mailto:{{$details[0]->city}}">{{$details[0]->email}}</a></p>
                  <p><strong>About:</strong> {{$details[0]->speciality}}</p>
                  <p><strong>Hobbies:</strong> Read books, hang out, learn history, making website</p>
                </div>
                <div class="col-md-6">
                  <p><strong>Address:</strong> {{$details[0]->address}}</p>
                  <p><strong>Phone:</strong> {{$details[0]->mobile}}</p>
                  <p><strong>Phone + Ext:</strong> {{$details[0]->alt_contact}}</p>
                  <p><strong>Reputation:</strong> <span class="text-green"><i class="fa fa-angle-up"></i> 2000</span></p>
                  <p><strong>Rating:</strong> <span class="text-yellow"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></span></p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 stats">
                  <h1>46,2K</h1>
                  <span>Followes</span>
                  <button class="btn btn-success"><i class="fa fa-plus-circle"></i> Follow</button>
                </div>
                <div class="col-sm-4 stats">
                  <h1>127</h1>
                  <span>Following</span>
                  <button class="btn btn-info" data-toggle="modal" data-target="#calendar"><i class="fa fa-user"></i> Book appointment</button>
                </div>
                <div class="col-sm-4 stats">
                  <h1>10,9K</h1>
                  <span>Subscribers</span>
                  <button class="btn btn-danger"><i class="fa fa-rss"></i> Subscribe</button>
                </div>
              </div>
            </div>
            <!-- END PROFILE -->
            <!-- BEGIN TIMELINE -->
            <div class="tab-pane" id="timeline">
              <p class="lead">My Timeline</p>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <div class="timeline-centered">
                    <article class="timeline-entry">
                      <div class="timeline-entry-inner">
                        <time class="timeline-time" datetime="2014-01-10T03:45"><span>11:41 AM</span> <span>Today</span></time>

                        <div class="timeline-icon bg-primary">
                          <i class="fa fa-home"></i>
                        </div>

                        <div class="timeline-label">
                          <h2><a href="#">Jeffrey Williams</a> <span>posted a status update</span></h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                      </div>
                    </article>

                    <article class="timeline-entry left-aligned">
                      <div class="timeline-entry-inner">
                        <time class="timeline-time" datetime="2014-01-10T03:45"><span>08:12 AM</span> <span>Today</span></time>

                        <div class="timeline-icon bg-warning">
                          <i class="fa fa-bell"></i>
                        </div>

                        <div class="timeline-label">
                          <h2><a href="#">Job Meeting</a></h2>
                          <p>You have a meeting at <strong>10:00 AM</strong> in the <strong>Meeting Room</strong>.</p>
                        </div>
                      </div>
                    </article>

                    <article class="timeline-entry">
                      <div class="timeline-entry-inner">
                        <time class="timeline-time" datetime="2014-01-10T03:45"><span>02:10 AM</span> <span>15/06/2014</span></time>

                        <div class="timeline-icon bg-danger">
                          <i class="fa fa-user"></i>
                        </div>

                        <div class="timeline-label">
                          <h2><a href="#">Larry Gardner</a> <span>changed his</span> <a href="#">Profile Picture</a></h2>
                          <blockquote>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</blockquote>
                          <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive img-rounded full-width" alt="">
                        </div>
                      </div>
                    </article>

                    <article class="timeline-entry begin">
                      <div class="timeline-entry-inner">
                        <div class="timeline-icon bg-default">
                          <i class="fa fa-laptop"></i>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
            <!-- END TIMELINE -->
            <!-- BEGIN PHOTOS -->
            <div class="tab-pane" id="photos">
              <p class="lead">My Photos</p>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <div class="popup-gallery">
                                        <a href="https://via.placeholder.com/128x100/" title="Photo 1"><img src="https://via.placeholder.com/128x100/" alt=""></a>
                                        <a href="https://via.placeholder.com/128x100/" title="Photo 2"><img src="https://via.placeholder.com/128x100/" alt=""></a>
                                        <a href="https://via.placeholder.com/128x100/" title="Photo 3"><img src="https://via.placeholder.com/128x100/" alt=""></a>
                                        <a href="https://via.placeholder.com/128x100/" title="Photo 4"><img src="https://via.placeholder.com/128x100/" alt=""></a>
                                        <a href="https://via.placeholder.com/128x100/" title="Photo 5"><img src="https://via.placeholder.com/128x100/" alt=""></a>
                                        <a href="https://via.placeholder.com/128x100/" title="Photo 6"><img src="https://via.placeholder.com/128x100/" alt=""></a>
                                        <a href="https://via.placeholder.com/128x100/" title="Photo 7"><img src="https://via.placeholder.com/128x100/" alt=""></a>
                                        <a href="https://via.placeholder.com/128x100/" title="Photo 8"><img src="https://via.placeholder.com/128x100/" alt=""></a>
                                        <a href="https://via.placeholder.com/128x100/" title="Photo 1"><img src="https://via.placeholder.com/128x100/" alt=""></a>
                                        <a href="https://via.placeholder.com/128x100/" title="Photo 1"><img src="https://via.placeholder.com/128x100/" alt=""></a>
                                        <a href="https://via.placeholder.com/128x100/" title="Photo 3"><img src="https://via.placeholder.com/128x100/" alt=""></a>
                                        <a href="https://via.placeholder.com/128x100/" title="Photo 4"><img src="https://via.placeholder.com/128x100/" alt=""></a>
                                        <a href="https://via.placeholder.com/128x100/" title="Photo 5"><img src="https://via.placeholder.com/128x100/" alt=""></a>                    <a href="https://via.placeholder.com/128x100/" title="Photo 1"><img src="https://via.placeholder.com/128x100/" alt=""></a>
                  </div>
                  <br>
                </div>
              </div>
            </div>
            <!-- END PHOTOS -->
            <!-- BEGIN SETTINGS -->
            <div class="tab-pane" id="settings">
              <p class="lead">My Settings</p>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Global Notifications</label>
                      <div class="col-sm-2">
                        <input type="checkbox" />
                      </div>
                      <label class="col-sm-2 control-label">Email Notifications</label>
                      <div class="col-sm-2">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Phone Notifications</label>
                      <div class="col-sm-2">
                        <input type="checkbox" />
                      </div>
                      <label class="col-sm-2 control-label">Mail Notifications</label>
                      <div class="col-sm-2">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Subscribe Newsletters</label>
                      <div class="col-sm-2">
                        <input type="checkbox" />
                      </div>
                      <label class="col-sm-2 control-label">RSS Feeds</label>
                      <div class="col-sm-2">
                        <input type="checkbox" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END SETTINGS -->
          </div>
        </div>
      </div>
    </div>
    <!-- END USER PROFILE -->
  </div>
</div>
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="calendar" style="min-height:90%"  tabindex="-1" role="dialog" aria-labelledby="calendar" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
              <label for="name">Patient name</label>
              <input type="text" class="form-control" id="name" wire:model="name" aria-describedby="nameHelp" placeholder="Enter Patient name">
            </div>
            @error('name') <span class="text-danger">{{$message}}</span> @enderror
            <div class="row">
              <div class="form-group col-md-7">
                <label for="mobile">Enter mobile number</label>
                <input type="Number" class="form-control" id="mobile" wire:model="mobile" placeholder="Mobile">
                @error('mobile') <span class="text-danger">{{$message}}</span> @enderror
              </div>
              <div class="form-group col-md-5">
                  <label for="date">Select date</label>
                <div class='input-group date'  >
                    <input type='text' class="form-control" id="date" placeholder="YYYY-MM-DD" wire:model="date" 
                    data-provide="datepicker"  data-date-today-highlight="true" 
                    autocomplete="off" 
                    onchange="this.dispatchEvent(new InputEvent('input'))"
                    />
                    <span class="input-group-addon">
                        <span class="fas fa-calendar"></span>
                    </span>
                </div>
                @error('date') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            </div>
            <select class="form-control" wire:model="time">
              <option>Select time slot</option>
              @if(count($updated_time)>0)
                @foreach($updated_time as $val)
                  @foreach(json_decode($val->updated_timeslot) as $timeslot)
                  <option value="{{$timeslot}}">{{$timeslot}}</option>
                    @endforeach
                @endforeach
              @else
                  @if(!empty($details[0]->timeslot))
                    @foreach(json_decode($details[0]->timeslot) as $slot)
                      <option value="{{$slot}}">{{$slot}}</option>
                    @endforeach
                  @else
                  <option value="10 AM - 11 AM" >10 AM to 11 AM</option>
                  <option value="11 AM - 12 Noon" >11 AM to 12 Noon</option>
                  <option value="12 Noon - 1 PM" >12 Noon to 1 PM</option>
                  <option value="5 PM - 6 PM" >5 PM to 6 PM</option>
                  <option value="6 PM - 7 PM" >6 PM to 7 PM</option>
                  <option value="7 PM - 8 PM" >7 PM to 8 PM</option>
                  <option value="8 PM - 9 PM" >8 PM to 9 PM</option>
                  <option value="9 PM - 10 PM" >9 PM to 10 PM</option>
                  @endif
                @endif
            </select>
            @error('time') <span class="text-danger">{{$message}}</span> @enderror
            <ul class="nav d-flex justify-content-center p-3">
              <li class="nav-item p-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pay" id="paynow" value="pay" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Pay now
                    </label>
                </div>
              </li>
              <li class="nav-item p-2">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="pay" id="paylater" value="paylater" >
                      <label class="form-check-label" for="exampleRadios1">
                        Pay later
                        </label>
                  </div>
               </li>
          </ul>
      </div>
      <div class="modal-footer">
      <button type="submit" wire:click.prevent="submit" class="btn btn-primary m-2">Book appointment</button>
        </form>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



</div>
