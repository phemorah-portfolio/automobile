
<!-- Top Header -->          
    <header>
        <!-- <div class="header-top show-desktop hide-mobile"> </div>         -->
        <div class="main-header">               
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/front_assets/images/logo.svg') }}" alt="lanre shittu motors logo">
                </a>
            </div>
            <nav class="navbar">  
                <div class="menu" style="">
                    <a href="#" class="hide-desktop">
                        <img src="{{ asset('assets/front_assets/images/ham-white.svg') }}" alt="toggle menu" id="menu">
                    </a>
                </div>                                   
                <div id="navbarSupportedContent">
                    <ul class="show-desktop hide-mobile" id="nav" style="">
                        <a href="#" id="exit" class="exit-btn" class="exit-btn hide-desktop">
                            <strong>X</strong>
                        </a>
                        <li> 
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="{{ url('about') }}" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About
                            </a>
                            <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                                <a class="dropdown-item" href="{{ url('about') }}">Our Vision</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('about') }}">Our Mission</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('about') }}">Our Team</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('about') }}">Subsidiary</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('about') }}">Corporate Information</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="{{ url('about') }}" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                                <a class="dropdown-item" href="#{{ url('sales') }}">Sales</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#{{ url('parts') }}">Genuine Parts</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#{{ url('service_maintenance') }}">Service & Maintenance</a>
                                <div class="dropdown-divider"></div>                                
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="{{ url('after_sales') }}" id="afterSalesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                After Sales
                            </a>
                            <div class="dropdown-menu" aria-labelledby="afterSalesDropdown">
                                <a class="dropdown-item" href="{{ url('workshop') }}">Workshop</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('spare_parts') }}">Spare Parts</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('service_repair') }}">Service & Repair</a>
                            </div>
                        </li>
                        <li><a href="{{ url('vehicle_listing') }}">Vehicle Listing</a></li>
                        <li><a href="#{{ url('accessories') }}">Accessories</a></li>
                        <li><a href="{{ url('contact') }}">Contact Us</a></li>
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                    </ul>    
                </div>
            </nav>
        </div>
    </header>
<!-- End Top Header -->

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ----------> 