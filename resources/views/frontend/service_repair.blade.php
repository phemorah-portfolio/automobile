<script src="{{ asset('assets/front_assets/js/jssor.slider-28.0.0.min.js') }}" type="text/javascript"></script>

@extends('frontend.layouts.front_template')
	@section('content')	

    <!-- Home Slider -->
    <section>
        <div class="workshop" style="">    
            <h2>Service & Repair</h2>
        </div>
    </section>
    <!-- Ends Home Slider -->

    <!-- Main Contents -->
    <div class="container service-centers"> 
          <h2>Auto Repair Service Centers</h2>
        <div class="row">
          <div class="col-md-6 repair">
            <div>
                <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address"> 
                <strong>Alaka</strong>
                <p>
                    15, Alhaji Tokan Street, Alaka Estate, Western Avenue, Surulere, Lagos.
                    <b>08022987494</b>
                </p>
            </div>
          </div>  
          <div class="col-md-6 repair">
            <div>
                <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address"> 
                <strong>Abuja</strong>
                <p>
                    Plot 1504, Cadzone B06, Opposite Federal Civil Service Club, Mabushi, F.C.T, Abuja.
                    <b>08022987494</b>
                </p>
            </div>
          </div>  
        </div>        
        <div class="row">
          <div class="col-md-6 repair">
            <div>
                <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address"> 
                <strong>Port Harcourt</strong>
                <p>
                    234, Aba Road, Port-Harcourt, Nigeria.
                    <b>08022987494</b>
                </p>
            </div>
          </div>  
          <div class="col-md-6 repair">
            <div>
                <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address"> 
                <strong>Lekki</strong>
                <p>
                    Block 94, Plot 1D, Lekki Phase 1.
                    <b>08022987494</b>
                </p>
            </div>
          </div>  
        </div>        
        <div class="row">
          <div class="col-md-6 repair">
            <div>
                <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address"> 
                <strong>Ilorin</strong>
                <p>
                    Asa Dam Road, Ilorin, Kwara State, Nigeria.
                    <b>08022987494</b>
                </p>
            </div>
          </div>  
          <div class="col-md-6 repair">
            <div>
                <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address"> 
                <strong>Truck Center</strong>
                <p>                    
                    Block 37, Plot 762f, Amuwo Odofin Festac Link Bridge, Lagos.
                    <b>08022987494</b>
                </p>
            </div>
          </div>  
        </div>        
    </div>        
    <!-- End Main Contents -->      

    <script>
        $(function() {
            var $tabButtonItem = $('#sub-menu div'),
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