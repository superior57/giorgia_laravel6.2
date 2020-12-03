
@extends('master')

@section('header')
@include('layouts.header')
@endsection
    
@section('content')
	<!-- Page Banner Section Start -->
	<div class="full-row overlay-secondery-opacity-65 bg-img-5" id="page-banner">
		<div class="container">
			<div class="row py-80">
				<div class="col-sm-6">
					<h1 class="banner-title text-white">Vessel</h1>
				</div>
				<div class="col-sm-6">
					<ul class="pages-link">
						<li><a href="/">Home</a></li>
						<li>/</li>
						<li>Vessel</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<section class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="room-item-details">
                            <div class="hover-shadow-lg">
								<div class="img-slide">
									<div id="carouselInterior" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											@foreach ($interiors as $key => $interior )
												@if($key == 0) 
												<div class="carousel-item vessel-item active"> <img src="{{ asset('storage/'.$interior->image) }}" alt="Image not found!"> </div>
												@else
												<div class="carousel-item vessel-item"> <img src="{{ asset('storage/'.$interior->image) }}" alt="Image not found!"> </div>
												@endif
											@endforeach
											<!-- <div class="carousel-item vessel-item active"> <img src="{{ asset('images/interior/1.jpg') }}" alt="Image not found!"> </div>
											<div class="carousel-item vessel-item"> <img src="{{ asset('images/interior/2.jpg') }}" alt="Image not found!"> </div>
											<div class="carousel-item vessel-item"> <img src="{{ asset('images/interior/3.jpg') }}" alt="Image not found!"> </div> -->
										</div>
										<div class="slider-arrow"> <a class="carousel-control-prev" href="#carouselInterior" role="button" data-slide="prev"> <i class="fas fa-angle-double-left"></i> </a> <a class="carousel-control-next" href="#carouselInterior" role="button" data-slide="next"> <i class="fas fa-angle-double-right"></i> </a> </div>
									</div>
								</div>
								<div class="room-detail-info bg-white">
									<div class="float-left">
										<h3>Interior</h3>
										<span>
										{{$text[0]['interior']}}
										</span> </div>
								</div>
							</div>
                            <div class="text-block-1 mt-4">
                                <p></p>
							</div>                
							<div class="hover-shadow-lg">
								<div class="img-slide">
									<div id="carouselExterior" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											@foreach ($exteriors as $key => $exterior )
												@if($key == 0) 
												<div class="carousel-item vessel-item active"> <img src="{{ asset('storage/'.$exterior->image) }}" alt="Image not found!"> </div>
												@else
												<div class="carousel-item vessel-item"> <img src="{{ asset('storage/'.$exterior->image) }}" alt="Image not found!"> </div>
												@endif
											@endforeach
											<!-- <div class="carousel-item vessel-item active"> <img src="{{ asset('images/exterior/1.jpg') }}" alt="Image not found!"> </div>
											<div class="carousel-item vessel-item"> <img src="{{ asset('images/exterior/2.jpg') }}" alt="Image not found!"> </div>
											<div class="carousel-item vessel-item"> <img src="{{ asset('images/exterior/3.jpg') }}" alt="Image not found!"> </div> -->
										</div>
										<div class="slider-arrow"> <a class="carousel-control-prev" href="#carouselExterior" role="button" data-slide="prev"> <i class="fas fa-angle-double-left"></i> </a> <a class="carousel-control-next" href="#carouselExterior" role="button" data-slide="next"> <i class="fas fa-angle-double-right"></i> </a> </div>
									</div>
								</div>
								<div class="room-detail-info bg-white">
									<div class="float-left">
										<h3>Exterior</h3>
										<span>
										{{$text[0]['exterior']}}
										</span> </div>
								</div>
							</div>
                            <div class="text-block-1 mt-4">
                                <p></p>
                            </div>                  
                            <div class="text-block-1 mt-4">
                                <h4>Description</h4>
                                <p>{{$text[0]['intro']}}</p>
                            </div>
                            <div class="row photo-gallery mt-4">
								@foreach($interiors as $interior)
									<div class="col-md-4"> 
										<a class="img_view mb-4" data-fancybox="gallery" href="{{ asset('storage/'.$interior->image) }}">
											<div class="overlay-1"> 
												<img src="{{ asset('storage/'.$interior->image) }}" alt=""> 
												<span class="text-primary xy-center"><i class="fa fa-plus"></i></span> 
											</div>
										</a> 
									</div>
								@endforeach
								@foreach($exteriors as $exterior)
									<div class="col-md-4"> 
										<a class="img_view mb-4" data-fancybox="gallery" href="{{ asset('storage/'.$exterior->image) }}">
											<div class="overlay-1"> 
												<img src="{{ asset('storage/'.$exterior->image) }}" alt=""> 
												<span class="text-primary xy-center"><i class="fa fa-plus"></i></span> 
											</div>
										</a> 
									</div>
								@endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
					<div class="tab-menu-1 mb-4 hover-shadow-lg"> 
							<!-- Nav tabs -->
							<ul class="nav nav-pills">
								<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#features">Specifications</a> </li>
							</ul>
							
							<!-- Tab panes -->
							<div class="tab-content">
								<div id="specifications" class="tab-pane active">
									<div class="bg-white p-4 table-style-3">
										<table>
											<tbody>
												<tr>
													<td><span class="col-sm-6">Length :</span><b class="col-sm-6">{{$specification['length']}}</b></td>													
												</tr>
												<tr>
													<td><span class="col-sm-6">Beam :</span><b class="col-sm-6">{{$specification['beam']}}</b></td>
												</tr>
												<tr>
													<td><span class="col-sm-6">Draft :</span><b class="col-sm-6">{{$specification['draft']}}</b></td>
												</tr>
												<tr>
													<td><span class="col-sm-6">Built :</span><b class="col-sm-6">{{$specification['built']}}</b></td>
												</tr>
												<tr>
													<td><span class="col-sm-6">Builder :</span><b class="col-sm-6">{{$specification['builder']}}</b></td>
												</tr>
												<tr>
													<td><span class="col-sm-6">Engines :</span><b class="col-sm-6">{{ $specification['engines']}}</b></td>
												</tr>
												<tr>
													<td><span class="col-sm-6">Flag :</span><b class="col-sm-6"><img src="{{ asset('images/flag/manflag.png') }}" style="width: 50px; height: 30px"></b></td>
												</tr>
												<tr>
													<td><span class="col-sm-6">Hull :</span><b class="col-sm-6">{{ $specification['hull']}}</b></td>
												</tr>
												<tr>
													<td><span class="col-sm-6">Hull Type :</span><b class="col-sm-6">{{ $specification['hull_type']}}</b></td>
												</tr>
												<tr>
													<td><span class="col-sm-6">Cabins :</span><b class="col-sm-6">{{ $specification['cabins']}}</b></td>
												</tr>
												<tr>
													<td><span class="col-sm-6">Guests :</span><b class="col-sm-6">{{ $specification['guests']}}</b></td>
												</tr>
												<tr>
													<td><span class="col-sm-6">Crew :</span><b class="col-sm-6">{{ $specification['crew']}}</b></td>
												</tr>
												<tr>
													<td><span class="col-sm-6">Speed :</span><b class="col-sm-6">{{ $specification['speed']}}</b></td>
												</tr>
												<tr>
													<td><span class="col-sm-6">Range :</span><b class="col-sm-6">{!! $specification['range'] !!}</b></td>
												</tr>
												
												<!-- <tr>
													<td><span>Call Girl :</span>No</td>
													<td>&nbsp;</td>
												</tr> -->
											</tbody>
										</table>
									</div>
								</div>
								<div id="overview" class="tab-pane fade">
									<div class="bg-white p-4">
										<ul class="icon-list-3">
											<li>Double Bed</li>
											<li>80 SqMt</li>
											<li>3 Persons</li>
											<li>Free Wifi</li>
											<li>Free Cable TV</li>
											<li>24/H Room Service </li>
										</ul>
										<ul class="icon-list-3">
											<li>Breakfast Include</li>
											<li>Private Balcony</li>
											<li>Guest Room</li>
											<li>Free Newspaper</li>
											<li>Full AC</li>
										</ul>
										<ul class="icon-list-3">
											<li>2 Bauth</li>
											<li>Mountain View</li>
											<li>CCTV Security</li>
											<li>Land Phone</li>
											<li>Flat Screen Tv</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="widget hotel-booking-number hover-shadow-lg"> <i class="flaticon-phone-contact"></i>
                            <h4 class="my-3">Book Vessel By Phone</h4>
                            <span>+045 423 445 99</span> <b>Or</b> <a href="#" class="btn btn-primary-bg">Contact Now</a> </div>
                        <!-- <div class="widget add"> <img src="img/height/17.jpg" alt="Image not found!"> </div> -->
                    </div>
                </div>
            </div>
		</section>
	
	<!-- Page Banner Section End -->
	
    <!-- <div class="hero-wrap ftco-degree-bg" style="background-image: url(<?php  echo $heroImage[1]['image']; ?>);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
	</div>
	
	<section class="ftco-section ftco-no-pb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">{{$text[0]['title']}}</span>
				</div>
			</div>
			<div class="row d-flex">
				<div class="d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block text-center">
						<div class="media-body py-md-4">
							<p>{{$text[0]['intro']}}</p>
						</div>
					</div>      
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section">
      	<div class="container">
		  	<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">{{$text[0]['interiortitle']}}</span>
				</div>
			</div>

        	<div class="row ftco-animate" style='diaplay:flex;align-items:center;'>
          		<div class="col-md-6">
            		<div class="carousel-testimony owl-carousel ">
						@foreach ($errors as $interior)
						<div class="item">
						  	<img src="{{ asset($interior->image) }}" style="width:100%;">
              			</div>
						@endforeach
            		</div>
				</div>
				<div class="col-md-6">
					<p>{{$text[0]['interior']}}</p>
          		</div>
        	</div>
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">{{$text[0]['exteriortitle']}}</span>
				</div>
			</div>

        	<div class="row ftco-animate" style='diaplay:flex;align-items:center;'>
          		<div class="col-md-6">
            		<div class="carousel-testimony owl-carousel ">
						@foreach ($exteriors as $exterior)
						<div class="item">
						  	<img src="{{ asset($exterior->image) }}" style="width:100%;">
              			</div>
						@endforeach
            		</div>
				</div>
				<div class="col-md-6">
					<p>{{$text[0]['exterior']}}</p>
          		</div>
        	</div>
      	</div>
	</section>
	<section class="ftco-section testimony-section">
      	<div class="container">
		  	<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">{{$text[0]['specification']}}</span>
				</div>
			</div>
        	<div class="row ftco-animate" style='diaplay:flex;align-items:center;'>
          		<div class="col-md-6">
				  	<table class='specification_table'>
						<tr>
							<th>Length</th>
							<td>{{$specification['length']}}</td>
						</tr>
						<tr>
							<th>Beam</th>
							<td>{{$specification['beam']}}</td>
						</tr>
						<tr>
							<th>Draft</th>
							<td>{{$specification['draft']}}</td>
						</tr>
						<tr>
							<th>Built</th>
							<td>{{$specification['built']}}</td>
						</tr>
						<tr>
							<th>Builder</th>
							<td>{{$specification['builder']}}</td>
						</tr>
						<tr>
							<th>Engines</th>
							<td>{{ $specification['engines']}}</td>
						</tr>
						<tr>
							<th>Flag</th>
							<td><img src="{{ asset($specification['flag']) }}"></td>
						</tr>
						<tr>
							<th>Hull</th>
							<td>{{ $specification['hull']}}</td>
						</tr>
						<tr>
							<th>Hull Type</th>
							<td>{{ $specification['hull_type']}}</td>
						</tr>
						<tr>
							<th>Cabins</th>
							<td>{{ $specification['cabins']}}</td>
						</tr>
						<tr>
							<th>Guests</th>
							<td>{{ $specification['guests']}}</td>
						</tr>
						<tr>
							<th>Crew</th>
							<td>{{ $specification['crew']}}</td>
						</tr>
						<tr>
							<th>Speed</th>
							<td>{{ $specification['speed']}}</td>
						</tr>
						<tr>
							<th>Range</th>
							<td><?php echo $specification['range']; ?></td>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					<div class='deck'><img src="{{ asset($decks[0]['image']) }}"></div>
					<div class='deck'><img src="{{ asset($decks[1]['image']) }}"></div>
					<div class='deck'><img src="{{ asset($decks[2]['image']) }}"></div>
					<div class='deck'><img src="{{ asset($decks[3]['image']) }}"></div>
          		</div>
        	</div>
		</div>
		  
    </section> -->

@endsection
@section('footer')
@include('layouts.footer')
@endsection
