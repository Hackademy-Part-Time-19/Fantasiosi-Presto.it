
  <div class="card text-center d-flex flex-column" style="width: 18rem; min-height: 32rem">
    <img class="card-img-top" width="100%"  src="{{Storage::url('immagini/Nuovoprogetto.png')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-dark">{{$title}}</h5>
      <p class="card-text" style="color: var(--gray-text-color); font-weight:300;">{{ Str::limit($body, 40) }}</p>
      <p class="card-text text-dark fw-bold">{{$price}}€</p>
      <p class="card-text text-dark text-capitalize">Categoria:<a href="{{route('category.show',compact('category'))}}"><span style="text-decoration: underline">{{$category->name}} </span></a> </p>
      <p class="card-text text-dark">Pubblicato da: <span style="text-decoration: underline"> {{$user->name}} </span></p>
      <p class="card-text text-dark" style="font-size:10px;">{{$created->format('d/m/Y')}}</p>
      {{$slot}}
    </div>
  </div>
