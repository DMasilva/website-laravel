<div>
    <header class="main-header header-style-two">

        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
                    <div class="logo"><a href="index.html"><img
                                src="{{ Vite::asset('resources/assets/images/snb_hor_logo.png') }}" alt=""
                                title=""></a></div>

                    <div class="nav-outer d-flex">

                        <nav class="main-menu show navbar-expand-md d-flex align-items-center">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('frontend.home') }}">Home</a></li>
                                    <li><a href="{{ route('frontend.about') }}">About</a></li>
                                    <li class="dropdown"><a href="#">Features</a>
                                        <ul>
                                            <li><a href="#">Client Acquisition</a></li>
                                            <li><a href="#">Client Management</a></li>
                                            <li><a href="#">Automated Loan processing</a></li>
                                            <li><a href="#">Automated Reminders</a></li>
                                            <li><a href="#">Solid Accounting System</a></li>
                                            <li><a href="#">Groups</a></li>
                                            <li><a href="#">Statutory Reports</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="projects.html">Pricing</a></li>

                                    <li><a href="{{ route('frontend.contact') }}">Contact Us</a></li>
                                </ul>
                            </div>

                        </nav>

                        <div class="outer-box d-flex align-items-center">

                            <div class="button-box">
                                <a class="btn-style-eight theme-btn btn-item" href="{{ route('frontend.requestdemo') }}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Request A Demo</span>
                                        <span class="text-two">Request A Demo</span>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>

                    </div>

                </div>
            </div>
        </div>

        <div class="sticky-header">
            <div class="auto-container">
                <div class="d-flex justify-content-between align-items-center">

                    <div class="logo">
                        <a href="index.html" title=""><img
                                src="{{ Vite::asset('resources/assets/images/snb_hor_logo.png') }}" alt=""
                                title=""></a>
                    </div>

                    <!-- Right Col -->
                    <div class="right-box d-flex align-items-center flex-wrap">
                        <!-- Main Menu -->
                        <nav class="main-menu d-flex align-items-center">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-box d-flex align-items-center">

                            <!-- Button Box -->
                            <div class="button-box">
                                <a class="btn-style-eight theme-btn btn-item" href="contact.html">
                                    <div class="btn-wrap">
                                        <span class="text-one">Request A Demo</span>
                                        <span class="text-two">Request A Demo</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fas fa-window-close fa-fw"></span></div>
            <nav class="menu-box">
                {{-- <div class="nav-logo"><a href="index.html"><img
                            src="{{ Vite::asset('resources/assets/images/logo.png') }}" alt=""
                            title=""></a></div> --}}
                <div class="search-box">
                    <form method="post" action="">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
                            <button type="submit"><span class="icon flaticon-001-loupe"></span></button>
                        </div>
                    </form>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
            </nav>
        </div>

    </header>
</div>
