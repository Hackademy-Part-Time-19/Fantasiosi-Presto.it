<x-layout>
    <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="form-group ">
            
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name ="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Email">
            
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>
       
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</x-layout>
