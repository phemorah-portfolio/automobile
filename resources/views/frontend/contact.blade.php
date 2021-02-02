<script src="{{ asset('assets/front_assets/js/jssor.slider-28.0.0.min.js') }}" type="text/javascript"></script>
<style>
    div.scrollmenu {
        overflow: auto;
        white-space: nowrap;
    }
    div.scrollmenu ul {
        display: flex;
        background-color: #5f5a8a;
    }
    div.scrollmenu ul li {
        background-color: #5f5a8a;
    }
    div.scrollmenu a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }
    div.scrollmenu a:hover {
        background-color: red;
    }
</style>

    @extends('frontend.layouts.front_template')

    @section('content')

    <section>
        <div class="top-banner" style="">
            <h2>Contact Us</h2>
        </div>
    </section>

    <!-- Main Contents -->
    <div class="contact-address">
        <div class="row">
            <div class="col-md-5 contact-box" style="padding-right:0;">
                <div class="scrollmenu">
                    <ul id="contact-menu">
                        <li>
                            <a href="#alaka">Head Office</a>
                        </li>
                        <li>
                            <a href="#tc">Truck Center</a>
                        </li>
                        <li>
                            <a href="#onipanu">Onipanu</a>
                        </li>
                        <li>
                            <a href="#abuja">Abuja Branch</a>
                        </li>
                        <li>
                            <a href="#ph">Port Harcourt</a>
                        </li>
                        <li>
                            <a href="#lekki1">Lekki 1</a>
                        </li>
                        <li>
                            <a href="#lekki2">Lekki 2</a>
                        </li>
                        <li>
                            <a href="#ilorin">Ilorin Branch</a>
                        </li>
                        <li>
                            <a href="#festac">Festac Branch</a>
                        </li>
                    </ul>
                </div>

                <!-- Alaka -->
                <div id="alaka" class="contact container">
                    <h4>Address</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
                        </li>
                        <li>
                            15, Alhaji Tokan Street, Alaka Estate, Funsho Williams Drive, Surulere Lagos.
                            <!-- Email: info@lanreshittu.com -->
                        </li>
                    </ul>
                    <h4>Phone</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/phone.png') }}" alt="phone">
                        </li>
                        <li>
                            08073991900, 08073991878
                        </li>
                    </ul>
                    <h4>Sales Hours</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/hours.png') }}" alt="time hours">
                        </li>
                        <li>
                            <strong>Mon – Fri:</strong> 08:30AM – 05:30PM
                            <strong>Saturday:</strong> 10:00AM – 03:00PM
                            <strong>Sunday:</strong> Closed
                        </li>
                    </ul>
                </div>

                <!-- Truck Center-->
                <div id="tc" class="contact container">
                    <h4>Address</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
                        </li>
                        <li>
                            Plot C88, Amuwo Odofin Commercial, Coker Bus stop, Oshodi Apapa Expressway, Lagos.
                        </li>
                    </ul>
                    <h4>Phone</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/phone.png') }}" alt="phone">
                        </li>
                        <li>
                            08073991903, 08053197406
                        </li>
                    </ul>
                    <h4>Sales Hours</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/hours.png') }}" alt="time hours">
                        </li>
                        <li>
                            <strong>Mon – Fri:</strong> 08:30AM – 05:30PM
                            <strong>Saturday:</strong> 10:00AM – 03:00PM
                            <strong>Sunday:</strong> Closed
                        </li>
                    </ul>
                </div>

                <!-- Onianu -->
                <div id="onipanu" class="contact container">
                    <h4>Address</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
                        </li>
                        <li>
                            163, Ikorodu Road, Onipanu Bus Stop, Lagos.
                        </li>
                    </ul>
                    <h4>Phone</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/phone.png') }}" alt="phone">
                        </li>
                        <li>
                            08073991906
                        </li>
                    </ul>
                    <h4>Sales Hours</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/hours.png') }}" alt="time hours">
                        </li>
                        <li>
                            <strong>Mon – Fri:</strong> 08:30AM – 05:30PM
                            <strong>Saturday:</strong> 10:00AM – 03:00PM
                            <strong>Sunday:</strong> Closed
                        </li>
                    </ul>
                </div>

                <!-- Abuja -->
                <div id="abuja" class="contact container">
                    <h4>Address</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
                        </li>
                        <li>
                            Plot 1504. Cadzone B06, After Ministry Of Transportation, Mabushi, F.C.T. Abuja
                        </li>
                    </ul>
                    <h4>Phone</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/phone.png') }}" alt="phone">
                        </li>
                        <li>
                            08073991880, 08072292918
                        </li>
                    </ul>
                    <h4>Sales Hours</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/hours.png') }}" alt="time hours">
                        </li>
                        <li>
                            <strong>Mon – Fri:</strong> 08:30AM – 05:30PM
                            <strong>Saturday:</strong> 10:00AM – 03:00PM
                            <strong>Sunday:</strong> Closed
                        </li>
                    </ul>
                </div>

                <!-- Port Harcourt -->
                <div id="ph" class="contact container">
                    <h4>Address</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
                        </li>
                        <li>
                            234, Aba Road, Port Harcourt, Rivers State.
                        </li>
                    </ul>
                    <h4>Phone</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/phone.png') }}" alt="phone">
                        </li>
                        <li>
                            08072292927,08073991882
                        </li>
                    </ul>
                    <h4>Sales Hours</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/hours.png') }}" alt="time hours">
                        </li>
                        <li>
                            <strong>Mon – Fri:</strong> 08:30AM – 05:30PM
                            <strong>Saturday:</strong> 10:00AM – 03:00PM
                            <strong>Sunday:</strong> Closed
                        </li>
                    </ul>
                </div>

                <!-- Lekki 1-->
                <div id="lekki1" class="contact container">
                    <h4>Address</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
                        </li>
                        <li>
                            Block 94, Plot 1D, Lekki Phase 1, Lagos
                        </li>
                    </ul>
                    <h4>Phone</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/phone.png') }}" alt="phone">
                        </li>
                        <li>
                            08072292908, 08073991900
                        </li>
                    </ul>
                    <h4>Sales Hours</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/hours.png') }}" alt="time hours">
                        </li>
                        <li>
                            <strong>Mon – Fri:</strong> 08:30AM – 05:30PM
                            <strong>Saturday:</strong> 10:00AM – 03:00PM
                            <strong>Sunday:</strong> Closed
                        </li>
                    </ul>
                </div>

                <!-- Lekki 2 -->
                <div id="lekki2" class="contact container">
                    <h4>Address</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
                        </li>
                        <li>
                            Along T.F Kuboye Road, Adjacent Ocean Crest School, Lekki Phase 1, Lagos
                        </li>
                    </ul>
                    <h4>Phone</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/phone.png') }}" alt="phone">
                        </li>
                        <li>
                            08072292914
                        </li>
                    </ul>
                    <h4>Sales Hours</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/hours.png') }}" alt="time hours">
                        </li>
                        <li>
                            <strong>Mon – Fri:</strong> 08:30AM – 05:30PM
                            <strong>Saturday:</strong> 10:00AM – 03:00PM
                            <strong>Sunday:</strong> Closed
                        </li>
                    </ul>
                </div>

                <!-- Ilorin-->
                <div id="ilorin" class="contact container">
                    <h4>Address</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
                        </li>
                        <li>
                            Asa Dam Road, Ilorin, Kwara State
                        </li>
                    </ul>
                    <h4>Phone</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/phone.png') }}" alt="phone">
                        </li>
                        <li>
                            08058695510, 08058695513
                        </li>
                    </ul>
                    <h4>Sales Hours</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/hours.png') }}" alt="time hours">
                        </li>
                        <li>
                            <strong>Mon – Fri:</strong> 08:30AM – 05:30PM
                            <strong>Saturday:</strong> 10:00AM – 03:00PM
                            <strong>Sunday:</strong> Closed
                        </li>
                    </ul>
                </div>

                <!-- Festac-->
                <div id="festac" class="contact container">
                    <h4>Address</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
                        </li>
                        <li>
                            Block 37, Plot762f, Amuwo Odofin, Festac Link Bridge, Lagos
                        </li>
                    </ul>
                    <h4>Phone</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/phone.png') }}" alt="phone">
                        </li>
                        <li>
                            09050052024, 08053197406
                        </li>
                    </ul>
                    <h4>Sales Hours</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/hours.png') }}" alt="time hours">
                        </li>
                        <li>
                            <strong>Mon – Fri:</strong> 08:30AM – 05:30PM
                            <strong>Saturday:</strong> 10:00AM – 03:00PM
                            <strong>Sunday:</strong> Closed
                        </li>
                    </ul>
                </div>
                <!-- Kano-->
                <div id="kano" class="contact container">
                    <h4>Address</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
                        </li>
                        <li>
                        59, Hadejia Road, Yakaba, Kano
                        </li>
                    </ul>
                    <h4>Phone</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/phone.png') }}" alt="phone">
                        </li>
                        <li>
                            08073991886
                        </li>
                    </ul>
                    <h4>Sales Hours</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/front_assets/images/contact/hours.png') }}" alt="time hours">
                        </li>
                        <li>
                            <strong>Mon – Fri:</strong> 08:30AM – 05:30PM
                            <strong>Saturday:</strong> 10:00AM – 03:00PM
                            <strong>Sunday:</strong> Closed
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-7 contact-form">
                <center><h2>Contact Us</h2></center> <br>
                <form action="">
                    <div class="form-row">
                            <div class="form-group col-md-4">
                                <input class="form-control" type="text" name="name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-4">
                                <input class="form-control" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-4">
                                <input class="form-control" type="text" name="phone" placeholder="Phone">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea><br>
                                <button class="btn btn-sm btn-danger">Submit</button>
                            </div>
                    </div>
                </form>

                <h3>Follow Us</h3>
                <div class="social">
                    <a href="#"><img src="{{ asset('assets/front_assets/images/social/fb.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('assets/front_assets/images/social/ig.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('assets/front_assets/images/social/twitter.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Contents -->

    <script>
        $(function() {
            var $tabButtonItem = $('#contact-menu li'),
                $tabSelect = $('#tab-select'),
                $tabContents = $('.contact'),
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
