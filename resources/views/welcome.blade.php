<x-layout>
    @auth


    <!-- CREA COMPONENTE !-->
    <div class="d-flex justify-content-center flex-column align-items-center text-center" style="min-height: 90vh">
        <h1 class="fw-bold display-4">Hello, {{Auth::user()->name}}</h1>
        <p class="fw-normal" style="color:var(--gray-text-color)">Want to publish an announcement? Do it here!</p>
        <a class="btn btn-dark" href="{{route('announcements.create')}}">Crea Annuncio</a>
    </div>
    <div class="Featured-Products d-flex justify-content-center flex-column align-items-center text-center" style="padding-bottom: 5rem">
        <h1 class="fw-bold display-6" style="margin-top: 5rem">Featured Products</h1>
        <p class="fw-normal" style="color:#707070;">Check out our handpicked selection of must-have items.</p>
        <div class="cards m-1 d-flex flex-row gap-5">
            @foreach ($announcements as $announcement)
            <div class="card-product">
                <img class="img-fluid" height="250" width="250"  src="{{Storage::url('immagini/logo.png')}}" alt="">
                <h5>{{$announcement->title}}</h5>
                <p>{{$announcement->price}}</p>
            </div>
            @endforeach
            </div>
    </div>
    <div class="Testimonials d-flex justify-content-center flex-column align-items-center text-center">
        <h1 class="fw-bold display-6" style="margin-top: 5rem">Customer Testimonials</h1>
        <p class="fw-normal" style="color:var(--gray-text-color)">Hear what our customers have to say about our products.</p>
        <div class="slideshow d-flex flex-row">
        <div class="card-customer flex-row ">
            <div class="left-side d-flex flex-column justify-content-center align-items-start border-end p-3">
            <img class="img-fluid" height="100" width="100" style="border-radius: 50%" src="{{Storage::url('immagini/logo.png')}}" alt="">
            <h2>Fabiano</h2>
            <h2>Buscemi</h2>
        </div>
        <div class="right-side">
            <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, quae.</p>
        </div>
        </div>

    <div class="card-customer flex-row ">
        <div class="left-side d-flex flex-column justify-content-center align-items-start border-end p-3">
        <img class="img-fluid" height="100" width="100" style="border-radius: 50%" src="{{Storage::url('immagini/logo.png')}}" alt="">
        <h2>Gabriele</h2>
        <h2>Lucchetti</h2>
    </div>
    <div class="right-side">
        <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, quae.</p>
    </div>
    </div>
    <div class="card-customer flex-row ">
        <div class="left-side d-flex flex-column justify-content-center align-items-start border-end p-3">
        <img class="img-fluid" height="100" width="100" style="border-radius: 50%" src="{{Storage::url('immagini/logo.png')}}" alt="">
        <h2>Samuele</h2>
        <h2>Lombardo</h2>
    </div>
    <div class="right-side">
        <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, quae.</p>
    </div>
    </div>
    <div class="card-customer flex-row ">
        <div class="left-side d-flex flex-column justify-content-center align-items-start border-end p-3">
        <img class="img-fluid" height="100" width="100" style="border-radius: 50%" src="{{Storage::url('immagini/logo.png')}}" alt="">
        <h2>Mattia</h2>
        <h2>Senatore</h2>
    </div>
    <div class="right-side">
        <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, quae.</p>
    </div>
    </div>
</div>
<div class="dots">
  </div>
</div>

    @endauth
    @guest
    <div class="d-flex justify-content-center flex-column align-items-center text-center" style="min-height: 90vh">
        <h1 class="fw-bold display-4">The Summer Collection</h1>
        <p class="fw-normal" style="color:var(--gray-text-color)">Introducing our latest collection. Shop the hottest trends in fashion.</p>
        <form action="{{ route('register') }}" method="GET" class="d-flex justify-content-center align-items-center">
            <input type="email" name="email" class="form-control" id="email" placeholder="Inserisci la tua email">
            <button type="submit" class="btn btn-dark m-2">Registrati</button>
        </form>
        <p class="description">Se vuoi ricevere aggiornamenti su nuove collezioni, <a href="{{route('register')}}">iscriviti.</a></p>
    </div>
    <div class="Featured-Products d-flex justify-content-center flex-column align-items-center text-center" style="padding-bottom: 5rem">
        <h1 class="fw-bold display-6" style="margin-top: 5rem">Featured Products</h1>
        <p class="fw-normal" style="color:#707070;">Check out our handpicked selection of must-have items.</p>
        <div class="cards m-1 d-flex flex-row gap-5">
        @foreach ($announcements as $announcement)
        <div class="card-product">
            <img class="img-fluid" height="250" width="250"  src="{{Storage::url('immagini/logo.png')}}" alt="">
            <h5>{{$announcement->title}}</h5>
            <p>{{$announcement->price}}</p>
        </div>
        @endforeach
        </div>
    </div>
    <div class="Testimonials d-flex justify-content-center flex-column align-items-center text-center">
        <h1 class="fw-bold display-6" style="margin-top: 5rem">Customer Testimonials</h1>
        <p class="fw-normal" style="color:var(--gray-text-color)">Hear what our customers have to say about our products.</p>
        <div class="slideshow d-flex flex-row">
        <div class="card-customer flex-row ">
            <div class="left-side d-flex flex-column justify-content-center align-items-start border-end p-3">
            <img class="img-fluid" height="100" width="100" style="border-radius: 50%" src="{{Storage::url('immagini/logo.png')}}" alt="">
            <h2>Fabiano</h2>
            <h2>Buscemi</h2>
        </div>
        <div class="right-side">
            <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, quae.</p>
        </div>
        </div>

    <div class="card-customer flex-row ">
        <div class="left-side d-flex flex-column justify-content-center align-items-start border-end p-3">
        <img class="img-fluid" height="100" width="100" style="border-radius: 50%" src="{{Storage::url('immagini/logo.png')}}" alt="">
        <h2>Gabriele</h2>
        <h2>Lucchetti</h2>
    </div>
    <div class="right-side">
        <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, quae.</p>
    </div>
    </div>
    <div class="card-customer flex-row ">
        <div class="left-side d-flex flex-column justify-content-center align-items-start border-end p-3">
        <img class="img-fluid" height="100" width="100" style="border-radius: 50%" src="{{Storage::url('immagini/logo.png')}}" alt="">
        <h2>Samuele</h2>
        <h2>Lombardo</h2>
    </div>
    <div class="right-side">
        <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, quae.</p>
    </div>
    </div>
    <div class="card-customer flex-row ">
        <div class="left-side d-flex flex-column justify-content-center align-items-start border-end p-3">
        <img class="img-fluid" height="100" width="100" style="border-radius: 50%" src="{{Storage::url('immagini/logo.png')}}" alt="">
        <h2>Mattia</h2>
        <h2>Senatore</h2>
    </div>
    <div class="right-side">
        <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, quae.</p>
    </div>
    </div>
</div>
<div class="dots">
  </div>
</div>

    @endguest
</x-layout>
