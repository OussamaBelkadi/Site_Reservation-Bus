<div>

        <form role="form" wire:submit.prevent="save" enctype="multipart/form-data" >
       
          <div class="col-lg-12 card-style mb-3">
            <label>Marque</label>
            <div class="mb-3">
              
              <input type="text" wire:model="marque" name="marque" class="form-control" placeholder="Marque du transport" aria-label="name" >
              @error('marque')
              <span>{{ $message }}</span>
          @enderror
            </div>
            <label>image</label>
            <div class="mb-3">
              <input type="file" wire:model="image" id="image" name="image" class="form-control" placeholder="image">
              @error('image')
              <span>{{ $message }}</span>
          @enderror
            </div>
            <label>Matricule</label>
            <div class="mb-3">
              <input type="text" name="matricule" wire:model="matricule" class="form-control" placeholder="Matricule du vehucule">
              @error('matricule')
              <span>{{ $message }}</span>
          @enderror
            </div>
            <label>Nom</label>
            <div class="mb-3">
              <input type="text" wire:model="nom" name="nom" class="form-control" placeholder="Marque du transport" aria-label="name" >
              @error('marque')
              <span>{{ $message }}</span>
          @enderror
            </div>
            <label>image</label>
            <div class="mb-3">
              <input type="file" wire:model="imageConduicteur" name="imageConduicteur" class="form-control" placeholder="image">
              @error('image')
                  <span>{{ $message }}</span>
              @enderror
            </div>
            <label>Age</label>
            <div class="mb-3">
              <input type="number" wire:model="age" name="age" class="form-control" placeholder="Marque du transport" aria-label="name" >
              @error('marque')
              <span>{{ $message }}</span>
          @enderror
            </div>
            <input type="hidden" name="societe_id" wire:model="societe_id" value="{{$societe_id}}">
                      </div>
        
      
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Save changes</button>
      </form>
      </div>
    
</div>