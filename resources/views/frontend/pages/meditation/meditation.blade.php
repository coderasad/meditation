@extends('frontend.layouts.app')

@section('title', 'Meditation')

@section('content')
    <section class="same-bg">
        <div class="container">
            <div class="same-bg-text tc">
                <h1 class="ps-700 c00 s38">Our Meditation</h1>
                <ul class="d-flex align-items-center justify-content-center">
                    <li><a href="{{url('/')}}" class="ps-700 cff s18">Home</a></li>
                    <li class="ps-700 cff s18">|</li>
                    <li><a href="javascript:void(0)" class="ps-700 cb6 s18">Meditation</a></li>
                </ul>
            </div>
        </div>
    </section>
    @foreach ($data as $row)
        <section class="gellary-section mt-5">
            <div class="container">
                <div class="title-margin">
                    <h2 class="ps-700 font-24 c00">{{ $row->title }}</h2>
                </div>
                <div class="row gx-4 gy-5 mix-filter p-relative">
                    <div class="swiper-container pb-5 meditation-container{{$row->id}}">
                        <div class="swiper-wrapper swiper-slide-pb">
                            @foreach ($row->meditations as $course)
                                <div class="swiper-slide">
                                    <div class="event shadow-2">
                                        <div class="event-img tr">
                                            <img src="{{ asset($course->image) }}" alt="courses" class="img">
                                        </div>
                                        <div class="event-content">
                                            <div class="event-date-titme d-flex justify-content-between">
                                            </div>
                                            <div class="event-desc-1 custom-p">
                                                <h4 class="ps-700 s22 c00">{{ $course->title }}</h4>
                                                {!!  Str::limit($course->description, 80, '') !!}
                                                <span>
                                                        @if(Str::limit($course->description) >80)
                                                        <a href="{{ url('meditation-details', $course->id) }}"
                                                           class="ps-700 s16 cb6">More...</a>
                                                    @endif
                                                    </span>
                                            </div>
                                            <div class="event-desc-1">
                                                <a href="{{ url('meditation-details', $course->id) }}"
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
                        <button type="button"
                                class="circle d-flex justify-content-center align-items-center swiper-prev-{{$row->id}}">
                            <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-left.svg" alt="arrow right" class="">
                        </button>
                        <button type="button"
                                class="circle d-flex justify-content-center align-items-center swiper-next-{{$row->id}}">
                            <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-right.svg" alt="arrow right"
                                 class="">
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <script>
            // SLIDER COURSES
            var swiper = new Swiper('.meditation-container{{$row->id}}', {
                slidesPerView: 1,
                spaceBetween : 20,
                loop         : true,
                autoplay     : {
                    delay               : 30000,
                    disableOnInteraction: false,
                },
                navigation   : {
                    nextEl: '.swiper-next-{{$row->id}}',
                    prevEl: '.swiper-prev-{{$row->id}}',
                },
                breakpoints  : {
                    576: {
                        slidesPerView: 2,
                        spaceBetween : 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween : 20,
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween : 20,
                    },
                }
            });
        </script>
    @endforeach
    <div class="pb-70"></div>
@endsection
