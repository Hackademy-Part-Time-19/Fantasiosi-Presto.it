<x-layout>


    <div class="container" style="height:75.1vh; max-height:75.1vh; min-height:75.1vh;">
        <div class="bg-color d-flex justify-content-center flex-column align-items-center"
            style="background-color: var(--primary-color); z-index: 1; margin-top:4.5rem;">
            <div class="return" style="z-index: 1">
                <a class="btn btn-primary mt-2" href="{{ route('announcements.index') }}"
                    style="cursor: pointer; z-index: 1; background-color: var(--secondary-color); border-color: var(--secondary-color);">Torna
                    indietro</a>
                {{-- <a class="btn btn-primary mt-2" href="{{ route('category.show'), ['category' => $category] }}" style="cursor: pointer; z-index: 1; background-color: var(--secondary-color); border-color: var(--secondary-color);">Torna alle categoria</a> --}}
            </div>

            <h2 class="text-center" style="margin-top: 2rem; color: var(--fifth-color); z-index: 1">
                {{ $announcement->title }}</h2>
            <div class="container">
                <div class="row">


                    <div class="col-12">
                        <div id="showCarousel" class="carousel slide" data-bs-ride="carousel"
                            style="border: 3px solid #fca21154; border-radius:10px; width:50%; display:flex; flex-direction:column; justify-content:center; align-items:center; margin-bottom: 10px">
                            @if ($announcement->images)
                                <div class="carousel-inner align-items-center">
                                    @foreach ($announcement->images as $image)
                                        <div class="carousel-item @if ($loop->first) active @endif ">
                                            <img src="{{ Storage::url($image->path) }}"
                                                class="img fluid p-3 rounded d-block" width="300px" height="300px"
                                                style="object-fit: contain;" alt="...">


                                        </div>
                                    @endforeach
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div id="carouselExample" class="carousel slide mt-4" style="max-width: 235px;">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="z-index: 1">
                        <img style="border: 2px solid var(--secondary-color); max-width:270px; max-height:160px;"
                            src="{{ Storage::url('immagini/Nuovoprogetto.png') }}" class="d-block w-100 "
                            alt="...">
                    </div>
                    <div class="carousel-item" style="z-index: 1">
                        <img style="border: 2px solid var(--secondary-color); max-width:270px; max-height:160px;"
                            src="{{ Storage::url('immagini/Nuovoprogetto.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item"style="z-index: 1">
                        <img style="border: 2px solid  var(--secondary-color); max-width:270px; max-height:160px;"
                            src="{{ Storage::url('immagini/Nuovoprogetto.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" style="top: 10%; z-index: 1" type="button"
                    data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon PREVIOUS" style="background-color:var(--fourth-color)"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" style="top: 10%; z-index: 1;" type="button"
                    data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon NEXT" style="background-color:var(--fourth-color)"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            @endif
            <hr style="width: 80%; border:1px solid var(--secondary-color); margin-bottom: 0px; opacity: 1">
            <div class="card-body w-50 mt-3">

                <p class="card-text text-center " style="color:var(--paragraph-color); z-index: 1; position: relative">
                    {{ $announcement->body }}
                </p>
                <h3 class="card-text text-center mb-3"
                    style="color:var(--fifth-color); z-index: 1; position: relative; text-decoration: underline var(--secondary-color)">
                    {{ $announcement->price }}€</h3>
                <p class="card-text text-center text-capitalize text mb-3"
                    style="color:var(--fifth-color); z-index: 1; position: relative">Categoria: <span
                        style="text-decoration: underline var(--secondary-color); color: var(--secondary-color)">{{ $announcement->category->name }}</span>
                </p>
                <p class="card-footer text-center mt-0"
                    style="color:var(--fifth-color); z-index: 1; position: relative; font-size: 12px">Pubblicato da:
                    <br>{{ $announcement->created_at->format('d/m/Y') }} da
                    <span style="font-style: italic; text-decoration: underline var(--secondary-color);">
                        {{ $announcement->user->name ?? '' }} </span>
                </p>
            </div>
        </div>
    </div>
    <div class="background-color"
        style="position: absolute; z-index: 0; width: 100%; height:67.2vh; max-height: 67.2vh; min-height: 67.2vh; top: 13.5%; background-color: #2b375091">
    </div>
</x-layout>
