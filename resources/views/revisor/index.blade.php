<x-layout>
    <div class="container" style="min-height: 69.6vh; height:69.6vh;  margin-top: 50px;">
        <div>
            <h1 style="text-align:center" class="mb-5">
                {{ $announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisonare' }}
            </h1>
        </div>
        <div>
            @if ($announcement_to_check)
                <div class="container d-flex justify-content-center align-items-center flex-column">
                    <div class="row justify-content-center" style="width: 50%; background-color:var(--primary-color); padding: 10px; border-radius: 10px">
                        <div style="border: 3px solid #fca21154; border-radius:10px; width:100%; display:flex; flex-direction:column; justify-content:center; align-items:center; margin-bottom: 10px" id="showCarousel" data-bs-ride="carousel" class="carousel slide">
                            @if ($announcement_to_check->images)

                            
                                <div class="carousel-inner align-items-center">
                                    @foreach ($announcement_to_check->images as $image)
                                        <div class="carousel-item @if ($loop->first) active @endif">
                                            <img src="{{ Storage::url($image->path) }}" class="img-fluid p-3 rounded d-block"  height="300px" style="object-fit: cover; min-height: 300px; width: 100%" alt="...">
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Aggiungi i controlli manuali -->
                                <a class="carousel-control-prev" href="#showCarousel" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#showCarousel" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            @endif
                        </div>

                            <h1 class="card-title py-3" style="color:var(--third-color);text-align:center; fw-bold">
                                {{ $announcement_to_check->title }}</h1>

                            <hr
                                style="width: 80%; border:1px solid var(--secondary-color); margin-bottom: 0px; opacity: 1">
                            <h6 class="card-title mt-4" style="color:var(--third-color);text-align:center;">
                                {{ $announcement_to_check->category->name }}</h6>
                            <p class="card-description"
                                style="color: var(--paragraph-color); font-size:12px; margin-top:10px; text-align:center">
                                {{ $announcement_to_check->body }}</p>
                            <p class="card-date"
                                style="color: var(--paragraph-color); font-size:12px;text-align:center">
                                {{ $announcement_to_check->created_at->format('d/m/Y') }}</p>
                                <div style="display: flex; justify-content:center; align-items:center">
                                    {{-- <button class="btn button-request px-2 mx-2"
                                                style="padding: 0.5px 0px 0.5px 0px; font-size: 20px;background-color:#fca311">
                                                <span>Previous</span>
                                            </button> --}}co
                                    <div class="d-flex align-items-center justify-content-center">
                                        <form action="{{ route('revisor.accept', ['announcement' => $announcement_to_check]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn button-request px-2 mx-2"
                                                style="padding: 0.5px 0px 0.5px 0px; font-size: 20px;background-color:#fca311">Accetta</button>

                                        </form>


                                        <form action="{{ route('revisor.reject', ['announcement' => $announcement_to_check]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn button-request px-2 mx-2"
                                                style="padding: 0.5px 0px 0.5px 0px; font-size: 20px;background-color:#fca311">Rifiuta</button>

                                        </form>
                                    </div>
                        </div>






                {{-- <button class="btn button-request px-2 mx-2"
                            style="padding: 0.5px 0px 0.5px 0px; font-size: 20px ;background-color:#fca311">
                            <span>Next</span>
                        </button> --}}
            </div>
        </div>

    </div>
@endif
    </div>
    </div>
</x-layout>
