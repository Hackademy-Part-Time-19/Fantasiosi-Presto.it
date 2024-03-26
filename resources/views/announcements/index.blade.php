<x-layout>
    <h1 class="text-center mt-5 mb-5">Annunci</h1>
 <div class="container d-flex flex-wrap justify-content-center gap-3" style="min-height:68vh; position:relative">
    @if(count($announcements) == 0)
        <h1 class="text-center mt-5 " style="color: var(--gray-text-color); font-weight:200;">Non ci sono annunci</h1>

    @endif

    @forelse ($announcements as $announcement)
        <x-card
        :user="$announcement->user"
        :title="$announcement->title"
        :body="$announcement->body"
        :price="$announcement->price"
        :category="$announcement->category"
        :created="$announcement->created_at">
        <a href="{{route('announcement.show',compact('announcement'))}}" class="btn btn-primary">Vai al dettaglio</a>

        </x-card>
    @empty
        <div class="col-12" style="position: absolute;">
            <div>

                <h1 class="text-center mt-5 " style="color: var(--gray-text-color); font-weight:200;">Non ci sono annunci per questa ricerca. Prova a cambiare parola</h1>

                <p class="text-center text-dark ">Non ci sono annunci per questa ricerca. Prova a cambiare parola</p>

            </div>
        </div>
    @endforelse
    {{$announcements->links()}}
</div>
</x-layout>
