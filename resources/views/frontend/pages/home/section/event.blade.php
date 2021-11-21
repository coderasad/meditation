@if(count($upcoming_events) > 0)
<section class="event-section d-none d-sm-block mb-4">
    <div class="container p-relative">
        <div class="event-title">
            <h2 class="ps-700 s38 c00">Upcoming Event</h2>
        </div>
        <div class="row g-5 event-wrapper">
            @foreach ($upcoming_events as $upcoming_event)
            <div class="col-lg-4 col-sm-6">
               <div class="event shadow-2">
                <div class="event-img tr">
                    <img src="{{ asset($upcoming_event->image) }}" alt="event">
                </div>
                <div class="event-content">
                    <div class="event-date-titme d-flex justify-content-between">
                        <p class="ps-700 s16 c11">
                            <span class="d-block">{{ date_format(date_create($upcoming_event->starting_date), 'd M') }}</span>
                            <span>({{ date_format(date_create($upcoming_event->starting_date), 'l') }})</span>
                        </p>
                        <p class="ps-700 s16 c11">{{ date_format(date_create($upcoming_event->starting_date), 'h:i A') }}</p>
                    </div>
                    <div class="event-name">
                        <h4 class="ps-700 s20 c00">{{ $upcoming_event->title }}</h4>
                    </div>
                    <div class="event-desc-1">
                        <p class="ps-400 s14 c6a">{{ $upcoming_event->description }}</p>
                        <a href="{{ url('event-details', $upcoming_event->id) }}" class="ps-700 s16 cb6">More...</a>
                    </div>
                    <div class="event-desc event-desc-1">
                        <a href="{{ url('event-details', $upcoming_event->id) }}" class="ps-700 s18 cff tc mx-auto d-block">Join</a>
                    </div>
                </div>
            </div>
            </div>
            @endforeach

        </div>

        <!-- Swiper Slider Prev Btn -->
        <div class="swiper-btn courses-swiper-btn d-flex justify-content-between">
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-prev-1">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-left.svg" alt="arrow right" class="">
            </button>
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-next-1">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-right.svg" alt="arrow right" class="">
            </button>
        </div>

    </div>
</section>
@endif
<!--
    ==============================
    Mobail Device Slider
    ==============================
  -->
{{-- <section class="event-section d-block d-sm-none">
    <div class="container p-relative">
        <div class="event-title">
            <h2 class="ps-700 s38 c00">Upcoming Event</h2>
        </div>


        <!-- Swiper Slider Start -->
        <div class="swiper-container swiper-container-event">
            <div class="swiper-wrapper swiper-slide-pb">
                <div class="swiper-slide">
                    <div class="event shadow-2">
                        <div class="event-img tr">
                            <img src="{{ asset('') }}asset/frontend/images/event1.png" alt="event">
                        </div>
                        <div class="event-content">
                            <div class="event-date-titme d-flex justify-content-between">
                                <p class="ps-700 s16 c11">
                                    <span class="d-block">09 Jan</span>
                                    <span>(Friday)</span>
                                </p>
                                <p class="ps-700 s16 c11">12:30 PM</p>
                            </div>
                            <div class="event-name">
                                <h4 class="ps-700 s20 c00">Event Name</h4>
                            </div>
                            <div class="event-desc event-desc-1">
                                <p class="ps-400 s14 c6a">Our modern world is a visual world. We carry
                                    cameraphones everywhere we go, recording our lunches and our pets and our.
                                </p>
                                <a href="javascript:void(0)" class="ps-700 s18 cff tc mx-auto d-block">Pre-book
                                    Now</a>
                                <p class="tr s12 ps-400 c99">45 People Booked</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="event shadow-2">
                        <div class="event-img tr">
                            <img src="{{ asset('') }}asset/frontend/images/event2.png" alt="event">
                        </div>
                        <div class="event-content">
                            <div class="event-date-titme d-flex justify-content-between">
                                <p class="ps-700 s16 c11">
                                    <span class="d-block">09 Jan</span>
                                    <span>(Friday)</span>
                                </p>
                                <p class="ps-700 s16 c11">12:30 PM</p>
                            </div>
                            <div class="event-name">
                                <h4 class="ps-700 s20 c00">Event Name</h4>
                            </div>
                            <div class="event-desc">
                                <p class="ps-400 s14 c6a">Our modern world is a visual world. We carry
                                    cameraphones everywhere we go, recording our lunches and our pets and our.
                                </p>
                                <a href="javascript:void(0)" class="ps-700 s18 cff tc mx-auto d-block">Pre-book
                                    Now</a>
                                <p class="tr s12 ps-400 c99">45 People Booked</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="event shadow-2">
                        <div class="event-img tr">
                            <img src="{{ asset('') }}asset/frontend/images/event3.png" alt="event">
                        </div>
                        <div class="event-content">
                            <div class="event-date-titme d-flex justify-content-between">
                                <p class="ps-700 s16 c11">
                                    <span class="d-block">09 Jan</span>
                                    <span>(Friday)</span>
                                </p>
                                <p class="ps-700 s16 c11">12:30 PM</p>
                            </div>
                            <div class="event-name">
                                <h4 class="ps-700 s20 c00">Event Name</h4>
                            </div>
                            <div class="event-desc">
                                <p class="ps-400 s14 c6a">Our modern world is a visual world. We carry
                                    cameraphones everywhere we go, recording our lunches and our pets and our.
                                </p>
                                <a href="javascript:void(0)" class="ps-700 s18 cff tc mx-auto d-block">Pre-book
                                    Now</a>
                                <p class="tr s12 ps-400 c99">45 People Booked</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Slider End -->

        <!-- Swiper Slider Prev Btn -->
        <div class="swiper-btn d-flex justify-content-between">
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-prev-event">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-left.svg" alt="arrow right" class="">
            </button>
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-next-event">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-right.svg" alt="arrow right" class="">
            </button>
        </div>
    </div>
</section> --}}
