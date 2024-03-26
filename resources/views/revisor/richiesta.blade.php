<x-layout>
    <h1 style="text-align: center; margin-top:25px">Invia la richiesta per lavorare con noi</h1>
    <form method="POST" action="{{ route('send.mail') }}" enctype="multipart/form-data">
        @csrf
        <div style="width:100%; height:70vh" class="d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div style="display: flex; justify-content:center; align-items:center; flex-direction: column">
                        <div style="display: flex; align-items:flex-start;width:46%">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input name="email" type="email" class="form-control" id="email" style="width: 600px">
                            </div>
                        </div>
                        <div style="display: flex; align-items:flex-start;width:46%">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input name="name" type="name" class="form-control" id="name" style="width: 320px">
                            </div>
                        </div>

                        <div style="display: flex; align-items:flex-start;width:46%">
                            <div class="mb-3">
                                <label for="file" class="form-label">Allega file</label>
                                <input type="file" class="form-control" id="file" name="file" style="width: 600px">
                            </div>
                        </div>


                        <div style="display: flex; justify-content:center; align-items:center;">
                            <div class="mb-3">
                                <label for="text" class="form-label">Parlaci di te</label>
                                <textarea name="text" type="text" class="form-control" id="text" style="width: 600px; height: 100px"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div style="display: flex; justify-content:center; align-items:center;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</x-layout>
