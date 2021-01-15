<script src="{{ asset('assets/front_assets/js/jssor.slider-28.0.0.min.js') }}" type="text/javascript"></script>

@extends('frontend.layouts.front_template')
	@section('content')	

    <!-- Home Slider -->
    <section>
        <div class="part-banner" style="">   
            <h2>Spare Parts</h2>
        </div>
    </section>
    <!-- Ends Home Slider -->

    <!-- Main Contents -->
    <div class="container">
        <div class="_search-contents">
          <h2>Spare Parts</h2>
            Lanre Shittu is one of the largest wholesalers of automotive parts in Nigeria. With dedicated management and sales staff teams we are sure we will be able to assist you with your Toyota, Kia, Nissan, Mack, Jinbei, Sany, Zoomlion, Yutong parts requirement.
            For assistance you can contact one of our parts departments using the button below. If you need an urgent response please give us a call.
        </div>        
        <br><br>
        <center>
            <form action="">
                <button type="submit" class="btn btn-lg btn-danger">Contact us for Spare Part Support</button>
            </form> 
        </center>    
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