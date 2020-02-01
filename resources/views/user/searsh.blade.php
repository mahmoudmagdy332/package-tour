<!DOCTYPE html>
<html lang="en">
<head>
<title>Grand Tour Travel Category Flat Bootstrap Responsive Web Template | Packages :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Grand Tour Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="styless.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	

	
</head>
<body>

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<h1 class="mt-md-0 mt-2"> <a href="index.html"><span class="fa fa-map-signs"></span> Grand Tour </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class=""><a href="/home">Home</a></li>
				   @if(session()->has('user'))
				<li class=""><a href="/logout">LogOut</a></li>
                          @else
                          <li class=""><a href="/login_home">LogIn</a></li>
                          @endif
		
                      
			</ul>
		</nav>
		<!-- //nav -->
		
	</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
        	         <form class="searchbar" action="/search" method="post">
                     {{ csrf_field() }}
                    <input type="text" id="searchbar1" placeholder="Search with Place "name="pa">
                    <input type="text" id="searchbar2"placeholder="Search with Subject " name="su">
                    <button name="sub"><i class="fa fa-search" aria-hidden="true"></i></button>
		</form>
	</div>
</section>
<!-- //banner -->


<!-- tour packages ------------------------------------------------------------------->
<section class="packages pt-5">
	<div class="container py-lg-4 py-sm-3">
		<h2 class="heading text-capitalize text-center"> Discover our tour packages</h2>
		<p class="text mt-2 mb-5 text-center">Vestibulum tellus neque, sodales vel mauris at, rhoncus finibus augue. Vestibulum urna ligula, molestie at ante ut, finibus vulputate felis.</p>
		<div class="row">
		@if($user=="")
                <div class="container py-lg-4 py-sm-3">
		<h2 class="heading text-capitalize text-center">  packages not founded</h2>
		
		<div class="row">
                
                 @else
                   @foreach($user as $u)
			<div class='col-lg-3 col-sm-6'>
					
			<div class='image-tour position-relative'>
						<div class='rating'>
								<ul>
                                  <li><span class='fa fa-star'></span></li>
                                  <li><span class='fa fa-star'></span></li>
			         <li><span class='fa fa-star'></span></li>
				<li><span class='fa fa-star'></span></li>
				<li><span class='fa fa-star'></span></li>
					</ul>
						</div>
			<img src="{{$u->image}}" alt='' class='img-fluid' />
					<p><span class='fa fa-tags'></span> <span></span></p>
				</div>
				<div class='package-info'>
					
					<h5 class='my-2'>{{$u->package_name}}</h5>
                                        <h6 class='mt-1'><span class='fa fa-map-marker mr-2'>{{$u->place_name}},{{$u->subject_name}}</span></h6>
					<p class=''>{{$u->going_time}}</p>
					<ul class='listing mt-3'>
						<li><span class='fa fa-clock-o mr-2'></span>Duration : <span>{{$u->daiys}}</span></li>
					</ul>
                                      @if(session()->has('user'))
		        <a href="/details/{{$u->package_id}}" >Book</a>
                          @else
                          <a href="/login_book/{{$u->package_id}}" >Book</a>
                          @endif  
				</div>
			</div>
                  
                  @endforeach
                  
                  @endif

		</div>
	</div>
</section>
<div class="row mt-5 text-center">
			<div class="col-lg-3 col-6">
				<div class="counter">
					<span class="fa fa-smile-o"></span>
					<div class="timer count-title count-number">1000+</div>
					<p class="count-text text-uppercase">happy customers</p>
				</div>
			</div>
			<div class="col-lg-3 col-6">
				<div class="counter">
					<span class="fa fa-ship"></span>
					<div class="timer count-title count-number">2271</div>
					<p class="count-text text-uppercase">Tours & Travels </p>
				</div>
			</div>
			<div class="col-lg-3 col-6 mt-lg-0 mt-5">
				<div class="counter">
					<span class="fa fa-users"></span>
					<div class="timer count-title count-number">200</div>
					<p class="count-text text-uppercase">destinations</p>
				</div>
			</div>
			<div class="col-lg-3 col-6 mt-lg-0 mt-5">
				<div class="counter">
					<span class="fa fa-gift"></span>
					<div class="timer count-title count-number">20+<span>years</span></div>
					<p class="count-text text-uppercase">experience</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- how to book -->
<section class="book py-5">
	<div class="container py-lg-5 py-sm-3">
		<h2 class="heading text-capitalize text-center"> How To Plan Your Trip</h2>
		<div class="row mt-5 text-center">
                    
                    
                    
			<div class="col-lg-4 col-sm-6">
				<div class="grid-info">
					<div class="icon">
						<span class="fa fa-map-signs"></span>
					</div>
					<h4>Pick Destination</h4>
					<p class="mt-3">Vestibulum urna ligula, molestie at ante ut, finibus. Integer ultrices finibus sed nisi in convallis sed dolor.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt-sm-0 mt-5">
				<div class="grid-info">
					<div class="icon">
						<span class="fa fa-calendar"></span>
					</div>
					<h4>Select Date</h4>
					<p class="mt-3">Vestibulum urna ligula, molestie at ante ut, finibus. Integer ultrices finibus sed nisi in convallis sed dolor.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt-lg-0 mt-5">
				<div class="grid-info">
					<div class="icon">
						<span class="fa fa-gift"></span>
					</div>
					<h4>Enjoy the Trip</h4>
					<p class="mt-3">Vestibulum urna ligula, molestie at ante ut, finibus. Integer ultrices finibus sed nisi in convallis sed dolor.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //how to book -->

<!-- tour packages -->

<!-- tour packages -->

<!-- text -->
<section class="text-content">
	<div class="overlay-inner py-5">
		<div class="container py-md-3">
			<div class="test-info">
				<h4 class="tittle">Enjoy The Trip</h4>
				<p class="mt-3">Duis nisi sapien, elementum finibus fermentum eget, aliquet leo et. Mauris hendrerit vel ex. Quisque vitae luctus massa.
				Phasellus sed aliquam leo a massa eu fringilla. Integer ultrices finibus sed nisi. in convallis felis dapibus
				sit amet.</p>
				<div class="text-left mt-4">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //text -->
	
<!-- destinations -->
<section class="destinations py-5" id="destinations">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="heading text-capitalize text-center"> Popular Destinations</h3>
		<p class="text mt-2 mb-5 text-center">Vestibulum tellus neque, sodales vel mauris at, rhoncus finibus augue. Vestibulum urna ligula, molestie at ante ut, finibus vulputate felis.</p>
		<div class="row inner-sec-w3layouts-w3pvt-lauinfo">
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center">
				<h4 class="destination mb-3">China</h4>
				<div class="image-position position-relative">
					<img src="images/china.jpg" class="img-fluid" alt="">
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>China</h4>
						<a href="#">Packages</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center">
				<h4 class="destination mb-3">Malaysia</h4>
				<div class="image-position position-relative">
					<img src="images/malaysia.jpg" class="img-fluid" alt="">
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>Malaysia</h4>
						<a href="#">Packages</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mt-md-0 mt-4">
				<h4 class="destination mb-3">Japan</h4>
				<div class="image-position position-relative">
					<img src="images/japan.jpg" class="img-fluid" alt="">
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>Japan</h4>
						<a href="#">Packages</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mt-md-0 mt-4">
				<h4 class="destination mb-3">Singapore</h4>
				<div class="image-position position-relative">
					<img src="images/singapore.jpg" class="img-fluid" alt="">
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>Singapore</h4>
						<a href="#">Packages</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- destinations -->

<!-- Subject -->
<section class="packages py-5">
		<div class="container py-lg-4 py-sm-3">
				<h3 class="heading text-capitalize text-center"> Popular Subject</h3>
				<br><br>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="image-tour position-relative">
							<img src="images/Botany.png" alt="" class="img-fluid" />
						</div>
						<div class="package-info">
							<h5 class="my-2">Botany</h5>
							<p class="">Botany, also called plant science(s), plant biology or phytology, is the science of plant life and a 
								branch of biology. A botanist, plant scientist or phytologist is a scientist who specialises in this field.</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
							<div class="image-tour position-relative">
								<img src="images/IT.jpg" alt="" class="img-fluid" />
							</div>
							<div class="package-info">
								<h5 class="my-2">Information Technology</h5>
								<p class="">Information technology (IT) is the use of computers to store, retrieve, transmit, and manipulate
									 data,[1] or information, often in the context of a business or other enterprise.[2] IT is considered to be 
									 a subset of information and communications technology (ICT)</p>
							</div>
					</div>
					<div class="col-lg-3 col-sm-6">
							<div class="image-tour position-relative">
								<img src="images/Eng.jpg" alt="" class="img-fluid" />
							</div>
							<div class="package-info">
								<h5 class="my-2">ُEngineering</h5>
								<p class="">Engineering is the application of knowledge in the form of science, mathematics, and empirical 
								evidence, to the innovation, design, construction, operation and maintenance of structures, machines, materials,
								 devices, systems, processes, and organizations. </p>
							</div>
					</div>
					<div class="col-lg-3 col-sm-6">
							<div class="image-tour position-relative">
								<img src="images/cs.jpg" alt="" class="img-fluid" />
							</div>
							<div class="package-info">
								<h5 class="my-2">Computer Science</h5>
								<p class="">Computer science is the study of processes that interact with data and that can be represented 
									as data in the form of programs. It enables the use of algorithms to manipulate, store, and communicate
								    digital information. A computer scientist studies the theory of computation and the practice of designing
									 software systems.[1]</p>
							</div>
					</div>
				</div>
			</div>
			
	</section>
<!--Subject-->

<!--footer -->
<footer>
<section class="footer footer_w3layouts_section_1its py-5">
	<div class="container py-lg-4 py-3">
		<div class="row footer-top">
			<div class="col-lg-3 col-sm-6 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>ِAbout Us</h3>
				</div>
				<div class="footer-text">
					<p>We are students at faculity of computer and Information Science</p>
					<p>And this is our project in Software Engineering </p>
					<p>Team Members</p>
					<p>Fe5oo,Batta,Fath,Bes,H</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 footer-grid_section mt-sm-0 mt-4">
				<div class="footer-title">
					<h3>Subjects</h3>
				</div>
				<div class="footer-text">
					<p> Engineering </p>
					<p> Computer science </p>
					<p> Information Technology </p>
				</div>
				<ul class="social_section_1info">
					<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
					<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Travel Places</h3>
				</div>
				<div class="row">
					<ul class="col-6 links">
						<li><a href="#choose" class="scroll">New Zealand </a></li>
						<li><a href="#overview" class="scroll">Paris, France </a></li>
						<li><a href="#pricing" class="scroll">Los Angles</a></li>
						<li><a href="#faq" class="scroll"> Darlington</a></li>
						<li><a href="#testimonials" class="scroll">Canada </a></li>
						<li><a href="#contact" class="scroll"> South Africa </a></li>
					</ul>
					<ul class="col-6 links">
						<li><a href="#">Spain </a></li>
						<li><a href="#">Turkey </a></li>
						<li><a href="#faq" class="scroll">Europe </a></li>
						<li><a href="#">Italy </a></li>
						<li><a href="#">Sweden </a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Newsletter</h3>
				</div>
				<div class="footer-text">
					<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="copyright py-3 text-center">
	<p>© 2019 Grand Tour. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a></p>
</div>
<!-- //copyright -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

	
</body>
</html>
