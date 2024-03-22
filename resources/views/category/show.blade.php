<x-layout>
    <div class="Announcements container" style="min-height:80vh;">
    <h1 class="text-center mt-5 mb-5 ">Esplora {{$category->name}}</h1>
    <div class="container d-flex justify-content-center gap-3">
    @forelse ($category->announcements as $announcement)
         <x-card
        :user="$announcement->user"
        :title="$announcement->title"
        :body="$announcement->body"
        :price="$announcement->price"
        :category="$announcement->category"
        :created="$announcement->created_at"
        >

        </x-card>
    @empty
        <h1 class="text-center mt-5" style="color: var(--gray-text-color); font-weight:200;">Non ci sono articoli in {{$category->name}}</h1>
    @endforelse
</div>
</div>
</x-layout>
