<div wire:poll>

    <div class="container" style="min-height: 69.6vh; margin-top: 50px;">

        <div>
            <h1 style="text-align:center" class="mb-5">
                {{ $announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisonare' }}
            </h1>
        </div>
        <div class="d-flex justify-content-center">

            @if ($announcement_to_check)
                <div class="container d-flex justify-content-center align-items-center flex-column" style="width: 50%;">
                    <div class="row justify-content-center"
                        style="width: 100%; background-color:var(--primary-color); padding: 10px; border-radius: 10px;">
                        <div style="border: 3px solid #fca21154; border-radius:10px; width:100%; display:flex; flex-direction:column; justify-content:center; align-items:center; margin-bottom: 10px"
                            id="showCarousel" data-bs-ride="carousel" class="carousel slide">
                            @if (count($announcement_to_check->images) > 0)
                                <div class="carousel-inner align-items-center justify-content-center">
                                    @foreach ($announcement_to_check->images as $image)
                                        <div class="carousel-item @if ($loop->first) active @endif">
                                            <img src="{{ $image->getFilePath(400, 300) }}"
                                                class="img-fluid p-3 rounded d-block" height="300px"
                                                style="object-fit: cover; min-height: 300px; width: 100%"
                                                alt="...">
                                        </div>
                                    @endforeach
                                @else
                                    <div class="carousel-item active" style="margin-right: 0%">
                                        <img src="{{ Storage::url('immagini/Nuovo_progetto_1.jpg') }}"
                                            class="img-fluid p-3 rounded d-block" height="300px"
                                            style="object-fit: cover; min-height: 300px; width: 100%" alt="...">
                                    </div>
                            @endif

                        </div>

                        <!-- Aggiungi i controlli manuali -->

                        <h1 class="card-title py-3" style="color:var(--third-color);text-align:center; fw-bold">
                            {{ $announcement_to_check->title }}</h1>

                        <hr style="width: 80%; border:1px solid var(--secondary-color); margin-bottom: 0px; opacity: 1">
                        <h6 class="card-title mt-4" style="color:var(--third-color);text-align:center;">
                            {{ $announcement_to_check->category->name }}</h6>
                        <p class="card-description"
                            style="color: var(--paragraph-color); font-size:12px; margin-top:10px; text-align:center">
                            {{ $announcement_to_check->body }}</p>
                        <p class="card-date" style="color: var(--paragraph-color); font-size:12px;text-align:center">
                            {{ $announcement_to_check->created_at->format('d/m/Y') }}</p>
                        <div style="display: flex; justify-content:center; align-items:center">
                            {{-- <button class="btn button-request px-2 mx-2"
                                                    style="padding: 0.5px 0px 0.5px 0px; font-size: 20px;background-color:#fca311">
                                                    <span>Previous</span>
                                                </button> --}}
                            <div class="d-flex align-items-center justify-content-center">
                                <form wire:submit="acceptAnnouncement" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn button-request px-2 mx-2"
                                        style="padding: 0.5px 0px 0.5px 0px; font-size: 20px;background-color:#fca311">Accetta</button>

                                </form>


                                <form wire:submit="rejectAnnouncement" method="POST">
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

        <div>
            <div class="row justify-content-center"
                style="width: 340px; background-color:var(--primary-color); padding: 10px; border-radius: 10px;height: 300px;margin-left: -320px">
                <div
                    style="min-height: 30px;border: 1px solid var(--primary-color);border: 3px solid #fca21154; border-radius:10px; width:100%; display:flex; flex-direction:column; justify-content:center; align-items:center; margin-bottom: 10px">
                    <h2 style="color:var(--third-color)">Revisione Immagini</h2>
                    <h4 style="color:var(--third-color)">Adulti: <span class="{{ $image->adult }}"></span></h4>
                    <h4 style="color:var(--third-color)">Satira: <span class="{{ $image->spoof }}"></span></h4>
                    <h4 style="color:var(--third-color)">Medicina: <span class="{{ $image->medical }}"></span></h4>
                    <h4 style="color:var(--third-color)">Violenza: <span class="{{ $image->violence }}"></span></h4>
                    <h4 style="color:var(--third-color)">Contenuto ammicante: <span class="{{ $image->racy }}"></span>
                    </h4>
                </div>
            </div>
            <div class="row justify-content-center"
                style="width: 340px; background-color:var(--primary-color); padding: 10px; border-radius: 10px;height: 260px;margin-left: -320px; margin-top: 10px">
                <div
                    style="min-height: 30px;border: 1px solid var(--primary-color);border: 3px solid #fca21154; border-radius:10px; width:100%; display:flex;flex-direction:column; justify-content:center; align-items:center; margin-bottom: 10px">
                    <h2 style="color:var(--third-color)">Tags</h2>
                    <div>
                        @if ($image->labels)
                            @foreach ($image->labels as $label)
                                <p class="d-inline" style="color:var(--third-color)">#{{ $label }}</p>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>


</div>


</div>
