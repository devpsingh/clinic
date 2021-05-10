<div>
    {{-- Be like water. --}}
   
    <div class="container" >
        <div class="row">
        <h2>Total doctors: <b>{{$count}}</b> </h2>
            <div class="col-md-4 ml-auto">
                <input class="form-control" placeholder="Search by name,speciality,mobile,city" type="search" wire:model="searchTerm" />
            </div>
        </div>
    @if(!empty($doctors))
        
        @foreach($doctors as $value)
      <div class="row  d-flex justify-content-center m-2 p-1" >
            <div class="col-md-2 text-right" style="border:1px solid orange;border-right:none">
                <img class="" style="width:130px;height:130px;border-radius:50%" src="https://www.jea.com/cdn/images/avatar/avatar-alt.svg">
            </div>
            <div class="col-md-4" style="border:1px solid orange;border-left:none;">
                <p class="title-text">Dr {{$value->name}}</p>
                <p class="info-text" style="font-size:20px">{{$value->speciality}}</p>
                <p class="desc-text">{{$value->address}}</p>
                <a type="button"  href="{{url('consult',$value->id)}}" class="btn btn-primary btn-block mb-2">Dr Profile</a>
            </div>
        </div>

    @endforeach
  
  {{$doctors->links()}}
</div>
@endif

</div>


