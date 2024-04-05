
  <div class="card text-center d-flex flex-column" style="width: 18rem; max-height: 25rem; min-height: 25rem; height: 25rem; padding: 10px; background-color: var(--primary-color)">
    <img class="card-img-top img-fluid" style="border: 1px solid black;width: 300px;min-height: 200px;object-fit: cover; border-radius: 10px"  src="{{$image}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" style="color: var(--third-color)"> {{ Str::limit($title, 20)}}</h5>
        <p class="card-text mb-0" style="color: var(--paragraph-color); font-weight:300; font-size: 12px;">{{ Str::limit($body, 40) }}</p>
        <p class="card-text fw-bold mt-1 mb-1" style="color: var(--third-color);">{{$price}}€</p>
        <p class="card-text text-capitalize mb-0" style="color: var(--third-color)">Categoria: <a href="{{route('category.show',compact('category'))}}"><span style="text-decoration: underline var(--secondary-color); color: var(--secondary-color)">{{$category->name}} </span></a> </p>
        <p class="card-text mb-0" style="color: var(--third-color)">Pubblicato da: <span style="color:var(--secondary-color); "> {{Str::limit( $user->name, 10)}} </span></p>
        <p class="card-text mt-0" style="font-size:10px; color: var(--third-color)">{{$created->format('d/m/Y')}}</p>
        {{ $slot }}
    </div>
  </div>
