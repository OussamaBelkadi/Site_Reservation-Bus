<div>
    @foreach($voyages as $voyage)
    <div class="blog-card">

        <div class="blog-card-banner">
        <img src="{{asset('/image/'.$voyage->societe->image)}}" alt="Building microservices with Dropwizard, MongoDB & Docker"
            class="blog-banner-img">
        </div>

        <div class="blog-content-wrapper">

        <a href="#" ><button class="blog-topic text-tiny">{{$voyage->societe->name}}</button></a>

        <div class="blog-content">
                <div class="left-corner">
                    <p>{{$voyage->dateDepart}}</p>
                    <p>Agence Globus Trans/ Itrane Voyages/ Ismaailia Car, Al Hamra</p>
                </div>
                <div class="center-content">
                    1h25min
                </div>
                <div class="right-content">
                    <p>{{$voyage->dateDariver}}</p>
                    <p>Agence Globus Trans/ Itrane Voyages/ Ismaailia Car, Al Hamra</p>
                </div>
        </div>

        

        {{-- <div class="wrapper-flex">

            <div class="profile-wrapper">
            <img src="/image/busr.jpg" alt="Julia Walker" width="50">
            </div>

            <div class="wrapper">
            <a href="#" class="h4">{{$voyage->societe->name}}</a>

            <p class="text-sm">
                <time datetime="2022-01-17"></time>
            
            </p>
            </div>

        </div> --}}

        </div>
        <div class="reserve-btn">
            <h4 class="reserve-prix">{{ $voyage->prix }}DH</h4>
            <button class="btn-reserve"   data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="{{route('voyage.update',['id'=>$voyage->id])}}">Modifier</a> </button>
        </div>

    </div>  
    
    @endforeach


</div>
