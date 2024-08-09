@extends('layouts.app')
@section('styles')
		<style>
			.two-column-text {
				padding: 60px 0;
				background-color: #f9f9f9;
			}
			.column {
				padding: 30px;
				background-color: #fff;
				box-shadow: 0 0 20px rgba(0,0,0,0.1);
				margin-bottom: 30px;
				border-radius: 10px;
				transition: transform 0.3s ease;
			}
			.column:hover {
				transform: translateY(-5px);
			}
			.column i {
				font-size: 48px;
				color: #4CAF50;
				margin-bottom: 20px;
			}
			.column h6 {
				font-size: 24px;
				margin-bottom: 15px;
			}
			.column p {
				margin-bottom: 20px;
			}
			.column a {
				display: inline-block;
				padding: 10px 20px;
				background-color: #4CAF50;
				color: #fff;
				text-decoration: none;
				border-radius: 5px;
				transition: background-color 0.3s ease;
			}
			.column a:hover {
				background-color: #45a049;
			}
			.why-choose-us {
				padding: 60px 0;
			}
			.who-we-are h5 {
				font-size: 28px;
				margin-bottom: 20px;
			}
			.who-we-are p {
				margin-bottom: 20px;
			}
			.who-we-are img {
				width: 100%;
				border-radius: 10px;
				margin-bottom: 20px;
			}
			.who-we-are ul {
				padding-left: 20px;
			}
			.who-we-are ul li {
				margin-bottom: 10px;
			}
		</style>
		@endsection
        @section('content')

		<div class="inner-banner">
    <div class="opacity">
        <div class="container">
            <h3 class="float-left">Contact</h3>
            <ul class="float-right">
                <li><a href="{{ route('home') }}" class="tran3s">Home</a></li>
                <li>/</li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</div>

			<!-- Short banner __________________________ -->
	        <div class="short-banner Mfix">
	        	<div class="container">
	        		<div class="bg">
	        			<div class="opacity top-text clear-fix">
		        			<div class="float-left">
		        				<h3>I want to spend my life helping people,</h3>
		        				<span>how can I do so while also making a good living?</span>
		        				<p>We felt the risky environment and circumstances for children over the world. Then we started working for them in a village. Day after day, we received a delightful response from the people who keep.... </p>
		        			</div>

		        			<a href="{{ route('contact') }}" class="tran3s float-right hvr-bounce-to-right">Join Us</a>
		        		</div> <!-- /.opacity -->
	        		</div> <!-- /.bg -->
	        	</div> <!-- /.container -->
	        </div> <!-- /.short-banner -->


	        <!-- Two Column Text ______________________ -->
			<div class="tow-column-text">
       
            <div class="container">
                <div class="left-half float-left box">
                    <i class="fa fa-signal" aria-hidden="true"></i>
                    <span class="p-color-bg"></span>
                    <h6>OUR MISSION</h6>
                    <p>To mobilise youths, disadvantaged women, school dropouts and needy children to cope up with
                        life’s demands and equip them with skills.</p>
                    <a href="{{ route('contact') }}" class="tran3s p-color-bg hvr-bounce-to-right mt-auto">Learn More</a>
                </div> <!-- /.left-half -->
                <div class="right-half float-left box">
                    <i class="fa fa-fire" aria-hidden="true"></i>
                    <span class="p-color-bg shape-fix"></span>
                    <h6>OUR VISION</h6>
                    <p>Building communities where youth, women and the vulnerable sustain themselves.</p>
                    <a href="{{ route('contact') }}"class="tran3s p-color-bg hvr-bounce-to-right mt-auto">Learn More</a>
                </div> <!-- /.left-half -->
            </div> <!-- /.container -->
        </div><!-- /.tow-column-text -->


		<div class="why-choose-us">
    <div class="container">
        <div class="row">
            <!-- Text Section -->
            <div class="col-lg-6 col-md-6 col-sm-12 who-we-are">
                <h5 class="title-style-one">WHO WE ARE</h5>
                <p>We are a team of pastors called to preach the gospel of the kingdom of God. Our goal is to have transformed society with improved standards of living as we see the disadvantaged sound in their spirit, soul and body..</p>
            </div>

            <!-- Image Section -->
            <div class="col-lg-6 col-md-6 col-sm-12 image-section">
                <img src="images/home/2.jpg" alt="image" class="img-fluid">
            </div>
        </div>
    </div>
</div>
 <!-- /.why-choose-us -->


	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s p-color-bg round-border">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>
			<!-- pre loader  -->
		 	<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

  @endsection


