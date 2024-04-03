<x-layout>
    <div class="container" style="min-height: 69.6vh; height:69.6vh; max-height: 69.6vh; margin-top: 50px;">
    <div>
        <h1 style="text-align:center" class="mb-5">
            {{ $announcement_to_check ? 'Ecco l\'annuncio da revisionare' :  'Non ci sono annunci da revisonare' }}
        </h1>
    </div>
    <div>
        @if ($announcement_to_check)
            <div class="container d-flex justify-content-center">
                <div class="row justify-content-center" style="width: 50%; background-color:var(--primary-color); padding: 10px; border-radius: 10px">
                    <div style="border: 3px solid #fca21154; border-radius:10px; width:50%; display:flex; flex-direction:column; justify-content:center; align-items:center; margin-bottom: 10px">
                        <div style="display: flex; justify-content:center; align-items:center" class="mb-0">
                            <img src="https://www.autoscout24.it/cms-content-assets/7F5I3QOCDQxBsqzjXV8zRE-db03d2b06f4403420aec6d55f4382945-fiat-punto-back-1100.jpg"
                                alt="" width="300px" height="200px" class="img-fluid py-3" style="border-radius: 30px">
                        </div>
                        <h5 class="card-title" style="color:var(--third-color);text-align:center; fw-bold">{{ $announcement_to_check->title }}</h5>
                        <hr style="width: 80%; border:1px solid var(--secondary-color); margin-bottom: 0px; opacity: 1">
                        <p class="card-description" style="color: var(--paragraph-color); font-size:12px; margin-top:10px; text-align:center">
                            {{ $announcement_to_check->body }}</p>
                        <p class="card-date" style="color: var(--paragraph-color); font-size:12px;text-align:center">
                            {{ $announcement_to_check->created_at->format('d/m/Y') }}</p>
                    </div>



                    <div style="display: flex; justify-content:center; align-items:center">
                        {{--<button class="btn button-request px-2 mx-2"
                            style="padding: 0.5px 0px 0.5px 0px; font-size: 20px;background-color:#fca311">
                            <span>Previous</span>
                        </button>--}}
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
                        {{--<button class="btn button-request px-2 mx-2"
                            style="padding: 0.5px 0px 0.5px 0px; font-size: 20px ;background-color:#fca311">
                            <span>Next</span>
                        </button>--}}
                    </div>
                </div>

            </div>
        @endif
    </div>
</div>
</x-layout>
