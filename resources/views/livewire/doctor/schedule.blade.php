<div>
    {{-- The Master doesn't talk, he acts. --}}
    <form>
    <div class="container p-5">
        <div class="row mb-3">
            <div class="col-md-10">
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
                       
                    </div>
                </div>
            </div>
            @error('timeslot')<span class="text-danger">{{$message}}</span>@enderror
        </div>
        
        <p><h5>Select your avalability date</h5></p>
        <div class="row">
            <div class="col-md-7">
             <div class="input-group input-daterange">
                <input type='text' class="form-control" id="datefrom" value="{{date('Y-m-d')}}" placeholder="YYYY-MM-DD" wire:model.defer="date" 
                    data-provide="datepicker"  data-date-today-highlight="true" 
                    autocomplete="off" 
                    onchange="this.dispatchEvent(new InputEvent('input'))"
                    />
                 </div>
            </div>
            <div class="col-md-3">
                 <button wire:click.prevent="schedule({{$drid}})" class="btn btn-success">Update schedule</button>
            </div>
        </div>
        @error('date')<span class="text-danger">{{$message}}</span>@enderror
    </div>
    </form>
      @if ($message = Session::get('inf'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
            <button type="button" class="close ml-auto" data-dismiss="alert">×</button>
        </div>
        @endif
        @if ($message = Session::get('warn'))
        <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
            <button type="button" class="close ml-auto" data-dismiss="alert">×</button>
        </div>
        @endif


</div>
