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

    <!-- Container for barre of search ticket -->
    <div class="container form_search">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded sm-mt-4">
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
    <a href="{{route('make.payment')}}">Pay</a>
    <!-- Content Ads -->
    <div class="text-ads container">
        <div class="title_ads">
            <h2 class="header_ads">قطع الكار من الدار</h2>
            <p class="text">
                Nous somme une société qui vous facilite le processus d’achat des ticket de voyage avec simple click et ou vous étés, bous somme heureux de vous servire.
            </p>
        </div>
    </div>

    <div class="rules">
        <div class="rule_item1">
            <img src="image/bus-removebg-preview.png" class="icon_bus" alt="icon bus">
            <div class="rule_text">
                <h3>1. Choisir</h3>
                <p>Trouver l’offre qui vous convient.</p>
            </div>
        </div>
        <div class="rule_item1">
            <img src="image/bus-removebg-preview.png" class="icon_bus" alt="icon bus">
            <div class="rule_text">
                <h3>1. Choisir</h3>
                <p>Trouver l’offre qui vous convient.</p>
            </div>
        </div>
        <div class="rule_item1">
            <img src="image/bus-removebg-preview.png" class="icon_bus" alt="icon bus">
            <div class="rule_text">
                <h3>1. Choisir</h3>
                <p>Trouver l’offre qui vous convient.</p>
            </div>
        </div>
        
    </div>

    
    <main>
		<div class="text">
			<h1>les Avis de nos Clients</h1>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam non atque adipisci est, recusandae aperiam, ullam minima quos nostrum animi voluptas sequi. At repellendus fuga reiciendis accusantium, dolor suscipit repellat?
			</p>
		</div>
		<header>
			<h1>Top Avis</h1>
			<p>
				<span>&#139;</span>
				<span>&#155;</span>
			</p>
		</header>
		<section>
            @foreach($avis as $avi)
			<div class="box d-flex flex-column align-items-center text-center product">
              
                <h3 class="text-white my-4">Adil Ferda</h3>
                <div class="stars my-2">
                    @if( $avi->note == 1)
                    <img src="/image/star.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="1" />
                    <img src="/image/star-empty-icon.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="2" />
                    <img src="/image/star-empty-icon.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="3" />
                    <img src="/image/star-empty-icon.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="4" />
                    <img src="/image/star-empty-icon.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="5" />
                    @elseif( $avi->note == 2)
                    <img src="/image/star.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="1" />
                    <img src="/image/star.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="2" />
                    <img src="/image/star-empty-icon.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="3" />
                    <img src="/image/star-empty-icon.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="4" />
                    <img src="/image/star-empty-icon.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="5" />
                    @elseif( $avi->note == 3)
                    <img src="/image/star.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="1" />
                    <img src="/image/star.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="2" />
                    <img src="/image/star.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="3" />
                    <img src="/image/star-empty-icon.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="4" />
                    <img src="/image/star-empty-icon.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="5" />
                    @elseif( $avi->note == 4)
                    <img src="/image/star.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="1" />
                    <img src="/image/star.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="2" />
                    <img src="/image/star.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="3" />
                    <img src="/image/star.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="4" />
                    <img src="/image/star-empty-icon.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="5" />
                    @elseif( $avi->note == 5)
                    <img src="/image/star.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="1" />
                    <img src="/image/star.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="2" />
                    <img src="/image/star.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="3" />
                    <img src="/image/star.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="4" />
                    <img src="/image/star.png" class="starts"  style="width: 22px; height:22px;" alt="star" data-value="5" />
                    @endif

                    
                </div>
                <div class="content-avis">
                    <p class="text-white my-3">{{$avi->avi}}</p>
                </div>
            </div>
            @endforeach
			{{-- <div class="box d-flex flex-column align-items-center text-center product">
            
                <h3 class="text-white my-4">Adil Ferda</h3>
                <div class="content-avis">
                    <p class="text-white my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, natus eaque. Inventore iusto eius perferendis, odit voluptate similique fugit numquam et nemo amet dolor at ex cum distinctio tempora quisquam!</p>
                </div>
            </div>
			<div class="box d-flex flex-column align-items-center text-center product">
            
                <h3 class="text-white my-4">Adil Ferda</h3>
                <div class="content-avis">
                    <p class="text-white my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, natus eaque. Inventore iusto eius perferendis, odit voluptate similique fugit numquam et nemo amet dolor at ex cum distinctio tempora quisquam!</p>
                </div>
            </div>
			<div class="box d-flex flex-column align-items-center text-center product">
            
                <h3 class="text-white my-4">Adil Ferda</h3>
                <div class="content-avis">
                    <p class="text-white my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, natus eaque. Inventore iusto eius perferendis, odit voluptate similique fugit numquam et nemo amet dolor at ex cum distinctio tempora quisquam!</p>
                </div>
            </div>
			
			<div class="box d-flex flex-column align-items-center text-center product">
            
                <h3 class="text-white my-4">Adil Ferda</h3>
                <div class="content-avis">
                    <p class="text-white my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, natus eaque. Inventore iusto eius perferendis, odit voluptate similique fugit numquam et nemo amet dolor at ex cum distinctio tempora quisquam!</p>
                </div>
            </div>
			<div class="box d-flex flex-column align-items-center text-center product">
            
                <h3 class="text-white my-4">Adil Ferda</h3>
                <div class="content-avis">
                    <p class="text-white my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, natus eaque. Inventore iusto eius perferendis, odit voluptate similique fugit numquam et nemo amet dolor at ex cum distinctio tempora quisquam!</p>
                </div>
            </div>
			<div class="box d-flex flex-column align-items-center text-center product">
            
                <h3 class="text-white my-4">Adil Ferda</h3>
                <div class="content-avis">
                    <p class="text-white my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, natus eaque. Inventore iusto eius perferendis, odit voluptate similique fugit numquam et nemo amet dolor at ex cum distinctio tempora quisquam!</p>
                </div>
            </div>
			<div class="box d-flex flex-column align-items-center text-center product">
            
                <h3 class="text-white my-4">Adil Ferda</h3>
                <div class="content-avis">
                    <p class="text-white my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, natus eaque. Inventore iusto eius perferendis, odit voluptate similique fugit numquam et nemo amet dolor at ex cum distinctio tempora quisquam!</p>
                </div>
            </div>
			<div class="box d-flex flex-column align-items-center text-center product">
            
                <h3 class="text-white my-4">Adil Ferda</h3>
                <div class="content-avis">
                    <p class="text-white my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, natus eaque. Inventore iusto eius perferendis, odit voluptate similique fugit numquam et nemo amet dolor at ex cum distinctio tempora quisquam!</p>
                </div>
            </div>
			<div class="box d-flex flex-column align-items-center text-center product">
            
                <h3 class="text-white my-4">Adil Ferda</h3>
                <div class="content-avis">
                    <p class="text-white my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, natus eaque. Inventore iusto eius perferendis, odit voluptate similique fugit numquam et nemo amet dolor at ex cum distinctio tempora quisquam!</p>
                </div>
            </div>
			<div class="box d-flex flex-column align-items-center text-center product">
            
                <h3 class="text-white my-4">Adil Ferda</h3>
                <div class="content-avis">
                    <p class="text-white my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, natus eaque. Inventore iusto eius perferendis, odit voluptate similique fugit numquam et nemo amet dolor at ex cum distinctio tempora quisquam!</p>
                </div>
            </div>
			<div class="box d-flex flex-column align-items-center text-center product">
            
                <h3 class="text-white my-4">Adil Ferda</h3>
                <div class="content-avis">
                    <p class="text-white my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, natus eaque. Inventore iusto eius perferendis, odit voluptate similique fugit numquam et nemo amet dolor at ex cum distinctio tempora quisquam!</p>
                </div>
            </div> --}}
            
		</section>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Launch static backdrop modal
          </button>
         
    
          <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Presente ton avi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('avi.save')}}" method="POST">
                            @csrf
                            <label for="avis">Avi</label>
                            <div class="from-group">
                                <textarea name="avis" id="avis" cols="50" rows="8"></textarea>
                            </div>
                            <label for="">Notation</label>
                            <div class="stars">
                                <img src="/image/star-empty-icon.png" class="start"  style="width: 22px; height:22px;" alt="star" data-value="1" />
                                <img src="/image/star-empty-icon.png" class="start"  style="width: 22px; height:22px;" alt="star" data-value="2" />
                                <img src="/image/star-empty-icon.png" class="start"  style="width: 22px; height:22px;" alt="star" data-value="3" />
                                <img src="/image/star-empty-icon.png" class="start"  style="width: 22px; height:22px;" alt="star" data-value="4" />
                                <img src="/image/star-empty-icon.png" class="start"  style="width: 22px; height:22px;" alt="star" data-value="5" />
                            </div>
                            <input type="hidden" name="note" id="note" value="0">
                       
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
                    </div>
                </div>
                </div>
            </div>
	</main>


    
        
  

    <!-- description -->
    <div class="description_prace">
        <img src="image/bus_wifi.png" alt="icon_bus">
        <div class="text">
            <h4>Facilitez le voyage de vos proches et gagnez de l'argent !</h4>
            <p class="texte_prace">Offrez à vos amis et à votre famille 5 Dh de réduction et gagnez 5 Dh.</p>
        </div>
        <button class="btn btn_prace">En s'avoir plus</button>
    </div>
    
    {{-- <div class="container-fluid slider">
        
        <div class="box d-flex flex-column align-items-center text-center">
            
            <h3 class="text-white my-4">Adil Ferda</h3>
            <div class="content-avis">
                <p class="text-white my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, natus eaque. Inventore iusto eius perferendis, odit voluptate similique fugit numquam et nemo amet dolor at ex cum distinctio tempora quisquam!</p>
            </div>
        </div>
        <div class="box d-flex flex-column align-items-center text-center">
            
            <h3 class="text-white my-4">Adil Ferda</h3>
            <div class="content-avis">
                <p class="text-white my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, natus eaque. Inventore iusto eius perferendis, odit voluptate similique fugit numquam et nemo amet dolor at ex cum distinctio tempora quisquam!</p>
            </div>
        </div>
       
    </div> --}}
    

   
    <!-- Slide -->
    <div class="container text-center my-5">
      <h2 class="font-weight-light text-porter">Nos Partenaires</h2>
      <div class="row mx-auto my-auto justify-content-center">
          <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="societe">
                      <img src="{{asset('/image/'.$societe->image)}}" alt="logo_societe">
                      <p class="text-sc">{{$societe->name}}</p>
                    </div>
                </div>
                @foreach($societes as $societe)
                    @if (!$loop->first)
                        <div class="carousel-item">
                            <div class="societe">
                                <img src="{{ asset('/image/' . $societe->image) }}" alt="logo_societe">
                                <p class="text-sc">{{$societe->name}}</p>
                            </div>.
                        </div>
                    @endif
                @endforeach

              </div>
              <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              </a>
              <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
              </a>
          </div>
        </div>
        <a href="{{route('list.societe')}}">voir tous ></a>
      </div>

        <!-- Footer -->
        <footer>
          <div class="row1">
            <div class="colunm1">
              <h5 class="title">Product</h5>
              <div class="content_col1">
                <p>Voyage proposer</p>
                <p>Voyage proposer</p>
                <p>Voyage proposer</p>
                <p>Voyage proposer</p>
              </div>
            </div>
            <div class="colunm1">
              <h6 class="title">Information</h6>
              <div class="content_col1">
                <p>Utilisation</p>
                <p>Ticket</p>
                <p>Aide</p>
              </div>
            </div>
            <div class="colunm1">
              <h6 class="title">S’inscrire</h6>
              <div class="content_col1">
                <p>Voyage proposer</p>
                <p>Voyage proposer</p>
                <p>Voyage proposer</p>
                <p>Voyage proposer</p>
              </div>
            </div>
            <div class="colunm4">
              <h6 class="title">Product</h6>
              <div class="content_col1">
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                  <p>Nos contactant d’une maniére quotidien</p>
                </div>

              </div>
            </div>
        </div>
        <div class="row2">
          <h1>LOGO</h1>
          <div class="content_sociaux">
            <p>test ADS</p>
          </div>
        </div>
        </footer>
      
 
    <!-- JS Link -->
    <script src="js/script.js"></script>
<!--Initialize Bootstrap Carousel-->
<script  src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>