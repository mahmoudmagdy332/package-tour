<html lang="en">
<head>
<title>Grand Tour Travel Category Flat Bootstrap Responsive Web Template | Contact :: w3layouts</title>
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
    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="../css/styless.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="../css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
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
                            <li class=""><a href="../index.php">Home</a></li>
				<li class=""><a href="../packages.php">Packages</a></li>	
				
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

<div class="page-content">
		<div class="sidebar">
				<div class="links-sidebar">
					   <a href="ViewUser-Admin.php" >User's Data</a>
						<a href="#" >Add Package</a>
						<a href="AddPlace.php" >Add Place</a>
						<a href="AddSubject.php" >Add Subject</a>

				 </div>
		</div>
	<section class="contact py-5">
		<div class="container py-lg-5 py-sm-4" id="container_signup">
			<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Add Package </h2>
			<div class="signup">
				<div class="col-lg-7 contact-left-form">
                                    <?php
                       
                               
                         if(isset($_POST['submit'])){
                            
                             if($a->search_forpackage($_POST['pname'])){
                         
                                $e="This package name already exists";
                             }
                             else{
                              
                               $p->package_name=$_POST['pname'];
                               $p->Hotel="helton";
                               $p->going_time=$_POST['going'];
                               $p->image=$_POST['file'];
                               $p->airline_price=$_POST['air'];
                               $p->bus_price=$_POST['bus'];
                               $p->train_price=$_POST['train'];
                               $p->days=$_POST['day'];
                             
                               $a->addpackage($p,$_POST['place'],$_POST['sub']);
                               $e="This package added";
                         }
                         }
                                    ?>
                                    
                                    
					<form action="#" method="post" class="row">
						<div class="col-sm-6 form-group contact-forms">
                                                    <input type="text" class="form-control" placeholder="Name Of Package" required=""name="pname">
						</div>
						<div class="col-sm-6 form-group contact-forms">
                                                    <input type="number" class="form-control" placeholder="Number of days" required=""name="day"> 
						</div>
						<div class="col-sm-6 form-group contact-forms">
                                                    <select class="form-control" id="Subjects" name="sub">
									<option>Subject</option>
                                                                        <?php
                                                          $b=$a->get_namesubject();
                                                      foreach ($b as $ks=>$values){
                                                          foreach ($values as $k=>$value){            
                                                     
                                                          
                                                          echo "<option>" .$value."</option>";
                                                      }}
                                                                        ?>
								</select>
						</div>
						<div class="col-sm-6 form-group contact-forms">
                                                    <select class="form-control" id="Places"name="place">
									<option>Place</option>
									  <?php
                                                          $t=$a->get_nameplace();
                                                      foreach ($t as $ks=>$values){
                                                          foreach ($values as $k=>$value){            
                                                     
                                                          
                                                          echo "<option>" .$value."</option>";
                                                      }}
                                                                        ?>
								</select>
						</div>
						<div class="col-sm-6 form-group contact-forms">
                                                    <input type="date" class="form-control" placeholder="Going Date" required=""name="going"> 
						</div>
						<div class="col-sm-6 form-group contact-forms">
                                                    <input type="number" class="form-control" placeholder="Airline Price" required=""name="air"> 
						</div>
						<div class="col-sm-6 form-group contact-forms">
                                                    <input type="number" class="form-control" placeholder="Train Price" required=""name="train"> 
						</div>
						<div class="col-md-6 form-group contact-forms">
                                                    <input type="number" class="form-control" placeholder="Bus Price" required="" name="bus"> 
						</div>
						<div class="col-md-6 form-group contact-forms">
							<label for="">Choose image</label>
                                                        <input type="file" placeholder="Add profile picture" name="file" />
						</div>
						
						<div class="col-md-12 booking-button">
                                                    <input id="lg" type="submit"value="Submit"class="btn btn-block sent-butnn"name="submit">
						</div>
                                            <br><br><span class="error"> <?php echo  $e; ?></span>
					</form>
				</div>
			</div>
		</div>
	</section>
		<!-- //Booking -->
</div>

<!--footer -->
<footer>
<section class="footer footer_w3layouts_section_1its py-5">
	<div class="container py-lg-4 py-3">
		<div class="row footer-top">
			<div class="col-lg-3 col-sm-6 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Address</h3>
				</div>
				<div class="footer-text">
					<p>Location : 1234 lock, Charlotte, North Carolina, United States</p>
					<p>Phone : +12 534894364</p>
					<p>Email : <a href="mailto:info@example.com">info@example.com</a></p>
					<p>Fax : +12 534894364</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 footer-grid_section mt-sm-0 mt-4">
				<div class="footer-title">
					<h3>About Us</h3>
				</div>
				<div class="footer-text">
					<p>Vivamus magna justo, laci niats eget consectetur sed, conval lis at tellus. Nulla quis lorem ipnt libero.
					Lorem ipsum dolor.</p>
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
