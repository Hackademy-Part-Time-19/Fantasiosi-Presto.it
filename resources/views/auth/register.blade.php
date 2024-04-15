
<x-layout>
    <div id="registrationBackground" class="background-color"
        style="position: absolute; z-index: 0; width: 100%; max-height: 50.8%; height: 50.8%; top: 40%; background-color: #2b375091">
    </div>
    <div id="registrationForm" class="container d-flex justify-content-center  align-items-center"
        style="min-height:78vh; position:relative; overflow:hidden">
        <div class="left-container" style="max-width:320px; width: 100%; max-height:610px; height: 610px; background-image: url('{{Storage::url('immagini/phone12.png')}}');" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
        </div>
        @if (session()->has('error'))
            <h2 class="alert alert-danger">{{ session('error') }}</h2>
        @endif
        <div class="form-container" style="height: 610px;" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
            <p class="title">Registrati</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group d-flex flex-column">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control w-100" id="name" {{ old('name') }}>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group d-flex flex-column">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control w-100" id="email"
                        value="{{ session('registration_email') }}" {{ old('email') }}>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group d-flex flex-column">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control w-100" id="password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group d-flex flex-column">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control w-100" id="password_confirmation">
                </div>
                <p>Hai un account? <a href="/login" style="text-decoration:underline var(--secondary-color); color:var(--secondary-color)">Login</a></p>
                <button type="submit" class="btn" style="background-color:var(--secondary-color); width: 100%;">Registrati</button>
            </form>
            <div class="social-message">
                <div class="line"></div>
                <p class="message">Login with social accounts</p>
                <div class="line"></div>
            </div>
            <div class="social-icons">

            </div>
        </div>
    </div>

</x-layout>
