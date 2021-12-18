<section class="gellary-section py-70">
    <div class="container">

        <div class="row gx-4 gy-5 mix-filter">

            @foreach ($all_data as $all_session)
            <div class="col-lg-4 col-sm-6 mix popular-sessions new-sessions">
                <div class="session shadow-4">
                    <div class="session-img">
                        <img src="{{ asset($all_session->image) }}" alt="session" class="img">
                    </div>
                    <div class="session-content">
                        <div class="session-name">
                            <h4 class="ps-700 s18 c00">{{ $all_session->title }}</h4>
                        </div>
                        <div class="session-desc">
                            <p class="ps-400 s16 c51 height-50">
                                {{  substr($all_session->description, 0, 80)  }} {{strlen($all_session->description) > 80 ? '...':''}}
                            </p>
                        </div>
                        <div class=" event-desc-1">
                            <a href="{{ url('session-details', $all_session->id) }}"
                               class="ps-700 s16 color-main">More...</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="text-end">
                {{$all_data->links()}}
            </div>
        </div>
    </div>
</section>
