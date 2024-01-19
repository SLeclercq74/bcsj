<div class="navbar menu d-flex justify-content-end align-content-center">
    <div class="collapse d-flex navbar-container-item justify-content-end align-content-center" id="navbarNav">
        <div class="p-2 item-container"><a class="item" href="{{ route('home') }}"  id="home">ACCUEIL</a></div>
        <div class="p-2 item-container"><a class="item" href="{{ route('club') }}" id="club">CLUB</a></div>
        <div class="p-2 item-container"><a class="item" href="{{ route('subscription') }}"" id="subscription">INSCRIPTION</a></div>
        <div class="p-2 item-container"><a class="item" href="{{ route('results') }}" id="results">RESULTATS</a></div>
        <div class="p-2 item-container"><a class="item" href="{{ route('training') }}" id="training">ENTRAINEMENTS</a></div>
        <div class="p-2 item-container"><a class="item" href="{{ route('charte') }}" id="charte">CHARTE</a></div>
        {{-- <div class="p-2 item-container"><a class="item" href="photos?folder=40 ans" id="photo">PHOTOS</a></div> --}}
        <div class="p-2 item-container"><a class="item" href="{{ route('contact') }}" id="contact">CONTACT</a></div>
    </div>
</div>
