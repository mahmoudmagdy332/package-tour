<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
    <link href="/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="/styless.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	

	
</head>
<body>

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<h1 class="mt-md-0 mt-2"> <a href="home"><span class="fa fa-map-signs"></span> Grand Tour </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				
                            <li class=""><a href="/home">Home</a></li>
                          <li class=""><a href="/logout">LogOut</a></li>
		
				
                       
                                        
			</ul>
		</nav>
        <!-- //nav -->
   
	</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="home" id="home">
	<div class="cover_banner">
			
	</div>
</section>
<!-- //banner -->

  

    <div class="container py-lg-4 py-sm-3" id="countainerinpackagepage">
         
        
   <h2 class='h2-in-package-page'>            </h3> 
            
        <ul class="star-in-package-page">
            <li id="star"><span class="fa fa-star"></span></li>
            <li id="star"><span class="fa fa-star"></span></li>
            <li id="star"><span class="fa fa-star"></span></li>
            <li id="star"><span class="fa fa-star"></span></li>
            <li id="star"><span class="fa fa-star"></span></li>
         </ul>
        
        <div class='image-in-countainer-for-Package'>
            <img src="/{{$id->image}}" alt='' class='img-fluid' />
        </div>
        <div class='description-in-container-for-package'>
            <div class='price'>
                <p>
                    
                               
                  <i class='fa fa-plane' aria-hidden='true'></i><span class='price-form'> Airline price : {{$id->airline_price}}</span> <strong></strong><br>
                       <i class='fa fa-train' aria-hidden='true'></i><span class='price-form'> Train price :{{$id-> train_price}}</span><strong></strong><br>
                       <i class='fa fa-bus' aria-hidden='true'></i><span class='price-form'> Bus price :{{$id-> bus_brice}}</span><strong></strong>
                    <span class='perperson'>per person</span>
                    
                </p>
                          <div >
                   <li class="btn btn-block sent-butnn"><a href="/book/{{$id->package_id}}"> Book</a></li>
                </div>
                 
            </div>
            <div class="discription-text">
                <h3>{{$id->package_name}}</h3>
                <br>
                <p class="discription-text-p">
                     Take a stirring journey through art and religious history with skip-the-line entry to the Vatican
                     Museums and Sistine Chapel. Enter through the fastest entrance available and then enjoy your visit at your own pace. 
                     Tiptoe through the Greek Cross Gallery to see elaborately-carved sarcophagi the might just contain the
                     earthly remains of some of antiquity's famous kings and queens! Peek at the Cabinet of the Masks, or tour the Sala degli
                     Animali to see a virtual menagerie of fantastic beasts, real and imagined.<br><br> Walk the Upper Galleries, including the 
                     Gallery of Maps, to see how cartographers depicted the world through the ages. See masterpieces by Renaissance masters
                     in the Raphael Rooms, and rest for a while in the Borgia Apartments.<br><br>
                     Then, it’s time to marvel at Michelangelo’s exquisite Sistine Chapel, the crown jewel of the Vatican, and
                     perhaps even of all the world’s art treasures.
                </p>
                <br>
               

           <p><i class='fa fa-graduation-cap' aria-hidden='true'></i> Subject :{{$id2}}</p><br>
                <P><i class='fa fa-globe' aria-hidden='true'>  </i>place:{{$id1}}</P><br>
               <p><i class='fa fa-plane' aria-hidden='true'> </i> Going time :{{$id->going_time}}</p><br>
                <p><i class='fa fa-bed' aria-hidden='true'> </i> Hotel : {{$id->hotel}}</p><br>
                <p><i class='fa fa-clock-o' aria-hidden='true'> </i> Days :{{$id->daiys}} </p><br>
                <p><i class='fa fa-moon-o' aria-hidden='true'> </i> Nights :{{$id->daiys-1}}</p><br>
        

            </div>           
        </div>
        
    </div>

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
						<p>We are students at faculity of computer and information science</p>
						<p>And this is out project in Software Engineering </p>
						<p>Team Member</p>
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
