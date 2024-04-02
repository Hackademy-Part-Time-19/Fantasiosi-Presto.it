<x-layout>
    <div class="Announcements container" style="min-height:72.8vh;">
    <h1 class="text-center mt-5 mb-2 ">Esplora {{$category->name}}</h1>
    <div class="return d-flex gap-3 mb-5 justify-content-center">
        <a class="btn btn-primary mt-2" href="{{ route('announcements.index') }}" style="cursor: pointer; z-index: 1; background-color: var(--primary-color); border-color: var(--fourth-color);">Torna indietro</a>
    </div>
    <div class="container d-flex justify-content-center gap-3">

    @forelse ($category->announcements as $announcement)
    <div class="d-flex flex-column justify-content-center align-items-center">

    <x-card
        :user="$announcement->user"
        :title="$announcement->title"
        :body="$announcement->body"
        :price="$announcement->price"
        :category="$announcement->category"
        :created="$announcement->created_at"
        >
        <a href="{{route('announcement.show',compact('announcement'))}}" class="btn" style="background-color: var(--secondary-color);">Vai al dettaglio</a>

        </x-card>
    </div>
    @empty
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-center mt-5" style="font-weight:200;">Non ci sono articoli in {{$category->name}}</h1>

    </div>
    @endforelse
</div>
</div>
</x-layout>
