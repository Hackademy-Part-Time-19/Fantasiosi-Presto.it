<x-layout>
    @auth
    <h2 >Ciao, {{auth()->user()->name}}, pubblica il tuo annuncio</h2>
    <a class="btn btn-primary" href="{{route('announcements.create')}}">Crea Annuncio</a>

    @foreach ($announcements as $announcement)
    
        
    @endforeach

    <!-- CREA COMPONENTE !-->
    <div class="d-flex justify-content-center flex-column align-items-center text-center" style="min-height: 90vh">
        <h1 class="fw-bold display-4">The Summer Collection</h1>
        <p class="fw-normal" style="color:var(--gray-text-color)">Introducing our latest collection. Shop the hottest trends in fashion.</p>
        <form action="" class="d-flex justify-content-center align-items-center">
            <input type="email" name="email" class="form-control" id="email" placeholder="Inserisci la tua email">
            <button type="submit" class="btn btn-dark m-2">Registrati</button>
        </form>
        <p class="description">Se vuoi ricevere aggiornamenti su nuove collezioni, <a href="{{route('register')}}">iscriviti.</a></p>
    </div>
    <div class="Featured-Products d-flex justify-content-center flex-column align-items-center text-center" style="padding-bottom: 5rem">
        <h1 class="fw-bold display-6" style="margin-top: 5rem">Featured Products</h1>
        <p class="fw-normal" style="color:#707070;">Check out our handpicked selection of must-have items.</p>
        <div class="cards m-1 d-flex flex-row gap-5">
            <div class="card-1">
                <img class="img-fluid" height="250" width="250" style="border: 1px solid red" src="{{Storage::url('immagini/logo.png')}}" alt="">
                <h5>Beach hat</h5>
                <p>23.99€</p>
            </div>
            <div class="card-2">
                <img class="img-fluid" height="250" width="250" style="border: 1px solid red" src="{{Storage::url('immagini/logo.png')}}" alt="">
                <h5>Beach hat</h5>
                <p>23.99€</p>
            </div>
            <div class="card-3">
                <img class="img-fluid" height="250" width="250" style="border: 1px solid red" src="{{Storage::url('immagini/logo.png')}}" alt="">
                <h5>Beach hat</h5>
                <p>23.99€</p>
            </div>
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
    <footer class="footer mt-5 border-top p-3 d-flex align-items-center" style="justify-content: space-between">
        <p style="color:var(--gray-text-color)">© 2022. Presto.it. All rights reserved.</p>
        <ul class="d-flex align-items-center">
            <li style="list-style: none; margin-right: 1rem">Terms of Service</li>
            <li style="list-style: none">Privacy</li>
        </ul>
    </footer>
    @endauth
    @guest
    <div class="d-flex justify-content-center flex-column align-items-center text-center" style="min-height: 90vh">
        <h1 class="fw-bold display-4">The Summer Collection</h1>
        <p class="fw-normal" style="color:var(--gray-text-color)">Introducing our latest collection. Shop the hottest trends in fashion.</p>
        <form action="" class="d-flex justify-content-center align-items-center">
            <input type="email" name="email" class="form-control" id="email" placeholder="Inserisci la tua email">
            <button type="submit" class="btn btn-dark m-2">Registrati</button>
        </form>
        <p class="description">Se vuoi ricevere aggiornamenti su nuove collezioni, <a href="{{route('register')}}">iscriviti.</a></p>
    </div>
    <div class="Featured-Products d-flex justify-content-center flex-column align-items-center text-center" style="padding-bottom: 5rem">
        <h1 class="fw-bold display-6" style="margin-top: 5rem">Featured Products</h1>
        <p class="fw-normal" style="color:#707070;">Check out our handpicked selection of must-have items.</p>
        <div class="cards m-1 d-flex flex-row gap-5">
            <div class="card-1">
                <img class="img-fluid" height="250" width="250" style="border: 1px solid red" src="{{Storage::url('immagini/logo.png')}}" alt="">
                <h5>Beach hat</h5>
                <p>23.99€</p>
            </div>
            <div class="card-2">
                <img class="img-fluid" height="250" width="250" style="border: 1px solid red" src="{{Storage::url('immagini/logo.png')}}" alt="">
                <h5>Beach hat</h5>
                <p>23.99€</p>
            </div>
            <div class="card-3">
                <img class="img-fluid" height="250" width="250" style="border: 1px solid red" src="{{Storage::url('immagini/logo.png')}}" alt="">
                <h5>Beach hat</h5>
                <p>23.99€</p>
            </div>
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
    <footer class="footer mt-5 border-top p-3 d-flex align-items-center" style="justify-content: space-between">
        <p style="color:var(--gray-text-color)">© 2022. Presto.it. All rights reserved.</p>
        <ul class="d-flex align-items-center">
            <li style="list-style: none; margin-right: 1rem">Terms of Service</li>
            <li style="list-style: none">Privacy</li>
        </ul>
    </footer>
    @endguest
</x-layout>
