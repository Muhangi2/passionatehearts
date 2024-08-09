<div class="menu-banner">
            <!-- ======================== Theme Menu ======================== -->
            <div class="main-menu">
                <div class="container">
                    <a href="/" class="float-left logo"><img src="images/logo/logo.png" alt="Logo"></a>

                    <!-- Menu -->
                    <nav class="navbar float-right">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed p-color-bg" data-toggle="collapse"
                                data-target="#navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                Menu
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="dropdown-holder"><a href="{{ route('home') }}">Who We Are</a>
                                    <ul class="sub-menu">
                                    <li><a href="{{ route('team') }}" class="tran3s">Our Team</a></li>
                                        <li><a href="{{ route('history') }}" class="tran3s">Our History</a></li>
                                        <li><a href="{{ route('values') }}" class="tran3s">Our Values</a></li>

                                    </ul>
                                </li>

                                <li class="dropdown-holder"><a href="{{ route('volunteer') }}">What We Do</a>
                              </li>
                                <li><a href="{{ route('projects.index') }}">News & Stories</a></li>
                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li class="dropdown-holder"><a href="{{ route('contact') }}">Contact</a>
                              
                                
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                    {{-- <button class="search-button p-color-bg" id="searchDropdown"><i class="fa fa-search-minus"
                            aria-hidden="true"></i></button>
                    <form action="#" class="search-form tran3s">
                        <div class="container">
                            <input type="text" placeholder="To Search Start Typing...">
                            <div class="close-search"><i class="fa fa-times" aria-hidden="true"></i></div>
                        </div>
                    </form> --}}
                </div> <!-- /.container -->
            </div> <!-- /.main-menu -->
            <!-- ====================== End Theme Menu ====================== -->


            <!-- ========================= Theme main Banner ================= -->
         <!-- END REVOLUTION SLIDER -->

        </div>