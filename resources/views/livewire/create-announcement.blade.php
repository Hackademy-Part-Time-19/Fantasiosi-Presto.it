<form wire:submit.prevent="store" method="POST" enctype="multipart/form-data" class="mt-5 mx-auto col-lg-6">
    @method('PATCH')
    @csrf
    <x-success />
    <h1>{{__('formAnnouncement.main')}}</h1>
    <div class="mb-3">
        <label for="title" class="form-label">{{__('formAnnouncement.title')}}</label>
        <input type="text" name="title" wire:model.live.debounce.400ms="title" class="form-control" id="title"
            value="{{ old('title') }}">

        @error('title')
            <div><span class="text-danger">{{ $message }}</span></div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">{{__('formAnnouncement.body')}}</label>
        <textarea type="text" name="body" wire:model.live.debounce.400ms="body" class="form-control" id="body"
            value="{{ old('body') }}"></textarea>

        @error('body')
            <div><span class="text-danger">{{ $message }}</span></div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">{{__('formAnnouncement.price')}}</label>
        <input type="text" name="price" wire:model.live.debounce.400ms="price" class="form-control" id="price"
            value="{{ old('price') }}">
        @error('price')
            <div><span class="text-danger">{{ $message }}</span></div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="categories" class="form-label">{{__('formAnnouncement.categories')}}</label>

        <select class="form-select mb-3 text-capitalize" aria-label="Categorie"
            wire:model.live.debounce.400ms="category">
            <option selected value="">{{__('formAnnouncement.selected')}}</option>
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
    <div class="col-12" >
        <div class="row" style="border: 2px solid var(--secondary-color); border-radius: 10px; padding: 10px;background: linear-gradient(317deg, rgba(252, 163, 17, 1) 0%, rgba(252, 163, 17, 1) 15%, rgba(20, 33, 61, 1) 51%, rgba(20, 33, 61, 1) 100%);">
            @foreach ($images as $key => $image)
                <div class="col-3" >
                    <img src="{{ $image->temporaryUrl() }}" class="img-fluid" style="height: 100px; width: 140px; max-height: 100px; max-width: 140px; margin-top: 10px" alt="">
                    <button type="button" wire:click="removeImage({{ $key }})" class="btn btn-danger w-100 mt-2" style="width: 100%">X</button>
</div>

            @endforeach
        </div>
    </div>

    @endif
    <div class="row align-items-center justify-content-center ">
        <button type="submit" class="btn btn-primary w-25 mt-2">{{__('formAnnouncement.save')}}</button>
    </div>
</form>
