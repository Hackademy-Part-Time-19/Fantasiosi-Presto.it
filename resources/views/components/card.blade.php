<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-dark">{{$title}}</h5>
      <p class="card-text text-dark">{{$body}}</p>
      <p class="card-text text-dark">{{$price}}€</p>
      <p class="card-text text-dark">{{$category->name}}</p>
      <p class="card-text text-dark">{{$user->name}}</p>
      <p class="card-text text-dark">{{$created->format('d/m/Y')}}</p>
      {{$slot}}
      
    </div>
  </div>