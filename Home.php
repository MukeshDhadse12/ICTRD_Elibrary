<?php include('includes1/header_Front.php');?>
<style>
	
	/* banner Slider CSS */
	.banner-inner-text {
		color: blue;
		margin-left: 150px;
		text-align: right;
	}

	.banner-inner-para {
		color: green;
		text-align: right;

	}

	.banner-inner-span {
		color: peru;
		box-shadow: #000;
	}


	/* Feauterd Book CSS */
	h2 {
		color: #000;
		font-size: 26px;
		font-weight: 300;
		text-align: center;
		text-transform: uppercase;
		position: relative;
		margin: 30px 0 60px;
	}

	h2::after {
		content: "";
		width: 100px;
		position: absolute;
		margin: 0 auto;
		height: 4px;
		border-radius: 1px;
		background: #7ac400;
		left: 0;
		right: 0;
		bottom: -20px;
	}

	.carousel{
		margin: 50px auto;
		padding: 0 0px;
	}
	


	.carousel #carousel-item-featured {
		color: #747d89;
		min-height: 325px;
		text-align: center;
		overflow: hidden;
	}

	.carousel .thumb-wrapper {
		padding: 25px 15px;
		background: #fff;
		border-radius: 6px;
		text-align: center;
		position: relative;
		box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
	}
	

	.carousel .item .img-box {
		height: 200px;
		margin-bottom: 20px;
		width: 100%;
		position: relative;
	}

	.carousel .item img {
		max-width: 100%;
		max-height: 100%;
		display: inline-block;
		position: absolute;
		bottom: 0;
		margin: 0 auto;
		left: 0;
		right: 0;
	}

	.carousel .item h4 {
		font-size: 18px;
	}

	.carousel .item h4,
	.carousel .item p,
	.carousel .item ul {
		margin-bottom: 5px;
	}

	.carousel .thumb-content .btn {
		color: white;
		font-size: 11px;
		text-transform: uppercase;
		font-weight: bold;
		background: #0f8967;
		border: 1px solid;
		padding: 6px 14px;
		margin-top: 5px;
		line-height: 16px;
		border-radius: 20px;
	}

	.carousel .thumb-content .btn:hover,
	.carousel .thumb-content .btn:focus {
		color: #fff;
		background: orange;
		box-shadow: none;
	}

	.carousel .thumb-content .btn i {
		font-size: 14px;
		font-weight: bold;
		margin-left: 5px;
	}

	.carousel .item-price {
		font-size: 13px;
		padding: 2px 0;
	}

	.carousel .item-price strike {
		opacity: 0.7;
		margin-right: 5px;
	}

	#carousel-control-prev,
	#carousel-control-next {
		height: 44px;
		width: 40px;
		background: #0f8967;
		margin: auto 0;
		border-radius: 4px;
		opacity: 0.8;
	}

	#carousel-control-prev:hover,
	#carousel-control-next:hover {
		background: #0f8967;
		opacity: 1;
	}

	#carousel-control-prev i,
	#carousel-control-next i {
		font-size: 36px;
		position: absolute;
		top: 50%;
		display: inline-block;
		margin: -19px 0 0 0;
		z-index: 5;
		left: 0;
		right: 0;
		color: #fff;
		text-shadow: none;
		font-weight: bold;
	}

	#carousel-control-prev i {
		margin-left: -2px;
	}

	#carousel-control-next i {
		margin-right: -4px;
	}

	.carousel-indicators {
		bottom: -50px;
	}

	.carousel-indicators li,
	.carousel-indicators li.active {
		width: 10px;
		height: 10px;
		margin: 4px 3px;
		border-radius: 50%;
		border: none;
	}

	.carousel-indicators li {
		background: rgba(0, 0, 0, 0.2);
	}

	.carousel-indicators li.active {
		background: rgba(0, 0, 0, 0.6);
	}

	.carousel .wish-icon {
		position: absolute;
		right: 10px;
		top: 10px;
		z-index: 99;
		cursor: pointer;
		font-size: 16px;
		color: #abb0b8;
	}

	.carousel .wish-icon .fa-heart {
		color: #ff6161;
	}

	.star-rating li {
		padding: 0;
	}

	.star-rating i {
		font-size: 14px;
		color: #ffc000;
	}


	/* Readers Testimonials */

	.h2 {
		color: #333;
		text-align: center;
		text-transform: uppercase;
		font-family: "Roboto", sans-serif;
		font-weight: bold;
		position: relative;
		margin: 30px 0 60px;
	}

	.h2::after {
		content: "";
		width: 100px;
		position: absolute;
		margin: 0 auto;
		height: 3px;
		background: #8fbc54;
		left: 0;
		right: 0;
		bottom: -10px;
	}

	.col-center {
		margin: 0 auto;
		float: none !important;
	}

	#myCarousel-testimonial {
		padding: 0 70px;
	}

	.carousel .carousel-item {
		color: #999;
		font-size: 14px;
		text-align: center;
		overflow: hidden;
		min-height: 290px;
	}

	.carousel .carousel-item #img-box {
		width: 135px;
		height: 135px;
		margin: 0 auto;
		padding: 5px;
		border: 1px solid #ddd;
		border-radius: 50%;
	}

	.carousel #img-box img {
		width: 100%;
		height: 100%;
		display: block;
		border-radius: 50%;
	}

	.carousel #testimonial {
		padding: 30px 0 10px;
		color: black;
	}

	.carousel .overview {
		font-style: italic;
		color: black;

	}

	.carousel .overview b {
		text-transform: uppercase;
		color: #0f8967;
	}

	#carousel-prev-btn,
	#carousel-next-btn {
		width: 40px;
		height: 40px;
		margin-top: -20px;
		top: 50%;
		background: none;
	}

	#carousel-prev-btn i,
	#carousel-next-btn i {
		font-size: 68px;
		line-height: 42px;
		position: absolute;
		display: inline-block;
		color: rgba(0, 0, 0, 0.8);
		text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
	}

	.carousel-indicators {
		bottom: -40px;
	}

	#carousel-indicators li,
	#carousel-indicators li.active {
		width: 12px;
		height: 12px;
		margin: 5px 3px;
		border-radius: 50%;
		border: none;
	}

	#carousel-indicators li {
		background: #000;
		border-color: transparent;
		box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
	}

	#carousel-indicators li.active {
		background: #555;
		box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
		color: #000;
	}

	/* Footer CSS */

	.footer {
		background-color: #239073e0;
		color: white;

		padding: 2px;
		position: relative;
		bottom: 0;
		width: 100%;
	}

	#minimal-bootstrap-carousel {
		margin-top: 0px !important;
	}


	.efonts {
		color: black;


	}

	.upcomtext {
		color: #ff6700;
		

	}
	



	/* Featured Product*/
	/*Slider Css */
</style>

<!-- Slider Caurasel Start-->
<div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-content-style slider-home-one" >
        <div class="carousel-inner inner2">
            <div class="carousel-item active slide-1" style="background: url(./Images/new_banner.png)" data-interval="2000">
                <div class="carousel-caption">
                    <div class="container" style=" margin-right:300px; padding-right:300px;">
                        <div class="row h-100">
                            <div class="col-lg-12 my-auto">
                                <div class="banner-inner-text mt-4  " >
									
								<h1 style="font-size: 3.25em;" class="display-1 font-weight-bold"><span class="banner-inner-span ">ICTRD</span> E-Library</h1>
								<p class="text-cont banner-inner-para " data-animation="animated fadeInUp">Read Anywhere, Anytime
                                    </p>
                                    <div class="owl-carousel owl-theme owl-loaded owl-drag" id="banner-inner-slider">


                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item slide-2" style="background: url(./Images/new_banner2.png)" data-interval="2000">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row h-100">
                            <div class="col-lg-12 my-auto">
                                <div class="banner-text" style="  padding-left:600px;">
                                    <a href="ContactUs.php" data-animation="animated fadeInDown" 
                                        >Contact Us For Any Query</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item slide-5" style="background: url(./Images/banner4.jpg)" data-interval="2000">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row h-100">
                            <div class="col-lg-12 my-auto">
                                <div class="banner-text" style="  padding-bottom:300px;">
                                    <a href="Book.php" data-animation="animated fadeInDown">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item slide-3" style="background: url(./Images/banner_2.jpg)" data-interval="2000">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row h-100">
                            <div class="col-lg-12 my-auto">
                                <div class="banner-text">
                                    
                                    <a href="Book.php" data-animation="animated fadeInDown">Free Ebooks</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item slide-4" style="background: url(./Images/new_banner3.png)" data-interval="2000">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="banner-text">
                                    <h4 style="font-size: 3.25em;" class="display-1 font-weight-bold"
                                        data-animation="animated fadeInUp">Books Anywhere Anytime</h4>
                                    <p class="text-cont" data-animation="animated fadeInUp">Carry your world with you
                                    </p>
                                    <img class="d-none m-d-block" src="./Images/Slider1.jpeg">
                                    <a href="Book.php" data-animation="animated fadeInDown">Ebooks for Competitions</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 m-auto m-d-none">
                                <div class="banner-textimg">
                                    <img src="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>


<!-- Slider end -->

<!-- New Div For Text Qoute Start-->
<div class="container">
	<div class="row2">

		<div class="col-lg-12 mb-3 mt-4 aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom">

			<div class="upcome-heading">
				<h1 class="text-center">ICTRD E-Library A Uniquely Portable Magic</h1>
			</div>

			<p class="upcomtext text-center">"Empowering Minds, One Click at a Time: Welcome to the Infinite Realm of
				Knowledge."</p>

		</div>


	</div>



</div>



<!--Featured Books Carousel -->
<div class="" style="background-image: url('Images/orange-bg.jpg'); background-repeat: no-repeat;
  background-size: cover; ">
	<div class="row">
		<div class="col-md-12">
			<h2><b>Our Top Categories</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active" id="carousel-item-featured">
						<div class="row">
							<div class="col-sm-3">
								<div class="thumb-wrapper">

									<div class="img-box">
										<img src="./Book_For_Front_Page/girlboss.png" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Non-Fiction</h4>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p class="item-price"> </p>
										<a href="Book.php" class="btn btn-primary">Download</a>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumb-wrapper">

									<div class="img-box">
										<img src=" ./Book_For_Front_Page/fiction.png" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Fiction</h4>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p class="item-price"> </p>
										<a href="Book.php" class="btn btn-primary">Download</a>
									</div>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="thumb-wrapper">

									<div class="img-box">
										<img src=" ./Book_For_Front_Page/food.png" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Non-Fiction</h4>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p class="item-price"> </p>
										<a href="Book.php" class="btn btn-primary">Download</a>
									</div>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="thumb-wrapper">

									<div class="img-box">
										<img src=" ./Book_For_Front_Page/gary.png" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Non-Fiction</h4>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p class="item-price"> </p>
										<a href="Book.php" class="btn btn-primary">Download</a>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="item carousel-item" id="carousel-item-featured">
						<div class="row">
							<div class="col-sm-3">
								<div class="thumb-wrapper">

									<div class="img-box">
										<img src=" ./Book_For_Front_Page/Angels_Blood.png" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Non-Fiction</h4>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p class="item-price"> </p>
										<a href="Book.php" class="btn btn-primary">Download</a>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumb-wrapper">

									<div class="img-box">
										<img src=" ./Book_For_Front_Page/beyond.jpg" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>General</h4>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p class="item-price"> </p>
										<a href="Book.php" class="btn btn-primary">Download</a>
									</div>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="thumb-wrapper">

									<div class="img-box">
										<img src="./Book_For_Front_Page/save.png " class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Non-Fiction</h4>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p class="item-price"> </p>
										<a href="Book.php" class="btn btn-primary">Download</a>
									</div>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="thumb-wrapper">

									<div class="img-box">
										<img src="./Book_For_Front_Page/communication.png" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Computer</h4>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p class="item-price"> </p>
										<a href="Book.php" class="btn btn-primary">Download</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item carousel-item " id="carousel-item-featured">
						<div class="row">
							<div class="col-sm-3">
								<div class="thumb-wrapper">

									<div class="img-box">
										<img src="./Book_For_Front_Page/Asura.jpg" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Fiction</h4>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p class="item-price"> </p>
										<a href="Book.php" class="btn btn-primary">Download</a>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumb-wrapper">

									<div class="img-box">
										<img src=" ./Book_For_Front_Page/attachments.png" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Non-Fiction</h4>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p class="item-price"> </p>
										<a href="Book.php" class="btn btn-primary">Download</a>
									</div>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="thumb-wrapper">

									<div class="img-box">
										<img src="./Book_For_Front_Page/daring.png " class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Non-Fiction</h4>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p class="item-price"> </p>
										<a href="Book.php" class="btn btn-primary">Download</a>
									</div>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="thumb-wrapper">

									<div class="img-box">
										<img src=" ./Book_For_Front_Page/Anatomy.png" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Non-Fiction</h4>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p class="item-price"> </p>
										<a href="Book.php" class="btn btn-primary">Download</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control-prev" href="#myCarousel" data-slide="prev" id="carousel-control-prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control-next" href="#myCarousel" data-slide="next" id="carousel-control-next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
</div>




<!--Happy Readers content -->
<div class="" style="background-image: url('Images/orange-bg1.jpg'); background-repeat: no-repeat; background-size: cover; ">
	<div class="row">
		<div class="col-lg-8 mx-auto">
			<h2 class="h2">Happy Readers</h2>
			<div id="myCarousel-testimonial" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators" id="carousel-indicators">
					<li data-target="#myCarousel-testimonial" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel-testimonial" data-slide-to="1"></li>
					<li data-target="#myCarousel-testimonial" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="img-box" id="img-box"><img src="./Images/happy-customer.jpeg" alt=""></div>
						<p class="testimonial" id="testimonial">I recently started using the ICTRD E-Library, and I must
							say, it's a fantastic resource for book lovers and researchers alike. The user interface is
							clean and intuitive, making it easy to navigate through the vast collection of books,
							journals, and articles. 

						</p>
						<p class="overview"><b>Mukesh</b>, Web Developer</p>
					</div>
					<div class="carousel-item">
						<div class="img-box" id="img-box"><img src="./Images/Dewanshi.jpg" alt=""></div>
						<p class="testimonial" id="testimonial">Great e-library with vast resources and user-friendly
							interface. Slightly slow at times, but overall a fantastic tool for readers and researchers.
						</p>
						<p class="overview"><b>Dewanshi Dhote</b>, Web Developer</p>
					</div>
					
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control-prev" id="carousel-prev-btn" href="#myCarousel-testimonial"
					data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control-next" id="carousel-next-btn" href="#myCarousel-testimonial"
					data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
</div>

<!--Trending News Section Start-->
<div class="news-section pt-5 pb-5 border-bottom" style="background-image: url('Images/gry-light.jpg'); background-repeat: no-repeat;
  background-size: cover; ">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-4">
				<h2 class="text-center h2">As Seen On</h2>
				
			</div>
			

			<!--First News Section-->
			<div class="col-xl-4  mb-4">
				<div class="" data-aos="flip-right">
					<div style="height:120px; width:300px;background-color:white; ">
					<img src="./Images/orderofindia1.png">
					</div>
					<div>
					<p style="color:#343434; ">E books have been there for long.
						 Thanks to kindle and other e readers that
						  people developed a liking towards ebooks </p>
						  <a href="Home.php" class="btn btn-primary">Read More</a>
					</div>
					
					
				</div>
			</div>

			<!--Second News-->

			<div class="col-xl-4  mb-4">
				<div class="" data-aos="flip-right">
				<div style="height:120px; width:300px; background-color:white; ">
					<img src="./Images/centraltimes.png">
					</div>
					
					<p style="color:#343434">Heavy books and excessive burden on the shoulders 
						of the students is soon going to be a thing of the past. 
						</p>
						<a href="Home.php" class="btn btn-primary">Read More</a>
				</div>
			</div>

			<div class="col-xl-4  mb-4">
				<div class="" data-aos="flip-right">
					<div style="height:120px; width:300px;background-color:white; ">
					<img src="./Images/orderofindia1.png">
					</div>
					
					<p style="color:#343434">E books have been there for long.
						 Thanks to kindle and other e readers that people
						  developed a liking towards ebooks </p>
						  <a href="Home.php" class="btn btn-primary">Read More</a>
				</div>
			</div>

			

		</div>
	</div>
</div>

<?php include('includes1/footer_front.php');?>