
@extends('layouts.app')
@section('styles')
<style>
    .our-causes {
        padding: 60px 0;
    }
    .container {
        max-width: 1000px;
        margin: 0 auto;
    }
    .row {
        display: flex;
        flex-wrap: wrap;
        margin: -15px;
    }
    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding: 15px;
    }
    .single-cause-wrapper {
        display: flex;
        flex-direction: column;
        height: 100%;
        border: 1px solid #e0e0e0;
        overflow: hidden;
    }
    .img-holder {
        height: 250px; /* Fixed height for all images */
        overflow: hidden;
    }
    .img-holder img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .text {
        padding: 20px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    .text h6 {
        margin-top: 0;
        margin-bottom: 15px;
    }
    .text p {
        flex-grow: 1;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 4; /* Limit to 4 lines */
        -webkit-box-orient: vertical;
        margin-bottom: 15px;
    }
    .text a.tran3s {
        align-self: flex-start;
    }
</style>
@endsection
@section('content')
<!-- ======================== Inner Page Banner ================= -->
<div class="inner-banner">
    <div class="opacity">
        <div class="container">
            <h3 class="float-left">What We Do</h3>
            <ul class="float-right">
                <li><a href="index.html" class="tran3s">What We do</a></li>
                <li>/</li>
                <li>Services</li>
            </ul>
        </div> <!-- /.container -->
    </div> <!-- /.opacity -->
  </div> <!-- /.inner-banner -->
 </div> <!-- /.short-banner -->


	
	        <!-- Our Causes ___________________________ -->
            <div class="our-causes fix skills">
    <div class="container">
        <div class="theme-title">
            <h2>Who are we</h2>
            <p>Run to help children and people for right care</p>
            <span></span>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="single-cause-wrapper">
                    <div class="img-holder">
                        <img src="images/cause/education.jpg" alt="Image">
                    </div>
                    <div class="text">
                        <h6><a href="cause-details-1.html">Education Center</a></h6>
                        <p>Equip disadvantaged youth with the knowledge and skills they need to succeed. Providing education and training to underserved young people empowers them to break the cycle of poverty, gain employment, and contribute positively to society. Investing in their potential ensures a brighter future for all, fostering resilience, innovation, and economic growth.</p>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="single-cause-wrapper">
                    <div class="img-holder">
                        <img src="images/cause/skilling.jpg" alt="Image">
                    </div>
                    <div class="text">
                        <h6><a href="cause-details-1.html">Skilling Center</a></h6>
                        <p>Empower young people with practical skills that enable them to be job creators or find employment. Providing relevant education and training equips disadvantaged youth with the tools they need to navigate the job market, start their own businesses, and achieve financial independence. This approach not only reduces unemployment but also stimulates economic growth and innovation.</p>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="single-cause-wrapper">
                    <div class="img-holder">
                        <img src="images/cause/health.jpg" alt="Image">
                    </div>
                    <div class="text">
                        <h6><a href="cause-details-1.html">Health  Center
                        </a></h6>
                        <p>Improve the health and well-being of the community. Empowering young people with practical skills that enable them to be job creators or find employment leads to increased economic stability. As individuals gain financial independence, they can afford better healthcare, nutritious food, and safe housing, contributing to the overall health and well-being of the entire community.</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-cause-wrapper">
                    <div class="img-holder">
                        <img src="images/cause/financial.jpg" alt="Image">
                    </div>
                    <div class="text">
                        <h6><a href="cause-details-1.html">Financial Center</a></h6>
                        <p>Promote financial independence and self-sufficiency within the community. Improving the health and well-being of the community involves empowering individuals, especially youth, with the skills needed to secure employment or create businesses. This leads to economic stability, reducing reliance on external aid and fostering a self-sufficient, resilient community capable of sustaining its own growth and development.</p>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> <!-- /.our-causes -->
	   		<!-- Footer _____________________________ -->
        
	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s p-color-bg round-border">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>
			<!-- pre loader  -->
		 	<div id="loader-wrapper">
				<div id="loader"></div>
			</div>   
@endsection

