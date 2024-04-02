<x-layout>
    <div class="background-color" style="position: absolute; z-index: 0; width: 100%; max-height: 41.8vh; height: 41.8vh; top: 49%; background-color: #2b375091"></div>
    <div class="container d-flex justify-content-center  align-items-center" style="min-height:78vh; position:relative; overflow:hidden">
        <div class="left-container" style="max-width:320px; width: 100%; max-height:426px; height: 426px;" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
        </div>
        @if (session()->has('error'))
        <h2 class="alert alert-danger">{{session('error')}}</h2>
        @endif
        <div class="form-container" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" >
            <p class="title">Login</p>
        <form method="POST" action="{{route('login')}}" >
        @csrf
        <div class="input-group">
			<label for="email">Email</label>
			<input type="text" name="email" id="email" placeholder="Inserisci la tua email">
		</div>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
		<div class="input-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" placeholder="Inserisci la tua password">
			<div class="forgot">
				<a rel="noopener noreferrer" href="#">Forgot Password ?</a>
			</div>
		</div>
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
		<button class="sign">Sign in</button>
	</form>
	<div class="social-message">
		<div class="line"></div>
		<p class="message">Login with social accounts</p>
		<div class="line"></div>
	</div>
	<div class="social-icons">

	</div>
	<p class="signup">Don't have an account?
		<a rel="noopener noreferrer" href="{{route('register')}}" class="">Sign up</a>
	</p>
</div>
</div>

</x-layout>
