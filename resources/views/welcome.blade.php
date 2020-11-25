
@extends('master')

@section('header')
@include('layouts.header')
@endsection
    
@section('content')
    <!-- <div class="hero-wrap ftco-degree-bg" style="background-image: url(<?php  echo 'storage/'.$heroImage[0]['image']; ?>);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text justify-content-center align-items-center">
				<div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
					<div class="text text-center"> -->
						<!-- <h1 class="mb-4">The Simplest <br>Way to Find Property</h1> -->
						<!-- <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p> -->
			
					<!-- </div>
				</div>
			</div>
		</div>
      	<div class="mouse">
			<a href="#" class="mouse-icon">
				<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
			</a>
		</div>
    </div> -->


	<!-- Slider Start -->

	<div id="slider5" class="overflow_hidden slider-5" style="width:1200px;height:100vh;margin:0 auto;margin-bottom: 0px;"> 
            
		<!-- Slide 1-->
		<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.1; parallaxevent:scroll; parallaxdurationmove:500;"> <img width="1920" height="1080" src="{!! 'storage/'.$heroImage[0]['image'] !!}" class="ls-bg" alt="" />
			<div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;" class="ls-l slider-layer-1" data-ls="showinfo:1; static:forever; position:fixed; durationout:400;"></div>
			<p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:700px; font-family:Montserrat; font-size:60px; line-height:70px; top:290px; left:42px; white-space:normal;" class="ls-l text-primary ml2" data-ls="showinfo:1; delayin:350; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">Everything</p>
			<p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:370px; left:42px; white-space:normal;" class="ls-l text-white " data-ls="showinfo:1; delayin:550; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">is here right where</p>
			<p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:450px; left:42px; white-space:normal;" class="ls-l text-white" data-ls="showinfo:1; delayin:750; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">you need it</p>
			<p style="font-weight:600; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);width:700px; font-family:Oleo Script; font-size:30px; line-height:50px; top:230px; left:42px; white-space:normal;" class="ls-l text-white" data-ls="showinfo:1; delayin:150; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">Welcome To Giorgia</p>
			<a style="" class="ls-l" href="#2" target="_self" data-ls="showinfo:1; delayin:950; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
				<p class="btn btn-primary-bg" style="font-weight:600; padding-top:15px; padding-bottom: 15px; text-align:center;cursor:pointer;padding-right:35px; padding-left:35px; font-family:Montserrat; font-size:15px; line-height:30px; top:557px; left:42px; border-radius: 3px" class="">
				Explore 
				</p>
			</a> 
		</div>
		
		<!-- Slide 2-->
		<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; deeplink:latest-works; kenburnszoom:out; kenburnsrotate:0; kenburnsscale:1.1; parallaxtype:3d; parallaxevent:scroll; parallaxdurationmove:500; parallaxrotate:4;"> <img width="1920" height="1080" src="images/GIORGIA-yacht--32.jpg" class="ls-bg" alt="" />
			<p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:700px; font-family:Montserrat; font-size:60px; line-height:70px; top:290px; left:42px; white-space:normal;" class="ls-l text-primary" data-ls="showinfo:1; delayin:350; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">Everything</p>
			<p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:370px; left:42px; white-space:normal;" class="ls-l text-white" data-ls="showinfo:1; delayin:550; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">is here right where</p>
			<p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:450px; left:42px; white-space:normal;" class="ls-l text-white" data-ls="showinfo:1; delayin:750; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">you need it</p>
			<p style="font-weight:600; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);width:700px; font-family:Oleo Script; font-size:30px; line-height:50px; top:230px; left:42px; white-space:normal;" class="ls-l text-white" data-ls="showinfo:1; delayin:150; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">Welcome To Giorgia</p>
			<a style="" class="ls-l" href="#2" target="_self" data-ls="showinfo:1; delayin:950; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
			<p class="btn btn-primary-bg" style="font-weight:600; padding-top:15px; padding-bottom: 15px; text-align:center;cursor:pointer;padding-right:35px; padding-left:35px; font-family:Montserrat; font-size:15px; line-height:30px; top:557px; left:42px; border-radius: 3px" class="">
			Explore 
			</p>
			</a> </div>
		
		<!-- Slide 3-->
		<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; deeplink:contact-us; kenburnszoom:in; kenburnsscale:1.2; parallaxevent:scroll;"> <img width="1920" height="1080" src="img/slider/3.jpg" class="ls-bg" alt="" />
			<p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:700px; font-family:Montserrat; font-size:60px; line-height:70px; top:290px; left:42px; white-space:normal;" class="ls-l text-primary" data-ls="showinfo:1; delayin:350; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">Everything</p>
			<p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:370px; left:42px; white-space:normal;" class="ls-l text-white" data-ls="showinfo:1; delayin:550; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">is here right where</p>
			<p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:450px; left:42px; white-space:normal;" class="ls-l text-white" data-ls="showinfo:1; delayin:750; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">you need it</p>
			<p style="font-weight:600; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);width:700px; font-family:Oleo Script; font-size:30px; line-height:50px; top:230px; left:42px; white-space:normal;" class="ls-l text-white" data-ls="showinfo:1; delayin:150; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">Welcome To Giorgia</p>
			<a style="" class="ls-l" href="#2" target="_self" data-ls="showinfo:1; delayin:950; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
			<p class="btn btn-primary-bg" style="font-weight:600; padding-top:15px; padding-bottom: 15px; text-align:center;cursor:pointer;padding-right:35px; padding-left:35px; font-family:Montserrat; font-size:15px; line-height:30px; top:557px; left:42px; border-radius: 3px" class="">
			Explore 
			</p>
			</a> </div>
		
		<!-- Slide 4-->
		<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; deeplink:contact-us; kenburnszoom:in; kenburnsscale:1.2; parallaxevent:scroll;"> <img width="1920" height="1080" src="img/slider/5.jpg" class="ls-bg" alt="" />
			<p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:700px; font-family:Montserrat; font-size:60px; line-height:70px; top:290px; left:42px; white-space:normal;" class="ls-l text-primary" data-ls="showinfo:1; delayin:350; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">Everything</p>
			<p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:370px; left:42px; white-space:normal;" class="ls-l text-white" data-ls="showinfo:1; delayin:550; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">is here right where</p>
			<p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:450px; left:42px; white-space:normal;" class="ls-l text-white" data-ls="showinfo:1; delayin:750; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">you need it</p>
			<p style="font-weight:600; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);width:700px; font-family:Oleo Script; font-size:30px; line-height:50px; top:230px; left:42px; white-space:normal;" class="ls-l text-white" data-ls="showinfo:1; delayin:150; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">Welcome To Giorgia</p>
			<a style="" class="ls-l" href="#2" target="_self" data-ls="showinfo:1; delayin:950; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
			<p class="btn btn-primary-bg" style="font-weight:600; padding-top:15px; padding-bottom: 15px; text-align:center;cursor:pointer;padding-right:35px; padding-left:35px; font-family:Montserrat; font-size:15px; line-height:30px; top:557px; left:42px; border-radius: 3px" class="">
			Explore 
			</p>
			</a> </div>
		<div class="angle-shade-2"></div>
	</div>
	<!-- Slider End -->

	<section class="full-row bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-5">
					<div class="main-title-area">
						<h2 class="title">About Giorgia </h2>
					</div>
					<p>Understated Elegance with a Contemporary Edge</p>
					<p>There is simply no better way to experience the sun and sea than the combination of luxury and privacy offered by a bespoke vacation aboard Motor Yacht Giorgia. Embark on a hedonistic voyage specially designed to give you and your guests a whole body, mind, and spirit Zen immersion on this 37-meter floating oasis. Far from the crowds and restrictions of other holiday options, our wellness inspired yachting retreat features massage, yoga, nutritional health, and so much more. Your yachting experience can be tailored to accommodate every need and desire, providing a sense of freedom and flexibility that is truly unrivalled.</p>
				</div>
				<div class="col-md-7 col-lg-7">
					<div class="video_about" style="position: absolute; top: -290px; right: -85px; z-index: 99"> <img src="img/about/1.png" alt="">
						<div class="xy-center"> <a class="video-popup" href="#" title="video popup">
							<div class="loader xy-center">
								<div class="loader-inner ball-scale-multiple">
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<span class="flaticon-play-button text-secondery xy-center"></span> </a> 
							<!-- Use youtube or Vimeo video link in href, first open the video and just copy the link from url and past here --> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- <section class="ftco-section ftco-no-pb  goto-here">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">{{$introduction[0]['title']}}</span>
					<h2 class="mb-2">{{$introduction[0]['subtitle']}}</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block text-center">
						<div class="media-body py-md-4">
							<p>{{$introduction[0]['text']}}</p>
						</div>
					</div>      
				</div>
			</div>
		</div>
	</section> -->

	<!-- <section class="ftco-section testimony-section">
      	<div class="container">
        	<div class="row ftco-animate">
          		<div class="col-md-6">
            		<div class="carousel-testimony owl-carousel ">
						@foreach ($interiors as $interior)
						<div class="item">
						  	<a href='vessel'>
								<img src="{{ asset('storage/'.$interior->image) }}">
							</a>
              			</div>
						@endforeach
            		</div>
				  </div>
				  <div class="col-md-6">
            		<div class="carousel-testimony owl-carousel ">
						@foreach ($exteriors as $exterior)
						<div class="item">
						  	<a href='vessel'><img src="{{ asset('storage/'.$exterior->image) }}"></a>
              			</div>
						@endforeach
            		</div>
          		</div>
        	</div>
      	</div>
    </section> -->

    <!-- <section class="ftco-section">
    	<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="property-wrap ftco-animate">
						<a href="experience" class="img" style="background-image: url(<?php  echo 'storage/'.$introduction[0]['food']; ?>);"></a>
						<div class="text">
							<h3><a href="experience">Food</a></h3>
							<span class="location">Isle of Man</span>
							<a href="experience" class="d-flex align-items-center justify-content-center btn-custom">
								<span class="ion-ios-link"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="property-wrap ftco-animate">
						<a href="experience" class="img" style="background-image: url(<?php  echo 'storage/'.$introduction[0]['toy']; ?>);"></a>
						<div class="text">
							<h3><a href="experience">Toy</a></h3>
							<span class="location">Isle of Man</span>
							<a href="experience" class="d-flex align-items-center justify-content-center btn-custom">
								<span class="ion-ios-link"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="property-wrap ftco-animate">
						<a href="experience" class="img" style="background-image: url(<?php  echo 'storage/'.$introduction[0]['location']; ?>);"></a>
						<div class="text">
							<h3><a href="experience">Location</a></h3>
							<span class="location">Isle of Man</span>
							<a href="experience" class="d-flex align-items-center justify-content-center btn-custom">
								<span class="ion-ios-link"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
    	</div>
    </section>		 -->
@endsection
@section('footer')
@include('layouts.footer')
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
	(function () {
		// Wrap every letter in a span
		var textWrapper = document.querySelector('.ml2');
		textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

		anime.timeline({loop: true})
		.add({
			targets: '.ml2 .letter',
			scale: [4,1],
			opacity: [0,1],
			translateZ: 0,
			easing: "easeOutExpo",
			duration: 950,
			delay: (el, i) => 70*i
		}).add({
			targets: '.ml2',
			opacity: 0,
			duration: 1000,
			easing: "easeOutExpo",
			delay: 1000
		});
	})()
</script>
@endpush
