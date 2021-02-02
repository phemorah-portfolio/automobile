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
                    15, Alhaji Tokan Street, Alaka Estate, Western Avenue, Surulere, Lagos. <br>
                    <b>08073991900, 08073991878</b>
                </p>
            </div>
          </div>
          <div class="col-md-6 repair">
            <div>
                <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
                <strong>Abuja</strong>
                <p>
                    Plot 1504, Cadzone B06, Opposite Federal Civil Service Club, Mabushi, F.C.T, Abuja. <br>
                    <b>08073991880, 08072292918</b>
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
                    Asa Dam Road, Ilorin, Kwara State, Nigeria. <br>
                    <b>08058695510, 08058695513</b>
                </p>
            </div>
          </div>
          <div class="col-md-6 repair">
            <div>
                <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
                <strong>Truck Center</strong>
                <p>
                    Plot C88, Amuwo Odofin Commercial, Coker Bus stop, Oshodi Apapa Expressway, Lagos. <br>
                    <b>08073991903, 08053197406</b>
                </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 repair">
            <div>
                <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
                <strong>Onipanu</strong>
                <p>
                    163, Ikorodu Road, Onipanu Bus Stop, Lagos. <br>
                    <b>08073991906</b>
                </p>
            </div>
          </div>
          <div class="col-md-6 repair">
            <div>
                <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
                <strong>Festac</strong>
                <p>
                    Block 37, Plot762f, Amuwo Odofin, Festac Link Bridge, Lagos <br>
                    <b>09050052024, 08053197406</b>
                </p>
            </div>
          </div>
        </div>
        <div class="row">
					<div class="col-md-6 repair">
						<div>
								<img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
								<strong>Lekki 1</strong>
								<p>
										Block 94, Plot 1D, Lekki Phase 1. <br>
										<b>08072292908, 08073991900</b>
								</p>
						</div>
					</div>
          <div class="col-md-6 repair">
            <div>
                <img src="{{ asset('assets/front_assets/images/contact/map.png') }}" alt="address">
                <strong>Lekki 2</strong>
                <p>
                    Along T.F Kuboye Road, Adjacent Ocean Crest School, Lekki Phase 1, Lagos <br>
                    <b>08072292914</b>
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
                    234, Aba Road, Port Harcourt, Rivers State.<br>
                    <b>08072292927,08073991882</b>
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
