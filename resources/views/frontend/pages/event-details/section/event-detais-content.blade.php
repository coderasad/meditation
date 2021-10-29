<section class="py-100">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-5">
                <div class="events-details-text">
                    <ul class="d-flex align-items-center ed-ul-1">
                        <li><a href="javascript:void(0)" class="tc ps-700 cff s14">Live Now</a></li>
                        <li class="ps-400 c85 s12">1.7k Watching</li>
                    </ul>
                    <ul class="d-flex align-items-center ed-ul-2">
                        <li>
                            <hr>
                        </li>
                        <li class="ps-400 c85 s12">3 Hours Event</li>
                    </ul>
                    <h2 class="ps-700 c00 s32">Abandon he myself <br> and with this either fur</h2>
                    <h3 class="ps-700 c82 s22">With {{ $data->title }}</h3>
                    <p class="ps-400 s16 c60">
                        {{ $data->description }}
                    </p>
                    <a href="javascript:void(0)" class="secondary-btn">Watch Now</a>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="event">
                    <img src="{{ asset($data->image) }}" alt="Events Details" class="img">
                </div>
            </div>
        </div>
    </div>
</section>