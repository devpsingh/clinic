<div>
    {{-- Be like water. --}}
   
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="form-group">
                <label for="speciality">Chose speciality</label>
                <select class="form-control" id="speciality" name="speciality" wire:model="specialitySelect">
                <option selected>Select doctors speciality</option>
                    @foreach($Speciality as $sp)
                        <option value="{{$sp->id}}" selected>{{$sp->speciality}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    
 
    @if(!empty($doctors))
        <div class="container">
        @foreach($doctors as $value)
      <div class="row  d-flex justify-content-center m-2 p-1" >
        <div class="col-md-2 text-right" style="border:1px solid orange;border-right:none">
            <img class="" style="width:130px;height:130px;border-radius:50%" src="https://www.jea.com/cdn/images/avatar/avatar-alt.svg">
        </div>
        <div class="col-md-4" style="border:1px solid orange;border-left:none;">
            <p class="title-text">Dr {{$value->name}}</p>
            <p class="info-text" style="font-size:20px">{{$value->speciality}}</p>
            <p class="desc-text">{{$value->address}}</p>
         <form>
        <button type="button" wire:click="edit({{$value->id}})" class="btn btn-primary btn-block mb-2">Update Doctor Details</button>
        </form>
        </div>
      </div>
      

    @endforeach
    <div class="flex flex-row mt-2">
  
</div>
@endif

</div>


