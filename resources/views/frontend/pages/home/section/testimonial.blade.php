<section class="testimonial-section pt-50">
    <div class="container p-relative">
        <div class="testimonial-title">
            <h2 class="ps-700 font-24 c00">Testimonial</h2>
        </div>

        <!-- Swiper Slider Start -->
        <div class="swiper-container swiper-container-testi">
            <div class="swiper-wrapper">
                @foreach ($testimonials as $testimonial)
                {{--<div class="swiper-slide">
                    <div class="col-lg-4 col-md-6">
                        <div class="reviews rounded testimonial">
                            <div class="reviews-client-id d-flex align-items-center justify-content-center">
                                <img src="{{ asset($testimonial->image) }}" alt="Jhon-Smith">

                            </div>
                            <p class="s14 c66 text-center">
                                {{ $testimonial->description }}
                            </p>
                            <hr>
                            <div class="">
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="c00 s14">{{ $testimonial->name }}</h2>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="s12 c81">{{ $testimonial->title }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>--}}
                <div class="swiper-slide">
                    <div class="session  rounded-tt">
                        <div class="testimonial-img text-center ">
                            <img src="{{ asset($testimonial->image) }}" alt="session" class="img">
                        </div>
                        <div class="testimonial-content text-center">
                            <div class="session-desc pt-2">
                                <p class="ps-400 s16 c51 testimonial-text">
                                    {{  substr($testimonial->description, 0, 80)  }} {{strlen($testimonial->description) > 80 ? '...':''}}
                                </p>
                                <hr>
                                <div class="pb-5">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <h2 class="c00 s14">{{ $testimonial->name }}</h2>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="s12 c81">{{ $testimonial->title }}</p>
                                    </div>
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
        <div class="d-block d-sm-none">
            <div class="swiper-btn d-flex justify-content-between">
                <button type="button" class="circle d-flex justify-content-center align-items-center swiper-prev-testi">
                    <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-left.svg" alt="arrow right" class="">
                </button>
                <button type="button" class="circle d-flex justify-content-center align-items-center swiper-next-testi">
                    <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-right.svg" alt="arrow right" class="">
                </button>
            </div>
        </div>
    </div>
</section>
