<x-layout>
    <h2>Annuncio {{$announcements->title}}</h2>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="carousel slide" id="showCarousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="" alt="">
                        </div>
                        <div class="carousel-item active">
                            <img src="" alt="">
                        </div>
                        <div class="carousel-item active">
                            <img src="" alt="">
                        </div>
                        <div class="carousel-item active">
                            <img src="" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually hidden">Next</span>
                    </button>
                    <h3 class="card-title">Titolo:{{$announcements->title}}</h3>
                    <p class="card-text">Descrizione:{{$announcements->body}}</p>
                    <h3 class="card-text">Prezzo:{{$announcements->price}}</h3>
                    <a href="btn btn-primary">Categoria: {{$announcements->category->name}}</a>
                    <p class="card-footer">Pubblicato il: {{$announcements->created_at->format('d/m/Y')}} da {{$announcements->user->name ?? ''}}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>