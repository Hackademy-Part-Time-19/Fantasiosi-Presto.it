<x-layout>
    <h2>Annuncio {{ $announcement->title }}</h2>

    <div class="container">

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner " style="border: 1px solid black">
                <div class="carousel-item active ">
                    <img style="border: 1px solid black" src="{{Storage::url('immagini/Nuovo_progetto.png')}}"  class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{Storage::url('immagini/Nuovo_progetto2.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{Storage::url('immagini/Nuovo_progettoNo.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev btn btn-dark" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next btn btn-dark" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div>
            <h3 class="card-title">Titolo:{{ $announcement->title }}</h3>
            <p class="card-text">Descrizione:{{ $announcement->body }}</p>
            <h3 class="card-text">Prezzo:{{ $announcement->price }}</h3>
            <a href="btn btn-primary">Categoria: {{ $announcement->category->name }}</a>
            <p class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }} da
                {{ $announcement->user->name ?? '' }}</p>
        </div>
    </div>
</x-layout>
