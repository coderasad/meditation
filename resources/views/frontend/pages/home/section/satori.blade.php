
    <section class="satori-section pt-100" id="meditations">
        <div class="container p-relative">
            <div class="satori-title tc">
                <h2 class="ps-700 s26 c00">Satori Meditations</h2>
                <p class="ps-400 s16 c42 tc mx-auto">
                    Satori offers meditation, yoga, various transformative courses, meditative
                    therapies, individual sessions as a bridge to meditation which covers body,
                    life issues, creativity, centering, esoteric, mind and emotions.
                </p>
            </div>

            <!-- Swiper Slider Start -->
            <div class="swiper-container satori-swiper-container">
                <div class="swiper-wrapper swiper-slide-pb">
                    <?php $i=1 ?>
                    @foreach ($satories as $satori)
                    <div class="swiper-slide">
                        <div class="  rounded-tt">
                            <div class="stario-img ">
                                {{--  <a href="{{ url('focus', $satori->id) }}">  --}}
                                <a href="{{ url('satori/'.$satori->title.'/'.$satori->id) }}" class="overlay-ar">
                                    {{--  href="{{url($row->event->category_id==2 ? 'session-details' : 'course-details',$row->id)}}"   --}}
                                    <img src="{{ asset($satori->image) }}" alt="courses" class="img">
                                </a>
                            </div>
                            <div class="satori-img-title tc">
                                <h4 class="ps-700 s20 c22">{{ $satori->title }} </h4>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- Swiper Slider End -->

            <!-- Swiper Slider Prev Btn -->
            <div class="swiper-btn courses-swiper-btn d-flex justify-content-between">
                <button type="button" class="circle d-flex justify-content-center align-items-center swiper-prev-satori-swiper-container">
                    <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-left.svg" alt="arrow right" class="">
                </button>
                <button type="button" class="circle d-flex justify-content-center align-items-center swiper-next-satori-swiper-container">
                    <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-right.svg" alt="arrow right" class="">
                </button>
            </div>

        </div>
    </section>

