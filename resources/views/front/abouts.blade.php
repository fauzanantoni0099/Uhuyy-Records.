@extends('front.blank')
@section('content')
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(/img/bg-img/trigger.jpg);">
        <div class="bradcumbContent">
            <h2>About</h2>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <center>
                <img src="/img/core-img/dis6.png" alt="" width="350px">
                </center>
            </div>
            <div class="col-12 col-lg-6">
                <center>
                    <p style="font-size: 27px">Founded in 2021 in the city of Padangpanjang, in 2023 the Studio moved to Bukittinggi
                        Uhuyy Records is based on home recording production, mixing and mastering, but also produces for various purposes
                        audio such as, Film Scoring, Advertising, Voice Over and others</p>
                </center>
            </div>
            <div class="col-12">
                <div class="elements-title mb-70">
                    <center>
                    <h2>Track</h2>
                    </center>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                    <!-- single accordian area -->
                    <div class="panel single-accordion">
                        <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Records.
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a></h6>
                        <div id="collapseOne" class="accordion-content collapse show">
                            <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante.</p>
                        </div>
                    </div>
                    <!-- single accordian area -->
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Mastering
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseTwo" class="accordion-content collapse">
                            <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante.</p>
                        </div>
                    </div>
                    <!-- single accordian area -->
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Mixing
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseThree" class="accordion-content collapse">
                            <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ##### Tabs ##### -->
            <div class="col-12 col-lg-6">
                <div class="oneMusic-tabs-content">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Mauris gravida neque</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Pellentesque sit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Quisque fringilla</a>
                        </li>
                    </ul>

                    <div class="tab-content mb-100" id="myTabContent">
                        <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                            <div class="oneMusic-tab-content">
                                <!-- Tab Text -->
                                <div class="oneMusic-tab-text">
                                    <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                            <div class="oneMusic-tab-content">
                                <!-- Tab Text -->
                                <div class="oneMusic-tab-text">
                                    <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                            <div class="oneMusic-tab-content">
                                <!-- Tab Text -->
                                <div class="oneMusic-tab-text">
                                    <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
{{--    <section class="elements-area mt-30 section-padding-100-0">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}


{{--                <!-- ##### Accordians ##### -->--}}

{{--                <!-- ========== Loaders ========== -->--}}
{{--                <div class="col-12">--}}
{{--                    <div class="elements-title mb-70">--}}
{{--                        <h2>Loaders</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-12">--}}
{{--                    <!-- Loaders Area Start -->--}}
{{--                    <div class="our-skills-area">--}}
{{--                        <div class="row">--}}

{{--                            <!-- Single Skills Area -->--}}
{{--                            <div class="col-12 col-sm-6 col-lg-3">--}}
{{--                                <div class="single-skils-area mb-100">--}}
{{--                                    <div id="circle" class="circle" data-value="0.75">--}}
{{--                                        <div class="skills-text">--}}
{{--                                            <span>75%</span>--}}
{{--                                            <p>Good Music</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Single Skills Area -->--}}
{{--                            <div class="col-12 col-sm-6 col-lg-3">--}}
{{--                                <div class="single-skils-area mb-100">--}}
{{--                                    <div id="circle2" class="circle" data-value="0.83">--}}
{{--                                        <div class="skills-text">--}}
{{--                                            <span>83%</span>--}}
{{--                                            <p>Amazing Artists</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Single Skills Area -->--}}
{{--                            <div class="col-12 col-sm-6 col-lg-3">--}}
{{--                                <div class="single-skils-area mb-100">--}}
{{--                                    <div id="circle3" class="circle" data-value="0.25">--}}
{{--                                        <div class="skills-text">--}}
{{--                                            <span>25%</span>--}}
{{--                                            <p>Concerts</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Single Skills Area -->--}}
{{--                            <div class="col-12 col-sm-6 col-lg-3">--}}
{{--                                <div class="single-skils-area mb-100">--}}
{{--                                    <div id="circle4" class="circle" data-value="0.95">--}}
{{--                                        <div class="skills-text">--}}
{{--                                            <span>95%</span>--}}
{{--                                            <p>Superstars</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- ========== Milestones ========== -->--}}
{{--                <div class="col-12">--}}
{{--                    <div class="elements-title mb-70">--}}
{{--                        <h2>Milestone</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-12">--}}
{{--                    <div class="oneMusic-cool-facts-area">--}}
{{--                        <div class="row">--}}

{{--                            <!-- Single Cool Facts -->--}}
{{--                            <div class="col-12 col-sm-6 col-lg-2">--}}
{{--                                <div class="single-cool-fact mb-100">--}}
{{--                                    <div class="scf-text">--}}
{{--                                        <h2>+<span class="counter">1000</span></h2>--}}
{{--                                        <p>Live Concerts</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Single Cool Facts -->--}}
{{--                            <div class="col-12 col-sm-6 col-lg-2">--}}
{{--                                <div class="single-cool-fact mb-100">--}}
{{--                                    <div class="scf-text">--}}
{{--                                        <h2><span class="counter">19</span>k</h2>--}}
{{--                                        <p>Followers on FB</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Single Cool Facts -->--}}
{{--                            <div class="col-12 col-sm-6 col-lg-2">--}}
{{--                                <div class="single-cool-fact mb-100">--}}
{{--                                    <div class="scf-text">--}}
{{--                                        <h2><span class="counter">732</span></h2>--}}
{{--                                        <p>New Artists</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Single Cool Facts -->--}}
{{--                            <div class="col-12 col-sm-6 col-lg-2">--}}
{{--                                <div class="single-cool-fact mb-100">--}}
{{--                                    <div class="scf-text">--}}
{{--                                        <h2><span class="counter">25</span>mil</h2>--}}
{{--                                        <p>Songs in Playlist</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Single Cool Facts -->--}}
{{--                            <div class="col-12 col-sm-6 col-lg-2">--}}
{{--                                <div class="single-cool-fact mb-100">--}}
{{--                                    <div class="scf-text">--}}
{{--                                        <h2><span class="counter">2401</span></h2>--}}
{{--                                        <p>New Songs</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Single Cool Facts -->--}}
{{--                            <div class="col-12 col-sm-6 col-lg-2">--}}
{{--                                <div class="single-cool-fact mb-100">--}}
{{--                                    <div class="scf-text">--}}
{{--                                        <h2><span class="counter">28</span></h2>--}}
{{--                                        <p>Awards Won</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- ========== Icon Boxes ========== -->--}}
{{--                <div class="col-12">--}}
{{--                    <div class="elements-title mb-70">--}}
{{--                        <h2>Icon Boxes</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-12">--}}
{{--                    <div class="row">--}}

{{--                        <!-- Single Service Area -->--}}
{{--                        <div class="col-12 col-md-6">--}}
{{--                            <div class="single-service-area d-flex flex-wrap mb-100">--}}
{{--                                <div class="icon">--}}
{{--                                    <span class="icon-favorites"></span>--}}
{{--                                </div>--}}
{{--                                <div class="text">--}}
{{--                                    <h5>New Artists</h5>--}}
{{--                                    <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Service Area -->--}}
{{--                        <div class="col-12 col-md-6">--}}
{{--                            <div class="single-service-area d-flex flex-wrap mb-100">--}}
{{--                                <div class="icon">--}}
{{--                                    <span class="icon-microphone"></span>--}}
{{--                                </div>--}}
{{--                                <div class="text">--}}
{{--                                    <h5>Amazing Music</h5>--}}
{{--                                    <p>Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante.Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- ========== Icon Boxes ========== -->--}}
{{--                <div class="col-12">--}}
{{--                    <div class="elements-title mb-70">--}}
{{--                        <h2>Web Icons</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-12">--}}
{{--                    <div class="row mb-70">--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-alarm-clock"></i>--}}
{{--                                <span>icon-alarm-clock</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-atomic"></i>--}}
{{--                                <span>icon-atomic</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-bar-chart"></i>--}}
{{--                                <span>icon-bar-chart</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-battery"></i>--}}
{{--                                <span>icon-battery</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-battery-1"></i>--}}
{{--                                <span>icon-battery-1</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-bell"></i>--}}
{{--                                <span>icon-bell</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-bluetooth"></i>--}}
{{--                                <span>icon-bluetooth</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-book"></i>--}}
{{--                                <span>icon-book</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-box"></i>--}}
{{--                                <span>icon-box</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-calculator"></i>--}}
{{--                                <span>icon-calculator</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-calendar"></i>--}}
{{--                                <span>icon-calendar</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-car"></i>--}}
{{--                                <span>icon-car</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-chat"></i>--}}
{{--                                <span>icon-chat</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-chat-1"></i>--}}
{{--                                <span>icon-chat-1</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-checked"></i>--}}
{{--                                <span>icon-checked</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-cloud"></i>--}}
{{--                                <span>icon-cloud</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-cloud-computing"></i>--}}
{{--                                <span>icon-cloud-computing</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-cloud-computing-1"></i>--}}
{{--                                <span>icon-cloud-computing-1</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-compass"></i>--}}
{{--                                <span>icon-compass</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-credit-card"></i>--}}
{{--                                <span>icon-credit-card</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-cursor"></i>--}}
{{--                                <span>icon-cursor</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-cutlery"></i>--}}
{{--                                <span>icon-cutlery</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-download"></i>--}}
{{--                                <span>icon-download</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-edit"></i>--}}
{{--                                <span>icon-edit</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-envelope"></i>--}}
{{--                                <span>icon-envelope</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-eraser"></i>--}}
{{--                                <span>icon-eraser</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-eye"></i>--}}
{{--                                <span>icon-eye</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-fast-forward"></i>--}}
{{--                                <span>icon-fast-forward</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-favorites"></i>--}}
{{--                                <span>icon-favorites</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-file"></i>--}}
{{--                                <span>icon-file</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-file-1"></i>--}}
{{--                                <span>icon-file-1</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-file-2"></i>--}}
{{--                                <span>icon-file-2</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-file-3"></i>--}}
{{--                                <span>icon-file-3</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-filter"></i>--}}
{{--                                <span>icon-filter</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-flag"></i>--}}
{{--                                <span>icon-flag</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-folder"></i>--}}
{{--                                <span>icon-folder</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-folder-1"></i>--}}
{{--                                <span>icon-folder-1</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-gamepad"></i>--}}
{{--                                <span>icon-gamepad</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-heart"></i>--}}
{{--                                <span>icon-heart</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-home"></i>--}}
{{--                                <span>icon-home</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-id-card"></i>--}}
{{--                                <span>icon-id-card</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-idea"></i>--}}
{{--                                <span>icon-idea</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-image"></i>--}}
{{--                                <span>icon-image</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-inbox"></i>--}}
{{--                                <span>icon-inbox</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-information"></i>--}}
{{--                                <span>icon-information</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-key"></i>--}}
{{--                                <span>icon-key</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-laptop"></i>--}}
{{--                                <span>icon-laptop</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-layers"></i>--}}
{{--                                <span>icon-layers</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-like"></i>--}}
{{--                                <span>icon-like</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-line-chart"></i>--}}
{{--                                <span>icon-line-chart</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-loupe"></i>--}}
{{--                                <span>icon-loupe</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-mail"></i>--}}
{{--                                <span>icon-mail</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-map"></i>--}}
{{--                                <span>icon-map</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-medal"></i>--}}
{{--                                <span>icon-medal</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-megaphone"></i>--}}
{{--                                <span>icon-megaphone</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-message"></i>--}}
{{--                                <span>icon-message</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-message-1"></i>--}}
{{--                                <span>icon-message-1</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-message-2"></i>--}}
{{--                                <span>icon-message-2</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-microphone"></i>--}}
{{--                                <span>icon-microphone</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-money"></i>--}}
{{--                                <span>icon-money</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-monitor"></i>--}}
{{--                                <span>icon-monitor</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-music"></i>--}}
{{--                                <span>icon-music</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-next"></i>--}}
{{--                                <span>icon-next</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-padlock"></i>--}}
{{--                                <span>icon-padlock</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-padlock-1"></i>--}}
{{--                                <span>icon-padlock-1</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-paint-brush"></i>--}}
{{--                                <span>icon-paint-brush</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-pause"></i>--}}
{{--                                <span>icon-pause</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-phone-call"></i>--}}
{{--                                <span>icon-phone-call</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-photo-camera"></i>--}}
{{--                                <span>icon-photo-camera</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-placeholder"></i>--}}
{{--                                <span>icon-placeholder</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-planet-earth"></i>--}}
{{--                                <span>icon-planet-earth</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-play-button"></i>--}}
{{--                                <span>icon-play-button</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-power-button"></i>--}}
{{--                                <span>icon-power-button</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-presentation"></i>--}}
{{--                                <span>icon-presentation</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-printer"></i>--}}
{{--                                <span>icon-printer</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-reload"></i>--}}
{{--                                <span>icon-reload</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-return"></i>--}}
{{--                                <span>icon-return</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-rss"></i>--}}
{{--                                <span>icon-rss</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-safebox"></i>--}}
{{--                                <span>icon-safebox</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-settings"></i>--}}
{{--                                <span>icon-settings</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-settings-1"></i>--}}
{{--                                <span>icon-settings-1</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-settings-2"></i>--}}
{{--                                <span>icon-settings-2</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-share"></i>--}}
{{--                                <span>icon-share</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-shield"></i>--}}
{{--                                <span>icon-shield</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-shopping-cart"></i>--}}
{{--                                <span>icon-shopping-cart</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-smartphone"></i>--}}
{{--                                <span>icon-smartphone</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-speaker"></i>--}}
{{--                                <span>icon-speaker</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-speakers"></i>--}}
{{--                                <span>icon-speakers</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-trash"></i>--}}
{{--                                <span>icon-trash</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-trophy"></i>--}}
{{--                                <span>icon-trophy</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-upload"></i>--}}
{{--                                <span>icon-upload</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-user"></i>--}}
{{--                                <span>icon-user</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-user-1"></i>--}}
{{--                                <span>icon-user-1</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-user-2"></i>--}}
{{--                                <span>icon-user-2</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-user-3"></i>--}}
{{--                                <span>icon-user-3</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-users"></i>--}}
{{--                                <span>icon-users</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-video-camera"></i>--}}
{{--                                <span>icon-video-camera</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-wifi"></i>--}}
{{--                                <span>icon-wifi</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-zoom-in"></i>--}}
{{--                                <span>icon-zoom-in</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Web Icon -->--}}
{{--                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">--}}
{{--                            <div class="single-web-icon mb-30">--}}
{{--                                <i class="icon-zoom-out"></i>--}}
{{--                                <span>icon-zoom-out</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection
