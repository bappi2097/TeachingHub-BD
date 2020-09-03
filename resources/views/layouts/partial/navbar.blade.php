<nav class="navbar navbar-expand-lg navbar-dark bg-black static-top">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img class="d-inline-block align-middle mr-2" src="assets/img/logo.png" alt="" width="200" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ url()->current()==route('home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item {{ url()->current()==route('privacy-policy') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('privacy-policy')}}">Privacy Policy</a>
                </li>
                <li class="nav-item {{ url()->current()==route('terms-and-condition') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('terms-and-condition')}}">Terms & Condition</a>
                </li>
                <li class="nav-item {{ url()->current()==route('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
