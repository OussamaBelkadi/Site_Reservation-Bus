<div>
    <div>
        <div class="container">
            <div class="row">
                @forelse ($conduicteurs as $conduicteur)
                    
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/image/'.$conduicteur->imageConduicteur)}}" class="card-img-top" alt="..." style="height:240px;">
                        <div class="card-body">
                        <h5 class="card-title">{{$conduicteur->name}}</h5>
                        <p class="card-text">{{$conduicteur->age}} </p>
                        <p></p>
                        {{-- <button wire:click='delete({{$conduicteur->id}})' href="#" class="btn btn-danger"><i class="bi bi-x-circle"></i></button> --}}
                        <h6>{{$conduicteur->transport->marque}}</h6>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="text-center mt-5">
                        <h1>Aucun conduicteur</h1>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
