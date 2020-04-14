@extends('layout')
@section('page_content')
<section class="home" style="background-image: url('{{ URL::asset('assets/img/background_image.jpg') }}')">
	<div class="banner">
		<h1>Gaurav Ranpara</h1>
		<p class="cd-headline zoom">
			<span>I am a</span>
			<span class="cd-words-wrapper">
				<b class="is-visible">Developer</b>
				<b>Designer</b>
				<b>Freelancer</b>
			</span>
		</p>
	</div>
	<div class="menu">
		<div class="but-menu">
			<div class="line line-top"></div>
			<div class="line line-middle"></div>
			<div class="line line-bottom"></div>
		</div>
		<div class="but-about menu-item">
			<i class="fas fa-user-tie about-show" data-tooltip="about me" data-position="top"></i>
		</div>
		<div class="but-resume menu-item">
			<i class="fas fa-address-book resume-show" data-tooltip="resume" data-position="right"></i>
		</div>
		<div class="but-portfolio menu-item">
			<i class="fas fa-cogs service-show" data-tooltip="service" data-position="right"></i>
		</div>
		<div class="but-blog menu-item">
			<i class="fas fa-receipt blog-show" data-tooltip="blog" data-position="left"></i>
		</div>
		<div class="but-contact menu-item">
			<i class="fas fa-envelope contact-show" data-tooltip="contact" data-position="left"></i>
		</div>
	</div>
	<div class="page-wrap">
		<div class="page-background"></div>
	</div>
	<div class="social">
		<ul>
			<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
			<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
		</ul>
	</div>
</section>
<section class="about section" data-simplebar>
	<div class="container">
		<div class="header-page mt-70">
			<i class="fas fa-user-tie icon-page"></i>
			<i class="far fa-times-circle close-page" data-tooltip="close page" data-position="left"></i>
			<h2>About Me</h2>
		</div>
		<div class="row mt-100 mob-mt">
			<div class="col-lg-12 col-sm-12">
				<div class="info box">
					<div class="row">
						<div class="col-lg-4 col-sm-4">
							<div class="photo pt-10">
								<img alt="" src="{{ URL::asset('assets/img/user-photo.jpg') }}">		
							</div>	
						</div>
						<div class="col-lg-8 col-sm-8">
							<h4>Gaurav Ranpara</h4>
							<div class="loc">
								<i class="fas fa-map-marked-alt"></i> Gujarat, India
							</div>
							<p>I specialize in creating beautiful, usable, professional websites using best practice accessiblity and the latest W3C web standards guidelines, resulting in semantic and SEO friendly XHTML and CSS.All my sites are lovingly hand coded.</p>
							<p>I have done work in Software development, mobile app creation, front-end/back-end web, database/server management. I've always sought out opportunities and challenges that are meaningful to me. As a developer, I enjoy using my obsessive attention to detail, my unequivocal love for making things, and my mission-driven work ethic to literally change the world.</p>
						</div>
					</div>
					<div class="btn-about">
						<a href="{{ URL::asset('assets/document/CV.pdf') }}" class="btn-st" download="Gaurav CV.pdf">Download CV</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="resume section" data-simplebar>
	<div class="container">
		<div class="header-page mt-70">
			<i class="fas fa-address-book icon-page"></i>
			<i class="far fa-times-circle close-page" data-tooltip="close page" data-position="left"></i>
			<h2>Resume</h2>
		</div>
		<div class="row mt-100 mob-mt">
			<div class="col-lg-6 col-sm-12">
				<div class="header-box mb-50">
					<h3>Experience</h3>
				</div>
				<div class="experience box">
					<div class="bord-l">
						<div class="item">
							<div class="main">
								<h4>Freelancer</h4>
								<p><i class="far fa-calendar-alt"></i>Since May 2018 | Self Employed</p>
							</div>
							<p>I am Start my career as freelancer and i am start my freelancing with technologies like PHP, MySQL, Android. I am passionate about my work and i worked within teams of creative freelancers to build websites and android applications.</p>
						</div>
						<div class="item">
							<div class="main">
								<h4>Web Developer</h4>
								<p><i class="far fa-calendar-alt"></i>Since May 2018 | Impex Solutions</p>
							</div>
							<p>I start job as a Web Developer along side with freelancing work. I work on so many latest technologies & ideas and i get good experience with this Job.</p>
						</div>
						<div class="item">
							<div class="main">
								<h4>Cyber Security Intern</h4>
								<p><i class="far fa-calendar-alt"></i>July 2018 - Sept. 2018 | Cyber Octet</p>
							</div>
							<p>I Complete 3 Months intern in Cyber Security, Ethical Hacking, Web Application Security, Cyber Crime Investigation.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="header-box mb-50 mob-box-mt">
					<h3>Education</h3>
				</div>
				<div class="experience box">
					<div class="bord-l">
						<div class="item">
							<div class="main">
								<h4>Graduation</h4>
								<p><i class="far fa-calendar-alt"></i>Jun 2015 - Jun 2018 | Computer Application (B.C.A)</p>
							</div>
							<p>I have completed my graduation from R.P.Bhalodiya College , Saurashtra University at Rajkot, Gujarat. I have completed my graduation with 8.0 CGPA.</p>
						</div>
						<div class="item">
							<div class="main">
								<h4>Post Graduation</h4>
								<p><i class="far fa-calendar-alt"></i>Aug. 2018 - May 2020 | Computer Science (M.Sc. IT & CA)</p>
							</div>
							<p>I have started my Master in Computer Science with Information Technology & Computer Application at Atmiya University at Rajkot, Gujarat.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-100">
			<div class="col-md-12">
				<div class="header-box mb-50">
					<h3>Skills</h3>
				</div>
			</div>
		</div>
		<div class="box skills" style="margin-bottom: 1rem;">
			<div class="row">
				<div class="col-lg-6 col-sm-6">
					<div class="skill-item">
						<h4 class="progress-title">HTML5</h4>
						<div class="progress">
							<div class="progress-bar" style="width:95%">
								<div class="progress-value">95%</div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<h4 class="progress-title">JavaScript</h4>
						<div class="progress">
							<div class="progress-bar" style="width:90%">
								<div class="progress-value">90%</div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<h4 class="progress-title">CSS3</h4>
						<div class="progress">
							<div class="progress-bar" style="width:70%">
								<div class="progress-value">70%</div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<h4 class="progress-title">Python</h4>
						<div class="progress">
							<div class="progress-bar" style="width:50%">
								<div class="progress-value">50%</div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<h4 class="progress-title">GO Lang</h4>
						<div class="progress">
							<div class="progress-bar" style="width:50%">
								<div class="progress-value">50%</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6">
					<div class="skill-item">
						<h4 class="progress-title">PHP</h4>
						<div class="progress">
							<div class="progress-bar" style="width:90%">
								<div class="progress-value">90%</div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<h4 class="progress-title">Laravel</h4>
						<div class="progress">
							<div class="progress-bar" style="width:75%">
								<div class="progress-value">75%</div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<h4 class="progress-title">Codeigniter</h4>
						<div class="progress">
							<div class="progress-bar" style="width:65%">
								<div class="progress-value">65%</div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<h4 class="progress-title">WordPress</h4>
						<div class="progress">
							<div class="progress-bar" style="width:55%">
								<div class="progress-value">55%</div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<h4 class="progress-title">Android</h4>
						<div class="progress">
							<div class="progress-bar" style="width:55%">
								<div class="progress-value">55%</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="service section" data-simplebar>
	<div class="container">
		<div class="header-page mt-70">
			<i class="far fa-times-circle close-page" data-tooltip="close page" data-position="left" style="float: left;margin-top: 1.5rem;"></i>
			<h2>Services</h2>
		</div>
		<div class="row mt-100">
			<div class="col-lg-6 col-sm-6">
				<div class="service box mb-40">
					<h4>Laravel Develpment</h4>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="service box mb-40">
					<h4>Wordpress Development</h4>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="service box mb-40">
					<h4>eCommerce Development</h4>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="service box mb-40">
					<h4>Responsive Design</h4>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="service box mb-40">
					<h4>Android Development</h4>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="service box mb-40">
					<h4>Python Development</h4>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="blog section" data-simplebar>
	<div class="container">
		<div class="header-page mt-70">
			<i class="fas fa-receipt icon-page"></i>
			<i class="far fa-times-circle close-page" data-tooltip="close page" data-position="left"></i>
			<h2>Blog</h2>
		</div>
		<div class="row mt-100 mb-50 mob-mt">
			<div class="col-lg-4 col-sm-6">
				<div class="blog-item">
					<div class="thumbnail">
						<span class="date">Feb 09, 2019</span>
						<a href="single-blog.html"><img alt="" src="img/blog/img-1.jpg"></a>
					</div>
					<div class="meta">
						<span class="aut">Posted By <b>Alex Smith</b></span>
						<span class="cat"><i class="fas fa-hashtag"></i>Design</span>
					</div>
					<h4><a href="single-blog.html">Road to success</a></h4>
					<p>Tower Hamlets or mass or members of propaganda bananas real estate. However, a large and a mourning, vel euismod.</p>
					<div class="blog-btn">
						<a href="single-blog.html" class="btn-st">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="blog-item">
					<div class="thumbnail">
						<span class="date">Feb 09, 2019</span>
						<a href="single-blog.html"><img alt="" src="img/blog/img-2.jpg"></a>
					</div>
					<div class="meta">
						<span class="aut">Posted By <b>Alex Smith</b></span>
						<span class="cat"><i class="fas fa-hashtag"></i>Design</span>
					</div>
					<h4><a href="single-blog.html">Road to success</a></h4>
					<p>Tower Hamlets or mass or members of propaganda bananas real estate. However, a large and a mourning, vel euismod.</p>
					<div class="blog-btn">
						<a href="single-blog.html" class="btn-st">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="blog-item">
					<div class="thumbnail">
						<span class="date">Feb 09, 2019</span>
						<a href="single-blog.html"><img alt="" src="img/blog/img-3.jpg"></a>
					</div>
					<div class="meta">
						<span class="aut">Posted By <b>Alex Smith</b></span>
						<span class="cat"><i class="fas fa-hashtag"></i>Design</span>
					</div>
					<h4><a href="single-blog.html">Road to success</a></h4>
					<p>Tower Hamlets or mass or members of propaganda bananas real estate. However, a large and a mourning, vel euismod.</p>
					<div class="blog-btn">
						<a href="single-blog.html" class="btn-st">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="blog-item">
					<div class="thumbnail">
						<span class="date">Feb 09, 2019</span>
						<a href="single-blog.html"><img alt="" src="img/blog/img-4.jpg"></a>
					</div>
					<div class="meta">
						<span class="aut">Posted By <b>Alex Smith</b></span>
						<span class="cat"><i class="fas fa-hashtag"></i>Design</span>
					</div>
					<h4><a href="single-blog.html">Road to success</a></h4>
					<p>Tower Hamlets or mass or members of propaganda bananas real estate. However, a large and a mourning, vel euismod.</p>
					<div class="blog-btn">
						<a href="single-blog.html" class="btn-st">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="blog-item">
					<div class="thumbnail">
						<span class="date">Feb 09, 2019</span>
						<a href="single-blog.html"><img alt="" src="img/blog/img-5.jpg"></a>
					</div>
					<div class="meta">
						<span class="aut">Posted By <b>Alex Smith</b></span>
						<span class="cat"><i class="fas fa-hashtag"></i>Design</span>
					</div>
					<h4><a href="single-blog.html">Road to success</a></h4>
					<p>Tower Hamlets or mass or members of propaganda bananas real estate. However, a large and a mourning, vel euismod.</p>
					<div class="blog-btn">
						<a href="single-blog.html" class="btn-st">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="blog-item">
					<div class="thumbnail">
						<span class="date">Feb 09, 2019</span>
						<a href="single-blog.html"><img alt="" src="img/blog/img-6.jpg"></a>
					</div>
					<div class="meta">
						<span class="aut">Posted By <b>Alex Smith</b></span>
						<span class="cat"><i class="fas fa-hashtag"></i>Design</span>
					</div>
					<h4><a href="single-blog.html">Road to success</a></h4>
					<p>Tower Hamlets or mass or members of propaganda bananas real estate. However, a large and a mourning, vel euismod.</p>
					<div class="blog-btn">
						<a href="single-blog.html" class="btn-st">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact section" data-simplebar>
	<div class="container">
		<div class="header-page mt-70">
			<i class="fas fa-envelope icon-page"></i>
			<i class="far fa-times-circle close-page" data-tooltip="close page" data-position="left"></i>
			<h2>Contact</h2>
		</div>
		<div class="row mt-100 mob-mt">
			<div class="col-lg-8 col-sm-12">
				<form class="form-wrap validate-form">
					<div class="validate-input">
						<input id="name" class="input" type="text" name="name" placeholder="Full name">
						<span class="focus-input"></span>
						<label class="label-input" for="name">
							<i class="fas fa-user"></i>
						</label>
					</div>
					<div class="validate-input">
						<input id="email" class="input" type="text" name="email" placeholder="example@example.com">
						<span class="focus-input"></span>
						<label class="label-input" for="email">
							<i class="fas fa-envelope"></i>
						</label>
					</div>
					<div class="validate-input">
						<textarea id="message" class="input" name="message"  placeholder="Your comments..."></textarea>
						<span class="focus-input"></span>
						<label class="label-input comment" for="message">
							<i class="fas fa-comment"></i>
						</label>
					</div>
					<div class="form-btn">
						<a href="#" class="btn-st">Talk to A Human</a>
					</div>
				</form>
			</div>
			<div class="col-lg-4 col-sm-12">
				<div class="box">
					<div class="row">
						<div class="col-lg-12">
							<div class="info-item">
								<span class="icon"><i class="fas fa-paper-plane"></i></span>
								<h4>Email:</h4>
								<p><a href="mailto:example@example.com">example@example.com</a></p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="info-item">
								<span class="icon"><i class="fas fa-map-marker-alt"></i></span>
								<h4>Addres</h4>
								<p>123 Lorem Ipsum, USA</p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="info-item">
								<span class="icon"><i class="fas fa-phone"></i></span>
								<h4>Phone</h4>
								<p>(+1) 123 456 7890</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="google-map box mt-100 mb-100">
			<div class="row">
				<div class="col-lg-12">
					<div id="map" data-latitude="40.712775" data-longitude="-74.005973" data-zoom="14"></div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop