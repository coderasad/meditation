<section class="gellary-section py-70">
    <div class="container p-relative">

        <div class="title-margin">
            <h2 class="ps-700 font-24 c00">Online Course</h2>
        </div>
        <div class="row gx-4 gy-5 mix-filter">

            <div class="swiper-container  swiper-container1">
                <div class="swiper-wrapper swiper-slide-pb">
                    @foreach ($online_data as $course)
                        <div class="swiper-slide">
                            <div class="event shadow-2">
                                <div class="event-img tr">
                                    <img src="{{ asset($course->event->image) }}" alt="courses" class="img">
                                </div>
                                <div class="event-content">
                                    <div class="event-date-titme d-flex justify-content-between">
                                    </div>
                                    <div class="event-desc-1 ">
                                        <h4 class="ps-700 s22 c00">{{ $course->event->title }}</h4>

                                        <p class="ps-400 s16 c6a height-50 mb-4">
                                            {{Str::limit($course->event->description, 80, '')}}
                                            <span>
                                                @if(strlen($course->event->description) >80)
                                                    <a href="{{ url('event-details', $course->event->id) }}"
                                                       class="ps-700 s16 cb6">More...</a>
                                                @endif
                                            </span>
                                        </p>
                                    </div>
                                    <div class="event-desc-1">
                                        <a href="{{ url('course-details', $course->event->id) }}"
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
                <button type="button" class="circle d-flex justify-content-center align-items-center swiper-prev-1">
                    <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-left.svg" alt="arrow right" class="">
                </button>
                <button type="button" class="circle d-flex justify-content-center align-items-center swiper-next-1">
                    <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-right.svg" alt="arrow right" class="">
                </button>
            </div>
        </div>
    </div>
    <div class="container p-relative">
        <div class="title-margin">
            <h2 class="ps-700 font-24 c00">Onsite Course</h2>
        </div>
        <div class="row gx-4 gy-5 mix-filter">

            <div class="swiper-container  swiper-container2">
                <div class="swiper-wrapper swiper-slide-pb">
                    @foreach ($all_data as $course)
                        <div class="swiper-slide">
                            <div class="event shadow-2">
                                <div class="event-img tr">
                                    <img src="{{ asset($course->image) }}" alt="courses" class="img">
                                </div>
                                <div class="event-content">
                                    <div class="event-date-titme d-flex justify-content-between">
                                    </div>
                                    <div class="event-desc-1 ">
                                        <h4 class="ps-700 s22 c00">{{ $course->title }}</h4>
                                        <p class="ps-400 s14 c6a height-50">{{  substr($course->description, 0, 80)  }} {{strlen($course->description) > 80 ? '...':''}}</p>

                                    </div>
                                    <div class="event-desc-1">
                                        <a href="{{ url('course-details', $course->id) }}"
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
    </div>
</section>
