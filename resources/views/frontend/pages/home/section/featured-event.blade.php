<section class="featured-events-section pt-4" id="Events">
    <div class="container p-relative">
        <div class="title-margin">
            <h2 class="ps-700 font-24 c00">Featured Events</h2>
        </div>

        <!-- Swiper Slider Start -->
        <div class="swiper-container  swiper-container3">
            <div class="swiper-wrapper swiper-slide-pb">
                @foreach ($featured_events as $featured_event)
                    <div class="swiper-slide">
                        <div class="event shadow-2">
                            <div class="event-img tr position-relative">
                                <img src="{{ asset($featured_event->event->image) }}" alt="featured events"
                                     class="img">
                                <div class="label position-absolute live">LIve Now</div>
{{--                                <div class="label position-absolute time">Mon - 07:00 pm</div>--}}
                            </div>
                            <div class="event-content">
                                <div class="event-date-titme d-flex justify-content-between">
                                </div>
                                <div class="event-desc-1 ">
                                    <h4 class="ps-700 s22 c00 mb-3">{{  $featured_event->event->title }}</h4>
                                    <p class="ps-400 s16 c6a height-50 mb-4">
                                        {{Str::limit($featured_event->event->description, 80, '')}}
                                   <span>
                                       @if(strlen($featured_event->event->description) >80)
                                        <a href="{{ url('event-details', $featured_event->event->id) }}"
                                           class="ps-700 s16 cb6">More...</a>
                                       @endif
                                   </span>
                                    </p>
                                </div>
                                <div class="event-desc-1">
                                    <a href="{{ url('event-details', $featured_event->event->id) }}"
                                       class="ps-700 s18 cff tc mx-auto d-block">Join</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Swiper Slider End -->

        <!-- Swiper Slider Prev Btn -->
        <div class="swiper-btn courses-swiper-btn d-flex justify-content-between">
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-prev-3">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-left.svg" alt="arrow right" class="">
            </button>
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-next-3">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-right.svg" alt="arrow right" class="">
            </button>
        </div>
    </div>
</section>
