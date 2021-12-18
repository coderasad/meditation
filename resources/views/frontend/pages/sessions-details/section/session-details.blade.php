<section class="sessions-details-section py-70">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="">
                    <div class="sd-title">
                        <h2 class="ps-700 c00 s49">{{$data->title}}</h2>
                        <h3 class="ps-700 c00 s22">by Jone smith</h3>
                    </div>
                    <div class="sd-img">
                        <img src="{{ asset($data->image) }}" alt="Sessions Details" class="img">
                    </div>
                    <div class="sd-btn">
                        <a href="javascript:void(0)" class="secondary-btn join-btn">Join</a>
                    </div>
                    <div class="sd-text-box">
                        <h3 class="ps-700 c00 s28">What you’ll learn</h3>
                        <p class="ps-400 c60 s16">{{$data->description}}  </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 ms-lg-auto pl-70">
                <div class="row gy-4">
                    @foreach($related_data as $row)
                        <div class="col-lg-12 col-sm-6">
                            <div class="session session-details shadow-4">
                                <div class="session-img">
                                    <img src="{{ asset($row->image) }}" alt="session"
                                         class="img">
                                </div>
                                <div class="session-content">
                                    <div class="session-name">
                                        <h4 class="ps-700 s18 c00">{{$row->title}}</h4>
                                    </div>
                                    <div
                                        class="session-m-r session-details-m-r d-flex justify-content-between align-items-center">
                                        <a href="{{url('session-details',$row->id)}}" class="ps-700 s16 cb6">Join
                                            Now..</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
{{--        <hr class="cd-hr">--}}
    </div>
</section>
