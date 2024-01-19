        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top bg-primary">
            <div class="container-fluid">
                <div class="row row-menu" style="width:100%">
                    <div class="col">
                        <a class="brand d-lg-none d-md-block" href="index.php">
                        <img src="/assets/brand.png"></a>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <button class="navbar-toggler custom-toggler" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button></div>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item" id="home">
                            <a class="nav-link" href="{{ route('home') }}">ACCUEIL</a>
                        </li>
                        <li class="nav-item" id="club">
                            <a class="nav-link" href="{{ route('club') }}">CLUB</a>
                        </li>
                        <li class="nav-item" id="subscription">
                            <a class="nav-link" href="{{ route('subscription') }}">INSCRIPTION</a>
                        </li>
                        {{-- <li class="nav-item" id="teams">
                            <a class="nav-link" href="{{ route('teams') }}">EQUIPES</a>
                        </li> --}}
                        <li class="nav-item" id="results">
                            <a class="nav-link" href="{{ route('results') }}">RESULTATS</a>
                        </li>
                        <li class="nav-item" id="training">
                            <a class="nav-link" href="{{ route('training') }}">ENTRAINEMENTS</a>
                        </li>
                        <li class="nav-item" id="training-room">
                            <a class="nav-link" href="{{ route('charte') }}">CHARTE</a>
                        </li>
                        {{-- <li class="nav-item" id="photo">
                            <a class="nav-link" href="photos?folder=40 ans">PHOTOS</a>
                        </li> --}}
                        <li class="nav-item" id="contact">
                            <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
                        </li>

                </div>
            </div>
        </nav>
