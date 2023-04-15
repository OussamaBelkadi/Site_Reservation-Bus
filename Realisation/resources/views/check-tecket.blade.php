<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation du ticket</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="/css/reserve_ticket.css">
<!-- Link to Font Awesome library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    
        <div class="main">

            <div class="container">
      
              <!--
                - BLOG SECTION
              -->
              
              <div class="blog">
                <div class="nom-voyage">
                    <h2 class="h2">Tous Voyage</h2>
                    <h2>قطع الكار من الدار</h2>
                    <i class="fa-solid fa-crosshairs"></i>

                </div>
                    <div class="blog-card-group">
                
                        <div class="blog-card">
                            
                            <div class="blog-card-banner">
                            <img src="{{asset('/image/'. $voyage->societe->image)}}" alt="Building microservices with Dropwizard, MongoDB & Docker"
                                class="blog-banner-img">
                            </div>
            
                            <div class="blog-content-wrapper">
            
                            <a href="#" ><button class="blog-topic text-tiny">{{$voyage->societe->name}}</button></a>
            
                            <div class="blog-content">
                                    <div class="left-corner">
                                        <p>{{{$voyage->dateDepart}}}</p>
                                        <p>Agence Globus Trans/ Itrane Voyages/ Ismaailia Car, Al Hamra</p>
                                    </div>
                                    <div class="center-content">
                                        {{{$voyage->dateVoyage}}}
                                    </div>
                                    <div class="right-content">
                                        <p>{{{$voyage->dateDepart}}}</p>
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
                                <button class="btn-reserve">Selectionner</button>
                            </div>
                           
                        </div>
                    </div>
              </div>
              <div class="container reserve-operasion">
                <div class="context-left">
                    <div class="header-text">
                        <h5>Sélectionner vos sièges</h5>
                        <p>Remarque: {{$voyage->societe->name}} s'engage à faire de son mieux pour vous procurer l'emplacement que vous avez choisi. Cependant, s'il n'est pas disponible, elle vous réservera le meilleur emplacement libre dans l'autocar.</p>
                    </div>
                    <div class="body-text">
                    <form action="{{route('ticket.reserve')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <p class="destination">{{$voyage->villeDepart}}->{{$voyage->villeArriver}}</p>
                        <div class="price">
                            <p>Prix:</p> <p id="total">0 dh</p>
                        </div>
                        <div class="place">
                            <div class="chair-left">
                               
                                    <div class="2place">
                                        <img src="/image/seat-available.png" data-seat="1" onclick="changeImage()" class="chair" alt="seat-available">
                                        
                                        <img src="/image/seat-available.png" data-seat="2" onclick="changeImage()" class="chair" alt="seat-available">                                
                                        
                                    </div>
                                    
                                    <div class="2place">
                                        <img src="/image/seat-available.png" data-seat="3" onclick="changeImage()" class="chair" alt="seat-available">
                                        <img src="/image/seat-available.png" data-seat="4" onclick="changeImage()" class="chair" alt="seat-available">                                
                                    </div>
                                    <div class="2place">
                                        <img src="/image/seat-available.png" data-seat="5" onclick="changeImage()" class="chair" alt="seat-available">
                                        <img src="/image/seat-available.png" data-seat="6" onclick="changeImage()" class="chair" alt="seat-available">                                
                                    </div>
                                    <div class="2place">
                                        <img src="/image/seat-available.png" data-seat="7" onclick="changeImage()" class="chair" alt="seat-available">
                                        <img src="/image/seat-available.png" data-seat="8" onclick="changeImage()" class="chair" alt="seat-available">                                
                                    </div>
                                    
                                    <div class="2place">
                                        <img src="/image/seat-available.png" data-seat="9" onclick="changeImage()" class="chair" alt="seat-available">
                                        <img src="/image/seat-available.png" data-seat="10" onclick="changeImage()" class="chair" alt="seat-available">                                
                                    </div>
                                    <div class="2place">
                                        <img src="/image/seat-available.png" data-seat="11" onclick="changeImage()" class="chair" alt="seat-available">
                                        <img src="/image/seat-available.png" data-seat="12" onclick="changeImage()" class="chair" alt="seat-available">                                
                                    </div>
                                    <div class="2place">
                                        <img src="/image/seat-available.png" data-seat="13" onclick="changeImage()" class="chair" alt="seat-available">
                                        <img src="/image/seat-available.png" data-seat="14" onclick="changeImage()" class="chair" alt="seat-available">                                
                                    </div>
                                    
                                    <div class="2place">
                                        <img src="/image/seat-available.png" data-seat="15" onclick="changeImage()" class="chair" alt="seat-available">
                                        <img src="/image/seat-available.png" data-seat="16" onclick="changeImage()" class="chair" alt="seat-available">                                
                                    </div>
                                    <div class="2place">
                                        <img src="/image/seat-available.png" data-seat="17" onclick="changeImage()" class="chair" alt="seat-available">
                                        <img src="/image/seat-available.png" data-seat="18" onclick="changeImage()" class="chair" alt="seat-available">                                
                                    </div>
                                    <div class="2place">
                                        <img src="/image/seat-available.png" data-seat="19" onclick="changeImage()" class="chair" alt="seat-available">
                                        <img src="/image/seat-available.png" data-seat="20" onclick="changeImage()" class="chair" alt="seat-available">                                
                                    </div>
                                    
                                    <div class="2place">
                                        <img src="/image/seat-available.png" data-seat="21" onclick="changeImage()" class="chair" alt="seat-available">
                                        <img src="/image/seat-available.png" data-seat="22" onclick="changeImage()" class="chair" alt="seat-available">                                
                                    </div>
                                    <div class="2place">
                                        <img src="/image/seat-available.png" data-seat="23" onclick="changeImage()" class="chair" alt="seat-available">
                                        <img src="/image/seat-available.png" data-seat="24" onclick="changeImage()" class="chair" alt="seat-available">                                
                                    </div>
                                    <div class="2place">
                                        <img src="/image/seat-available.png" data-seat="25" onclick="changeImage()" class="chair" alt="seat-available">
                                        <img src="/image/seat-available.png" data-seat="26" onclick="changeImage()" class="chair" alt="seat-available">                                
                                    </div>
                        
                            </div>
                            <div class="chair-right">
                                <div class="2place">
                                    <img src="/image/seat-available.png" data-seat="27" onclick="changeImage()" class="chair" alt="seat-available">
                                    <img src="/image/seat-available.png" data-seat="28" onclick="changeImage()" class="chair" alt="seat-available">                                
                                </div>
                                
                                <div class="2place">
                                    <img src="/image/seat-available.png" data-seat="29" onclick="changeImage()" class="chair" alt="seat-available">
                                    <img src="/image/seat-available.png" data-seat="30" onclick="changeImage()" class="chair" alt="seat-available">                                
                                </div>
                                <div class="2place">
                                    <img src="/image/seat-available.png" data-seat="31" onclick="changeImage()" class="chair" alt="seat-available">
                                    <img src="/image/seat-available.png" data-seat="32" onclick="changeImage()" class="chair" alt="seat-available">                                
                                </div>
                                <div class="2place">
                                    <img src="/image/seat-available.png" data-seat="33" onclick="changeImage()" class="chair" alt="seat-available">
                                    <img src="/image/seat-available.png" data-seat="34" onclick="changeImage()" class="chair" alt="seat-available">                                
                                </div>
                                
                                <div class="2place">
                                    <img src="/image/seat-available.png" data-seat="35" onclick="changeImage()" class="chair" alt="seat-available">
                                    <img src="/image/seat-available.png" data-seat="36" onclick="changeImage()" class="chair" alt="seat-available">                                
                                </div>
                                <div class="2place">
                                    <img src="/image/seat-available.png" data-seat="37" onclick="changeImage()" class="chair" alt="seat-available">
                                    <img src="/image/seat-available.png" data-seat="38" onclick="changeImage()" class="chair" alt="seat-available">                                
                                </div>
                                <div class="2place">
                                    <img src="/image/seat-available.png" data-seat="39" onclick="changeImage()" class="chair" alt="seat-available">
                                    <img src="/image/seat-available.png" data-seat="40" onclick="changeImage()" class="chair" alt="seat-available">                                
                                </div>
                                
                                <div class="2place">
                                    <img src="/image/seat-available.png" data-seat="41" onclick="changeImage()" class="chair" alt="seat-available">
                                    <img src="/image/seat-available.png" data-seat="42" onclick="changeImage()" class="chair" alt="seat-available">                                
                                </div>
                                <div class="2place">
                                    <img src="/image/seat-available.png" data-seat="43" onclick="changeImage()" class="chair" alt="seat-available">
                                    <img src="/image/seat-available.png" data-seat="44" onclick="changeImage()" class="chair" alt="seat-available">                                
                                </div>
                                <div class="2place">
                                    <img src="/image/seat-available.png" data-seat="45" onclick="changeImage()" class="chair" alt="seat-available">
                                    <img src="/image/seat-available.png" data-seat="46" onclick="changeImage()" class="chair" alt="seat-available">                                
                                </div>
                                
                                <div class="2place">
                                    <img src="/image/seat-available.png" data-seat="47" onclick="changeImage()" class="chair" alt="seat-available">
                                    <img src="/image/seat-available.png" data-seat="48" onclick="changeImage()" class="chair" alt="seat-available">                                
                                </div>
                                <div class="2place">
                                    <img src="/image/seat-available.png" data-seat="49" onclick="changeImage()" class="chair" alt="seat-available">
                                    <img src="/image/seat-available.png" data-seat="50" onclick="changeImage()" class="chair" alt="seat-available">                                
                                </div>
                                <div class="2place">
                                    <img src="/image/seat-available.png" data-seat="51" onclick="changeImage()" class="chair" alt="seat-available">
                                    <img src="/image/seat-available.png" data-seat="50" onclick="changeImage()" class="chair" alt="seat-available">                                
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="seats" id="selected-seat">
                        <div class="reservation">
                            <button class="btn-reserve" type="submit">Reserver</button>
                            <button class="btn-enable">Annuler</button>
                        </div>
                    
                    </div>
                </div>
                <div class="context-right">
                    <img src="{{asset('/image/'.$voyage->transport->image)}}" alt="image du bus de voyage" class="img_bus">
                    <div class="voyage-content">
                        <h5>Voyage vers {{$voyage->villeArriver}}</h5>
                        <h5 >{{$voyage->prix}}dh</h5>
                        <input type="hidden" value="{{$voyage->prix}}" id="prix">
                    </div>
                </div>
              </div>
            </form>
            </div>
        <script src="/js/admin/check-tecket.js"></script>            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        
</body>
</html>