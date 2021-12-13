@php(!auth()->check() ? session()->put('url.intended', url()->full()) : false)
<section class="sessions-details-section pt-100">
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
                        <button class="secondary-btn join-btn" id="sslczPayBtn"
                                token="if you have any token validation"
                                postdata="your javascript arrays or objects which requires in backend"
                                order="If you already have the transaction generated for current order"
                                endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
                        </button>
                        {{--@if(Auth::user())
                            <button class="secondary-btn join-btn" id="sslczPayBtn"
                                    token="if you have any token validation"
                                    postdata="your javascript arrays or objects which requires in backend"
                                    order="If you already have the transaction generated for current order"
                                    endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
                            </button>
                        @else
                            <a class="secondary-btn join-btn"
                               href="{{ url('/login') }}"> Pay Now
                            </a>
                        @endif--}}
                    </div>
                    <div class="sd-text-box">
                        <h3 class="ps-700 c00 s28">What you’ll learn</h3>
                        <p class="ps-400 c60 s16">{{$data->description}}  </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ms-lg-auto">
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
        <hr class="cd-hr">
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script>
    let isLogin = !!"{{auth()->check()}}";
    let sslczPayBtn = document.querySelector("#sslczPayBtn");
    sslczPayBtn.addEventListener('click', (event) => {
        if (!isLogin) {
            window.location.href = "{{route('login')}}"
        }
    })
</script>

<script>
    var obj = {};
    obj.user = {{auth()->id()}};
    obj.productId = {{$data->id}};
    obj.productType = "{{$data->category->title}}";
    obj.url = "course-details";

    $('#sslczPayBtn').prop('postdata', obj);

    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
            script.src = "{{config('sslcommerz.sslCmmerzJs')}}?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
