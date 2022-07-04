

<div class="container" style="width:500px; padding-top:100px">
    
    @if (Session::has('find'))
  <div class="alert alert-success" role="alert">{{ Session::get('find') }} </div>
    @endif
    @if (Session::has('notFound'))
    <div class="alert alert-danger" role="alert">{{ Session::get('notFound') }} </div>
    @endif
   
        <form>
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">Https:</span>
            <input type="text" class="form-control" wire:model="search" id="basic-url" aria-describedby="basic-addon3" placeholder="Search your domains...">
            </div>
        </form>
       
    </div>