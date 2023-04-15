<div>

    <div class="row justify-content-center form-sc" >
      <div><h1 class="text-danger">{{$reservedTram}}</h1></div>
      <form role="form" method="POST" wire:submit.prevent="save" enctype="multipart/form-data" id="form_sc">
        @csrf
        <div class="col-lg-12 card-style mb-3">
          <label>Date de voyage</label>
          <div class="mb-3">
          
            <input type="date" wire:model="dateVoyage" name="dateDepart" class="form-control" placeholder="Date de voyage"  >
            @error('dateVoyage')
              <span>{{ $message }}</span>
          @enderror
          </div>
          <label>Date depart</label>
          <div class="mb-3">
          
            <input type="time" pattern="^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$" wire:model="dateDepart" name="dateDepart" class="form-control" placeholder="Date depart"  >
            @error('dateDepart')
              <span>{{ $message }}</span>
          @enderror
          </div>
          <label>Date d'arriver</label>
          <div class="mb-3">
          
            <input type="time" pattern="^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$" wire:model="dateDarriver" name="dateDarriver" class="form-control" placeholder="Date depart"  >
            @error('dateDarriver')
              <span>{{ $message }}</span>
          @enderror
          </div>
          <label for="ville">Ville Depart</label>
          <div class="mb-3">
          <select class="form-select" aria-label="Default select example" id="ville1" wire:model='villeDepart'>
              <option selected>Open this select menu</option>
              @foreach ($villes as $ville)
                  <option value="{{$ville->ville}}">{{$ville->ville}}</option>   
              @endforeach
              
          </select>
          </div>
          <label for="ville">Ville d'arriver</label>
          <div class="mb-3">
              <select class="form-select" aria-label="Default select example" id="ville2" wire:model='villeDarriver'>
                  <option selected>Open this select menu</option>
                  @foreach ($villes as $ville)
                      <option value="{{$ville->ville}}">{{$ville->ville}}</option>   
                  @endforeach
                  
                </select>
          </div>
          <label for="societe">Societe</label>
          <div class="mb-3">
              <select class="form-select" aria-label="Default select example" wire:model="selectedCompany" wire:change="getSelectedCompanyVehicles">
                  <option selected>Open this select menu</option>
                  @foreach ($societes as $societe)
                      <option value="{{$societe->id}}">{{$societe->name}}</option>   
                  @endforeach
                  
                </select>
          </div>
          <label for="">Transport</label>
          <div class="mb-3">
            <select class="form-select" aria-label="Default select example" id="vehucule"  wire:model="selectedVehucule">
                <option selected>Open this select menu</option>
                @foreach ($transport as $transport)
                    <option value="{{$transport->id}}">{{$transport->marque}}</option>   
                @endforeach
                
              </select>
        </div>
        <label>Nombre de place</label>
          <div class="mb-3">
          
            <input type="number"  wire:model="place" name="place" class="form-control" placeholder="nombre du place"  >
            @error('place')
              <span>{{ $message }}</span>
          @enderror
          </div>
          <label>Prix</label>
          <div class="mb-3">
          
            <input type="number"  wire:model="prix" name="place" class="form-control" placeholder="nombre du place"  >
            @error('place')
              <span>{{ $message }}</span>
          @enderror
          </div>
        </div>
        
        
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>

      </form>
    
  </div>
  
  <script>
        // Get the two select tags
        var city1 = document.getElementById("ville1");
        var city2 = document.getElementById("ville2");
        console.log('monh');
        // Listen for changes on the first select tag
        city1.addEventListener("change", function() {
        // Disable the option with the same value in the second select tag
        var selectedValue = this.value;
        var options = city2.options;
        for (var i = 0; i < options.length; i++) {
        if (options[i].value == selectedValue) {
            options[i].disabled = true;
        } else {
            options[i].disabled = false;
        }
        }
    });
  </script>
</div>
