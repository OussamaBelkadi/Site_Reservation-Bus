<div>
    <div class="row justify-content-center form-sc" >
            
        <form role="form" method="POST" wire:submit.prevent="save" enctype="multipart/form-data" id="form_sc">
          @csrf
          <div class="col-lg-7 card-style mb-3">
            <label for="name">Name:</label>
            <div class="mb-3">
            <input type="text" id="name" class="form-control" placeholder="Nom du societe" wire:model="name">
            @error('name')
                <span>{{ $message }}</span>
            @enderror
            </div>
            <div>
                
            </div>
           
            <label>image</label>
            <div class="mb-3">
                
                <input type="file" id="image" class="form-control" placeholder="image" wire:model="image">
                @error('image')
                    <span>{{ $message }}</span>
                @enderror
              
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn bg-pramiry-bg w-100 mt-4 mb-0 ">Create</button>
              
            </div>
          </div>
        </form>
      
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card-style mb-30">
          <div class="title d-flex flex-wrap justify-content-between">
            <div class="left">
              <h6 class="text-medium mb-10">Societes de Voyage</h6>
              <h3 class="text-bold">List de Societes</h3>
            </div>
            <div class="right">
              
            </div>
          </div>
          <!-- End Title -->
          <div class="chart">
          
              
       
            <table class="table">

              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Logo</th>
                  <th scope="col">Nom societe</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              @forelse ($companies as $societe)
              <tbody class="table-group-divider">
                <tr>
                  <th scope="row">{{$societe->id}}</th>
                  <td><img src="{{asset('/image/'. $societe->image)}}" alt="" style="height: 26px; width:26px;"> </td>
                  <td>{{$societe->name}}</td>
                  

                  <td>
                    
                      <button class="btn" type="submit"><a href="{{route('societe.desplay', ['id'=>$societe->id])}}">View</a></button>
                   
                  </td>
                  <td>
                      <button class="btn btn-danger" wire:click="delete({{ $societe->id}})" >Suprimer</button>
                   
                  </td>
                </tr>
               
              </tbody>
              @empty
            </table>
            
            
              <h4>Aucune societe</h4>
            
              @endforelse
            
          </div>
          <!-- End Chart -->
        </div>
        
      </div>
    
</div>
