<x-layout>
    <div class="container" style="min-height: 69vh; margin-top: 50px">
    <div>
        <h1 style="text-align:center">
            {{ $announcement_to_check ? 'ecco l\' annuncio da revisionare' : 'non ci sono annunci da revisonare ' }}
        </h1>
    </div>
    <div>
        @if ($announcement_to_check)
            <div class="container">
                <div class="row">
                    <div>
                        <div style="display: flex; justify-content:center; align-items:center">
                            <img src="https://www.autoscout24.it/cms-content-assets/7F5I3QOCDQxBsqzjXV8zRE-db03d2b06f4403420aec6d55f4382945-fiat-punto-back-1100.jpg"
                                alt="" width="300px" height="200px">
                        </div>
                        <h5 class="card-title" style="color: black;text-align:center">Titolo: {{ $announcement_to_check->title }}</h5>
                        <p class="card-description" style="color: black; margin-top:10px;text-align:center">Descrizione:
                            {{ $announcement_to_check->body }}</p>
                        <p class="card-date" style="color: black;text-align:center">Descrizione:
                            {{ $announcement_to_check->created_at->format('d/m/Y') }}</p>
                    </div>



                    <div style="display: flex; justify-content: space-between">
                        <button class="btn btn px-2 mx-2"
                            style="padding: 0.5px 0px 0.5px 0px; font-size: 20px;background-color:#fca311">
                            <span>Previous</span>
                        </button>
                        <div style="display: flex">
                            <form action="{{ route('revisor.accept', ['announcement' => $announcement_to_check]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn px-2 mx-2"
                                    style="padding: 0.5px 0px 0.5px 0px; font-size: 20px;background-color:#fca311">Accetta</button>

                            </form>


                            <form action="{{ route('revisor.reject', ['announcement' => $announcement_to_check]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn px-2 mx-2"
                                    style="padding: 0.5px 0px 0.5px 0px; font-size: 20px;background-color:#fca311">Rifiuta</button>

                            </form>
                        </div>
                        <button class="btn px-2 mx-2"
                            style="padding: 0.5px 0px 0.5px 0px; font-size: 20px ;background-color:#fca311">
                            <span>Next</span>
                        </button>
                    </div>

                    <div style="margin-top: 20px">


                    </div>


                </div>

            </div>
        @endif
    </div>
</div>
</x-layout>
