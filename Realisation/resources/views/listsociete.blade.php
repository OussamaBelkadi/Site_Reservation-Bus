<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/styleSlide.css">
    <!-- icon -->
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/flag.css' rel='stylesheet'>
    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <!-- <nav>
        <div class="logo">Msaferin</div>
       
            <ul>
                <li><a href=""> Home </a></li>
                <li><a href=""> Contact </a></li>
                <li><a href=""> About us </a></li>
            </ul>
       
    </nav> -->

    <div class="page_acueil">
        <div class="top">
            <div class="logo"><img src="/image/log.png" class="image" alt="le logo de la siciete"></div>
            <ul>
                <li><a href="#" class="home">Home</a></li>
                <li><a href="" class="home">Contact</a></li>
                <li><a href="" class="home">About us</a></li>
            </ul>
        </div>
    </div>

    <section class="container my-5">
        <div class="title text-center my-4">
            <h4 class="text-canter">Lists des Societes</h4>
        </div>
        
        <div class="societes-list my-2">
            @foreach($societes as $societe)
            
            <div class="card" style="width: 18rem;">
                <img src="{{asset('/image/'. $societe->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$societe->name}}</h5>
                <p class="card-text">Transports disponibles : {{$societe->transports->count()}}</p>
                <p class="card-text">Voyages: {{$societe->voyages->count()}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</body>