<div>
    {{-- The whole world belongs to you --}}
    <div class="container">
   
        @if(!empty($doctors))
        <div class="row my-2">
        <h2>Total listed doctors: <b class="text-success">{{$count}}</b></h2>
            <div class="d-flex ml-auto">
                <input type="search" class="form-control" wire:model="searchTerm" placeholder="Search" />
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>Sr. No.</th>
                <th>Name</th>
                <th>Speciality</th>
                <th>city</th>
                <th>Mobile</th>
                <th>Email</th>
                </tr>
            </thead>
            <tbody>
            
                @foreach($doctors as $key=>$dr)
                    <tr>
                    <td>{{$doctors->firstItem()+$key}}</td>
                    <td>Dr. {{$dr->name}}</td>
                    <td>{{$dr->speciality}}</td>
                    <td>{{$dr->city}}</td>
                    <td>{{$dr->mobile}}</td>
                    <td>{{$dr->email}}</td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
        {{$doctors->links()}}
    @endif
</div>

</div>
