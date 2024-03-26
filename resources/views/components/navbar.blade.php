<nav class="navbar navbar-expand-lg bg-body-white">
    <div class="container-fluid">

        <div class="d-flex align-items-center">
            <img class="img-fluid me-2" style="border-radius: 50%" width="50"
                src="{{ Storage::url('immagini/logo.png') }}" alt="Immagine Logo">
            <div style="border-right: 1px solid var(--gray-text-color);">

            <a class="navbar-brand me-auto" style="font-weight: 500; text-transform: uppercase; padding-right: 1rem; color:white;" href="{{route('welcome')}}">Presto.it</a>
        </div>



            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('welcome') }}">Home</a>
                </li>
                <div class="dropdown show d-flex align-items-center justify-content-center" style="position: relative">
                    <a class="btn dropdown-toggle p-0 px-2 text-center"
                        style="height:20px; width:100%; font-size: 12px; back-drop-filter: blur(10px);" type="button"
                        href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Categorie
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="position: absolute; top: 100%">
                        @foreach ($categories as $category)
                            <a class="dropdown-item" href="{{ route('category.show', compact('category')) }}"
                                style="text-transform: capitalize">{{ $category->name }}</a>
                        @endforeach



                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('announcements.index') }}">Annunci</a>
                </li>
                @if (Auth::check() && Auth::user()->is_revisor)
                    <li>
                        <a href="{{ route('revisor.index') }}" class="nav-link">Zona revisore <span>
                                {{ App\Models\announcement::toBeRevisionedCount() }} <span>unread messages</span>
                            </span>
                        </a>
                    </li>
                @endif
            </ul>

        </div>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <div class="visually-hidden">
                    <input type="checkbox" class="checkbox" id="checkbox" name="checkbox">
                    <label for="checkbox" class="checkbox-label">
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <span class="ball"></span>
                    </label>
                </div>


                @auth
                    <li class="nav-item d-flex  align-items-center">

                        <button class="btn btn-dark px-2 mx-2" style="padding: 0.5px 0px 0.5px 0px; font-size: 12px;"><a
                                style="text-decoration: none; color:white;" href="{{ route('announcements.create') }}">Crea
                                Articolo</a></button>
                    </li>
                    <form action="/logout" method="POST" style="display: flex; align-items: center">
                        @csrf
                        <button class="btn btn-dark px-2 mx-2"
                            style="padding: 0.5px 0px 0.5px 0px; font-size: 12px">Logout</button>
                    </form>

                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Accedi</a>
                    </li>
                @endguest

            </ul>
            <form action="{{route('announcements.search')}}" method="GET">
                <input name="searched" type="search" placeholder="Search">
                <button type="submit">Search</button>
            </form>

        </div>
    </div>
</nav>
