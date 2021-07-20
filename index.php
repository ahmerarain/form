<!DOCTYPE html>

<html lang="zxx">



<head>

	<title>SHRS</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta charset="utf-8">

	

	<script>

		addEventListener("load", function () {

			setTimeout(hideURLbar, 0);

		}, false);



		function hideURLbar() {

			window.scrollTo(0, 1);

		}

	</script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link href="css/bootstrap.css?ver=<?php echo rand();?>" rel='stylesheet' type='text/css' />

	<link rel="stylesheet" href="css/contact.css?ver=<?php echo rand();?>" type="text/css" media="all">

	<link href="css/style.css?ver=<?php echo rand();?>" rel='stylesheet' type='text/css' />

	<link href="css/fontawesome-all.css?ver=<?php echo rand();?>" rel="stylesheet">

	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

</head>

<body>

	<!--/banner-w3layouts-sec-->

	<div class="banner-w3layouts">

		<header>

			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<a class="navbar-brand" href="index.html">SMART HOUSE RENTING SYSTEM</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"

				    aria-expanded="false" aria-label="Toggle navigation">

					<span class="navbar-toggler-icon">

						<i class="fas fa-bars"></i>

					</span>



				</button>



				<div class="collapse navbar-collapse" id="navbarSupportedContent">

					<ul class="navbar-nav ml-auto">

						<li class="nav-item ml-xl-2">

							<a class="nav-link" href="index.php">Home

								<span class="sr-only">(current)</span>

							</a>

						</li>

					

						<li class="nav-item dropdown ml-xl-2">

							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"

							    aria-expanded="false">

								For Users

								<i class="fas fa-caret-down"></i>

							</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdown">

								<a class="dropdown-item" href="register.php">Register</a>

								<div class="dropdown-divider"></div>

								<a class="dropdown-item" href="login.php">Login</a>

								<div class="dropdown-divider"></div>

								<a class="dropdown-item" href="postadd.php">Post and ad</a>

							</div>

						</li>

						<li class="nav-item ml-xl-2">

							<a class="nav-link" href="project.php">About Us</a>

						</li>

						<li class="nav-item ml-xl-2">

							<a class="nav-link" href="contact.php">Contact</a>

						</li>

					</ul>

				</div>

			</nav>

		</header>

		<!--banner-w3layouts-->

		<div class="banner-w3layouts-info two">

			<!--/search_form -->

			<div id="banner-w3layouts-info" class="search_top text-center">

				<p>Add some discription</p>

				<ol class="breadcrumb justify-content-center">

					<li class="breadcrumb-item">

						<a href="index.php">Home</a>

					</li>

					<li class="breadcrumb-item active">Contact</li>

				</ol>

			</div>

			<!--//banner-w3layouts-info -->

		</div>

		<!--//banner-w3layouts-->

	</div>

	<!--/main-->

	<!--/banner-w3layouts-bottom -->

	<section class="banner-w3layouts-bottom py-lg-5 py-3">

		<div class="container py-lg-4 py-3">

				<h3 class="tittle text-center mx-auto">Contact Us</h3>

				<p class="sub text-center mb-lg-5 mb-3">We love to discuss your idea</p>

				<div class="address row">



					<div class="col-lg-4 address-grid">

						<div class="row address-info">

							<div class="col-md-3 address-left text-center">

								<i class="far fa-map"></i>

							</div>

							<div class="col-md-9 address-right text-left">

								<h6>Address</h6>

								<p> DHA-2 ,Rawalpindi



								</p>

							</div>

						</div>



					</div>

					<div class="col-lg-4 address-grid">

						<div class="row address-info">

							<div class="col-md-3 address-left text-center">

								<i class="far fa-envelope"></i>

							</div>

							<div class="col-md-9 address-right text-left">

								<h6>Email</h6>

								<p>Email:

									<a href="mailto:example@email.com">shrs@gmail.com</a>



								</p>

							</div>



						</div>

					</div>

					<div class="col-lg-4 address-grid">

						<div class="row address-info">

							<div class="col-md-3 address-left text-center">

								<i class="fas fa-mobile-alt"></i>

							</div>

							<div class="col-md-9 address-right text-left">

								<h6>Phone</h6>

								<p>+923065845489</p>



							</div>



						</div>

					</div>

				</div>

			<div class="contact_grid_right">

				<!-- <form action="#" method="post">

					<div class="row contact_left_grid">

						<div class="col-md-6 con-left">

							<div class="form-group">

								<label class="my-2">Name</label>

								<input class="form-control" type="text" name="Name" placeholder="" required="">

							</div>

							<div class="form-group">

								<label>Email</label>

								<input class="form-control" type="email" name="Email" placeholder="" required="">

							</div>

							<div class="form-group">

								<label class="my-2">Subject</label>

								<input class="form-control" type="text" name="Subject" placeholder="" required="">

							</div>

						</div>

						<div class="col-md-6 con-right">

							<div class="form-group">

								<label>Message</label>

								<textarea id="textarea" placeholder="" required=""></textarea>

							</div>

							<input class="form-control" type="submit" value="Submit">



						</div>

					</div>

				</form> -->
				<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us </h2>
                        <hr>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="contact.php" method="post">
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

			</div>

		</div>

</section>

	<!--//banner-w3layouts-bottom -->

	<!--footer-->

	<div class="footer-cpy p-lg-4 p-md-3 p-3 container-fluid">

			<div class="row">

				<div class="col-lg-6 copyrightbottom text-left">

					<h3>

						<a class="navbar-brand" href="index.php">Smart House Renting System</a>

					</h3>

					<p>© 2018 SHRS. All Rights Reserved | Design by

					<a href="#">G3</a>

					</p>



				</div>

				<div class="col-lg-6 copyrighttop mt-3 text-right">

					<ul>

						<li class="mx-3">

							<a class="facebook" href="#">

								<i class="fab fa-facebook-f"></i>

								<span>Facebook</span>

							</a>

						</li>

						<li>

							<a class="facebook" href="#">

								<i class="fab fa-twitter"></i>

								<span>Twitter</span>

							</a>

						</li>

						<li class="mx-3">

							<a class="facebook" href="#">

								<i class="fab fa-google-plus-g"></i>

								<span>Google+</span>

							</a>

						</li>

						<li>

							<a class="facebook" href="#">

								<i class="fab fa-pinterest-p"></i>

								<span>Pinterest</span>

							</a>

						</li>

					</ul>

				</div>

			</div>

		</div>

	</footer>

		

	<script src="js/jquery-2.2.3.min.js"></script>

	<!-- start-smooth-scrolling -->

	<script src="js/move-top.js"></script>

	<script src="js/easing.js"></script>

	<script>

		jQuery(document).ready(function ($) {

			$(".scroll").click(function (event) {

				event.preventDefault();



				$('html,body').animate({

					scrollTop: $(this.hash).offset().top

				}, 1000);

			});

		});

	</script>

	<!-- //end-smooth-scrolling -->

	<!-- dropdown nav -->

	<script>

		$(document).ready(function () {

			$(".dropdown").hover(

				function () {

					$('.dropdown-menu', this).stop(true, true).slideDown("fast");

					$(this).toggleClass('open');

				},

				function () {

					$('.dropdown-menu', this).stop(true, true).slideUp("fast");

					$(this).toggleClass('open');

				}

			);

		});

	</script>

	<!-- //dropdown nav -->

	<!-- smooth-scrolling-of-move-up -->

	<script>

		$(document).ready(function () {

			/*

			var defaults = {

				containerID: 'toTop', // fading element id

				containerHoverID: 'toTopHover', // fading element hover id

				scrollSpeed: 1200,

				easingType: 'linear' 

			};

			*/

			$().UItoTop({

				easingType: 'easeOutQuart'

			});

		});

	</script>

	<!-- //smooth-scrolling-of-move-up -->



	<script src="js/bootstrap.js"></script>

	<!-- js file -->

</body>



</html>