<x-layout>
    @foreach ($announcements as $announcement)
        <x-card
        :user="$announcement->user"
        :title="$announcement->title"
        :body="$announcement->body"
        :price="$announcement->price"
        :category="$announcement->category"
        :created="$announcement->created_at">
        <a href="{{route('announcement.show',compact('announcement'))}}" class="btn btn-primary">Vai al dettaglio</a>

        </x-card>
    @endforeach
</x-layout>