<?php
use Carbon\Carbon;
?>
<section class="gellary-section py-70">
    <div class="container">
        <h2 class="ps-700 font-24 c00 mb-5">Upcoming Event</h2>
        <div class="row gx-4 gy-5 mix-filter">

            @foreach ($upcoming_events as $upcoming_event)
                <div class="col-lg-4 col-sm-6 mix ">
                    <div class="featured-events shadow-4">
                        <div class="featured-events-img p-relative">
                            <img src="{{ asset( $upcoming_event->image )}}" alt="featured events" class="img">
                            <p class="ps-700 s14 cff fe-live-date fe-date tc">
                                {{date_create($upcoming_event->starting_at)->format('D')}} - {{date_create($upcoming_event->starting_at)->format('h:s a')}}
                            </p>
                        </div>
                        <div class="featured-events-content">
                            <div class="featured-events-name">
                                <h4 class="ps-700 s18 c00">{{ $upcoming_event->title }}</h4>
                            </div>
                            <div class="featured-events-desc">
                                <p class="ps-400 s16 c51">
                                    {{Str::limit($upcoming_event->description, 80,  '')  }}
                                </p>

                            </div>
                            <div class=" event-desc-1">
                                <a href="{{ url('event-details', $upcoming_event->id) }}"
                                   class="ps-700 s18 cff tc mx-auto d-block">Join</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <h2 class="ps-700 font-24 c00 mt-5 pt-5 mb-5">All Event</h2>
        <div class="row gx-4 gy-5 mix-filter">
            @foreach ($all_events as $all_event)
                <div class="col-lg-4 col-sm-6 mix live ">
                    <div class="featured-events shadow-4">
                        <div class="featured-events-img p-relative">
                            <img src="{{ asset( $all_event->image )}}" alt="featured events" class="img">
                            <p class="ps-700 s14 cff fe-live-date fe-date tc">{{date_create($upcoming_event->starting_at)->format('D')}} - {{date_create($upcoming_event->starting_at)->format('h:s a')}}</p>
                        </div>
                        <div class="featured-events-content">
                            <div class="featured-events-name">
                                <h4 class="ps-700 s18 c00">{{ $all_event->title }}</h4>
                            </div>
                            <div class="featured-events-desc">
                                <p class="ps-400 s16 c51 height-50">
                                    {{  str::limit($all_event->description, 80, '')  }}
                                </p>
                            </div>
                            <div class=" event-desc-1">
                                <a href="{{ url('event-details', $all_event->id) }}"
                                   class="ps-700 s18 cff tc mx-auto d-block">Join</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-end">
                {{ $all_events->links() }}
            </div>
        </div>
    </div>
    <script src="{{ asset('') }}asset/frontend/js/mixitup.min.js"></script>
    <script>

        // MIXITUP
        var containerEl = document.querySelector('.mix-filter');
        var mixer = mixitup(containerEl);

    </script>
</section>
