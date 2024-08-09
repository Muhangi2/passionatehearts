@extends('layouts.app')
@section('content')

<div class="inner-banner">
    <div class="opacity">
        <div class="container">
            <h3 class="float-left">History</h3>
            <ul class="float-right">
                <li><a href="{{ route('home') }}" class="tran3s">Home</a></li>
                <li>/</li>
                <li>History</li>
            </ul>
        </div>
    </div>
</div>


<!-- Short banner -->
<div class="short-banner Mfix">
    <div class="container">
        <div class="bg">
            <div class="opacity top-text clear-fix">
                <div class="float-left">
                    <p>We are a group of pastors driven by a desire to spread the gospel of God's love and create a transformed society.</p>
                    <p>Our vision is to see the disadvantaged transformed, their spirits renewed, souls nourished, and bodies strengthened. We work relentlessly to create a world in which improved standards of living are a reality, reflecting the wholeness God desires for all.</p>
                </div>
                <a href="{{ route('contact') }}" class="tran3s float-right hvr-bounce-to-right">Join Us</a>
            </div>
        </div>
    </div>
</div>
			<!-- Cause Details ___________________ -->
			<div class="cause-details-page ">
				<div class="container">
					<div class="theme-left-half-section float-left">
						<div class="cause-main-content">
							<h5>Our background history</h5>
							<p>Passionate Hearts Ministries is a Ugandan charity dedicated to supporting vulnerable populations in Mbarara, Western Uganda focusing on orphans, abandoned children, youth in need, school dropouts, and disadvantaged women.
                            . <br><br>
							<div class="img skills">
								<img src="images/inner-page/team.jpg" alt="Image">
								 <!-- /.text -->
							</div> <!-- /.img -->
							<p>
                            We provide our beneficiaries with valuable skills training programs in tailoring, mechanics, handicrafts, tie-dye decorations, welding, and knitting. This empowers them to achieve self-sufficiency and build brighter futures. Beyond skills training, we establish income-generating projects such as piggery, beekeeping, poultry farming, crop growing, and rabbit rearing. This ensures our beneficiaries have a long-term means to support themselves and their families. <br> <br>
							Passionate Hearts Ministries can reach even more individuals and families within our community with your support. </p>
						</div> <!-- /.cause-main-content -->
					</div> <!-- /.theme-left-half-section -->

					<!-- ==================== Side bar ================ -->
				 <!-- /.sidebar -->
				</div> <!-- /.container -->
			</div> <!-- /.cause-details-page -->

	   	

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s p-color-bg round-border">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>
			<!-- pre loader  -->
		 	<div id="loader-wrapper">
				<div id="loader"></div>
			</div>
 @endsection