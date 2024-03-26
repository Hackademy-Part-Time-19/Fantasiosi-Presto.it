<x-layout>

    <div class="container d-flex justify-content-center flex-column align-items-center" style="min-height:75vh">
        @if (session()->has('error'))
        <h2 class="alert alert-danger">{{session('error')}}</h2>
        @endif
        <h1>Login</h1>
        <form method="POST" action="{{route('login')}}" >
        @csrf
        <div class="form-group mb-3" >
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name ="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Email">
        </div>

        <div class="form-group ">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-dark mt-3 w-100">Login</button>
    </form>
</div>
</x-layout>
