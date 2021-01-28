@extends('frontend.layouts.front_template')
	@section('content')

    <section>
        <div class="top-banner" style="">
            <h2>Blog</h2>
        </div>
    </section>

    <!-- Main Contents -->
    <section>
        <div class="row blog-section">
            <div class="col-md-9">
                <div class="row blog-row">
                    <div class="col-md-6 blog-post">
                        <img src="{{ asset('assets/front_assets/images/explore.jpg') }}" alt="">
                        <div class="blog-desc">
                            <h4>Leopard Pickup</h4>
                            <hr>
                            <ul class="flex-wrap">
                                <li>
                                    <img src="{{ asset('assets/front_assets/images/calendar-icon.png') }}" alt="calendar icon">
                                    October 15, 2020
                                </li>
                                <li>
                                    <img src="{{ asset('assets/front_assets/images/comment-icon.png') }}" alt="comment icon">
                                    No Comments
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 blog-post">
                        <img src="{{ asset('assets/front_assets/images/show-room-cars.jpg') }}" alt="">
                        <div class="blog-desc">
                            <h4>Car Showroom</h4>
                            <hr>
                            <ul class="flex-wrap">
                                <li>
                                    <img src="{{ asset('assets/front_assets/images/calendar-icon.png') }}" alt="calendar icon">
                                    October 15, 2020
                                </li>
                                <li>
                                    <img src="{{ asset('assets/front_assets/images/comment-icon.png') }}" alt="comment icon">
                                    No Comments
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row blog-row">
                    <div class="col-md-6 blog-post">
                        <img src="{{ asset('assets/front_assets/images/festac_branch.jpg') }}" alt="festac branch">
                        <div class="blog-desc">
                            <h4>Festac Branch</h4>
                            <hr>
                            <ul class="flex-wrap">
                                <li>
                                    <img src="{{ asset('assets/front_assets/images/calendar-icon.png') }}" alt="calendar icon">
                                    October 15, 2020
                                </li>
                                <li>
                                    <img src="{{ asset('assets/front_assets/images/comment-icon.png') }}" alt="comment icon">
                                    No Comments
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 blog-post">
                        <img src="{{ asset('assets/front_assets/images/assembly/truck_assembly7.png') }}" alt="truck assembly plant">
                        <div class="blog-desc">
                            <h4>Car/Pickup Assembly Plant</h4>
                            <hr>
                            <ul class="flex-wrap">
                                <li>
                                    <img src="{{ asset('assets/front_assets/images/calendar-icon.png') }}" alt="calendar icon">
                                    October 15, 2020
                                </li>
                                <li>
                                    <img src="{{ asset('assets/front_assets/images/comment-icon.png') }}" alt="comment icon">
                                    No Comments
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row blog-row">
                    <div class="col-md-6 blog-post">
                        <img src="{{ asset('assets/front_assets/images/jac_truck.jpg') }}" alt="jac truck">
                        <div class="blog-desc">
                            <h4>Jac Tow Truck</h4>
                            <hr>
                            <ul class="flex-wrap">
                                <li>
                                    <img src="{{ asset('assets/front_assets/images/calendar-icon.png') }}" alt="calendar icon">
                                    October 15, 2020
                                </li>
                                <li>
                                    <img src="{{ asset('assets/front_assets/images/comment-icon.png') }}" alt="comment icon">
                                    No Comments
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 blog-post">
                        <img src="{{ asset('assets/front_assets/images/products/xcmg_excavator_payloader.jpg') }}" alt="excavator">
                        <div class="blog-desc">
                            <h4>XCMG Excavator</h4>
                            <hr>
                            <ul class="flex-wrap">
                                <li>
                                    <img src="{{ asset('assets/front_assets/images/calendar-icon.png') }}" alt="calendar icon">
                                    October 15, 2020
                                </li>
                                <li>
                                    <img src="{{ asset('assets/front_assets/images/comment-icon.png') }}" alt="comment icon">
                                    No Comments
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="flex-wrap-no-space ">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                </ul>
            </div>
            <div class="col-md-3 blog-right">
                <strong>Recent Posts</strong>
                <div class="recent-posts">
                    <ul class="flex-wrap-no-space">
                        <li class="column">
                            <img src="{{ asset('assets/front_assets/images/equipment.jpg') }}" alt="new equipment">
                        </li>
                        <li class="column">
                            <b>Equipment</b>
                            <p>
                                <img src="{{ asset('assets/front_assets/images/clock-icon-red.png') }}" alt="clock icon red">
                                Added 2 days ago
                            </p>
                        </li>
                    </ul>
                    <ul class="flex-wrap-no-space">
                        <li class="column">
                            <img src="{{ asset('assets/front_assets/images/flatbed.jpg') }}" alt="flatbed">
                        </li>
                        <li class="column">
                            <b>Equipment</b>
                            <p>
                                <img src="{{ asset('assets/front_assets/images/clock-icon-red.png') }}" alt="clock icon red">
                                Added 2 days ago
                            </p>
                        </li>
                    </ul>
                    <ul class="flex-wrap-no-space">
                        <li class="column">
                            <img src="{{ asset('assets/front_assets/images/crane.jpg') }}" alt="sany crane">
                        </li>
                        <li class="column">
                            <b>Equipment</b>
                            <p>
                                <img src="{{ asset('assets/front_assets/images/clock-icon-red.png') }}" alt="clock icon red">
                                Added 2 days ago
                            </p>
                        </li>
                    </ul>
                </div>
                <hr>
                <strong>Categories</strong>
                <ul>
                    <li><a href="">Model</a></li>
                    <li><a href="">Model</a></li>
                    <li><a href="">Truck</a></li>
                    <li><a href="">Car Repair</a></li>
                </ul>
                <hr>
                <strong>Instagram Feeds</strong>
                <ul class="insta-feeds flex-wrap-no-space">
                    <li>
                        <img src="{{ asset('assets/front_assets/images/truck.jpg') }}" alt="truck">
                    </li>
                    <li>
                        <img src="{{ asset('assets/front_assets/images/lsm-group-pics.jpg') }}" alt="lsm group pics">
                    </li>
                    <li>
                        <img src="{{ asset('assets/front_assets/images/ilorin.jpg') }}" alt="ilorin branch">
                    </li>
                </ul>
                <ul class="insta-feeds flex-wrap-no-space">
                    <li>
                        <img src="{{ asset('assets/front_assets/images/spare_parts.jpg') }}" alt="spare parts">
                    </li>
                    <li>
                        <img src="{{ asset('assets/front_assets/images/top_banner.jpg') }}" alt="top cars">
                    </li>
                    <li>
                        <img src="{{ asset('assets/front_assets/images/truck.jpg') }}" alt="truck">
                    </li>
                </ul>
                <hr>
                <strong>Twitter Feeds</strong>
                <ul class="flex-wrap twitter-feeds">
                    <li class="column">
                        <img src="{{ asset('assets/front_assets/images/social/twitter.svg') }}" alt="twitter"> Twitter <small>@twitter</small>
                        <p>Comment not found</p>
                    </li>
                    <li>
                        Nov 4
                    </li>
                </ul>
                <hr>
                <ul class="flex-wrap twitter-feeds">
                    <li class="column">
                        <img src="{{ asset('assets/front_assets/images/social/twitter.svg') }}" alt="twitter"> Twitter <small>@twitter</small>
                        <p>Comment not found</p>
                    </li>
                    <li>
                        Nov 4
                    </li>
                </ul>
                <hr>
                <ul class="flex-wrap twitter-feeds">
                    <li class="column">
                        <img src="{{ asset('assets/front_assets/images/social/twitter.svg') }}" alt="twitter"> Twitter <small>@twitter</small>
                        <p>Comment not found</p>
                    </li>
                    <li>
                        Nov 4
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Main Contents -->

@endsection
