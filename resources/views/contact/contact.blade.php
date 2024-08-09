@extends('layouts.app')
@section('content')
	        <!-- Get In Touch _____________________ -->
	    <!-- Inner Page Banner -->
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
        <!-- Get In Touch _____________________ -->
        <div class="get-in-touch">
            <div class="container">
                <div class="theme-title">
                    <h2>Get in Touch</h2>
                    <p>Contact Us</p>
                    <span></span>
                </div> <!-- /.theme-title -->

                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="contact-address">
                            <div class="single-content">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h5>OFFICE ADDRESS</h5>
                                <p>Bwizibwera-Rutooma Town Council, Mbarara District</p>
                            </div> <!-- /.single-content -->
                            <div class="single-content">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h5>Phone</h5>
                                <p>+256-772411941 | +256-704488302 </p>
                            </div> <!-- /.single-content -->
                            <div class="single-content">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h5>Working hours</h5>
                                <p>Monday To Friday - 9am to 5pm <br>Saturday & Sunday - Closed</p>
                            </div> <!-- /.single-content -->
                            <div class="single-content">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <h5>Email</h5>
                                <p>info@passionateheartsministries.org</p>
                            </div> <!-- /.single-content -->
                        </div> <!-- /.contact-address -->
                    </div> <!-- /.col- -->

                    <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                        <form action="inc/sendemail.php" class="form-validation" autocomplete="off">
                            <h5>SEND US EMAIL</h5>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="single-input">
                                        <input type="text" placeholder="Enter your full name" name="name">
                                    </div> <!-- /.single-input -->
                                </div> <!-- /.col- -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="single-input">
                                        <input type="email" placeholder="Enter your email" name="email">
                                    </div> <!-- /.single-input -->
                                </div> <!-- /.col- -->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="single-input">
                                        <input type="text" placeholder="subject" name="sub">
                                    </div> <!-- /.single-input -->
                                </div> <!-- /.col- -->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="single-input">
                                        <textarea placeholder="Write your message" name="message"></textarea>
                                    </div> <!-- /.single-input -->
                                </div> <!-- /.col- -->
                            </div> <!-- /.row -->
                            <button class="tran3s p-color-bg hvr-bounce-to-right">Send Message</button>
                        </form>

                        <!-- Contact alert -->
                        <div class="alert_wrapper" id="alert_success">
                            <div id="success">
                                <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                                <div class="wrapper">
                                    <p>Your message was sent successfully.</p>
                                </div>
                            </div>
                        </div> <!-- End of .alert_wrapper -->
                        <div class="alert_wrapper" id="alert_error">
                            <div id="error">
                                <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                                <div class="wrapper">
                                    <p>Sorry!Something Went Wrong.</p>
                                </div>
                            </div>
                        </div> <!-- End of .alert_wrapper -->
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.get-in-touch --> <!-- /.get-in-touch -->

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s p-color-bg round-border">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>
			<!-- pre loader  -->
		 	<div id="loader-wrapper">
				<div id="loader"></div>
			</div>
 @endsection