@php(!auth()->check() ? session()->put('url.intended', url()->full()) : false)
<section class="course-details-section pt-100">
    <div class="container">
        <div class="cd-title">
            <h2 class="ps-700 c00 s49">This {{ $data->title }} <span class="ps-700 c00 s22">by Jams Edro</span></h2>
            <p class="date-content">Date: 01-02-2021</p>
            <p class="contribution-fee-content">Contribution Fee: 10,000BDT </p>
        </div>
        <div class="cd-img">
            <img src="{{ asset($data->image) }}" alt="Course Details" class="img">
        </div>
        <div class="cd-btn">
            <button class="secondary-btn join-btn" id="sslczPayBtn"
                    token="if you have any token validation"
                    postdata="your javascript arrays or objects which requires in backend"
                    order="If you already have the transaction generated for current order"
                    endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
            </button>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="cd-text-box">
                    <h3 class="ps-700 c00 s28">What you’ll learn</h3>
                    <p class="ps-400 c60 s16">
                        {{ $data->description }}
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 ms-xl-auto">
                <div class="cd-follow-content">
                    <div class="d-flex align-items-center justify-content-lg-end flex-wrap">
                        <div class="cd-follow-img">
                            <img src="{{ asset('') }}asset/frontend/images/Jams-Edro.png" alt="Jams-Edro">
                        </div>
                        <div class="cd-follow-name">
                            <h4 class="ps-700 c00 s22">Jams Edro</h4>
                            <p class="ps-400 c9e s18">Dhaka, Bangladesh</p>
                        </div>
                        <div class="cd-follow-btn">
                            <a href="javascript:void(0)" class="transition-e ps-400 c00 s16 tc">
                                Follow
                            </a>
                        </div>
                    </div>
                    <div class="cd-follow-desc">
                        <p class="ps-400 c60 s16">
                            Over the next 10 days, you will learn how see and be with your life in a more conscious and compassionate way. Each day is meant to stand alone as its own contemplation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="cd-hr">
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"

        crossorigin="anonymous"></script>
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
    obj.url = "session-details";

    $('#sslczPayBtn').prop('postdata', obj);

    (function (window, document) {
        //pay-via-ajax
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
            script.src = "{{config('sslcommerz.sslCmmerzJs')}}?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
