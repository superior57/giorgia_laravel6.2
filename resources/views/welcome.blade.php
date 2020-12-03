@extends('master')

@section('header')
@include('layouts.header')
@endsection

@section('content')

<div class="position-relative sidernw" style="height:100vh;margin:0 auto;margin-bottom: 0px;">
			
           <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="{{asset('images/backgrounds/1.jpg')}}" alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line"></div>
                                <h2>Build your Next Holiday Trip with Us</h2>
                                <h1><span>Create</span><span class="font-weight-bold"> Your Tour</span></h1>
                                <h4><a href="{{ url('/contact') }}" class="slide-button text-white">Get in touch</a></h4>
                            </div>
                        </div>
                     </div>
                </div>                    
                <div class="item">
                    <img src="{{asset('images/backgrounds/2.jpg')}}" alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line animated bounceInLeft"></div>
                                <h2>Enjoy the Best Destinations with Our Travel Agency</h2>
                                <h1><span>Explore</span><span class="font-weight-bold"> The World</span></h1>
                                <h4><a href="{{ url('/contact') }}" class="slide-button text-white">Get in touch</a></h4>
                            </div>
                        </div>
                     </div>
                </div>    
				<div class="item">
                    <img src="{{asset('images/exterior/3.jpg')}}" alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line"></div>
                                <h2>Enjoy your refreshment in our fresh exterior</h2>
                                <h1><span>Create</span><span class="font-weight-bold"> Your Tour</span></h1>
                                <h4><a href="{{ url('/booking') }}" class="slide-button text-white">Book now</a></h4>
                            </div>
                        </div>
                     </div>
                </div>     
				<div class="item">
                    <img src="{{asset('images/interior/2.jpg')}}" alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line animated bounceInLeft"></div>
                                <h2>Very gentle and friendly interior structure</h2>
                                <h1><span>Explore</span><span class="font-weight-bold"> The World</span></h1>
                                <h4><a href="{{ url('/booking') }}" class="slide-button text-white">Book now</a></h4>
                            </div>
                        </div>
                     </div>
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
						<h2 class="text-width-medium text-spacing-75 wow fadeInLeft" style="animation-delay: .2s">About Giorgia</h2>
						</div>
						<p class="text-width-medium text-spacing-75 wow fadeInLeft" style="animation-delay: .4s">Understated Elegance with a Contemporary Edge</p>
						<p class="text-width-medium text-spacing-75 wow fadeInLeft" style="animation-delay: .6s">There is simply no better way to experience the sun and sea than the combination of luxury and
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
				<div class="row hover-shadow-lg py-4 wow fadeInRight" style="margin-bottom: 150px;animation-delay: 0.5s;">
					<div class="col-lg-5">
						<div class="img-slide text-width-medium text-spacing-75 wow fadeInLeft" style="animation-delay: 0.3s;">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active"> <img src="{{ asset('images/interior/1.jpg') }}" alt="Image not found!">
									</div>
									<div class="carousel-item"> <img src="{{ asset('images/interior/2.jpg') }}" alt="Image not found!"> </div>
									<div class="carousel-item"> <img src="{{ asset('images/interior/3.jpg') }}" alt="Image not found!"> </div>
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
								<a href="{{ url('/vessel') }}" class="btn btn-primary-bg" role="button">
									View More
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="text-right py-4 px-4">
							<p>
							<h6 class="" style="animation-delay: 0.2s;">MY Giorgia can accommodate up to ten guests in five well-appointed staterooms, all featuring ensuite marble bathrooms. </h6>

							<p  class="" style="animation-delay: 0.4s;">The master suite, found on the main deck, comes with a walk-through study and double sinks. Below deck you will find two VIP suites and twin Guest suites. 

							Classically designed interiors and minimalist dark wood bulkheads contribute to a contemporary ambience, while plush furnishings create a sense of warmth, elegance and comfort.</p>
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
				<div class="row hover-shadow-lg py-4 wow fadeInLeft" style="animation-delay: 0.6s;">            
					<div class="col-lg-7">
						<div class="py-4 px-4">
							<p>
							<h6 class="" style="animation-delay: 0.2s;" > Giorgia is a true masterpiece of high-end yachting design, featuring teak beams and elegant, no-fuss exteriors. Wherever you are going you can rest assured that you will arrive in style.</h6>

							<p class="" style="animation-delay: 0.4s;">A plethora of high-end entertainment and leisure facilities make Giorgia perfect for enjoying a family vacation, socializing with friends, or even more formal endeavours.  

							With a choice of three decks, all featuring their own dining space, you can savour your meals al fresco, sip cocktails under the starry sky at the sundeck bar, or indulge in strawberries and champagne while soaking in the spa pool.
</p></p>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="img-slide img-slide text-width-medium text-spacing-75 wow fadeInRight animated" style="animation-delay: 0.3s;">
							<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active"> <img src="{{ asset('images/exterior/1.jpg') }}" alt="Image not found!">
									</div>
									<div class="carousel-item"> <img src="{{ asset('images/exterior/2.jpg') }}" alt="Image not found!"> </div>
									<div class="carousel-item"> <img src="{{ asset('images/exterior/3.jpg') }}" alt="Image not found!"> </div>
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
								<a href="{{ url('/vessel') }}" class="btn btn-primary-bg" role="button">
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
		<section class="full-row bg-gray parallax-container">
		<div class="overlay"></div>
			<div class="material-parallax parallax">
				<img src="{{ asset('images/exterior/1.jpg') }}" alt="">
			</div>
			<div class="parallax-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="main-title-area text-center">
								<h2 class="title left-right-line mb-3">Specifications</h2>
							</div>
							<!-- <span class="subtext text-secondary text-center mb-5 box-width">Across the street from the ordinary</span> </div> -->
					</div>
					<div id="slider5" class="owl-carousel slider-5" style="z-index: 1;">
				<!-- Slide 1-->
				<div class="item active" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.1; parallaxevent:scroll; parallaxdurationmove:500;">
					<table class="specification">
						<tbody><tr class="fadeInLeftBig">
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
							<td><img src="http://127.0.0.1:8000/images/flag/manflag.png" style="width: 50px; height: 30px"></td>
						</tr>
						
					</tbody></table>
					
					
				</div>

				<!-- Slide 2-->
				<div class="item" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; deeplink:latest-works; kenburnszoom:out; kenburnsrotate:0; kenburnsscale:1.1; parallaxtype:3d; parallaxevent:scroll; parallaxdurationmove:500; parallaxrotate:4;">
					<table class="specification">
						<tbody>
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
							<td>13 knots (cruising)  16 knots (max)</td>
						</tr>
						<tr>
							<th>Range</th>
							<td>3,500 mm</td>
						</tr>
					</tbody></table>					
				</div>

				
			</div>
					
				</div>
			</div>
		</section>

		<section class="full-row bg-white">
			<div class='container'>
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="room-thumb-grid-2 hover_zoom mb-4 bg-light hover-shadow-lg">
							<div class="thumb-top overflow_hidden overflow-hidden" style="height: 250px;">
								<div class="room-size upper-place-bottom-right">12 X 15 Sqft</div>
								<img src="{{ asset('images/exterior/5.jpg') }}" alt="Food"> 
							</div>
							<div class="room-info p-4">
								<h6 class="title"><a class="text-secondery" href="#">Food</a></h6>
								<span>Sami duble bed 2 window & mountain view. 24 Hours room service.</span> <span class="facility-1 text-secondery">Free Wifi / Cable Tv / Breakfast</span> </div>
							<div class="bg-gray d-table px-4 py-3 w-100">
								<a href="{{ url('/experience') }}" class="btn btn-primary-bg float-left">View Details</a>
								<!-- <div class="h5 per-night text-secondery">$80 <small>/ Night</small> </div> -->
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="room-thumb-grid-2 hover_zoom mb-4 bg-light hover-shadow-lg">
							<div class="thumb-top overflow_hidden overflow-hidden" style="height: 250px;">
								<div class="room-size upper-place-bottom-right">15 X 20 Sqft</div>
								<img src="images/exterior/10.jpg" alt="Toy"> </div>
							<div class="room-info p-4">
								<h6 class="title"><a class="text-secondery" href="#">Toys</a></h6>
								<span>Sami duble bed and single veranda. A guest room and furniture.</span> <span class="facility-1 text-secondery">Free Wifi / Cable Tv / Breakfast</span> </div>
							<div class="bg-gray d-table px-4 py-3 w-100">
								<a href="{{ url('/experience') }}" class="btn btn-primary-bg float-left">View Details</a>
								<!-- <div class="h5 per-night text-secondery">$120 <small>/ Night</small> </div> -->
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="room-thumb-grid-2 hover_zoom mb-4 bg-light hover-shadow-lg" >
							<div class="thumb-top overflow_hidden" style="height: 250px;">
								<div class="room-size upper-place-bottom-right">10 X 12 Sqft</div>
								<img src="images/exterior/13.jpeg" alt="Locations"> </div>
							<div class="room-info p-4">
								<h6 class="title"><a class="text-secondery" href="#">Locations</a></h6>
								<span>Single bed and single window. Include a sofa and other small furniture</span> <span class="facility-1 text-secondery">Free Wifi / Cable Tv / Breakfast</span> </div>
							<div class="bg-gray d-table px-4 py-3 w-100">
								<a href="{{ url('/experience') }}" class="btn btn-primary-bg float-left">View Details</a>
								<!-- <div class="h5 per-night text-secondery">$50 <small>/Night</small> </div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Living Room 2 Section End --> 

		<!-- Blank Area Start -->
		<div class="full-row overlay-secondery-opacity-65 bg-standby" style="background-image: url('images/interior/3.jpg'); padding-bottom: 430px">
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
					<div class="col-lg-4 col-md-6 shadow-sm"> <a class="img_view mb-4" href="{{ asset('images/exterior/1.jpg') }}" data-fancybox="gallery">
						<div class="hover_zoom"> <img src="{{ asset('images/exterior/1.jpg') }}" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
						</a> </div>
					<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="{{ asset('images/exterior/2.jpg') }}" data-fancybox="gallery">
						<div class="hover_zoom"> <img src="{{ asset('images/exterior/2.jpg') }}" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
						</a> </div>
					<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="{{ asset('images/exterior/3.jpg') }}" data-fancybox="gallery">
						<div class="hover_zoom"> <img src="{{ asset('images/exterior/3.jpg') }}" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
						</a> </div>
					<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="{{ asset('images/exterior/4.jpg') }}" data-fancybox="gallery">
						<div class="hover_zoom"> <img src="{{ asset('images/exterior/4.jpg') }}" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
						</a> </div>
					<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="{{ asset('images/exterior/5.jpg') }}" data-fancybox="gallery">
						<div class="hover_zoom"> <img src="{{ asset('images/exterior/5.jpg') }}" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
						</a> </div>
					<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="{{ asset('images/exterior/6.jpg') }}" data-fancybox="gallery">
						<div class="hover_zoom"> <img src="{{ asset('images/exterior/6.jpg') }}" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
						</a> </div>
					<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="{{ asset('images/exterior/7.jpg') }}" data-fancybox="gallery">
						<div class="hover_zoom"> <img src="{{ asset('images/exterior/7.jpg') }}" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
						</a> </div>
					<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="{{ asset('images/exterior/8.jpg') }}" data-fancybox="gallery">
						<div class="hover_zoom"> <img src="{{ asset('images/exterior/8.jpg') }}" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
						</a> </div>
					<div class="col-lg-4 col-md-6"> <a class="img_view mb-4" href="{{ asset('images/exterior/9.jpg') }}" data-fancybox="gallery">
						<div class="hover_zoom"> <img src="{{ asset('images/exterior/9.jpg') }}" alt="" height="250"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> </div>
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
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    mouseDrag:false,
    autoplay:true,
    animateOut: 'slideOutLeft',
    responsive:{
        0:{
            items:1
        },
        // 600:{
        //     items:1
        // },
        // 1200:{
        //     items:1
        // },
		// 1800:{
        //     items:1
        // }
    }
});
</script>

@endpush