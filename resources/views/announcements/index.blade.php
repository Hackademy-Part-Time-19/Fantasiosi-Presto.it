<x-layout>
    <div class="container d-flex flex-column align-items-center mt-2"
        style="padding: 10px; height: 40vh; background-color: var(--primary-color); position:relative; border-radius: 10px; border: 2px solid var(--secondary-color); box-shadow: 0 0 0 5px rgb(247 127 0 / 10%);">
        <h1 class="text-center mt-5" style="color: var(--third-color);">{{__('uiAnnoun.title')}}</h1>
        <p style="margin-top: 0px; color: var(--paragraph-color)">{{__('uiAnnoun.main')}}</p>

        <form action="{{ route('announcements.search') }}" method="GET"
            class="d-flex justify-content-center align-items-center; mt-5" style="position:absolute; right:40%; top:40%">
            <svg viewBox="0 0 24 24" aria-hidden="true" class="icon">
                <g>
                    <path
                        d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                    </path>
                </g>
            </svg>
            <input class="input" type="search" placeholder="Search" name="searched" />
        </form>
    </div>
    <div class="line-div d-flex justify-content-center">
        <hr class="mt-5 mb-5" width="90%">
    </div>
    <div class="commands container mb-5"
        style="padding: 10px; background-color: var(--primary-color); border-radius: 50px; border: 2px solid var(--secondary-color); box-shadow: 0 0 0 5px rgb(247 127 0 / 10%);">
        <div class="dropdown show d-flex align-items-center justify-content-start" style="position: relative">
            <a class="btn dropdown-toggle p-0 px-2 text-center" style="; back-drop-filter: blur(10px);" type="button"
                href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                {{__('uiAnnoun.categories')}}
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="position: absolute; top: 100%">
                @foreach ($categories as $category)
                    <a class="dropdown-item" href="{{ route('category.show', compact('category')) }}"
                        style="text-transform: capitalize">{{ $category->name }}</a>
                @endforeach



            </div>
        </div>
    </div>

    <div class="container d-flex flex-column flex-wrap justify-content-center align-items-center gap-3" style="min-height:68vh; position:relative">
        @if (count($announcements) == 0)
            <h1 class="text-center mt-5 " style="color: var(--gray-text-color); font-weight:200;">{{__('uiAnnoun.none')}}
            </h1>
        @elseif (count($announcements) > 0)
        <h1>{{__("ui.allAnnouncements")}}</h1>
        <br>
        @endif
            <div class="d-flex flex-wrap justify-content-center gap-3">
        @forelse ($announcements as $announcement)

            <x-card :user="$announcement->user" :image="count($announcement->images) > 0 ?  Storage::url($announcement->images->first()->path) : ('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYscfUBUbqwGd_DHVhG-ZjCOD7MUpxp4uhNe7toUg4ug&s')" :title="$announcement->title" :body="$announcement->body" :price="$announcement->price" :category="$announcement->category"
                :created="$announcement->created_at">
                <a href="{{ route('announcement.show', compact('announcement')) }}" class="btn"
                    style="background-color: var(--secondary-color);">{{__('uiAnnoun.detail')}}</a>

            </x-card>
        @empty
            <div class="col-12" style="position: absolute;">
                <div>
                    <p class="text-center text-dark ">{{__('uiAnnoun.research')}}
                    </p>
                </div>
            </div>
        @endforelse
    </div>
        <div class="paginator mt-5">
            {{ $announcements->links() }}
        </div>
    </div>

</x-layout>
