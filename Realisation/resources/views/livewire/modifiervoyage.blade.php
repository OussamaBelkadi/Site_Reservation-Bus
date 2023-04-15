<div>
  <div class="row justify-content-center form-sc" >
    <form role="form" method="POST" action="{{route('voyage.modifier', ['id'=>$id_voyage])}}"  enctype="multipart/form-data" id="form_sc">
      @csrf
      
      <div class="col-lg-12 card-style mb-3">
        <label>Date de voyage</label>
        <div class="mb-3">
        
          <input type="date" value={{$voyage->dateVoyage}} name="dateVoyage" class="form-control" placeholder="Date de voyage"  >
          @error('dateVoyage')
            <span>{{ $message }}</span>
        @enderror
        </div>
        <label>Date depart</label>
        <div class="mb-3">
        
          <input type="time"  value={{$voyage->dateDepart}}  name="dateDepart" class="form-control" placeholder="Date depart"  >
          @error('dateDepart')
            <span>{{ $message }}</span>
        @enderror
        </div>
        <label>Date d'arriver</label>
        <div class="mb-3">
        
          <input type="time" value={{$voyage->dateDariver}}  name="dateDarriver" class="form-control" placeholder="Date depart" >
          @error('dateDarriver')
            <span>{{ $message }}</span>
        @enderror
        </div>
        <label for="ville">Ville Depart</label>
        <div class="mb-3">
        <select class="form-select" name="villeDepart" aria-label="Default select example" id="ville1" >
            <option selected>Choisie la ville depart</option>
            @foreach ($villes as $ville)
                <option value="{{$ville->ville}}">{{$ville->ville}}</option>   
            @endforeach
            
        </select>
        </div>
        <label for="ville">Ville d'arriver</label>
        <div class="mb-3">
            <select class="form-select" name="villeArriver" aria-label="Default select example" id="ville2" >
                <option selected>Choisie la ville d'arriver</option>
                @foreach ($villes as $ville)
                    <option value="{{$ville->ville}}">{{$ville->ville}}</option>   
                @endforeach
                
              </select>
        </div>
        <label for="societe">Societe</label>
        <div class="mb-3">
            <select class="form-select" name="societe_id" aria-label="Default select example" wire:change="getSelectedCompanyVehicles" wire:model="selectedCompany" >
                <option selected>Choisie societe de voyage</option>
                @foreach ($societes as $societe)
                    <option value="{{$societe->id}}">{{$societe->name}}</option>   
                @endforeach
                
              </select>
        </div>
        <label for="">Transport</label>
        <div class="mb-3">
          <select class="form-select" name="transport_id" aria-label="Default select example" id="vehucule"  >
              <option selected>Choisie un transport</option>
              @foreach ($transport as $transport)
                  <option value="{{$transport->id}}">{{$transport->marque}}</option>   
              @endforeach
              
            </select>
      </div>
      
        <label>Prix</label>
        <div class="mb-3">
        
          <input type="number" name="prix" value={{$voyage->prix}} class="form-control" placeholder="nombre du place"  >
          @error('prix')
            <span>{{ $message }}</span>
        @enderror
        </div>
      
      
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"> Save changes </button>
      </div>

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
