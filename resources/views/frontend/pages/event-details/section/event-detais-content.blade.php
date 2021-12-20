@php(!auth()->check() ? session()->put('url.intended', url()->full()) : false)
<section class="py-100">
    <div class="container">
        <div class="row g-5">
            <div class=" col-lg-5 col-xl-4 align-items-center d-flex justify-content-center">
                <div class="events-details-text">
                    <ul class="d-flex align-items-center ed-ul-2">
                        <li>
                            <hr>
                        </li>
                        <li class="ps-400 c85 s12">3 Hours Event</li>
                    </ul>
                    <h2 class="ps-700 c00 s32">Abandon he myself <br> and with this either fur</h2>
                    <h3 class="ps-700 c82 s22">With {{ $data->title }}</h3>
                    <p class="date-content">Date: <span class="fw-bold">01-02-2021</span></p>
                    <p class="contribution-fee-content">Contribution Fee: <
                    class="fw-bold">10,000BDT</span> </p>
                    <p class="ps-400 s16 c60"> {{ $data->description }}</p>
                    <button class="secondary-btn join-btn" id="sslczPayBtn"
                            token="if you have any token validation"
                            postdata="your javascript arrays or objects which requires in backend"
                            order="If you already have the transaction generated for current order"
                            endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
                    </button>
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
    obj.url = "event-details";

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
