<style>
    @media (min-width: 768px) {
        .carousel-multi-item-2 .col-md-3 {
        float: left;
        width: 25%;
        max-width: 100%; }
    }

    .carousel-multi-item-2 .card img {
        border-radius: 2px;
    }
</style>
    <!-- Footer Section -->
<footer>

    <div class="row main-footer">
        <div class="col-md-3">
            <strong>Our Company</strong>
            <ul>
                <li><a href="{{ url('about') }}">About</a></li>
                <li><a href="{{ url('contact') }}">Contact</a></li>
                <li><a href="#{{ url('sitemap') }}">Site Map</a></li>
                <li><a href="{{ url('login') }}">Login/Signup</a></li>
                <li><a href="#{{ url('investors') }}">Investors Relations</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <strong>Our Partners</strong>
            <ul>
                <li>JAC</li>
                <li>KIA</li>
                <li>Mack</li>
                <li>Toyota</li>
                <li>NISSAN</li>
            </ul>
        </div>

        <div class="col-md-3">
            <strong>Social Media</strong><br>
            <span class="social">
                <img src="{{ asset('assets/front_assets/images/social/fb.svg') }}" alt="">
                <img src="{{ asset('assets/front_assets/images/social/ig.svg') }}" alt="">
                <img src="{{ asset('assets/front_assets/images/social/twitter.svg') }}" alt="">
            </span>
            <!-- <div class="contact-details">
                <strong>Contact Info</strong> <br>
                <ul class="flex-wrap-no-space">
                    <li class="contact-info_">
                        <strong>Hotline:</strong>
                    </li>
                    <li class="contact-info_">
                        08033979829
                    </li>
                </ul>
                <ul class="flex-wrap-no-space">
                    <li class="contact-info">
                        <strong>Email:</strong>
                    </li>
                    <li class="contact-info">
                        inquiry@lanreshittu.com
                    </li>
                </ul>
            </div> -->
        </div>

        <div class="col-md-3">
            <strong>News Letter</strong><br>
            Get the latest news and offers from Lanre Shittu Motors
            <form action="" method="POST">
                <input type="text" class="form-input" name="name" placeholder="name" required>
                <input type="text" class="form-input" name="email" placeholder="email" required>
                <button class="btn btn-danger btn-md">Subscribe</button>
            </form>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="_container">
            Copyright &#169;2020 Lanre Shittu Motors (Nig) Limited
        </div>
    </div>
</footer>
    <!-- End Footer Section -->

<!-- Partner Carousal -->
<!-- <script>
    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
</script> -->
