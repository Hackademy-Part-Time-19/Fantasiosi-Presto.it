<x-layout>
    <h1>Esplora {{$category->name}}</h1>
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
        <h1>Non ci sono articoli in {{$category->name}}</h1>
    @endforelse
    
</x-layout>