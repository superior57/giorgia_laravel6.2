<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo.png')}}" alt="LOGO" class='White-logo---no-background'></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::segment(1) === 'home' ? 'active' : '' }}"><a href="home" class="nav-link">Home</a></li>
                <li class="nav-item {{ Request::segment(1) === 'vessel' ? 'active' : '' }}"><a href="vessel" class="nav-link">Vessel</a></li>
                <li class="nav-item {{ Request::segment(1) === 'experience' ? 'active' : '' }}"><a href="experience" class="nav-link">Experience</a></li>
                <li class="nav-item {{ Request::segment(1) === 'crew' ? 'active' : '' }}"><a href="crew" class="nav-link">Crew</a></li>
                <li class="nav-item {{ Request::segment(1) === 'booking' ? 'active' : '' }}"><a href="booking" class="nav-link">Enquire</a></li>
                <li class="nav-item {{ Request::segment(1) === 'contact' ? 'active' : '' }}"><a href="contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>