<x-layout>
    <h2 class="text-center mt-5">{{ $announcement->title }}</h2>

    <div class="container d-flex justify-content-center flex-column align-items-center" style="min-height: 62.1vh;">

        <div id="carouselExample" class="carousel slide mt-5">
            <div class="carousel-inner" >
                <div class="carousel-item active">
                    <img style="border: 1px solid black; max-width:270px; max-height:160px;" src="{{Storage::url('immagini/Nuovoprogetto.png')}}"  class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item">
                    <img style="border: 1px solid black; max-width:270px; max-height:160px;" src="{{Storage::url('immagini/Nuovo_progetto_1.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img style="border: 1px solid black; max-width:270px; max-height:160px;" src="{{Storage::url('immagini/Nuovo_progetto.png')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" style="top: 40%" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon PREVIOUS" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" style="top: 40%" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon NEXT" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="card-body w-50 mt-5" >

            <p class="card-text text-center" style="color:var(--gray-text-color);">{{ $announcement->body }}</p>
            <h3 class="card-text text-center">{{ $announcement->price }}€</h3>
            <p class="card-text text-center text-capitalize text-dark">Categoria: {{ $announcement->category->name }}</p>
            <p class="card-footer text-center">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }} da
               <span style="font-style: italic"> {{ $announcement->user->name ?? '' }} </span></p>
        </div>
    </div>
</x-layout>
