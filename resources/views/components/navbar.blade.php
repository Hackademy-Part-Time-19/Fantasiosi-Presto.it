<nav class="navbar navbar-expand-lg bg-body-white">
    <div class="container-fluid">

        <div class="d-flex align-items-center">
            <img class="img-fluid me-2" style="border-radius: 50%" width="50" src="{{Storage::url('immagini/logo.png')}}" alt="Immagine Logo">
            <a class="navbar-brand me-auto" style="font-weight: 600" href="{{route('welcome')}}">Presto.it</a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <div>
                    <input type="checkbox" class="checkbox" id="checkbox">
                    <label for="checkbox" class="checkbox-label">
                      <i class="fas fa-moon"></i>
                      <i class="fas fa-sun"></i>
                      <span class="ball"></span>
                    </label>
                  </div>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('welcome')}}">Home</a>
                </li>
                
                @auth

                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn-link">Logout</button>
                    </form>

                @endauth
                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown link
                    </a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach ($categories as $category)
                            <a class="dropdown-item" href="{{route('category.show', compact('category'))}}">{{$category->name}}</a>
                        @endforeach
                      
                    
                    </div>
                  </div>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Accedi</a>
                    </li>
                @endguest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}">Annunci</a>
                </li>


            </ul>

        </div>
    </div>
</nav>

