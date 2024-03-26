<x-layout>
    <h1 style="text-align: center; margin-top:25px">Invia la richiesta per lavorare con noi</h1>
    <form method="POST" action="{{ route('send.mail') }}" enctype="multipart/form-data">
        @csrf
        <div style="width:100%; height:64vh" class="d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div style="display: flex; justify-content:center; align-items:center; gap: 20px;">
                        <div style="">
                            <div class="mb-3 text-center">
                                <label for="email" class="form-label">Indirizzo email</label>
                                <input name="email"  type="email" class="form-control" id="email" style="width: 600px" placeholder="Inserisci email..">

                            </div>
                        </div>
                        <div style="">
                            <div class="mb-3 text-center">
                                <label for="name" class="form-label">Nome</label>
                                <input name="name"  type="name" class="form-control" id="name" style="width: 320px" placeholder="Inserisci nome..">
                            </div>
                        </div>

                        <div style="">
                            <div class="mb-3 text-center">
                                <label for="file" class="form-label">Inserisci CV</label>
                                <input name="file"  type="file" class="form-control" id="file" style="width: 320px" placeholder="Inserisci nome..">
                            </div>
                        </div>

                    </div>
                        <div style="display: flex; justify-content:center; align-items:center;">
                            <div class="mb-3 text-center">
                                <label for="text" class="form-label">Parla un po' di te!</label>
                                <textarea name="text"  type="text" class="form-control" id="text" style="width: 650px; height: 100px" placeholder="Parlaci un po' di te.."></textarea>
                            </div>
                        </div>



                </div>
                <div style="display: flex; justify-content:center; align-items:center;">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </div>
        </div>
    </form>
</x-layout>
