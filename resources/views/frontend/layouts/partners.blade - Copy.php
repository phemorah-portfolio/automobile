        <b>OUR PARTNERS</b> 
        <div class="partners">      
            <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000" style="background-color:red;">
                    <div class="MultiCarousel-inner">
                        <div class="item">
                            <img src="{{ asset('assets/front_assets/images/partners/jac.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/front_assets/images/partners/kia.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/front_assets/images/partners/mack.jpg') }}" alt="">
                        </div> 
                        <div class="item">
                            <img src="{{ asset('assets/front_assets/images/partners/nissan.PNG') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/front_assets/images/partners/toyota.PNG') }}" alt="">
                        </div>
                        <div class="item">
                          <img src="{{ asset('assets/front_assets/images/partners/xcmg.jpg') }}" alt="">
                        </div>
                    </div>
                <span class="_btn _btn-primary leftLst"></span>
                <span class="_btn _btn-primary rightLst"></span>                
                <!-- <div data-u="arrowright" class="rightLst" style="margin-top:-25px; left:-10px; position: absolute;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75"></div>     -->
                <!-- <div data-u="arrowleft" class="leftLst" style="margin-top:-25px; left:-10px; position: absolute;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75"></div>     -->
            </div>
        </div>
            
    
    <!-- Partner Carousal -->
    <script>
        $(document).ready(function () {
        var itemsMainDiv = ('.MultiCarousel');
        var itemsDiv = ('.MultiCarousel-inner');
        var itemWidth = "";

        $('.leftLst, .rightLst').click(function () {
            var condition = $(this).hasClass("leftLst");
            if (condition)
                click(0, this);
            else
                click(1, this)
        });

        ResCarouselSize();

        $(window).resize(function () {
            ResCarouselSize();
        });

        //this function define the size of the items
        function ResCarouselSize() {
            var incno = 0;
            var dataItems = ("data-items");
            var itemClass = ('.item');
            var id = 0;
            var btnParentSb = '';
            var itemsSplit = '';
            var sampwidth = $(itemsMainDiv).width();
            var bodyWidth = $('body').width();
            $(itemsDiv).each(function () {
                id = id + 1;
                var itemNumbers = $(this).find(itemClass).length;
                btnParentSb = $(this).parent().attr(dataItems);
                itemsSplit = btnParentSb.split(',');
                $(this).parent().attr("id", "MultiCarousel" + id);

                if (bodyWidth >= 1200) {
                    incno = itemsSplit[3];
                    // itemWidth = sampwidth / incno;
                    itemWidth = 80;
                }
                else if (bodyWidth >= 992) {    
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 800) {
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 810) {
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 768) {
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 650) {
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                }
                else {
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                }
                    itemWidth = 80;
                $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
                $(this).find(itemClass).each(function () {
                    $(this).outerWidth(itemWidth);
                });

                $(".leftLst").addClass("over");
                $(".rightLst").removeClass("over");

            });
        }
        //this function used to move the items
        function ResCarousel(e, el, s) {
            var leftBtn = ('.leftLst');
            var rightBtn = ('.rightLst');
            var translateXval = '';
            var divStyle = $(el + ' ' + itemsDiv).css('transform');
            var values = divStyle.match(/-?[\d\.]+/g);
            var xds = Math.abs(values[4]);
            if (e == 0) {
                translateXval = parseInt(xds) - parseInt(itemWidth * s);
                $(el + ' ' + rightBtn).removeClass("over");

                if (translateXval <= itemWidth / 2) {
                    translateXval = 0;
                    $(el + ' ' + leftBtn).addClass("over");
                }
            }
            else if (e == 1) {
                var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                translateXval = parseInt(xds) + parseInt(itemWidth * s);
                $(el + ' ' + leftBtn).removeClass("over");

                if (translateXval >= itemsCondition - itemWidth / 2) {
                    translateXval = itemsCondition;
                    $(el + ' ' + rightBtn).addClass("over");
                }
            }
            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
        }

    });
    </script>
