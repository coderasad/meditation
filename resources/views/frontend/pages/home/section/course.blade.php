<section class="courses-section d-none d-sm-block mt-5 pt-5" id="Courses">
    <div class="container p-relative">
        <div class="">
            <h2 class="ps-700 font-24 c00">Our Courses</h2>
        </div>


        <div class="swiper-container  swiper-container1">
            <div class="swiper-wrapper swiper-slide-pb">
                @foreach ($courses as $course)
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
                                    <a href="{{ url('course-details', $course->id) }}"
                                       class="ps-700 s16 cb6">More...</a>
                                </div>
                                <div class="event-desc event-desc-1">
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
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-prev-1">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-left.svg" alt="arrow right" class="">
            </button>
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-next-1">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-right.svg" alt="arrow right" class="">
            </button>
        </div>
        {{--<div class="d-block d-sm-none">
            <div class="swiper-btn d-flex justify-content-between">
                <button type="button" class="circle d-flex justify-content-center align-items-center swiper-prev-testi">
                    <img src="assets/svg-icon/arrow-left.svg" alt="arrow right" class="">
                </button>
                <button type="button" class="circle d-flex justify-content-center align-items-center swiper-next-testi">
                    <img src="assets/svg-icon/arrow-right.svg" alt="arrow right" class="">
                </button>
            </div>
        </div>--}}

    </div>
</section>




