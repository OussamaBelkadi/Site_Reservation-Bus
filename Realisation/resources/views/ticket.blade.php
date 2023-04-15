<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href='/css/reservation.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <!--  Navbar Page  -->
    <div class="page_acueil">
        <div class="top">
            <div class="logo"><img src="image/logoBus.png" class="image-logo" alt="">Msafrin</div>
            <ul>
                <li><a href="" class="home">Home</a></li>
                <li><a href="" class="home">Contact</a></li>
                <li><a href="" class="home">About us</a></li>
            </ul>
        </div>
    </div>
    
    <!-- Container for barre of search ticket -->
    <!-- Container for barre of search ticket -->
    <div class="container form_search">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded sm-mt-4 mb-5">
                <h2>RESERVER VOS TICKET</h2>
            
                  <form action="{{route('ticket.desplay')}}" method="POST">
                    @csrf
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Date de Réservation</label>
                            <input id="dated" type="date" name="dateVoyage" class="form-control shadow-none"> 
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Ville depart</label>
                            <select class="form-select" id="selector" name='villeDepart' aria-label="Default select example">
                                <option value="ALL" selected>Selecter votre choix</option>
                                @foreach($villes as $ville)
                                <option value="{{$ville->ville}}">{{$ville->ville}}</option>
                                @endforeach
                            </select> 
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Ville darriver</label>
                            <select class="form-select" id="selector" name='villeArriver' aria-label="Default select example">
                                <option value="ALL" selected>Selecter votre choix</option>
                                @foreach($villes as $ville)
                                <option value="{{$ville->ville}}">{{$ville->ville}}</option>
                                @endforeach
                            </select> 
                        </div>
                        <div class="col-lg-3 mb-3" id="type">
                        </div>
                        
                        <div class="col-lg-2 mb-lg-2  mt-3">
                            <input type="submit" name="submit" value="submit" class="btn btn-danger text-white shadow-none custom-bg">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


     {{-- Partie daffichage des ticket --}}
    <div class="main">

        <div class="container">
  
          <!--
            - BLOG SECTION
          -->
          
          <div class="blog">
  
                <h2 class="h2">Tous Voyages</h2>
  
                <div class="blog-card-group">
                    @foreach($tickets as $ticket)
                    <form action="{{route('reservation.index',['id'=>$ticket->id])}}" method="get" enctype="multipart/form-data">
                        @csrf
                    <div class="blog-card">
  
                        <div class="blog-card-banner">
                        <img src="{{asset('/image/'.$ticket->societe->image)}}" alt="image de societe du voyage"
                            class="blog-banner-img">
                        </div>
        
                        <div class="blog-content-wrapper">
        
                        <a href="#" ><button class="blog-topic text-tiny">{{$ticket->societe->name}}</button></a>
        
                        <div class="blog-content">
                                <div class="left-corner">
                                    <h3>{{$ticket->villeDepart}}</h3>
                                    <p>{{$ticket->dateDepart}}</p>
                                    <p>Agence Globus Trans/ Itrane Voyages/ Ismaailia Car, Al Hamra</p>
                                </div>
                                <div class="center-content">
                                    1h25min
                                </div>
                                <div class="right-content">
                                    <h3>{{$ticket->villeArriver}}</h3>
                                    <p>{{$ticket->dateDariver}}</p>
                                    <p>Agence Globus Trans/ Itrane Voyages/ Ismaailia Car, Al Hamra</p>
                                </div>
                        </div>
        
                        
        
                        <div class="wrapper-flex">
        
                            <div class="profile-wrapper">
                            <img src="/image/busr.jpg" alt="Julia Walker" width="50">
                            </div>
        
                            <div class="wrapper">
                            <a href="#" class="h4">top</a>
        
                            <p class="text-sm">
                                <time datetime="2022-01-17">2022-01-17</time>
                            
                            </p>
                            </div>
        
                        </div>
        
                        </div>
                        <div class="reserve-btn">
                            <h4 class="reserve-prix">100DH</h4>
                            <button class="btn-reserve" type="submit">Selectionner</button>
                        </form>
                        </div>
                        
                    
                    @endforeach
                    
                </div> 
  
                
            </div>
            <div class="container">
                <p>HERE FELD MASTER IN ARABEC My poimnt can  make</p>
            </div>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>