<script src="{{ asset('assets/front_assets/js/jssor.slider-28.0.0.min.js') }}" type="text/javascript"></script>

@extends('frontend.layouts.front_template')
	@section('content')	

    <!-- Home Slider -->
    <section>
        <div class="after-sales-banner" style="">  
            <h2>After Sales</h2>  
        </div>
    </section>
    <!-- Ends Home Slider -->

    <!-- Main Contents -->
    <div class="container">
        <div class="_search-contents">
          <h2>After Sales Service</h2>
            We pride ourselves on having a stellar after-sales service, which is why majority of our sales is driven by repeat business. When you purchase from us, you dont just buy a leave. We make it our duty to keep in touch with you and ensure you are getting your money's worth.
            In the near future we will be introducing relationship managers to every customer. A relationship manager is basically you first point of contact with Lanre Shittu Motors; dedicated to satisfying your needs.
            We also have dedicated hotlines for technical issues on all vehicles purchased or serviced by our state of the art workshop in Lagos, Nigeria.. 
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