<x-layout>
    <div>
        <h1>{{ $announcement_to_check ? 'ecco l\' annuncio da revisionare' : 'non ci sono annunci da revisonare ' }}
        </h1>
    </div>
    <div>
        @if ($announcement_to_check)
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <img src="" alt="">
                        </div>
                        <div>
                            <img src="" alt="">
                        </div>
                        <div>
                            <img src="" alt="">
                        </div>
                    </div>
                    <div>
                        <button>
                            <span>Previous</span>
                        </button>
                        <button>
                            <span>Next</span>
                        </button>
                    </div>
                    <h5>Titolo:{{$announcement_to_check->title}}</h5>
                    <p>Descrizione:{{$announcement_to_check->body}}</p>
                    <p>Descrizione:{{$announcement_to_check->created_at->format('d/m/Y')}}</p>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <form
                                action="{{ route('revisor.accept', ['announcement' => $announcement_to_check]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit">Accetta</button>

                            </form>
                        </div>
                        <div>
                            <form
                            action="{{ route('revisor.reject', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit">Rifiuta</button>

                        </form>
                        </div>


                    </div>
                </div>

            </div>
            @endif
    </div>
</x-layout>
