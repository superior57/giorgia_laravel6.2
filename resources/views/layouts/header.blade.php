<!-- Header Section Start -->
<header class="full-row header-1 nav-on-banner" id="header">
    <div class="top-header icon-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="float-left"><i class="fas fa-map-marker-alt"></i><span class="pl-2">1955 Owagner Lane Seattle, WA 98101, USA</span> </div>
                </div>
                <div class="col-md-6">
                    <ul class="float-right">
                        <li><i class="fas fa-envelope"></i><span class="pl-2">support@info.com</span></li>
                        <li><i class="fas fa-phone"></i><span class="pl-2">+1-206-335-0433</span></li>
                    </ul>
                    <!-- <form class="language" action="#" method="post">
                        <select class="selectpicker">
                            <option value="en">ENG</option>
                            <option value="fr">FRA</option>
                            <option value="bn">BAN</option>
                        </select>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light w-100"> <a class="navbar-brand" href="/"><img class="nav-logo" src="img/logo/logo4.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> <span class="navbar-toggler-icon"></span> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item {{ Request::segment(1) === 'welcome' ? 'active' : '' }}"><a href="welcome" class="nav-link">Home</a></li>
                            <li class="nav-item {{ Request::segment(1) === 'vessel' ? 'active' : '' }}"><a href="vessel" class="nav-link">Vessel</a></li>
                            <li class="nav-item {{ Request::segment(1) === 'experience' ? 'active' : '' }}"><a href="experience" class="nav-link">Experience</a></li>
                            <li class="nav-item {{ Request::segment(1) === 'crew' ? 'active' : '' }}"><a href="crew" class="nav-link">Crew</a></li>
                            <li class="nav-item {{ Request::segment(1) === 'booking' ? 'active' : '' }}"><a href="booking" class="nav-link">Enquire</a></li>
                            <li class="nav-item {{ Request::segment(1) === 'contact' ? 'active' : '' }}"><a href="contact" class="nav-link">Contact</a></li>
                        </ul>
                        <!-- <a class="btn btn-primary-bg ml-2" href="booking-form.html">Booking Now</a>  -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End --> 