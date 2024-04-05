
<nav class="navbar navbar-expand-lg" style="background-color:var(--primary-color);z-index: 1;">
    <div class="container-fluid" style="position: relative;">

        <div class="d-flex align-items-center">
            <div class="logo-image" style="border-radius: 50%;; max-width: 50px; margin-right: 5px">
            </div>
            <div style="border-right: 1px solid var(--secondary-color); height:50px; display: flex; align-items: center">

                <a class="navbar-brand me-auto"
                    style="font-weight: 500; text-transform: uppercase; padding-right: 1rem; color:white;"
                    href="{{ route('welcome') }}">Presto.it</a>
            </div>



            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('welcome') }}">Home</a>
                </li>
                <div class="dropdown show d-flex align-items-center justify-content-center" style="position: relative">
                    <a class="btn dropdown-toggle p-0 px-2 text-center"
                        style="width:100%; back-drop-filter: blur(10px);" type="button" href="#" role="button"
                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <div class="d-flex align-items-center justify-content-center">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <button type="button" class="button-revisor">
                                    <a class="text-white nav-link" href="{{ route('revisor.index') }}"
                                        class="nav-link">Notifiche Revisore
                                        @if (App\Models\announcement::toBeRevisionedCount() > 0)
                                            <span>
                                                <span
                                                    class="badge badge-danger text-danger">{{ App\Models\announcement::toBeRevisionedCount() }}
                                                    unread messages </span>
                                            </span>
                                        @elseif (App\Models\announcement::toBeRevisionedCount() < 0)
                                            <span>
                                                <span
                                                    class="badge badge-danger text-danger">{{ App\Models\announcement::toBeRevisionedCount() }}
                                                    unread messages </span>
                                            </span>
                                        @endif
                                    </a></button>


                            </li>
                        </ul>
                    </div>
                @endif
            </ul>

        </div>

        <form action="{{ route('announcements.search') }}" method="GET"
            class="d-flex justify-content-center align-items-center;" style="position:absolute; right:43%;">
            <svg viewBox="0 0 24 24" aria-hidden="true" class="icon">
                <g>
                    <path
                        d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                    </path>
                </g>
            </svg>
            <input class="input" type="search" placeholder="Search" name="searched" />
        </form>

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
                <div class="dropdown show d-flex align-items-center justify-content-center" style="position: relative">
                    <a class="btn dropdown-toggle p-0 px-2 text-center"
                        style="width:100%; back-drop-filter: blur(10px);" type="button" href="#" role="button"
                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lingua
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="position: absolute; top: 100%">
                        <x-locale lang1='it' style="width:30px"><x-flag-country-it style=" width:30px;"/></x-locale>
                        <x-locale lang1='es' style="width:30px"><x-flag-country-es style=" width:30px;"/></x-locale>
                        <x-locale lang1='gb' style="width:30px"><x-flag-country-gb style=" width:30px;"/></x-locale>
                    </div>
                </div>

                @auth
                    <li class="nav-item d-flex  align-items-center">

                        <button class="btn crea-articolo px-2 mx-2"
                            style="padding: 0.5px 0px 0.5px 0px; font-size: 12px;"><a
                                style="text-decoration: none; color:white;"
                                href="{{ route('announcements.create') }}">Crea
                                Articolo</a></button>
                    </li>
                    <form action="/logout" method="POST" style="display: flex; align-items: center">
                        @csrf
                        <button class="btn Logout px-2 mx-2"
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



        </div>
    </div>
</nav>
