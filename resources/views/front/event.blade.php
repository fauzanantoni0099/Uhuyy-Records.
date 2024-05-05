@extends('front.blank')
@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/trigger.jpg);">
        <div class="bradcumbContent">
            <h2>Events</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Events Area Start ##### -->
    <section class="events-area section-padding-100">
        <div class="container">
            <div class="row">

                <!-- Single Event Area -->
                @foreach($events as $event)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-event-area mb-30">
                        <div class="event-thumbnail">
                            @foreach($event->images as $image)
                            <img src="/{{$image->name_path}}" alt="">
                            @endforeach
                        </div>
                        <div class="event-text">
                            <h4>{{$event->name}}</h4>
                            <div class="event-meta-data">
                                <a href="#" class="event-place">{{$event->location}}</a>
                                @if($event->date == null)
                                    <a href="">-</a>
                                @else
                                <a href="#" class="event-date">{{\Carbon\Carbon::parse($event->date)->isoFormat('MMMM D, Y')}}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ##### Events Area End ##### -->

    <!-- ##### Newsletter & Testimonials Area Start ##### -->
    <section class="newsletter-testimonials-area">
        <div class="container">
            <div class="row">

                <!-- Newsletter Area -->

                <!-- Testimonials Area -->
                <div class="col-12 col-lg-12">
                    <div class="testimonials-area mb-100 bg-img bg-overlay" style="background-image: url(img/bg-img/trigger1.JPG);">
                        <div class="section-heading white text-left mb-50">
                            <h2>Testimonial</h2>
                        </div>
                        <!-- Testimonial Slide -->
                        <div class="testimonials-slide owl-carousel">
                            @foreach($testimonials as $testimonial)
                                <div class="single-slide">
                                    @if($testimonial->note == null)
                                        <p> - </p>
                                    @else
                                        <p>{{$testimonial->note}}</p>
                                    @endif
                                    <div class="testimonial-info d-flex align-items-center">
                                        <div class="testimonial-thumb">
                                            @foreach($testimonial->images as $image)
                                            <img src="/{{$image->name_path}}" alt="">
                                            @endforeach
                                        </div>
                                        <p>{{$testimonial->name}}, {{$testimonial->job}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Newsletter & Testimonials Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
@endsection
