<footer class="footer mt-5 py-3 px-2" style="z-index: 999999">
    <div class="left-side-footer">
        <div class="left d-flex justify-content-center align-items-center">
            <h1>Presto.it</h1>
        </div>
        <div class="right d-flex justify-content-center align-items-center ">
            <ul>
                <li><a href="">Privacy</a></li>
                <li><a href="">Cookie policy</a></li>
            </ul>
        </div>
    </div>
    <div class="right-side-footer">
        <div class="d-flex flex-column justify-content-center align-items-center">
        <p>Copyright © 2022. All rights reserved.</p>
        @auth
        <ul class="d-flex align-items-center">
                <li style="list-style: none">
                    <a href="{{ route('revisor.form') }}" class="nav-link">Lavora con noi</a>
                </li>
        </ul>
        @endauth

    </div>
    </div>

</footer>
