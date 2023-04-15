<div>
    <div class="container">
        <div class="row">
            @foreach ($transports as $transport)
                
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('/image/'.$transport->image)}}" class="card-img-top" alt="..." style="height:240px;">
                    <div class="card-body">
                    <h5 class="card-title">{{$transport->marque}}</h5>
                    <p class="card-text">{{$transport->matricule}} </p>
                    <button wire:click='delete({{$transport->id}})' href="#" class="btn btn-danger"><i class="bi bi-x-circle"></i></button>
                    
                    {{-- <h6>{{$transport->condecteur->name}}</h6> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
   
</div>
