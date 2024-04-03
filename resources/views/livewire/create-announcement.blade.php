<form wire:submit.prevent="store" method="POST" enctype="multipart/form-data" class="mt-5 mx-auto col-lg-6">
    @method('PATCH')
    @csrf
    <x-success />
    <h1>Crea il tuo articolo</h1>
    <div class="mb-3">
        <label for="title" class="form-label">Titolo dell'annuncio</label>
        <input type="text" name="title" wire:model.live.debounce.400ms="title" class="form-control" id="title"
            value="{{ old('title') }}">

        @error('title')
            <div><span class="text-danger">{{ $message }}</span></div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Corpo dell'annuncio</label>
        <textarea type="text" name="body" wire:model.live.debounce.400ms="body" class="form-control" id="body"
            value="{{ old('body') }}"></textarea>

        @error('body')
            <div><span class="text-danger">{{ $message }}</span></div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" name="price" wire:model.live.debounce.400ms="price" class="form-control" id="price"
            value="{{ old('price') }}">
        @error('price')
            <div><span class="text-danger">{{ $message }}</span></div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="categories" class="form-label">Categorie</label>

        <select class="form-select mb-3 text-capitalize" aria-label="Categorie"
            wire:model.live.debounce.400ms="category">
            <option selected value="">--Seleziona categoria--</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach

        </select>
        @error('category')
            <div><span class="text-danger">{{ $message }}</span></div>
        @enderror

    </div>
    <div class="mb-3">
        <input type="file" wire:model="temporary_images" multiple name="images" class="form-control shadow @error('temporary_images') is-invalid @enderror" id="images">
        @error('temporary_images')
            <div><span class="text-danger">{{ $message }}</span></div>
        @enderror
    </div>
   
    
    @if (!empty($images))
    <div class="col-12">
        <div class="row">
            @foreach ($images as $key => $image)
                <div class="col-3">
                    <img src="{{ $image->temporaryUrl() }}" alt="">
                    <button type="button" wire:click="removeImage({{ $key }})" class="btn btn-danger w-100 mt-2">X</button>
                </div>
            @endforeach
        </div>
    </div>
        
    @endif 
    <div class="row align-items-center justify-content-center">
        <button type="submit" class="btn btn-primary w-25">Salva</button>
    </div>
</form>
