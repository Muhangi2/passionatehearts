      @extends('layouts.app')
        <!-- Menu And Banner Wrapper ____________________ -->

        @section('styles')
        <style>
        

 .video-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;  
    margin-top:1.5rem;
    margin-bottom:1.5rem;
   
} 

.video-container iframe {

    textalign:center;
    width: 100%; 
    height: 400px;
   
}
</style>
@endsection

        @section('content')
         <!-- /.menu-banner -->
         <div class="rev-slider-wrapper">
                <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                <div id="main-banner-slider" class="rev_slider" data-version="5.0.7">
                    <ul>

                        <!-- SLIDE1  -->
                        <li data-index="rs-280" data-transition="zoomout" data-slotamount="default"
                            data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"
                            data-rotate="0" data-saveperformance="off" data-title="Dream Big" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/home/slide-1.jpg" alt="image" class="rev-slidebg" data-bgparallax="3"
                                data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone"
                                data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0"
                                data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            {{-- <div class="tp-caption" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-114','-114','-70','-30']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 6; white-space: nowrap; color:#fff;">
                                <span>Passionate Hearts Ministries</span>
                            </div> --}}

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-28','-28','10','26']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="2500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 6; white-space: nowrap;">
                                <h1>DREAM BIG</h1>
                            </div>


                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['38','38','70','90']" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="3000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <h5>They too have dreams and obligations to full fil</h5>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['128','128','170','170']" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="3500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <a href="about-us.html" class="contact-button hvr-bounce-to-right-two">Read More</a>
                            </div>

                        </li>


                        <!-- SLIDE2  -->
                        <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"
                            data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"
                            data-thumb="images/home/slide-1.jpg" data-rotate="0" data-saveperformance="off"
                            data-title="GIVING BACK" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/home/slide-1.jpg" alt="" data-bgposition="center center"
                                data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone"
                                data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0"
                                data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg"
                                data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-28','-28','10','26']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="2500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 6; white-space: nowrap;">
                                <h1>GIVING BACK TO THE COMMUNITY</h1>
                            </div>


                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['38','38','70','90']" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="3000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <h5>There is Life at the end of the Tunnel</h5>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['128','128','170','170']" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="3500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <a href="about-us.html" class="contact-button hvr-bounce-to-right-two">Read More</a>
                            </div>
                        </li>


                        <!-- SLIDE3  -->
                        <li data-index="rs-20" data-transition="zoomin" data-slotamount="7"
                            data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"
                            data-thumb="images/home/slide-1.jpg" data-rotate="0" data-saveperformance="off"
                            data-title="GIVE THEM HOPE" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/home/slide-1.jpg" alt="" data-bgposition="center center"
                                data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone"
                                data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0"
                                data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10"
                                class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-28','-28','10','26']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="2500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 6; white-space: nowrap;">
                                <h1>GIVE THEM HOPE</h1>
                            </div>


                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['38','38','70','90']" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="3000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <h5>Be part of their Life</h5>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['128','128','170','170']" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="3500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <a href="about-us.html" class="contact-button hvr-bounce-to-right-two">Read More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        <!-- Short banner _________
         _________________ -->
        <div class="short-banner">
            <div class="container">
                <div class="opacity p-color-bg top-text clear-fix">
                    <div class="float-left">
                        <h3>PASSIONATE HEARTS MINISTRIES</h3>
                        <span>BUILDING BETTER COMMUNITIES</span>
                        <p>This is a team of pastors called to preach the gospel of the kingdom of God. Our goal is to
                            have transformed society with improved standards of living as we see the disadvantaged sound
                            in their spirit, soul and body</p>
                    </div>

                    <a href="#" class="tran3s float-right hvr-bounce-to-right">Join Us</a>
                </div> <!-- /.opacity -->
            </div> <!-- /.container -->
        </div> <!-- /.short-banner -->


<!-- YouTube Video Section -->

    
  
        <!-- Two Column Text ______________________ -->
        <div class="tow-column-text">
       
            <div class="container">
            <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/XzffP-rDLfM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
                <div class="left-half float-left box">
                    <i class="fa fa-signal" aria-hidden="true"></i>
                    <span class="p-color-bg"></span>
                    <h6>OUR MISSION</h6>
                    <p>To mobilise youths, disadvantaged women, school dropouts and needy children to cope up with
                        life’s demands and equip them with skills.</p>
                    <a href="#" class="tran3s p-color-bg hvr-bounce-to-right mt-auto">Learn More</a>
                </div> <!-- /.left-half -->
                <div class="right-half float-left box">
                    <i class="fa fa-fire" aria-hidden="true"></i>
                    <span class="p-color-bg shape-fix"></span>
                    <h6>OUR VISION</h6>
                    <p>Building communities where youth, women and the vulnerable sustain themselves.</p>
                    <a href="#" class="tran3s p-color-bg hvr-bounce-to-right mt-auto">Learn More</a>
                </div> <!-- /.left-half -->
            </div> <!-- /.container -->
        </div> <!-- /.tow-column-text -->


        <!-- Most Emergency CAUSE ________________  -->
        <div class="emergency-cause skills">
            <div class="container">
                <div class="float-left left-side">
                    <h4>OUR IMPACT</h4>
                    <div class="text">
                        <h6>Our greatest successes in life</h6>
                        <div class="why-choose-us">
                            <div class="who-we-are">
                                <ul>
                                    <li>Trained individuals in various skills for self-sufficiency.</li>
                                    <li>Equipped families with income-generating projects to improve their livelihoods.
                                    </li>
                                    <li>Provided employment opportunities for youths within the projects.</li>
                                    <li>Promotes sustainable practices through crop production and animal rearing.</li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- /.text -->
                    {{-- <h6>Donated</h6> --}}
                    {{-- <div class="codeconSkillbar">
                        <div class="skillBar" data-percent="91%">
                            <span class="PercentText p-color">91%</span>
                        </div>
                    </div> --}}
                </div> <!-- /.left-side -->

                <div class="float-left right-side">
                    <div class="text-wrapper p-color-bg">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <h6>Families Reached</h6>
                                <span></span>
                                <span class="timer" data-from="10" data-to="200" data-speed="2500"
                                    data-refresh-interval="10">0</span>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <h6>​​Ongoing Projects</h6>
                                <span></span>
                                <span class="timer" data-from="0" data-to="09" data-speed="2500"
                                    data-refresh-interval="10">0</span>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <i class="fa fa-child" aria-hidden="true"></i>
                                <h6>Children Helped</h6>
                                <span></span>
                                <span class="timer" data-from="10" data-to="320" data-speed="2500"
                                    data-refresh-interval="10">0</span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <h6>People Trained</h6>
                                <span class="timer" data-from="10" data-to="250" data-speed="2500"
                                    data-refresh-interval="10"></span>
                            </div>
                        </div>
                    </div> <!-- /.text-wrapper -->

                    <a href="cause.html" class="p-color-bg tran3s hvr-bounce-to-right solid">View More</a>
                    <a href="#" class="hvr-bounce-to-right-two" data-toggle="modal"
                        data-target="#donate">Donate</a>
                </div> <!-- /.right-side -->
            </div> <!-- /.container -->
        </div> <!-- /.emergency-cause -->


        {{-- <!-- Our Causes ___________________________ -->
        <div class="our-causes skills">
            <div class="container">
                <div class="theme-title">
                    <h2>OUR CAUSES</h2>
                    <p>Run to help children and people for right care</p>
                    <span></span>
                </div> <!-- /.theme-title -->

                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-cause-wrapper clear-fix">
                            <div class="img-holder float-left"><img src="images/cause/1.jpg" alt="Image"></div>
                            <div class="text float-left">
                                <h6><a href="cause-details-1.html">Encourage For Zakat to people</a></h6>
                                <p>Zakat is something too many Muslims neglect. If you are eligible to give Zakat,</p>
                                <div class="codeconSkillbar">
                                    <div class="skillBar" data-percent="45%">
                                        <span class="PercentText p-color">45%</span>
                                    </div> <!-- /.skillBar -->
                                </div> <!-- /.codeconSkillbar -->

                                <div class="target-ammount clear-fix">
                                    <span class="float-left">Collected : <b>12380$</b></span>
                                    <span class="float-right">Goal : <b>12380$</b></span>
                                </div>
                                <a href="#" class="tran3s p-color-bg hvr-bounce-to-right" data-toggle="modal"
                                    data-target="#donate">Donate</a>
                            </div>
                        </div> <!-- /.single-cause-wrapper -->

                        <div class="single-cause-wrapper clear-fix">
                            <div class="img-holder float-left"><img src="images/cause/2.jpg" alt="Image"></div>
                            <div class="text float-left">
                                <h6><a href="cause-details-1.html">Visit a poor part of town</a></h6>
                                <p>How many big cities have "poor quarters"? Almost every single one.... </p>
                                <div class="codeconSkillbar">
                                    <div class="skillBar" data-percent="55%">
                                        <span class="PercentText p-color">55%</span>
                                    </div> <!-- /.skillBar -->
                                </div> <!-- /.codeconSkillbar -->

                                <div class="target-ammount clear-fix">
                                    <span class="float-left">Collected : <b>24380$</b></span>
                                    <span class="float-right">Goal : <b>32380$</b></span>
                                </div>
                                <a href="#" class="tran3s p-color-bg hvr-bounce-to-right" data-toggle="modal"
                                    data-target="#donate">Donate</a>
                            </div>
                        </div> <!-- /.single-cause-wrapper -->
                    </div> <!-- /.col- -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-cause-wrapper">
                            <div class="img-holder"><img src="images/cause/3.jpg" alt="Image"></div>
                            <div class="text fix">
                                <h6><a href="cause-details-1.html">Love Poor people,Share fund</a></h6>
                                <p>Donec varius ultrices purus. ullam sit amet sapien tortor,Lorem Fund</p>
                                <div class="codeconSkillbar">
                                    <div class="skillBar" data-percent="45%">
                                        <span class="PercentText p-color">45%</span>
                                    </div> <!-- /.skillBar -->
                                </div> <!-- /.codeconSkillbar -->

                                <div class="target-ammount clear-fix">
                                    <span class="float-left">Collected : <b>12380$</b></span>
                                    <span class="float-right">Goal : <b>12380$</b></span>
                                </div>
                                <a href="#" class="tran3s p-color-bg hvr-bounce-to-right" data-toggle="modal"
                                    data-target="#donate">Donate</a>
                            </div>
                        </div> <!-- /.single-cause-wrapper -->
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.our-causes --> --}}



        <!-- Page Middle Banner ___________________ -->
        <div class="page-middle-banner bg1">
            <div class="opacity">
                <div class="container">
                    <h2>WAYS TO HELP THE <span class="p-color">POOR</span></h2>
                    <p>You can help the poor by supporting skills training programs for income generation, donating to
                        income-generating projects like piggery or farming run by Passionate Hearts Ministries, or
                        directly donating to the organization.</p>
                    <h5>Be The Change</h5>
                    <a href="#" class="p-color-bg hvr-bounce-to-right" data-toggle="modal"
                        data-target="#donate">DONATE</a>
                </div> <!-- /.container -->
            </div> <!-- /.opacity -->
        </div> <!-- /.page-middle-banner -->


        <!-- Why Choose US _________________________ -->
        <div class="why-choose-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 choose-us">
                        <div class="right-space-fix">
                            <h5 class="title-style-one">Why Chose us</h5>
                            <p>Passionate Hearts Ministries (PHM) is dedicated to transforming lives by empowering
                                individuals through skills training, fostering self-sufficiency, and creating
                                sustainable income-generating projects like farming and animal rearing. With a focus on
                                uplifting disadvantaged women, orphans, and youths, PHM prioritizes the most vulnerable
                                members of society. Committed to transparency, we ensure clear communication about
                                our beneficiary projects and are always available for inquiries, making PHM a
                                trustworthy and
                                impactful choice for your charitable giving.</p>
                            <div class="clear-fix">
                                <div class="single-box float-left tran4s">
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                    <h6>Financial Center</h6>
                                    <a href="#">Read More <span></span></a>
                                </div> <!-- /.single-box -->

                                <div class="single-box float-left tran4s">
                                    <i class="fa fa-street-view" aria-hidden="true"></i>
                                    <h6>Skilling Center</h6>
                                    <a href="#">Read More <span></span></a>
                                </div> <!-- /.single-box -->
                                <div class="clear-fix"></div>
                                <div class="single-box float-left tran4s">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                                    <h6>Health Center</h6>
                                    <a href="#">Read More <span></span></a>
                                </div> <!-- /.single-box -->
                                <div class="single-box float-left tran4s">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    <h6>Education Center</h6>
                                    <a href="#">Read More <span></span></a>
                                </div> <!-- /.single-box -->
                            </div>
                        </div> <!-- /.right-space-fix -->
                    </div> <!-- /.choose-us -->

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 who-we-are">
                        <div>
                            <h5 class="title-style-one">WHO WE ARE</h5>
                            <p>We are a team of pastors called to preach the gospel of the kingdom of God. Our goal is
                                to have transformed society with improved standards of living as we see the
                                disadvantaged sound in their spirit, soul and body.</p>
                            <img src="images/home/2.jpg" alt="image">
                            <h5 class="title-style-one" style="margin-top:5%;">OUR VALUES</h5>
                            <ul>
                                <li>Integrity</li>
                                <li>Excellence</li>
                                <li>Teamwork</li>
                                <li>Faithfulness</li>
                                <li>Commitment</li>
                            </ul>
                        </div>
                    </div> <!-- /.who-we-are -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.why-choose-us -->


        {{-- <!-- Our Gallery Home __________________________ -->
        <div class="our-gallery home-gallery">
            <div class="container">
                <div class="theme-title">
                    <h2>OUR GALLERY</h2>
                    <p>What’s My Purpose in Life? Share our latest project gallery of last 12 years</p>
                    <span></span>
                </div> <!-- /.theme-title -->

                <div class="clear-fix">
                    <div class="left-side float-left">
                        <div class="gallery-menu-wrapper">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tabs-left">
                                <li class="active">
                                    <a href="#all" data-toggle="tab">All Gallery</a>
                                </li>
                                <li>
                                    <a href="#children" data-toggle="tab">Children</a>
                                </li>
                                <li>
                                    <a href="#rural" data-toggle="tab">Rural people</a>
                                </li>
                                <li>
                                    <a href="#homeless" data-toggle="tab">Homeless people</a>
                                </li>
                                <li>
                                    <a href="#ciclone" data-toggle="tab">ciclone victem</a>
                                </li>
                                <li>
                                    <a href="#p-victim" data-toggle="tab">Poor victim people</a>
                                </li>
                                <li>
                                    <a href="#natural" data-toggle="tab">Natural</a>
                                </li>
                            </ul>
                        </div> <!-- /.gallery-menu-wrapper -->
                    </div> <!-- /.col- -->

                    <div class="right-side float-left">
                        <div class="tab-wrapper tab-content">
                            <!-- All -->
                            <div class="tab-pane active" id="all">
                                <div class="gallery-main-img-wrapper row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/1.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/1.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/2.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/2.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/3.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/3.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/4.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/4.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                </div> <!-- /.gallery-main-img-wrapper -->
                            </div> <!-- End of #all -->

                            <!-- Children -->
                            <div class="tab-pane fade" id="children">
                                <div class="gallery-main-img-wrapper row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/3.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/3.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/2.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/2.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/4.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/4.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/1.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/1.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                </div> <!-- /.gallery-main-img-wrapper -->
                            </div> <!-- End of #children -->

                            <!-- Rural People -->
                            <div class="tab-pane fade" id="rural">
                                <div class="gallery-main-img-wrapper row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/2.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/2.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/1.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/1.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/3.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/3.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/4.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/4.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                </div> <!-- /.gallery-main-img-wrapper -->
                            </div> <!-- End of #rural -->

                            <!-- Homeless People -->
                            <div class="tab-pane fade" id="homeless">
                                <div class="gallery-main-img-wrapper row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/3.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/3.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/2.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/2.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/4.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/4.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/1.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/1.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                </div> <!-- /.gallery-main-img-wrapper -->
                            </div> <!-- End of #homeless -->

                            <!-- Ciclone People -->
                            <div class="tab-pane fade" id="ciclone">
                                <div class="gallery-main-img-wrapper row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/1.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/1.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/3.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/3.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/2.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/2.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/4.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/4.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                </div> <!-- /.gallery-main-img-wrapper -->
                            </div> <!-- End of #ciclone -->

                            <!-- Poor victim -->
                            <div class="tab-pane fade" id="p-victim">
                                <div class="gallery-main-img-wrapper row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/1.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/1.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/2.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/2.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/3.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/3.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/4.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/4.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                </div> <!-- /.gallery-main-img-wrapper -->
                            </div> <!-- End of #p-victim -->

                            <!-- natural -->
                            <div class="tab-pane fade" id="natural">
                                <div class="gallery-main-img-wrapper row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/3.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/3.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/2.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/2.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/4.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/4.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-img-wrapper">
                                            <div class="img">
                                                <img src="images/gallery/1.jpg" alt="Image">
                                                <div class="opacity tran3s">
                                                    <div>
                                                        <a href="images/gallery/1.jpg" class="fancybox"><span><i
                                                                    class="fa fa-camera"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div> <!-- /.img -->
                                        </div> <!-- /.single-img-wrapper -->
                                    </div> <!-- /.col- -->
                                </div> <!-- /.gallery-main-img-wrapper -->
                            </div> <!-- End of #natural -->
                        </div> <!-- /.tab-wrapper -->
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.our-gallery --> --}}


        <!-- Our Staff _____________________________ -->
        <div class="our-staff" style="margin-top: 5%;">
            <div class="container">
                <div class="theme-title">
                    <h2>Our Board</h2>
                    {{-- <p>Have a Big team working edicatedly to save the child, staff work 24 hours for emerjency injure
                        patient</p> --}}
                    <span></span>
                </div> <!-- /.theme-title -->

                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="single-staff">
                            <div class="img">
                                <img src="images/staff/2.jpg" alt="Image">
                                <div class="opacity tran3s">
                                    <div>
                                        <a href="staff-profile-v1.html"><span><i class="fa fa-location-arrow"
                                                    aria-hidden="true"></i></span></a>
                                    </div>
                                </div>
                            </div> <!-- /.img -->
                            <h6><a href="staff-profile-v1.html">Pr. Agaba Fred</a></h6>
                            <span>Chairman Board</span>
                            {{-- <ul>
                                <li><a href="" class="tran3s"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="" class="tran3s"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="" class="tran3s"><i class="fa fa-google"
                                            aria-hidden="true"></i></a></li>
                            </ul> --}}
                        </div> <!-- /.single-staff -->
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="single-staff">
                            <div class="img">
                                <img src="images/staff/1.jpg" alt="Image">
                                <div class="opacity tran3s">
                                    <div>
                                        <a href="staff-profile-v1.html"><span><i class="fa fa-location-arrow"
                                                    aria-hidden="true"></i></span></a>
                                    </div>
                                </div>
                            </div> <!-- /.img -->
                            <h6><a href="staff-profile-v1.html">Eng. Tugume Alex</a></h6>
                            <span>Vice Chairman</span>
                            {{-- <ul>
                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-google" aria-hidden="true"></i></a></li>
                            </ul> --}}
                        </div> <!-- /.single-staff -->
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="single-staff">
                            <div class="img">
                                <img src="images/staff/3.jpg" alt="Image">
                                <div class="opacity tran3s">
                                    <div>
                                        <a href="staff-profile-v1.html"><span><i class="fa fa-location-arrow"
                                                    aria-hidden="true"></i></span></a>
                                    </div>
                                </div>
                            </div> <!-- /.img -->
                            <h6><a href="staff-profile-v1.html">Agumah Reuben</a></h6>
                            <span>Secretary</span>
                            {{-- <ul>
                                <li><a href="" class="tran3s"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="" class="tran3s"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="" class="tran3s"><i class="fa fa-google"
                                            aria-hidden="true"></i></a></li>
                            </ul> --}}
                        </div> <!-- /.single-staff -->
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="single-staff">
                            <div class="img">
                                <img src="images/staff/4.jpg" alt="Image">
                                <div class="opacity tran3s">
                                    <div>
                                        <a href="staff-profile-v1.html"><span><i class="fa fa-location-arrow"
                                                    aria-hidden="true"></i></span></a>
                                    </div>
                                </div>
                            </div> <!-- /.img -->
                            <h6><a href="staff-profile-v1.html">Pr. Bakehena Amos</a></h6>
                            <span>Treasurer</span>
                            {{-- <ul>
                                <li><a href="" class="tran3s"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="" class="tran3s"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="" class="tran3s"><i class="fa fa-google"
                                            aria-hidden="true"></i></a></li>
                            </ul> --}}
                        </div> <!-- /.single-staff -->
                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.our-staff -->



        {{-- <!-- Client Slider ____________________ -->
        <div class="client-slider-section">
            <div class="opacity">
                <div class="container">
                    <div class="client-slider-wrapper">
                        <div class="item">
                            <div class="item-wrapper">
                                <img src="images/home/4.jpg" alt="Image">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                <span>Asfia ghost-CEO</span>
                            </div> <!-- /.item-wrapper -->
                        </div> <!-- /.item -->
                        <div class="item">
                            <div class="item-wrapper">
                                <img src="images/home/5.jpg" alt="Image">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                <span>Asfia ghost-CEO</span>
                            </div> <!-- /.item-wrapper -->
                        </div> <!-- /.item -->
                        <div class="item">
                            <div class="item-wrapper">
                                <img src="images/home/6.jpg" alt="Image">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                <span>Asfia ghost-CEO</span>
                            </div> <!-- /.item-wrapper -->
                        </div> <!-- /.item -->
                    </div>
                </div> <!-- /.container -->
            </div> <!-- /.opacity -->
        </div> <!-- /.client-slider-section --> --}}

        {{-- 
        <!-- Upcoming Events _________________________ -->
        <div class="up-coming-events">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 coming-events">
                        <div class="right-space-fix">
                            <h5 class="title-style-one">Upcoming Events</h5>
                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit aspernatur</p>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="single-box tran4s">
                                        <p><span>25</span> February 16</p>
                                        <h6>Homeless Event</h6>
                                        <a href="events-details.html">Read More <span></span></a>
                                    </div> <!-- /.single-box -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="single-box tran4s">
                                        <p><span>26</span> February 16</p>
                                        <h6>poor SL Event</h6>
                                        <a href="events-details.html">Read More <span></span></a>
                                    </div> <!-- /.single-box -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="single-box tran4s">
                                        <p><span>27</span> February 16</p>
                                        <h6>poor SL Event</h6>
                                        <a href="events-details.html">Read More <span></span></a>
                                    </div> <!-- /.single-box -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="single-box tran4s">
                                        <p><span>28</span> February 16</p>
                                        <h6>Cyclon victim</h6>
                                        <a href="events-details.html">Read More <span></span></a>
                                    </div> <!-- /.single-box -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="single-box tran4s">
                                        <p><span>29</span> February 16</p>
                                        <h6>Village fund</h6>
                                        <a href="events-details.html">Read More <span></span></a>
                                    </div> <!-- /.single-box -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="single-box tran4s">
                                        <p><span>30</span> February 16</p>
                                        <h6>Children fund</h6>
                                        <a href="events-details.html">Read More <span></span></a>
                                    </div> <!-- /.single-box -->
                                </div>

                            </div> <!-- /.row -->
                        </div> <!-- /.right-space-fix -->
                    </div> <!-- /.coming-events -->

                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 become-help">
                        <div>
                            <h5 class="title-style-one">Become Help</h5>
                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas</p>
                            <div class="img-box">
                                <img src="images/home/7.jpg" alt="Image">
                                <div class="opacity">
                                    <span>For You Right Choice</span>
                                    <h6>CHANGE THEIR WORLD</h6>
                                    <p>Quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                        quia voluptas sit aspernatur aut odit </p>
                                </div>
                            </div>
                            <div class="button-wrapper">
                                <a href="#" class="tran3s p-color-bg hvr-bounce-to-right" data-toggle="modal"
                                    data-target="#donate">Become Donator</a>
                                <a href="#" class="tran3s p-color-bg hvr-bounce-to-right">Become Adopter</a>
                            </div>
                        </div>
                    </div> <!-- /.become-help -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.up-coming-events --> --}}


     

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
        </div> <!-- /.get-in-touch -->


      
        <!-- Scroll Top Button -->
        <button class="scroll-top tran3s p-color-bg round-border">
            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
        </button>
        <!-- pre loader  -->
        <div id="loader-wrapper">
            <div id="loader"></div>
        </div>
@endsection

