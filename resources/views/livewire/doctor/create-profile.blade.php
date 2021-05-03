<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
<form  enctype="multipart/form-data">
<div class="container mt-5 " style="border:1px solid black;padding:50px;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Dr name</label>
                <input wire:model="name" type="text" class="form-control" id="name" aria-describedby="nameHelp">
              </div>
              @error('name')<span class="text-danger">{{$message}}</span>@enderror
        </div>
       
        <div class="col-md-4">
            <div class="form-group">
                <label for="speciality">Example select</label>
                <select wire:model="speciality" class="form-control" id="speciality">
                <option>Select speciality</option>
                @if($sp)
                    @foreach($sp as $val)
                    <option value="{{$val->id}}">{{$val->speciality}}</option>
                    @endforeach
                @endif
                </select>
            </div>
            @error('speciality')<span class="text-danger">{{$message}}</span>@enderror
        </div>
    </div>
    <p><h5>Select patient time slots</h5></p>
    <div class="row d-flex justify-content-center">
        <div class="col-md-3">
            <div class="form-check">
                <input wire:model="timeslot" class="form-check-input" type="checkbox" value="7 AM to 8 AM" id="time_7">
                <label class="form-check-label" for="time_7">
                    7 AM to 8 AM
                </label>
            </div>
            <div class="form-check">
                <input wire:model="timeslot" class="form-check-input" type="checkbox" value="8 AM to 9 AM" id="time_8">
                <label class="form-check-label" for="time_8">
                    8 AM to 9 AM
                </label>
            </div>
            <div class="form-check">
                <input wire:model="timeslot" class="form-check-input" type="checkbox" value="9 AM to 10 AM" id="time_9">
                <label class="form-check-label" for="time_9">
                    9 AM to 10 AM
                </label>
            </div>
            <div class="form-check">
                <input wire:model="timeslot" class="form-check-input" type="checkbox" value="10 AM to 11 AM" id="time_10">
                <label class="form-check-label" for="time_10">
                    10 AM to 11 AM
                </label>
            </div>
            <div class="form-check">
                <input wire:model="timeslot" class="form-check-input" type="checkbox" value="11 AM to 12 Noon" id="time_11">
                <label class="form-check-label" for="time_11">
                    11 AM to 12 AM
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-check">
                <input wire:model="timeslot" class="form-check-input" type="checkbox" value="12 Noon to 1 PM" id="time_12">
                <label class="form-check-label" for="time_12">
                    12 Noon to 1 PM
                </label>
            </div>
            <div class="form-check">
                <input wire:model="timeslot" class="form-check-input" type="checkbox" value="1 PM to 2 PM" id="time_13">
                <label class="form-check-label" for="time_13">
                    1 PM to 2 PM
                </label>
            </div>
            <div class="form-check">
                <input wire:model="timeslot" class="form-check-input" type="checkbox" value="2 PM to 3 PM" id="time_14">
                <label class="form-check-label" for="time_14">
                    2 PM to 3 PM
                </label>
            </div>
            <div class="form-check">
                <input wire:model="timeslot" class="form-check-input" type="checkbox" value="3 PM to 4 PM" id="time_15">
                <label class="form-check-label" for="time_15">
                3 PM to 4 PM
                </label>
            </div>
            <div class="form-check">
                <input wire:model="timeslot" class="form-check-input" type="checkbox" value="4 PM to 5 PM" id="time_16">
                <label class="form-check-label" for="time_16">
                4 PM to 5 PM
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-check">
                <input wire:model="timeslot" class="form-check-input" type="checkbox" value="5 PM to 6 PM" id="time_17">
                <label class="form-check-label" for="time_17">
                    5 PM to 6 PM
                </label>
            </div>
            <div class="form-check">
                <input wire:model="timeslot" class="form-check-input" type="checkbox" value="6 PM to 7 PM" id="time_18">
                <label class="form-check-label" for="time_18">
                    6 PM to 7 PM
                </label>
            </div>
            <div class="form-check">
                <input wire:model="timeslot" class="form-check-input" type="checkbox" value="7 PM to 8 PM" id="time_19">
                <label class="form-check-label" for="time_19">
                    7 PM to 8 PM
                </label>
            </div>
            <div class="form-check">
                <input wire:model="timeslot" class="form-check-input" type="checkbox" value="8 PM to 9 PM" id="time_20">
                <label class="form-check-label" for="time_20">
                8 PM to 9 PM
                </label>
            </div>
            <div class="form-check">
                <input wire:model="timeslot" class="form-check-input" type="checkbox" value="9 PM to 10 PM" id="time_21">
                <label class="form-check-label" for="time_21">
                9 PM to 10 PM
                </label>
            </div>
            @error('timeslot')<span class="text-danger">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-3">
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Dr's Email address</label>
                <input disabled wire:model="email" type="email" class="form-control" id="email" placeholder="Enter email address">
              </div>
              @error('email')<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="mobile">Dr's Mobile number</label>
                <input wire:model="mobile" type="number" class="form-control" id="mobile">
              </div>
              @error('mobile')<span class="text-danger">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-3">
        <div class="col-md-6">
            <div class="form-group">
                <label for="clinic">Dr's Clinic name</label>
                <input wire:model="clinic_name" type="text" class="form-control" id="clinic" placeholder="Enter clinic name">
              </div>
              @error('clinic_name')<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="address">Clinic or Hospital address</label>
                <textarea wire:model="address" class="form-control" id="address"></textarea>
              </div>
              @error('address')<span class="text-danger">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-3">
        <div class="col-md-4">
            <div class="form-group">
                <label for="city">City</label>
                <input wire:model="city" type="text" class="form-control" id="city" placeholder="Enter city">
              </div>
              @error('city')<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="zip">ZIP</label>
                <input wire:model="zip" type="number" class="form-control" id="zip">
              </div>
              @error('zip')<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="age">age</label>
                <input wire:model="age" type="number" class="form-control" id="age">
              </div>
              @error('age')<span class="text-danger">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="form-group">
                <label for="alt-number">Dr's alternate number</label>
                <input wire:model="alt_no" type="number" class="form-control" id="alt-number">
              </div>
              @error('alt_no')<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="col-md-4 d-flex justify-content-between">
            <div class="form-check mt-5">
                <input wire:model="gender" class="form-check-input" 
                type="radio" name="gender"  value="male" checked>
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check mt-5">
                <input wire:model="gender" class="form-check-input" type="radio" name="gender"  value="female">
                <label class="form-check-label" for="female">
                    Female
                </label>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-3">
        <div class="col-md-8">
            <div class="form-group">
                <label for="profilepic">Choose profile pic</label>
                <input wire:model="profilepic" type="file" class="form-control" >
                <div wire:loading wire:target="profilepic" class="text-sm text-gray-500 italic">Uploading...</div>
                
              </div>
              @error('profilepic')<span class="text-danger">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="d-flex justify-content-center col-md-10">
    @if ($message = Session::get('warning'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

        @if ($message = Session::get('inf'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif

        
    </div>
    <div class="d-flex justify-content-center">
   <button wire:click.prevent="AddDoctor" type="submit" style="width:30%" class="btn btn-primary">Submit details</button>
    </div>
</div>
</form>


</div>
