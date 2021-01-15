@extends('frontend.layouts.front_template')
	@section('content')	
<style>
    #vehicle-list-nav .active {
        background-color: #241E5D;
    }

    #vehicle-list-nav .active a {
        color: white;   
    }


    .vehicle-list-nav {
        overflow: auto;
        white-space: nowrap;
    }

    .vehicle-list-nav ul {
        display: flex;
        margin: 5px 0;
    }

    .vehicle-list-nav ul li {
        display: block;
        /* background-color: #241E5D; */
        /* color: black; */
        padding: 20px 15px;
        cursor: pointer;
        margin:0 5px;
        border: 1px solid #ccc;
    }

    .vehicle-list-nav ul li a {
        color: black;
        text-decoration: none;
    }

    .vehicle-list-nav ul li:hover {
        background-color: #241E5D;
        color:white !important;
    }

    .vehicle-list-nav ul li a:hover {
        color:white;
    }
</style>
    <!-- Home Slider -->
    <section>
        <div class="top-banner" style="">    
            <h2>Vehicle Listing</h2>
        </div>
    </section>
    <!-- Ends Home Slider -->



    <div class="container" style="margin-top:0px !important;">
    <div class="vehicle-list-nav">  
       <ul id="vehicle-list-nav">
           <li><a href="#buses">Buses</a></li>
           <li><a href="#used-cars">Used Cars</a></li>
           <li><a href="#new-cars">New Cars</a></li>
           <li><a href="#trucks">Trucks</a></li>
       </ul>
    </div>               
</div>
    
    <!-- Main Contents -->
    <div class="container"> 
        <!-- Buses -->     
        <div id="buses" class="tab-contents">
            <div class="row">
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/Coaster-26-Seats-1.jpg') }}" alt="Coaster 26 Seats" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>  
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/2019-toyota-hiace.jpg') }}" alt="2019 toyota hiace" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
            </div>  

            <div class="row">
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space"> 
                        <li class="vehicle"> 
                                <img src="{{ asset('assets/front_assets/images/listing/hilux_double_cabin.jpg') }}" alt="hilux double cabin" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/hilux_single_cabin.jpg') }}" alt="hilux single cabin" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
            </div>   

            <div class="row">
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/honda_crv2.jpg') }}" alt="honda crv 2" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                                <img src="{{ asset('assets/front_assets/images/listing/honda_crv.jpg') }}" alt="honda crv" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
            </div>  

            <div class="row">
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                                <img src="{{ asset('assets/front_assets/images/listing/nissan_altima.jpg') }}" alt="nissan altima" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 vehicle-list-div" style="padding:0;"> 
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                                <img src="{{ asset('assets/front_assets/images/listing/toyota_hiace_2019.jpg') }}" alt="toyota hiace 2019" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
            </div>                   
        </div>

        <!-- Used Cars -->
        <div id="used-cars" class="tab-contents">
            <div class="row">
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/Coaster-26-Seats-1.jpg') }}" alt="Coaster 26 Seats" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/2019-toyota-hiace.jpg') }}" alt="2019 toyota hiace" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
            </div>  

            <div class="row">
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space"> 
                        <li class="vehicle"> 
                                <img src="{{ asset('assets/front_assets/images/listing/hilux_double_cabin.jpg') }}" alt="hilux double cabin" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/hilux_single_cabin.jpg') }}" alt="hilux single cabin" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
            </div>   

            <div class="row">
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/honda_crv2.jpg') }}" alt="honda crv 2" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                                <img src="{{ asset('assets/front_assets/images/listing/honda_crv.jpg') }}" alt="honda crv" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
            </div>  
        </div>          

        <!-- New Cars -->
        <div id="new-cars" class="tab-contents">
            <div class="row">
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/Coaster-26-Seats-1.jpg') }}" alt="Coaster 26 Seats" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/2019-toyota-hiace.jpg') }}" alt="2019 toyota hiace" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
            </div>  

            <div class="row">
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space"> 
                        <li class="vehicle"> 
                                <img src="{{ asset('assets/front_assets/images/listing/hilux_double_cabin.jpg') }}" alt="hilux double cabin" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/hilux_single_cabin.jpg') }}" alt="hilux single cabin" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
            </div>   

            <div class="row">
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/honda_crv2.jpg') }}" alt="honda crv 2" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                                <img src="{{ asset('assets/front_assets/images/listing/honda_crv.jpg') }}" alt="honda crv" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
            </div>  

            <div class="row">
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                                <img src="{{ asset('assets/front_assets/images/listing/nissan_altima.jpg') }}" alt="nissan altima" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 vehicle-list-div" style="padding:0;"> 
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                                <img src="{{ asset('assets/front_assets/images/listing/toyota_hiace_2019.jpg') }}" alt="toyota hiace 2019" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
            </div> 
        </div>     

        <!-- Trucks -->
        <div id="trucks" class="tab-contents">
            <div class="row">
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/Coaster-26-Seats-1.jpg') }}" alt="Coaster 26 Seats" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/2019-toyota-hiace.jpg') }}" alt="2019 toyota hiace" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
            </div>  

            <div class="row">
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space"> 
                        <li class="vehicle"> 
                                <img src="{{ asset('assets/front_assets/images/listing/hilux_double_cabin.jpg') }}" alt="hilux double cabin" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/hilux_single_cabin.jpg') }}" alt="hilux single cabin" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
            </div>   

            <div class="row">
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                            <img src="{{ asset('assets/front_assets/images/listing/honda_crv2.jpg') }}" alt="honda crv 2" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 vehicle-list-div" style="padding:0;">
                    <ul class="flex-wrap-no-space">
                        <li class="vehicle"> 
                                <img src="{{ asset('assets/front_assets/images/listing/honda_crv.jpg') }}" alt="honda crv" />
                        </li>
                        <li class="vehicle-description">
                            <strong>26 Seats Coaster</strong>
                            <div class="flex-wrap-no-space">
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/gauge.png') }}" alt="gauge" />
                                    {{ number_format(10000) }}
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/steering.png') }}" alt="steering" />
                                    Automatic
                                </div>
                                <div class="column">
                                    <img src="{{ asset('assets/front_assets/images/listing/speed.png') }}" alt="milleage" />
                                    174hp
                                </div>
                            </div>
                            <div class="assembly-interior-body flex-wrap-no-space">
                                <div class="column">
                                    <b>Assembly:</b> Imported
                                </div>
                                <div class="column">
                                    <b>Interior:</b> Gray
                                </div>
                                <div class="column">
                                    <b>Body Type:</b> Sedan
                                </div>
                            </div>
                            <div class="airbag-dealer flex-wrap-no-space">
                                <div class="column">
                                    <b>Airbag:</b> No
                                </div>
                                <div class="column">
                                    <b>Dealer:</b> Lanre Shittu Motors
                                </div>
                            </div>
                            <span class="price"><a href="#">Contact for pricing </a></span>
                        </li>
                    </ul>
                </div>
            </div>  
        </div>      
    </div>        
    <!-- End Main Contents -->         

    
<script>   
    $(function() {
        var $tabButtonItem = $('#vehicle-list-nav li'),
            $tabSelect = $('#tab-select'),
            $tabContents = $('.tab-contents'),
            activeClass = 'active';

        $tabButtonItem.first().addClass(activeClass);
        $tabContents.not(':first').hide();

        $tabButtonItem.find('a').on('click', function(e) {
            var target = $(this).attr('href');

            $tabButtonItem.removeClass(activeClass);
            $(this).parent().addClass(activeClass);
            $tabSelect.val(target);
            $tabContents.hide();
            $(target).show();
            e.preventDefault();
        });

        $tabSelect.on('change', function() {
            var target = $(this).val(),
                targetSelectNum = $(this).prop('selectedIndex');

            $tabButtonItem.removeClass(activeClass);
            $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
            $tabContents.hide();
            $(target).show();
        });
    });
</script>
@endsection