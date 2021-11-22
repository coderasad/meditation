<section class="gellary-section pb-100">
    <div class="container">
        <div class="tab__area">
            <!---- TAB BTN ---->
            <div class="tab d-flex">
                <button type="button" class="tablinks tc ps-700 images" onclick="openCity(event, 'London')" id="defaultOpen">Images</button>
                <button type="button" class="tablinks tc ps-700 videos" onclick="openCity(event, 'Paris')">Videos</button>
            </div>

            <!-------- TAB CONTENT -------->
            <div class="main__tab">
                <div id="London" class="tabcontent">
                    <!---- TAB BTN ---->
                    <div class="tc t-btn">
                        {{-- <a href="#tab1" data-tab="tab1" class="b-nav-tab active ps-700 c00 s22">Facilities</a>
                        <a href="#tab2" data-tab="tab2" class="b-nav-tab ps-700 c00 s22">Events</a>
                        <a href="#tab3" data-tab="tab3" class="b-nav-tab ps-700 c00 s22">Workshops</a> --}}
                    </div>

                    <!-------- TAB CONTENT-1 -------->
                    <div class="b-tab active" id="tab1">
                        {{-- <div class="filtering-btn ga-filtering-btn tc">
                            <button type="button" class="ps-700 c00 s18" data-filter="all">Zorba</button>
                            <button type="button" class="ps-700 c00 s18" data-filter=".Treenayana">Treenayana</button>
                            <button type="button" class="ps-700 c00 s18" data-filter=".Library">Library</button>
                            <button type="button" class="ps-700 c00 s18" data-filter=".Therapy">Therapy room</button>
                            <button type="button" class="ps-700 c00 s18" data-filter=".Shower">Shower</button>
                            <button type="button" class="ps-700 c00 s18" data-filter=".Locker">Locker</button>
                        </div> --}}
                        <div class="row g-5 mix-filter">
                            <div class="col-sm-4">
                                <div class="row g-5">
                                    @foreach ($gallaries as $gallary)
                                    <div class="col-12 mix Treenayana Therapy Shower">
                                        <div class="ga-img">
                                            <img src="{{ asset($gallary->image) }}" alt="gallary" class="img">
                                        </div>
                                    </div>
                                    @endforeach
                                    {{-- <div class="col-12 mix Therapy">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/gallary4.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                    <div class="col-12 mix Shower Library">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/gallary5.png" alt="gallary" class="img">
                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                            {{-- <div class="col-sm-4">
                                <div class="row g-5">
                                    <div class="col-12 mix Locker">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/gallary2.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                    <div class="col-12 mix Therapy Library">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/gallary6.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                    <div class="col-12 mix Treenayana Locker">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/gallary8.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="row g-5">
                                    <div class="col-12 mix Library Shower">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/gallary3.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                    <div class="col-12 mix Locker">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/gallary7.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                    <div class="col-12 mix Locker">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/gallary9.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-12">
                                <div class="ga-btn">
                                    <a href="javascript:void(0)" class="mx-auto cff secondary-btn">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <!-------- TAB CONTENT-2 -------->
                    <div class="b-tab" id="tab2">
                        <div class="row g-5">
                            <div class="col-sm-4">
                                <div class="row g-5">
                                    <div class="col-12">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/s4.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/gallary4.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/gallary5.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="row g-5">
                                    <div class="col-12">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/s5.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/gallary6.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/gallary8.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="row g-5">
                                    <div class="col-12">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/s6.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/gallary7.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ga-img">
                                            <img src="{{ asset('') }}asset/frontend/images/gallary9.png" alt="gallary" class="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-------- TAB CONTENT-3 -------->
                <div class="b-tab" id="tab3">
                    <div class="row g-5">
                        <div class="col-sm-4">
                            <div class="row g-5">
                                <div class="col-12">
                                    <div class="ga-img">
                                        <img src="{{ asset('') }}asset/frontend/images/s1.png" alt="gallary" class="img">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="ga-img">
                                        <img src="{{ asset('') }}asset/frontend/images/gallary4.png" alt="gallary" class="img">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="ga-img">
                                        <img src="{{ asset('') }}asset/frontend/images/gallary5.png" alt="gallary" class="img">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="row g-5">
                                <div class="col-12">
                                    <div class="ga-img">
                                        <img src="{{ asset('') }}asset/frontend/images/s2.png" alt="gallary" class="img">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="ga-img">
                                        <img src="{{ asset('') }}asset/frontend/images/gallary6.png" alt="gallary" class="img">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="ga-img">
                                        <img src="{{ asset('') }}asset/frontend/images/gallary8.png" alt="gallary" class="img">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="row g-5">
                                <div class="col-12">
                                    <div class="ga-img">
                                        <img src="{{ asset('') }}asset/frontend/images/s3.png" alt="gallary" class="img">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="ga-img">
                                        <img src="{{ asset('') }}asset/frontend/images/gallary7.png" alt="gallary" class="img">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="ga-img">
                                        <img src="{{ asset('') }}asset/frontend/images/gallary9.png" alt="gallary" class="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        <!-------- TAB CONTENT -------->
        <div id="Paris" class="tabcontent gallary-tab-video">
            <div class="row g-5">
                @foreach ($videos as $video)
                <div class="col-md-4 col-sm-6">
                    <div class="gallary-video">
                        <iframe width="100%" height="165" src="https://www.youtube.com/embed/{{ $video->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <p class="ps-400 s12 c86">{{ $video->text }}</p>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
</section>
