<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <!-- Immagine centrata a sinistra -->
            <div class="col-lg-4">
                <img src="{{Storage::url('immagini/phone12.png')}}" alt="Descrizione dell'immagine" style="max-width: 100%; height: auto;">
            </div>

            <!-- Form centrato -->
            <div class="col-lg-4">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <h1>Register</h1>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" {{old('name')}}>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" {{old('email')}}>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>
                    <p>Hai un account? <a href="/login">Login</a></p>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
