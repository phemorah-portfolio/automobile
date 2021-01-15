<div class="container" style="margin-top:0px !important;">
    <div class="sub-about">  
       <ul id="sub-about">
           <li><a href="#about">About Us</a></li>
           <li><a href="#vision">Our Vision</a></li>
           <li><a href="#mission">Our Mission</a></li>
           <li><a href="#team">Our Team</a></li>
           <li><a href="#subsidiary">Subsidiary</a></li>
           <li><a href="#corporate">Corporate Information</a></li>
       </ul>
    </div>               
</div>

<script>   
    $(function() {
        var $tabButtonItem = $('#sub-about li'),
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