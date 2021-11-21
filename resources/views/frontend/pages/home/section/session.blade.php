<section class="session-section" id="Sessions">
    <div class="container p-relative">
        <div class="session-title">
            <h2 class="ps-700 s32 c00">Indivisual Session</h2>
        </div>
        <div class="swiper-container swiper-container2">
            @foreach ($indevidual_sessions as $indevidual_session)
            <div class="swiper-wrapper swiper-slide-pb">

                <div class="swiper-slide">
                    <div class="session shadow-4 rounded-tt">
                        <div class="session-img">
                            <img src="{{ asset($indevidual_session->event->image) }}" alt="session" class="img">
                        </div>
                        <div class="session-content">
                            <div class="session-name">
                                <h4 class="ps-700 s18 c00">{{ $indevidual_session->event->title}}</h4>
                            </div>
                            <div class="event-desc-1">
                                <p class="ps-400 s14 c6a">{{ $indevidual_session->event->description }}</p>
                                <a href="{{url('session-details',$indevidual_session->event->id)}}" class="ps-700 s16 cb6">More...</a>
                                <a href="{{url('session-details',$indevidual_session->event->id)}}" class="ps-700 s18 cff tc mx-auto d-block">Join</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>



        <!-- Swiper Slider Prev Btn -->
        <div class="swiper-btn d-flex justify-content-between">
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-prev-2">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-left.svg" alt="arrow right" class="">
            </button>
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-next-2">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-right.svg" alt="arrow right" class="">
            </button>
        </div>
    </div>
</section>
