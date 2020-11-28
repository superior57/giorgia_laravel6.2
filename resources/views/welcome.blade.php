@extends('master')

@section('header')
@include('layouts.header')
@endsection

@section('content')


<div class="position-relative" style="height:100vh;margin:0 auto;margin-bottom: 0px;">
	<div id="slider5" class="owl-carousel slider-5" style="z-index: 1;">
		<!-- Slide 1-->
		<div class="item active"
			data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.1; parallaxevent:scroll; parallaxdurationmove:500;">
			<img width="1920" height="1080" src="{{asset('images/Giorgia - Rear Profile.jpg')}}" class="ls-bg" alt="" />
			<img width="300" height="300" class="" src="{{ asset('images/WhatsApp Image 2019-11-02 at 11.30.25 PM(2).jpeg') }}" alt="">
			<div class="overlay"></div>
		</div>

		<!-- Slide 2-->
		<div class="item"
			data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; deeplink:latest-works; kenburnszoom:out; kenburnsrotate:0; kenburnsscale:1.1; parallaxtype:3d; parallaxevent:scroll; parallaxdurationmove:500; parallaxrotate:4;">
			<img width="1920" height="1080" src="{{asset('images/Giorgia - Starboard.jpg')}}" class="ls-bg" alt="" />
			<div class="overlay"></div>
		</div>

		<!-- Slide 3-->
		<div class="item"
			data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; deeplink:contact-us; kenburnszoom:in; kenburnsscale:1.2; parallaxevent:scroll;">
			<img width="1920" height="1080" src="{{asset('images/[36m-Yacht-GIORGIA]-1618-72.jpg')}}" class="ls-bg" alt="" />
			<div class="overlay"></div>
		</div>

		<!-- Slide 4-->
		<div class="item"
			data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; deeplink:contact-us; kenburnszoom:in; kenburnsscale:1.2; parallaxevent:scroll;">
			<img width="1920" height="1080" src="{{asset('images/[36m-Yacht-GIORGIA]-1618-40.jpg')}}" class="ls-bg" alt="" />
			<div class="overlay"></div>
		</div>
	</div>
	<!-- <div class="angle-shade-2" ></div> -->
</div>
<!-- Slider End -->

<section class="full-row bg-gray" style="z-index: 99">
    <div class="container">
        <div class="row">
            <div>
                <div class="main-title-area">
                    <h2 class="title">About Giorgia </h2>
                </div>
                <p>Understated Elegance with a Contemporary Edge</p>
                <p>There is simply no better way to experience the sun and sea than the combination of luxury and
                    privacy offered by a bespoke vacation aboard Motor Yacht Giorgia. Embark on a hedonistic voyage
                    specially designed to give you and your guests a whole body, mind, and spirit Zen immersion on this
                    37-meter floating oasis. Far from the crowds and restrictions of other holiday options, our wellness
                    inspired yachting retreat features massage, yoga, nutritional health, and so much more. Your
                    yachting experience can be tailored to accommodate every need and desire, providing a sense of
                    freedom and flexibility that is truly unrivalled.</p>
            </div>
            <!-- <div class="col-md-7 col-lg-7" >
                <div class="video_about" style="position: absolute; top: -290px; right: -85px; z-index: 90; "> 
					<img src="images/WhatsApp Image 2019-11-02 at 11.30.32 PM(3).jpeg" alt="" style="border-top-left-radius: 60%;">
					<div class="position-absolute" style="
						top: 0; right: 0; left: 0; bottom: 0;
						background: url('{{asset('img/about/1.png')}}');
						background-repeat: no-repeat;
						background-size: cover;
						border-top-left-radius: 55%;
					">
					</div>
					<div class="xy-center"> <a class="video-popup" href="#" title="video popup">
							<div class="loader xy-center">
								<div class="loader-inner ball-scale-multiple">
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div> -->
							<!-- <span class="flaticon-play-button text-secondery xy-center"></span> -->
						<!-- </a> -->
						<!-- Use youtube or Vimeo video link in href, first open the video and just copy the link from url and past here -->
					<!-- </div>
				</div>
            </div> -->
        </div>
    </div>
</section>

<!-- Living Room 2 Section Start -->
<section class="full-row bg-white" style="z-index: 99;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title-area text-center">
                    <h2 class="title left-right-line mb-3">Interior</h2>
                </div>
                <!-- <span class="subtext text-secondary text-center mb-5 box-width">Across the street from the
                    ordinary</span> -->
            </div>
        </div>
        <div class="row" style="margin-bottom: 150px;">
            <div class="col-lg-5">
                <div class="img-slide">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img src="img/width/36.jpg" alt="Image not found!">
                            </div>
                            <div class="carousel-item"> <img src="img/width/39.jpg" alt="Image not found!"> </div>
                            <div class="carousel-item"> <img src="img/width/40.jpg" alt="Image not found!"> </div>
                        </div>
                        <div class="slider-arrow"> 
							<a class="carousel-control-prev" href="#carouselExampleIndicators"
								role="button" data-slide="prev"> <i class="fas fa-angle-double-left"></i> </a> 
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next"> <i class="fas fa-angle-double-right"></i> </a> 
						</div>
                    </div>
                </div>
                <div class="room-detail-info bg-gray">
                    <div class="float-left">
                        <h3>Interior</h3>
                    </div>
					<div class="float-right items-end">
						<a href="#" class="btn btn-primary-bg" role="button">
							View More
						</a>
					</div>
                </div>
            </div>
			<div class="col-lg-7">
				<div class="text-right py-4 px-4">
					<p>
					<h6>MY Giorgia can accommodate up to ten guests in five well-appointed staterooms, all featuring ensuite marble bathrooms. </h6>

					The master suite, found on the main deck, comes with a walk-through study and double sinks. Below deck you will find two VIP suites and twin Guest suites. 

					Classically designed interiors and minimalist dark wood bulkheads contribute to a contemporary ambience, while plush furnishings create a sense of warmth, elegance and comfort.
					</p>
				</div>
			</div>
        </div>
		<div class="row">
            <div class="col-lg-12">
                <div class="main-title-area text-center">
                    <h2 class="title left-right-line mb-3">Exterior</h2>
                </div>
                <!-- <span class="subtext text-secondary text-center mb-5 box-width">Across the street from the
                    ordinary</span> -->
            </div>
        </div>
		<div class="row">            
			<div class="col-lg-7">
				<div class="py-4 px-4">
					<p>
					<h6> Giorgia is a true masterpiece of high-end yachting design, featuring teak beams and elegant, no-fuss exteriors. Wherever you are going you can rest assured that you will arrive in style.</h6>

					A plethora of high-end entertainment and leisure facilities make Giorgia perfect for enjoying a family vacation, socializing with friends, or even more formal endeavours.  

					With a choice of three decks, all featuring their own dining space, you can savour your meals al fresco, sip cocktails under the starry sky at the sundeck bar, or indulge in strawberries and champagne while soaking in the spa pool.
					</p>
				</div>
			</div>
			<div class="col-lg-5">
                <div class="img-slide">
                    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img src="img/width/36.jpg" alt="Image not found!">
                            </div>
                            <div class="carousel-item"> <img src="img/width/39.jpg" alt="Image not found!"> </div>
                            <div class="carousel-item"> <img src="img/width/40.jpg" alt="Image not found!"> </div>
                        </div>
                        <div class="slider-arrow"> <a class="carousel-control-prev" href="#carouselExampleIndicators1"
                                role="button" data-slide="prev"> <i class="fas fa-angle-double-left"></i> </a> <a
                                class="carousel-control-next" href="#carouselExampleIndicators1" role="button"
                                data-slide="next"> <i class="fas fa-angle-double-right"></i> </a> 
						</div>
                    </div>
                </div>
                <div class="room-detail-info bg-gray">
                    <div class="float-right">
                        <h3>Exterior</h3>
                    </div>
					<div class="float-left items-end">
						<a href="#" class="btn btn-primary-bg" role="button">
							View More
						</a>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Living Room 2 Section End -->

<!-- Living Room 2 Section Start -->
<section class="full-row bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="main-title-area text-center">
					<h2 class="title left-right-line mb-3">Specifications</h2>
				</div>
				<!-- <span class="subtext text-secondary text-center mb-5 box-width">Across the street from the ordinary</span> </div> -->
		</div>

		<table class='specification'>
			<tr>
				<th>Length</th>
				<td>36.6 m (120’)</td>
			</tr>
			<tr>
				<th>Beam</th>
				<td>7.86 m (26’)</td>
			</tr>
			<tr>
				<th>Draft</th>
				<td>1.96 m (6’)</td>
			</tr>
			<tr>
				<th>Built</th>
				<td>2009</td>
			</tr>
			<tr>
				<th>Builder</th>
				<td>Azimut Benetti SpA</td>
			</tr>
			<tr>
				<th>Engines</th>
				<td>2 x Caterpillar C32 1550 bhp</td>
			</tr>
			<tr>
				<th>Flag</th>
				<td><img src="images/manflag.png" alt="" class='flag'></td>
			</tr>
			<tr>
				<th>Hull</th>
				<td>Glass-Reinforced Plastic</td>
			</tr>
			<tr>
				<th>Hull Type</th>
				<td>Displacement</td>
			</tr>
			<tr>
				<th>Cabins</th>
				<td>5</td>
			</tr>
			<tr>
				<th>Guests</th>
				<td>10</td>
			</tr>
			<tr>
				<th>Crew</th>
				<td>7</td>
			</tr>
			<tr>
				<th>Speed</th>
				<td>13 knots (cruising) 16 knots (max)</td>
			</tr>
			<tr>
				<th>Range</th>
				<td>3,500 mm</td>
			</tr>
		</table>
	</div>
</section>
<section class="full-row bg-white">
	<div class='container'>
		<div class="row">
			<div class="col-md-6 col-lg-4">
				<div class="room-thumb-grid-2 hover_zoom mb-4 bg-light">
					<div class="thumb-top overflow_hidden overflow-hidden" style="height: 250px;">
						<div class="room-size upper-place-bottom-right">12 X 15 Sqft</div>
						<img src="images/WhatsApp Image 2019-11-02 at 11.30.28 PM(1).jpeg" alt="Booking Room"> 
					</div>
					<div class="room-info p-4">
						<h6 class="title"><a class="text-secondery" href="#">Food</a></h6>
						<span>Sami duble bed 2 window & mountain view. 24 Hours room service.</span> <span class="facility-1 text-secondery">Free Wifi / Cable Tv / Breakfast</span> </div>
					<div class="bg-gray d-table px-4 py-3 w-100">
						<a href="#" class="btn btn-primary-bg float-left">View Details</a>
						<!-- <div class="h5 per-night text-secondery">$80 <small>/ Night</small> </div> -->
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="room-thumb-grid-2 hover_zoom mb-4 bg-light">
					<div class="thumb-top overflow_hidden overflow-hidden" style="height: 250px;">
						<div class="room-size upper-place-bottom-right">15 X 20 Sqft</div>
						<img src="images/GIORGIA-yacht--28.jpg" alt="Booking Room"> </div>
					<div class="room-info p-4">
						<h6 class="title"><a class="text-secondery" href="#">Toys</a></h6>
						<span>Sami duble bed and single veranda. A guest room and furniture.</span> <span class="facility-1 text-secondery">Free Wifi / Cable Tv / Breakfast</span> </div>
					<div class="bg-gray d-table px-4 py-3 w-100">
						<a href="#" class="btn btn-primary-bg float-left">View Details</a>
						<!-- <div class="h5 per-night text-secondery">$120 <small>/ Night</small> </div> -->
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="room-thumb-grid-2 hover_zoom mb-4 bg-light" >
					<div class="thumb-top overflow_hidden" style="height: 250px;">
						<div class="room-size upper-place-bottom-right">10 X 12 Sqft</div>
						<img src="images/WhatsApp Image 2019-11-02 at 11.30.33 PM(3).jpeg"> </div>
					<div class="room-info p-4">
						<h6 class="title"><a class="text-secondery" href="#">Locations</a></h6>
						<span>Single bed and single window. Include a sofa and other small furniture</span> <span class="facility-1 text-secondery">Free Wifi / Cable Tv / Breakfast</span> </div>
					<div class="bg-gray d-table px-4 py-3 w-100">
						<a href="#" class="btn btn-primary-bg float-left">View Details</a>
						<!-- <div class="h5 per-night text-secondery">$50 <small>/Night</small> </div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Living Room 2 Section End --> 

<!-- Blank Area Start -->
<div class="full-row overlay-secondery-opacity-65 bg-standby" style="background-image: url('images/WhatsApp Image 2019-11-02 at 11.30.31 PM(2).jpeg'); padding-bottom: 430px">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="main-title-area text-center text-white">
					<h2 class="title left-right-line mb-3 text-white">Gallery</h2>
				</div>
				<!-- <span class="subtext text-white text-center mb-5 box-width">Across the street from the ordinary</span>  -->
			</div>
		</div>
	</div>
</div>
<!-- Blank Area End --> 
        
<!-- Photo Gallery Section Start -->
<section class="full-row" style="margin-top: -500px;">
	<div class="container">
		<div class="row photo-gallery">
			<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="images/WhatsApp Image 2019-11-02 at 11.30.30 PM(2).jpeg" data-fancybox="gallery">
				<div class="hover_zoom"> <img src="images/WhatsApp Image 2019-11-02 at 11.30.30 PM(2).jpeg" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
				</a> </div>
			<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="images/WhatsApp Image 2019-11-02 at 11.30.30 PM(3).jpeg" data-fancybox="gallery">
				<div class="hover_zoom"> <img src="images/WhatsApp Image 2019-11-02 at 11.30.30 PM(3).jpeg" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
				</a> </div>
			<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="images/WhatsApp Image 2019-11-02 at 11.30.30 PM(4).jpeg" data-fancybox="gallery">
				<div class="hover_zoom"> <img src="images/WhatsApp Image 2019-11-02 at 11.30.30 PM(4).jpeg" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
				</a> </div>
			<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="images/WhatsApp Image 2019-11-02 at 11.30.30 PM(5).jpeg" data-fancybox="gallery">
				<div class="hover_zoom"> <img src="images/WhatsApp Image 2019-11-02 at 11.30.30 PM(5).jpeg" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
				</a> </div>
			<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="images/WhatsApp Image 2019-11-02 at 11.30.30 PM(6).jpeg" data-fancybox="gallery">
				<div class="hover_zoom"> <img src="images/WhatsApp Image 2019-11-02 at 11.30.30 PM(6).jpeg" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
				</a> </div>
			<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="images/WhatsApp Image 2019-11-02 at 11.30.26 PM(5).jpeg" data-fancybox="gallery">
				<div class="hover_zoom"> <img src="images/WhatsApp Image 2019-11-02 at 11.30.26 PM(5).jpeg" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
				</a> </div>
			<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="images/WhatsApp Image 2019-11-02 at 11.30.27 PM(1).jpeg" data-fancybox="gallery">
				<div class="hover_zoom"> <img src="images/WhatsApp Image 2019-11-02 at 11.30.27 PM(1).jpeg" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
				</a> </div>
			<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="images/WhatsApp Image 2019-11-02 at 11.30.27 PM.jpeg" data-fancybox="gallery">
				<div class="hover_zoom"> <img src="images/WhatsApp Image 2019-11-02 at 11.30.27 PM.jpeg" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
				</a> </div>
			<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="images/WhatsApp Image 2019-11-02 at 11.30.28 PM(5).jpeg" data-fancybox="gallery">
				<div class="hover_zoom"> <img src="images/WhatsApp Image 2019-11-02 at 11.30.28 PM(5).jpeg" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
				</a> </div>
		</div>
	</div>
</section>
<!-- Photo Gallery Section End --> 

@endsection
@section('footer')
@include('layouts.footer')
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
(function() {
    // Wrap every letter in a span
})()
</script>
@endpush