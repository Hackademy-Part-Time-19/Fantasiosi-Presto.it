<x-layout>
    @auth
        <div>
            <section style="border-bottom: 2px solid var(--secondary-color); background-color: var(--primary-color);">
                <div class="d-flex justify-content-center align-items-center" style="min-height:75vh;">
                    <div class="left-side d-flex justify-content-center align-items-center flex-column" style=" width: 50%;"
                        data-aos="zoom-in" data-aos-duration="1000">

                        <div class="button-launch container d-flex justify-content-start align-items-start flex-column">
                            <h1> {{ __('ui.welcome') }} </h1>
                            <button id="button-primary" class="button-primary">
                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
                                        fill="currentColor"></path>
                                </svg>
                                <span>{{ __('ui.makeAnnouncement') }}</span>
                            </button>
                        </div>
                    </div>

                    <div class="right-side d-flex justify-content-center align-items-center " style=" width:50%;">
                    </div>
                </div>
            </section>

            <main style="position: relative;">
                <div class="linear-gradient">
                </div>
                <div class="Featured-product" style="position: relative; z-index: 1;">
                    <div class="title-product" style="margin-bottom: 6rem" data-aos="fade-down" data-aos-duration="1000">
                        <h1 style="z-index: 1">Featured Product</h1>
                        <p style="z-index: 1">{{ __('ui.featured') }}</p>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center flex-nowrap">
                        @foreach ($announcements as $announcement)
                            <div class="cards m-1 d-flex  flex-row gap-5 "
                                style="z-index: 1; width: 100%; border: 2px solid var(--secondary-color);"
                                data-aos="fade-up" data-aos-duration="1000">

                                <div class="card-product d-flex flex-column text-center">
                                    {{--  <--! PHP ARTISAN QUEUE:WORK --> --}}
                                    @if (count($announcement->images) > 0)
                                        @foreach ($announcement->images as $image)
                                            <img class="img-fluid" height="400" width="300"
                                                src="{{ $image->getFilePath(400, 300) }}" alt="">
                                        @endforeach
                                    @else
                                        <img class="img-fluid" height="300" width="371"
                                            src="{{ Storage::url('immagini/Nuovoprogetto.png') }}" alt="">
                                    @endif
                                    <h5 style="width:100%; margin-top: 1rem">{{ Str::limit($announcement->title, 34) }}</h5>
                                    <p style="width: 100%; color:var(--paragraph-color)">
                                        {{ Str::limit($announcement->body, 100) }} <a
                                            href="{{ route('announcement.show', compact('announcement')) }}"
                                            style="color: var(--secondary-color); cursor:pointer">More</a></p>
                                    <p
                                        style="width: 100%; color:var(--fifth-color); font-weight: 600; text-align:center; font-size: 1.5rem; text-decoration:underline var(--secondary-color)">
                                        {{ $announcement->price }}<span style="color:var(--fifth-color)">€</span></p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="background-color"></div>
                </div>


                <div class="Testimonials d-flex justify-content-center flex-column align-items-center text-center"
                    style="z-index: 1">
                    <h1 style="margin-top: 5rem; z-index: 1; font-weight:700; font-size: 3rem; margin-top:13%;"
                        data-aos="fade-down" data-aos-duration="1000">Customer Testimonials</h1>
                    <p class="fw-normal"
                        style="color:var(--paragraph-color); z-index: 1; font-size:20px;width:35%; margin-top:0rem; margin-bottom: 5rem"
                        data-aos="fade-right" data-aos-duration="1000">{{ __('ui.testimonials') }}</p>
                    <div class="slideshow d-flex flex-row" style="width:25%; z-index: 1" data-aos="fade-down"
                        data-aos-duration="1000">
                        <div class="card-customer flex-row">
                            <div
                                class="left-side-customer d-flex flex-column justify-content-center align-items-center border-end p-3">
                                <img class="img-customer img-fluid" height="100" width="100"
                                    style="border-radius: 10px" src="{{ Storage::url('immagini/Nuovo_progetto_1.jpg') }}"
                                    alt="">
                                <h2>Fabiano</h2>
                                <h2>Buscemi</h2>
                            </div>
                            <div class="right-side-customer">
                                <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem
                                    ipsum dolor sit amet
                                    consectetur adipisicing elit. Iusto, quae.</p>
                            </div>
                        </div>

                        <div class="card-customer flex-row " style="z-index: 1">
                            <div
                                class="left-side-customer d-flex flex-column justify-content-center align-items-center border-end p-3">
                                <img class="img-customer img-fluid" height="150" width="150"
                                    style="border-radius: 10px" src="{{ Storage::url('immagini/Nuovo_progetto_1.jpg') }}"
                                    alt="">
                                <h2>Gabriele</h2>
                                <h2>Lucchetti</h2>
                            </div>
                            <div class="right-side-customer">
                                <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem
                                    ipsum dolor sit amet
                                    consectetur adipisicing elit. Iusto, quae.</p>
                            </div>
                        </div>
                        <div class="card-customer flex-row ">
                            <div
                                class="left-side-customer d-flex flex-column justify-content-center align-items-center border-end p-3">
                                <img class="img-customer img-fluid" height="150" width="150"
                                    style="border-radius: 10px" src="{{ Storage::url('immagini/Nuovo_progetto_1.jpg') }}"
                                    alt="">
                                <h2>Samuele</h2>
                                <h2>Lombardo</h2>
                            </div>
                            <div class="right-side-customer">
                                <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem
                                    ipsum dolor sit amet
                                    consectetur adipisicing elit. Iusto, quae.</p>
                            </div>
                        </div>
                        <div class="card-customer flex-row ">
                            <div
                                class="left-side-customer d-flex flex-column justify-content-center align-items-center border-end p-3">
                                <img class="img-customer img-fluid" height="150" width="150"
                                    style="border-radius: 10px" src="{{ Storage::url('immagini/Nuovo_progetto_1.jpg') }}"
                                    alt="">
                                <h2>Mattia</h2>
                                <h2>Senatore</h2>
                            </div>
                            <div class="right-side-customer">
                                <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem
                                    ipsum dolor sit amet
                                    consectetur adipisicing elit. Iusto, quae.</p>
                            </div>
                        </div>
                    </div>
                    <div class="dots">
                    </div>
                </div>

            </main>

        </div>
        @if (isset($authentication))
            <script>
                var isAuthenticated = {!! json_encode($authentication) !!};
                let button = document.getElementById("button-primary");

                                    button.addEventListener("click", () => {
                                        if (isAuthenticated) {
                                            window.location.href = "http://127.0.0.1:8000/announcements/create";
                                        }
                                    });
                                </script>
                            @endif
                    @endauth

    @guest
        <section style="border-bottom: 2px solid var(--secondary-color); background-color: var(--primary-color);">
            <div class="d-flex justify-content-center align-items-center" style="min-height:75vh;">
                <div class="left-side d-flex justify-content-center align-items-center flex-column" style=" width: 50%;"
                    data-aos="zoom-out-right" data-aos-duration="1000">

                    <div class="button-launch container d-flex justify-content-start align-items-start flex-column">
                        <h1>{{ __('ui.welcome') }}</h1>
                        <button id="button-primary" class="button-primary">
                            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
                                    fill="currentColor"></path>
                            </svg>
                            <span>{{ __('ui.login') }}</span>
                        </button>
                    </div>
                </div>

                <div class="right-side d-flex justify-content-center align-items-center " style=" width:50%;"
                    data-aos="zoom-out-left" data-aos-duration="1000">
                </div>
            </div>
        </section>

        <main style="position: relative;">
            <div class="linear-gradient">
            </div>
            <div class="Featured-product" style="position: relative; z-index: 1">
                <div class="title-product" style="margin-bottom: 6rem" data-aos="fade-down" data-aos-duration="1000">
                    <h1 style="z-index: 1">Featured Product</h1>
                    <p style="z-index: 1">{{ __('ui.featured') }}</p>
                </div>
                <div class="row">
                    @foreach ($announcements as $announcement)
                        <div class="cards m-1 d-flex  flex-row gap-5 "
                            style="z-index: 1; width: 100%; border: 2px solid var(--secondary-color);" data-aos="fade-up"
                            data-aos-duration="1000">

                            <div class="card-product d-flex flex-column text-center">
                                <img class="img-fluid" height="300" width="371"
                                    src="{{ Storage::url('immagini/Nuovoprogetto.png') }}" alt="">
                                <h5 style="width:100%; margin-top: 1rem">
                                    {{ Str::limit($announcement->title, 34) }}</h5>
                                <p style="width: 100%; color:var(--paragraph-color)">
                                    {{ Str::limit($announcement->body, 100) }} <a
                                        href="{{ route('announcement.show', compact('announcement')) }}"
                                        style="color: var(--secondary-color); cursor:pointer">More</a></p>
                                <p
                                    style="width: 100%; color:var(--fifth-color); font-weight: 600; text-align:center; font-size: 1.5rem; text-decoration:underline var(--secondary-color)">
                                    {{ $announcement->price }}<span style="color:var(--fifth-color)">€</span></p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="background-color"></div>
            </div>


            <div class="Testimonials d-flex justify-content-center flex-column align-items-center text-center"
                style="z-index: 1">
                <h1 style="margin-top: 5rem; z-index: 1; font-weight:700; font-size: 3rem; margin-top:13%;"
                    data-aos="fade-down" data-aos-duration="1000">Customer Testimonials</h1>
                <p class="fw-normal"
                    style="color:var(--paragraph-color); z-index: 1; font-size:20px;width:35%; margin-top:0rem; margin-bottom: 5rem"
                    data-aos="fade-right" data-aos-duration="1000">{{ __('ui.testimonials') }}</p>
                <div class="slideshow d-flex flex-row" style="width:25%; z-index: 1" data-aos="fade-down"
                    data-aos-duration="1000">
                    <div class="card-customer flex-row ">
                        <div
                            class="left-side-customer d-flex flex-column justify-content-center align-items-center border-end p-3">
                            <img class="img-customer img-fluid" height="100" width="100"
                                style="border-radius: 10px" src="{{ Storage::url('immagini/Nuovo_progetto_1.jpg') }}"
                                alt="">
                            <h2>Fabiano</h2>
                            <h2>Buscemi</h2>
                        </div>
                        <div class="right-side-customer">
                            <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem ipsum
                                dolor sit amet
                                consectetur adipisicing elit. Iusto, quae.</p>
                        </div>
                    </div>

                    <div class="card-customer flex-row ">
                        <div
                            class="left-side-customer d-flex flex-column justify-content-center align-items-center border-end p-3">
                            <img class="img-customer img-fluid" height="150" width="150"
                                style="border-radius: 10px" src="{{ Storage::url('immagini/Nuovo_progetto_1.jpg') }}"
                                alt="">
                            <h2>Gabriele</h2>
                            <h2>Lucchetti</h2>
                        </div>
                        <div class="right-side-customer">
                            <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem ipsum
                                dolor sit amet
                                consectetur adipisicing elit. Iusto, quae.</p>
                        </div>
                    </div>
                    <div class="card-customer flex-row ">
                        <div
                            class="left-side-customer d-flex flex-column justify-content-center align-items-center border-end p-3">
                            <img class="img-customer img-fluid" height="150" width="150"
                                style="border-radius: 10px" src="{{ Storage::url('immagini/Nuovo_progetto_1.jpg') }}"
                                alt="">
                            <h2>Samuele</h2>
                            <h2>Lombardo</h2>
                        </div>
                        <div class="right-side-customer">
                            <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem ipsum
                                dolor sit amet
                                consectetur adipisicing elit. Iusto, quae.</p>
                        </div>
                    </div>
                    <div class="card-customer flex-row ">
                        <div
                            class="left-side-customer d-flex flex-column justify-content-center align-items-center border-end p-3">
                            <img class="img-customer img-fluid" height="150" width="150"
                                style="border-radius: 10px" src="{{ Storage::url('immagini/Nuovo_progetto_1.jpg') }}"
                                alt="">
                            <h2>Mattia</h2>
                            <h2>Senatore</h2>
                        </div>
                        <div class="right-side-customer">
                            <p class="fw-normal p-3" style="color:var(--gray-text-color)">Lorem ipsum
                                dolor sit amet
                                consectetur adipisicing elit. Iusto, quae.</p>
                        </div>
                    </div>
                </div>
                <div class="dots">
                </div>
            </div>

        </main>
        <script>
            let button = document.getElementById("button-primary");


            button.addEventListener("click", () => {

                window.location.href = "http://127.0.0.1:8000/login";
            });
        </script>
    @endguest
</x-layout>
