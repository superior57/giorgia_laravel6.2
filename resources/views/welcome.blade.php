
@extends('master')

@section('header')
@include('layouts.header')
@endsection
    
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url(<?php  echo 'storage/'.$heroImage[0]['image']; ?>);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text justify-content-center align-items-center">
				<div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
					<div class="text text-center">
						<!-- <h1 class="mb-4">The Simplest <br>Way to Find Property</h1> -->
						<!-- <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p> -->
			
					</div>
				</div>
			</div>
		</div>
      	<div class="mouse">
			<a href="#" class="mouse-icon">
				<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
			</a>
		</div>
    </div>

    <section class="ftco-section ftco-no-pb  goto-here">
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
	</section>

	<section class="ftco-section testimony-section">
      	<div class="container">
        	<div class="row ftco-animate">
          		<div class="col-md-6">
            		<div class="carousel-testimony owl-carousel ">
						@foreach ($interiors as $interior)
						<div class="item">
						  	<a href='vessel'>
							  	<!-- <img src="{{ asset($interior->image) }}" style="width:100%;"> -->
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
    </section>

    <section class="ftco-section">
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
    </section>		
@endsection
@section('footer')
@include('layouts.footer')
@endsection
