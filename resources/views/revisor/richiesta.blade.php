<x-layout>
    <form method="POST" action="{{route('send.mail')}}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3 ">
            <label for="name" class="form-label">Testo della richiesta:</label>
            <input type="text" name="text" class="form-control" id="text">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
