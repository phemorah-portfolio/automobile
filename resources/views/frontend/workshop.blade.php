<script src="{{ asset('assets/front_assets/js/jssor.slider-28.0.0.min.js') }}" type="text/javascript"></script>

@extends('frontend.layouts.front_template')
	@section('content')	

    <!-- Home Slider -->
    <section>
        <div class="workshop" style="">    
            <h2>Car Workshop</h2>
        </div>
    </section>
    <!-- Ends Home Slider -->

    <!-- Main Contents -->
    <div class="container">
        <form action="">
            <button type="submit" class="btn btn-lg btn-danger">Book a Repair Appointment</button>
        </form>
          <h2>Automobile Repair Services</h2>
        <div class="row">
          <div class="col-md-4">
            <ul>
                <li>Break</li>
                <li>Batteries</li>
                <li>Tires & Weels</li>
                <li>Oil Changing</li>
                <li>Maintenance</li>
                <li>General Servicing</li>
            </ul>
          </div>
          <div class="col-md-6">    
            <img src="{{ asset('assets/front_assets/images/repair.jpg') }}" alt="automobile repair services">
          </div>
            
        </div>        
    </div>        
    <!-- End Main Contents -->      

    <script>
        $(function() {
            var $tabButtonItem = $('#sub-menu li'),
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