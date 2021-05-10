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
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Leave planner</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-primary" href="{{route('schedule',$drdetail[0]->id)}}" name="btnAddMore" >Update patient schedule</a>
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
                                <input type="text" wire:model.defer="title" class="form-control" id="exampleInputEmail1">
                                @error('title') <span class="text-danger">{{$message}}</span> @enderror
                             </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea wire:model.defer="desc" class="form-control" id="exampleInputPassword1"></textarea>
                                @error('desc') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="input-group input-daterange">
                            <input type='text' class="form-control" id="datefrom" value="{{date('Y-m-d')}}" placeholder="YYYY-MM-DD" wire:model.defer="eventdatefrom" 
                                data-provide="datepicker"  data-date-today-highlight="true" 
                                autocomplete="off" 
                                onchange="this.dispatchEvent(new InputEvent('input'))"
                             />
                                <div class="input-group-addon">to</div>
                                <input type='text' class="form-control" id="dateto" value="{{date( 'Ymd', strtotime( '+1 days' ) )}}" placeholder="YYYY-MM-DD" wire:model.defer="eventdateto" 
                                data-provide="datepicker"  data-date-today-highlight="true" 
                                autocomplete="off" 
                                onchange="this.dispatchEvent(new InputEvent('input'))"
                                />
                               
                            </div>
                            <br>
                            @error('eventdatefrom') <span class="text-danger">{{$message}}</span> <br>@enderror
                                @error('eventdateto') <span class="text-danger">{{$message}}</span> @enderror
                             <button wire:click.prevent="addEvent" class="btn btn-primary mt-2">Submit</button>
                            </form> 
                            @if($msg=Session::get('success'))
                            <div class="alert alert-success">{{$msg}}</div>
                            @endif
                               
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

</div>
