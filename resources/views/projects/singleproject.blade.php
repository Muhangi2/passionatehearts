@extends('layouts.app')
@section('content')

				<!-- ======================== Inner Page Banner ================= -->
				<div class="inner-banner m-fix">
					<div class="opacity">
						<div class="container">
							<h3 class="float-left">News and Story</h3>
							<ul class="float-right">
								<li><a href="index.html" class="tran3s">Home</a></li>
								<li>/</li>
								<li> News Details</li>
							</ul>
						</div> <!-- /.container -->
					</div> <!-- /.opacity -->
				</div> <!-- /.inner-banner -->
			</div> <!-- /.menu-banner -->



			<!-- Blog ___________________ -->
			<div class="blog-details-page">
				<div class="container">
					<div class="theme-left-half-section float-left blog-content">
						<div class="blog-date clear-fix">
							<div >
								
								<h2>{{ $project->created_at->format('M d, Y') }}</h2>
							</div> <!-- /.box -->
							
						</div> <!-- /.blog-date -->

						<h5>{{$project->title}}</h5>
						
						@if($project->image)
						<img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" style="width: 700px; height: 600px; object-fit: cover;">
                      
                         @endif
						<p>{{$project->description}}</p>
						

						<ul class="share">
							<li>Share</li>
							<li><a href="#" class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="tran3s"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#" class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="tran3s"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
						</ul>
						 <!-- /.author-text -->

						<div class="next-blog-item">
							<h6 class="title-style-one">YOU CAN READ NEXT</h6>
							<div class="wrapper clear-fix">
                               @foreach($otherprojects as $project )
								<div class="single-item float-left">
									<div class="item">
										<div class="img-holder">
										<img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" style="width: 400px; height: 300px; object-fit: cover;">
											<div class="overlay tran3s">
												<div><span><a href="{{ route('projects.show', $project->id) }}" class="tran3s hvr-bounce-to-right-two">View More</a></span></div>
											</div> <!-- /.overlay -->
										</div> <!-- /.img-holder -->

										<a href="{{ route('projects.show', $project->id) }}"class="tran3s">{{ $project->title }}</a>
										<span>{{ $project->created_at->format('M d, Y') }}</span>
									</div> <!-- /.item -->
								</div>
								@endforeach
								<!-- /.single-item -->
							</div> <!-- /.wrapper -->
						</div> <!-- /.next-blog-item -->
 <!-- /.leave-comment -->
					</div> <!-- /.theme-left-half-section -->

					<!-- ==================== Side bar ================ -->
					<div class="sidebar float-right">

						 <!-- /.search -->

						<div class="sidebar-recent-post sidebar-content">
							<h6>Recent Post</h6>
							@foreach($otherprojects as $project )
							<div class="post-wrapper clear-fix">
								<a href="{{ route('projects.show', $project->id) }}" class="clear-fix tran3s">{{ $project->title }}</a>
								<span class="float-left">{{ $project->created_at->format('M d, Y') }}</span>
							</div>
                            @endforeach
							 <!-- /.post-wrapper -->
						</div> <!-- /.sidebar-recent-post --> <!-- /.cause-category -->

						<div class="sidebar-content help-wedgit">
							<div class="opacity">
								<p><span class="p-color">How You will help us</span></p>
								<ul>
									<li><a class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i> Become Volunteer</a></li>
									<li><a  class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i> Media</a></li>
									<li><a  class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i> Donation Send</a></li>
									<li><a  class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i> Helping Hand</a></li>
									<li><a  class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i> Self Gift</a></li>
									<li><a  class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i> Bank Transfer</a></li>
								</ul>
							</div>
						</div> <!-- /.help-wedgit -->

						<div class="sidebar-content donate-slider m-fix">
							<img src="images/inner-page/children.jpg" width="450px" height="350px" alt="Image">
							<div id="donate-carousel" class="carousel slide" data-ride="carousel">
								<!-- Left and right controls -->
							  <a class="left carousel-control tran3s p-color-bg hvr-bounce-to-right" href="#donate-carousel" role="button" data-slide="prev">
							    <i class="fa fa-angle-left" aria-hidden="true"></i>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control tran3s p-color-bg hvr-bounce-to-right" href="#donate-carousel" role="button" data-slide="next">
							    <i class="fa fa-angle-right" aria-hidden="true"></i>
							    <span class="sr-only">Next</span>
							  </a>


							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							    <div class="item active">
							      <h6>POOR PEOPLE NEED HELP</h6>
								  <p>Every little bit helps. There are many ways to contribute to improving the lives of those in need</p>
							    
							    </div>
							    <div class="item">
							      <h6>FEED THE HUNGRY</h6>
							      <p>Your donation can provide nutritious meals and bring hope to those in need.</p>
							      
							    </div>
							    <div class="item">
							      <h6>PROVIDE SHELTER</h6>
							      <p> Help us provide shelter to those who have none, ensuring they have a place to call home</p>
							      
							    </div>
							  </div>
							</div> <!-- /#donate-carousel -->
						</div> <!-- /.donate-slider -->
					</div> <!-- /.sidebar -->
				</div> <!-- /.container -->
			</div> <!-- /.blog-page -->  
	       <x-footer/>

	   		<!-- Donate Modal _____________________________ -->
	   		<div class="modal fade" id="donate" tabindex="-1" role="dialog">
			  <div class="modal-dialog container" role="document">
			    <div class="modal-content">
			    	<div class="donation-form-wrapper clear-fix">
			    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
			    		<div class="donate-heading p-color-bg">
			    			<h6>DONATE TODAY <br> You are donating to : <span>Bd Homeless Children</span></h6>
			    		</div> <!-- /.donate-heading -->
			    	</div> <!-- End of .donation-form-wrapper -->

			    	<form action="#">
			    		<p>Your Donation</p>
			    		<div class="donate-amount clear-fix">
			    			<span class="donate-price float-left p-color-bg">$20</span>
			    			<span class="donate-price float-left p-color-bg">$30</span>
			    			<span class="donate-price float-left p-color-bg">$50</span>
			    			<span class="donate-price float-left p-color-bg">$70</span>
			    			<input type="text" placeholder="Type your amount ( $ )" class="donate-amount-handelar float-left">
			    		</div> <!-- /.donate-amount -->
			    		<p>Your Details</p>
			    		<div class="row">
			    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    				<div class="single-input">
			    					<input type="text" placeholder="First name">
			    				</div> <!-- /.single-input -->
			    			</div> <!-- /.col- -->
			    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    				<div class="single-input">
			    					<input type="text" placeholder="Last name">
			    				</div> <!-- /.single-input -->
			    			</div> <!-- /.col- -->
			    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    				<div class="single-input">
			    					<input type="text" placeholder="Phone">
			    				</div> <!-- /.single-input -->
			    			</div> <!-- /.col- -->
			    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    				<div class="single-input">
			    					<input type="email" placeholder="Email">
			    				</div> <!-- /.single-input -->
			    			</div> <!-- /.col- -->
			    		</div> <!-- /.row -->
			    		<p>Card Information</p>
			    		<div class="row">
			    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    				<div class="single-input">
			    					<input type="text" placeholder="Card Number">
			    				</div> <!-- /.single-input -->
			    			</div> <!-- /.col- -->
			    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    				<div class="single-input">
			    					<input type="text" placeholder="cvc">
			    				</div> <!-- /.single-input -->
			    			</div> <!-- /.col- -->
			    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    				<div class="single-input">
			    					<input type="text" placeholder="Expiration Month (MM)">
			    				</div> <!-- /.single-input -->
			    			</div> <!-- /.col- -->
			    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    				<div class="single-input">
			    					<input type="text" placeholder="Expiration Year  (YYYY)">
			    				</div> <!-- /.single-input -->
			    			</div> <!-- /.col- -->
			    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    				<div class="single-input">
			    					<textarea placeholder="Extra Note"></textarea>
			    				</div> <!-- /.single-input -->
			    			</div> <!-- /.col- -->
			    		</div> <!-- /.row -->

			    		<div class="clear-fix">
			    			<button class="submit p-color-bg float-left hvr-bounce-to-right">DONATE</button>
			    			<a href="#" class="p-color-bg paypal float-right hvr-bounce-to-right"><i class="fa fa-paypal" aria-hidden="true"></i> Give by Paypal</a>
			    		</div>
			    	</form>
			    </div> <!-- End of .modal-content -->
			  </div> <!-- End of .modal-dialog -->
			</div> <!-- End of #donate -->

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s p-color-bg round-border">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>
			<!-- pre loader  -->
		 	<div id="loader-wrapper">
				<div id="loader"></div>
			</div>
			@endsection
