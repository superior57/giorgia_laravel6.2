<!-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo.png')}}" alt="LOGO" class='White-logo---no-background'></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::segment(1) === 'welcome' ? 'active' : '' }}"><a href="welcome" class="nav-link">Home</a></li>
                <li class="nav-item {{ Request::segment(1) === 'vessel' ? 'active' : '' }}"><a href="vessel" class="nav-link">Vessel</a></li>
                <li class="nav-item {{ Request::segment(1) === 'experience' ? 'active' : '' }}"><a href="experience" class="nav-link">Experience</a></li>
                <li class="nav-item {{ Request::segment(1) === 'crew' ? 'active' : '' }}"><a href="crew" class="nav-link">Crew</a></li>
                <li class="nav-item {{ Request::segment(1) === 'booking' ? 'active' : '' }}"><a href="booking" class="nav-link">Enquire</a></li>
                <li class="nav-item {{ Request::segment(1) === 'contact' ? 'active' : '' }}"><a href="contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav> -->


<div class="container">
			<div class="header-5">
				<span class="navbar-brand"><img src="img/logo/logo4.png" alt=""></span>
				<div id="mySidenav" class="sidenav bg-secondery">
						<a href="javascript:void(0)" class="closebtn text-primary" onclick="closeNav()">&times;</a>
					<nav class="navbar navbar-expand-lg navbar-light w-100">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> <span class="navbar-toggler-icon"></span> <span class="navbar-toggler-icon"></span> </button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
							<!-- <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="index.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
								<ul class="dropdown-menu"> 
									<li><a class="dropdown-item" href="index.html">Home One</a></li> 
									<li><a class="dropdown-item" href="index-2.html">Home Two</a></li>
									<li><a class="dropdown-item" href="index-3.html">Home Three</a></li>
									<li><a class="dropdown-item" href="index-4.html">Home Four</a></li>
									<li><a class="dropdown-item" href="index-5.html">Home Five</a></li>
								 </ul>
							</li> -->
                            <!-- <li class="nav-item"> <a class="nav-link" href="about.html">Home</a> </li> -->
                            <li class="nav-item {{ Request::segment(1) === 'welcome' ? 'active' : '' }}"><a href="welcome" class="nav-link">Home</a></li>
                            <li class="nav-item {{ Request::segment(1) === 'vessel' ? 'active' : '' }}"><a href="vessel" class="nav-link">Vessel</a></li>
                            <li class="nav-item {{ Request::segment(1) === 'experience' ? 'active' : '' }}"><a href="experience" class="nav-link">Experience</a></li>
                            <li class="nav-item {{ Request::segment(1) === 'crew' ? 'active' : '' }}"><a href="crew" class="nav-link">Crew</a></li>
                            <li class="nav-item {{ Request::segment(1) === 'booking' ? 'active' : '' }}"><a href="booking" class="nav-link">Enquire</a></li>
                            <li class="nav-item {{ Request::segment(1) === 'contact' ? 'active' : '' }}"><a href="contact" class="nav-link">Contact</a></li>
						  <!-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Pages </a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="service.html">Our Services</a></li>
								<li><a class="dropdown-item" href="popular-places.html">Popular Place</a></li>
								<li><a class="dropdown-item" href="popular-place-single.html">Popular Place Single</a></li>
								<li class="dropdown">
									<a class="dropdown-toggle dropdown-item" href="#">Gallery</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="galary.html">Gallery 1</a></li>
										<li><a class="dropdown-item" href="galary-2.html">Gallery 2</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle dropdown-item" href="#">Events</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="event.html">Event Grid</a></li>
										<li><a class="dropdown-item" href="event-list.html">Event List</a></li>
										<li><a class="dropdown-item" href="event-details.html">Event Details</a></li>
									</ul>
								</li>
								<li><a class="dropdown-item" href="offer.html">Offers</a></li>
								<li><a class="dropdown-item" href="offer-details.html">Offer Details</a></li>
								<li><a class="dropdown-item" href="booking-form.html">Booking Form</a></li> 
								<li><a class="dropdown-item" href="restaurant.html">Restaurant</a></li>
								<li><a class="dropdown-item" href="spa-beauty.html">Spa & Beauty</a></li> 
								<li><a class="dropdown-item" href="404.html">Error</a></li> 
							</ul>
						  </li>
						  <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="room-grid.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Rooms </a>
							<ul class="dropdown-menu"> 
								<li><a class="dropdown-item" href="room-grid.html">Rooms Grid 1</a></li> 
								<li><a class="dropdown-item" href="room-grid-2.html">Rooms Grid 2</a></li> 
								<li><a class="dropdown-item" href="room-list.html">Rooms List 1</a></li>
								<li><a class="dropdown-item" href="room-list-2.html">Rooms List 2</a></li>
								<li><a class="dropdown-item" href="room-details.html">Room Details</a></li>
							 </ul>
						  </li>
						  <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="blog-grid-classic.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> News </a>
							<ul class="dropdown-menu"> 
								<li><a class="dropdown-item" href="blog-grid-classic.html">Blog Grid Classic</a></li> 
								<li><a class="dropdown-item" href="blog-grid-modern.html">Blog Grid Modern</a></li> 
								<li><a class="dropdown-item" href="blog-list-classic.html">Blog List Classic</a></li> 
								<li><a class="dropdown-item" href="blog-list-modern.html">Blog List Modern</a></li> 
								<li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>
								<li><a class="dropdown-item" href="blog-details-classic.html">Blog Details Classic</a></li>
							 </ul>
						  </li>
						  <li class="nav-item"> <a class="nav-link" href="contact.html">Contact</a> </li> -->
						</ul>
						</div>
					</nav>
				</div>
				<div id="main">
				  <span class="text-primary" onclick="openNav()">&#9776;</span>
				</div>
			</div>
		</div>    