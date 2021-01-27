<script src="{{ asset('assets/front_assets/js/jssor.slider-28.0.0.min.js') }}" type="text/javascript"></script>

@extends('frontend.layouts.front_template')
	@section('content')

	<style>
		.banner-arrow {
			display:block;
			position:absolute;
            cursor:pointer;
		}
		.banner-arrow .a {
			fill:red;
			stroke-linecap:round;
			border-width: 20em;
		}
		.banner-arrow:hover {opacity:.8;}
		.banner-arrow.banner-arrowdn {opacity:.5;}
		.banner-arrow.banner-arrowds {opacity:.3;pointer-events:none;}
    </style>

    <!-- Home Slider -->
    <br><br>
    <section style="text-align: center;">
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                <div>
                    <img data-u="image" src="{{ asset('assets/front_assets/images/slider/suv-jeeps.jpg') }}" />
                    <div u="thumb">SUV/Jeeps</div>
                </div>
                <div>
                    <img data-u="image" src="{{ asset('assets/front_assets/images/slider/black-suv.jpg') }}" />
                    <div u="thumb">Black SUV</div>
                </div>
                <div>
                    <img data-u="image" src="{{ asset('assets/front_assets/images/slider/nissan-silver.jpg') }}" />
                    <div u="thumb">Nissan Silver</div>
                </div>
                <div>
                    <img data-u="image" src="{{ asset('assets/front_assets/images/slider/toyota-hilux.jpg') }}" />
                    <div u="thumb">Toyota Hilux</div>
                </div>
                <div>
                    <img data-u="image" src="{{ asset('assets/front_assets/images/slider/assembly-plant.jpg') }}" />
                    <div u="thumb">Assembly Plant</div>
                </div>
                <div>
                    <img data-u="image" src="{{ asset('assets/front_assets/images/slider/customized-jac.jpg') }}" />
                    <div u="thumb">Customized JAC</div>
                </div>
                <div>
                    <img data-u="image" src="{{ asset('assets/front_assets/images/slider/white-jac-set.jpg') }}" />
                    <div u="thumb">JAC Set</div>
                </div>
                <div>
                    <img data-u="image" src="{{ asset('assets/front_assets/images/slider/white-jac-truck.jpg') }}" />
                    <div u="thumb">White JAC Truck</div>
                </div>
                <div>
                    <img data-u="image" src="{{ asset('assets/front_assets/images/slider/toyota-hiace.jpg') }}" />
                    <div u="thumb">Toyota Hiace</div>
                </div>
                <div>
                    <img data-u="image" src="{{ asset('assets/front_assets/images/slider/car-workshop.jpg') }}" />
                    <div u="thumb">Assembly Plant</div>
                </div>
            </div>
            <!-- Thumbnail Navigator -->
            <div u="thumbnavigator" style="position:absolute;bottom:0px;left:0px;width:980px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
                <div u="slides">
                    <div u="prototype" style="position:absolute;top:0;left:0;width:980px;height:50px;">
                        <div u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:arial,helvetica,verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;"></div>
                    </div>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="banner-arrow" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
                </svg>
            </div>
            <div data-u="arrowright" class="banner-arrow" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
                </svg>
            </div> 
        </div>
    </section>
    <!-- Ends Home Slider -->

	@include('frontend.layouts.search_bar')

    <!-- Main Contents -->
        <div class="row">
            <div class="col-md-7 assembly-container">
                <h4>ASSEMBLY PLANT</h4>
                <img src="{{ asset('assets/front_assets/images/assembly/truck_assembly.PNG') }}" alt="assembly plant" class="assembly">
            </div>

            <div class="col-md-4 news-update">
                <h3>Our Ultra-Modern Truck / Bus Assembly Plant</h3>
                <p>
                    Our vehicle assembling plant has the capacity to assemble 2500 units of vehicles per annum. The plant has brake, speed and light tester, wheel alignment and balancing, oven bake, electronic quality control check.
                </p>
            </div>
        </div>

        <div class="explore">
            <h4>EXPLORE OUR VEHICLES</h4>
            <div class="explore-img-div">
                <div>
                    <img src="{{ asset('assets/front_assets/images/explore.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('assets/front_assets/images/explore2.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('assets/front_assets/images/explore3.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('assets/front_assets/images/explore.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('assets/front_assets/images/explore2.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('assets/front_assets/images/explore3.jpg') }}" alt="">
                </div>
            </div>
        </div>
    <!-- End Main Contents -->

    <!-- Home Slider -->
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
            {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
            $AutoPlay: 1,
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Orientation: 2,
                $NoDrag: true
            }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1600;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
		};
		jssor_1_slider_init();
    </script>
    <!-- End Home Slider -->

<!-- #endregion Jssor Slider End -->

@endsection
