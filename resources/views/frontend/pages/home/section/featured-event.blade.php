<section class="featured-events-section" id="Events">
    <div class="container p-relative">
        <div class="featured-events-title">
            <h2 class="ps-700 s32 c00">Featured Events</h2>
        </div>

        <!-- Swiper Slider Start -->
        <div class="swiper-container swiper-container3">
            <div class="swiper-wrapper swiper-slide-pb">
               @foreach ($featured_events as $featured_event)
               <div class="swiper-slide">
                <div class="featured-events shadow-4 rounded-tt">
                    <div class="featured-events-img p-relative">
                        <img src="{{ asset($featured_event->event->image) }}" alt="featured events"
                            class="img">
                        <p class="ps-700 s14 cff fe-live-date tc">Live Now</p>
                    </div>

                    {{--  <div class="featured-events-content">
                        <div class="featured-events-name">
                            <h4 class="ps-700 s18 c00">{{ $featured_event->event->title }}</h4>
                        </div>
                        <div class="featured-events-desc">
                            <p class="ps-400 s16 c51">
                                {{ $featured_event->event->description }}
                            </p>
                            <div class="tr">
                                <a href="javascript:void(0)" class="ps-700 cfd s16">1.7k attending</a>
                            </div>
                        </div>
                        <div class="featured-events">
                            <a href="{{ url('event-details', $featured_event->id) }}" class="primary-btn">Join</a>
                        </div>
                    </div>  --}}

                    <div class="featured-events-content">
                    <div class="session-content">
                        <div class="session-name">
                            <h4 class="ps-700 s18 c00">{{ $featured_event->event->title }}</h4>
                        </div>
                        <div class="event-desc-1">
                            <p class="ps-400 s14 c6a">{{ $featured_event->event->description }}</p>
                            <a href="{{ url('event-details', $featured_event->event->id) }}" class="ps-700 s16 cb6">More...</a>
                            <a href="{{ url('event-details', $featured_event->event->id) }}" class="ps-700 s18 cff tc mx-auto d-block">Join</a>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
               @endforeach

            </div>
        </div>
        <!-- Swiper Slider End -->

        <!-- Swiper Slider Prev Btn -->
        <div class="swiper-btn d-flex justify-content-between">
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-prev-3">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-left.svg" alt="arrow right" class="">
            </button>
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-next-3">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-right.svg" alt="arrow right" class="">
            </button>
        </div>
    </div>
</section>
