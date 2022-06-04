@include('include.header')
			<!--Home Banner Start-->
			<div class="wt-haslayout wt-bannerholder">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-5">
							<div class="wt-bannerimages">
								<figure class="wt-bannermanimg" data-tilt>
									<img src="{{asset('assets')}}/images/bannerimg/img-01.png" alt="img description">
									<!-- <img src="images/bannerimg/img-02.png" class="wt-bannermanimgone" alt="img description">
									<img src="images/bannerimg/img-03.png" class="wt-bannermanimgtwo" alt="img description"> -->
								</figure>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
							<div class="wt-bannercontent">
								<div class="wt-bannerhead">
									<div class="wt-title">
										<h1><span>Hire expert personnels</span> for any service, at your HOME</h1>
									</div>
									<div class="wt-description">
										<p> Hire Anything Anywhere.</p>
									</div>
								</div>
								<!--  -->
								<!-- -}} -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Home Banner End-->
			<!--Main Start
			<main id="wt-main" class="wt-main wt-haslayout">
				<!--Categories Start -->
				<section class="wt-haslayout wt-main-section">
					<div class="container">
						<div class="row justify-content-md-center">
							<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
								<div class="wt-sectionhead wt-textcenter">
									<div class="wt-sectiontitle">
										<h2>Top Categories</h2>
										<span>  </span>
									</div>
								</div>
							</div>
							<div class="wt-categoryexpl">
                                @foreach($categories as $category)
								<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-left">
									<div class="wt-categorycontent">
										<figure><img src="{{asset('uploads')}}/{{$category->image}}" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="{{url('/category/services/'.$category->id)}}">{{$category->name}}</a></h3>
										</div>
										<div class="wt-categoryslidup">
											<p>{{$category->description}}</p>
											<a href="{{url('/category/services/'.$category->id)}}">Explore <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
                                @endforeach

								<div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
									<div class="wt-btnarea">
										<a href="{{url('/services')}}" class="wt-btn">View All</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--Categories End-->
				<!--Join Company Info Start-->
				<section class="wt-haslayout wt-main-section wt-paddingnull wt-companyinfohold">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-12 col-lg-12">
								<div class="wt-companydetails">
									<div class="wt-companycontent">
										<div class="wt-companyinfotitle">
											<h2>Join Us As Service Seeker</h2>
										</div>
										<div class="wt-description">
											<p>Hi, if you are searching for any kind of service whether it is cleaning your house or building a website we have all services available on our platform
.</p>
										</div>
										<div class="wt-btnarea">
											<a href="{{url('/register')}}" class="wt-btn">Join Now</a>
										</div>
									</div>
									<div class="wt-companycontent">
										<div class="wt-companyinfotitle">
											<h2>Join Us As A Service Provider</h2>
										</div>
										<div class="wt-description">
											<p>Hi, if you are looking for jobs or freelance work to earn money while showcasing your skills just click on the click fill the form and our representative will guide you all..</p>
										</div>
										<div class="wt-btnarea">
											<a href="{{url('/contact')}}" class="wt-btn">Join Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--JAbout the company -->
				<!--Limitless Experience Start-->
				<section class="wt-haslayout wt-main-section">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
								<figure class="wt-mobileimg">
									<img src="{{asset('assets')}}/images/mobile-img.png" alt="img description">
								</figure>
							</div>
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
								<div class="wt-experienceholder">
									<div class="wt-sectionhead">
										<div class="wt-sectiontitle">
											<h2>Freelancing Service Platforms</h2>
											<span>Get your Job Done</span>
										</div>
										<div class="wt-description">
											<p>We provide a marketplace for all sort services for corporations and freelance. A platform for them to provide their work and services and get paid accordingly. We aim to get all your work done without any hassles..</p>
											<p>Through our platform employers can hire freelancers in a variety of fields, including electrician, plumber, software developer, and so on.</p>
										</div>
										{{-- <ul class="wt-appicon">
											<li>
												<a href="javascript:void(0)">
													<figure><img src="images/app-icon/img-01.png" alt="img description"></figure>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<figure><img src="images/app-icon/img-02.png" alt="img description"></figure>
												</a>
											</li>
										</ul> --}}
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
			
	@include('include.footer')
