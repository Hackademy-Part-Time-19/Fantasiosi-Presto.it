
    <form wire:submit.prevent="store" method="POST" enctype="multipart/form-data" class="mt-5 mx-auto col-lg-6">
        @method('PATCH')
        @csrf
        @if (session()->has('success'))
            <h2 class="alert alert-success">{{ session('success') }}</h2>
        @endif
        <h1>Crea il tuo articolo</h1>
        <div class="mb-3">
            <label for="title" class="form-label">Titolo dell'annuncio</label>
            <input type="text" name="title" wire:model="title" class="form-control" id="title"
                value="{{ old('title') }}">

            @error('title')
                <div><span class="text-danger">{{ $message }}</span></div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo dell'annuncio</label>
            <input type="text" name="body" wire:model="body" class="form-control" id="body"
                value="{{ old('body') }}">
            @error('body')
                <div><span class="text-danger">{{ $message }}</span></div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" name="price" wire:model="price" class="form-control" id="price"
                value="{{ old('price') }}">
            @error('price')
                <div><span class="text-danger">{{ $message }}</span></div>
            @enderror
        </div>
        <label for="categories">Categorie</label>
        <select class="form-select mb-3 text-capitalize" aria-label="Categorie" wire:model.defer="category">

           @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
           @endforeach
          </select>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>


