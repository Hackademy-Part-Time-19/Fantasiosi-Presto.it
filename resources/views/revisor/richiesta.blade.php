<x-layout>
    <div class="container" style="min-height: 69.6vh;height:69.6vh; margin-top: 50px; z-index: 1; position: relative">
    <h1 style="text-align: center; margin-top:25px;">Invia la richiesta per lavorare con noi</h1>

    <form method="POST" action="{{ route('send.mail') }}" enctype="multipart/form-data" style="z-index: 1">
        @csrf
        <div style="width:100%; height:64vh" class="d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div style="display: flex; justify-content:center; align-items:center; gap: 20px;z-index: 1">
                        <div style="">
                            <div class="mb-3 text-center" style="z-index: 1">
                                <label for="email" class="form-label fw-bold">Indirizzo email</label>
                                <input name="email"  type="email" class="form-control" id="email" style="width: 320px" placeholder="Inserisci email..">

                            </div>
                        </div>
                        <div style="">
                            <div class="mb-3 text-center" style="z-index: 1">
                                <label for="name" class="form-label fw-bold">Nome</label>
                                <input name="name"  type="name" class="form-control" id="name" style="width: 320px" placeholder="Inserisci nome..">
                            </div>
                        </div>



                    </div>

                        <div style="display: flex; flex-direction:column; justify-content:center; align-items:center;">
                            <div style="z-index: 1">
                                <div class="mb-3 text-center" style="z-index: 1">
                                    <label for="file" class="form-label fw-bold">Inserisci CV</label>
                                    <input name="file"  type="file" class="form-control" id="file" style="width: 320px" placeholder="Inserisci nome..">
                                </div>
                            </div>
                            <div class="mb-3 text-center" style="z-index: 1">
                                <label for="text" class="form-label fw-bold">Parla un po' di te!</label>
                                <textarea name="text"  type="text" class="form-control" id="text" style="width: 650px; height: 100px" placeholder="Parlaci un po' di te.."></textarea>
                            </div>
                        </div>



                </div>
                <div style="display: flex; justify-content:center; align-items:center;">
                    <button type="submit" class="btn btn button-request" style="z-index: 1; background-color:#fca311">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="background-color" style="z-index: 0; position: absolute; width: 100%; height: 50vh; top:25%; background-color: #2b375091"></div>
</x-layout>
