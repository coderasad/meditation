<section class="session-section d-none d-sm-block mt-5 pt-5" id="Sessions">
    <div class="container p-relative">
        <div class="">
            <h2 class="ps-700 font-24 c00">Indivisual Session</h2>
        </div>
        <div class="swiper-container  swiper-container2">
            <div class="swiper-wrapper swiper-slide-pb">
                @foreach ($indevidual_sessions as $indevidual_session)
                    <div class="swiper-slide">
                        <div class="event shadow-2">
                            <div class="event-img tr">
                                <img src="{{ asset($indevidual_session->event->image) }}" alt="session" class="img">
                            </div>
                            <div class="event-content">
                                <div class="event-date-titme d-flex justify-content-between">
                                </div>
                                <div class="event-desc-1 ">
                                    <h4 class="ps-700 s22 c00">{{  $indevidual_session->event->title }}</h4>
                                    <p class="ps-400 s14 c6a height-50"> {{  substr($indevidual_session->event->description, 0, 80)  }} {{strlen($indevidual_session->event->description) > 80 ? '...':''}}</p>
                                    <a href="{{url('session-details',$indevidual_session->event->id)}}"
                                       class="ps-700 s16 cb6">More...</a>
                                </div>
                                <div class="event-desc event-desc-1">
                                    <a href="{{url('session-details',$indevidual_session->event->id)}}"
                                       class="ps-700 s18 cff tc mx-auto d-block">Join</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <!-- Swiper Slider Prev Btn -->
        <div class="swiper-btn courses-swiper-btn d-flex justify-content-between">
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-prev-2">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-left.svg" alt="arrow right" class="">
            </button>
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-next-2">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-right.svg" alt="arrow right" class="">
            </button>
        </div>
    </div>
</section>
