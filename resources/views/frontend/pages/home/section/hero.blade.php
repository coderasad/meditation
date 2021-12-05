<section class="hero-section1" style="height: 415px">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach($sliders as $key =>$slider)

            <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                <img src="{{ $slider->image }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>{{$slider->text}}</h1>
                </div>
            </div>
            @endforeach
            {{--<div class="carousel-item">
                <img src="{{ asset('') }}asset/frontend/images/living.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('') }}asset/frontend/images/living.png" class="d-block w-100" alt="...">
            </div>--}}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="menu" style="position:relative; top: -350px">

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3 d-none d-md-block">
                    <nav class="dacstop-menu menu">
                        <ul>
                            <li><a href="{{ url('meditation') }}"
                                   class="transition-e tc d-block ps-700 cff s18 capitalize">Meditations</a></li>
                            <li><a href="{{ url('course') }}" class="transition-e tc d-block ps-700 cff s18 capitalize">Courses</a>
                            </li>
                            <li><a href="{{ url('sessions') }}"
                                   class="transition-e tc d-block ps-700 cff s18 capitalize">Sessions</a></li>
                            <li><a href="{{ url('events') }}" class="transition-e tc d-block ps-700 cff s18 capitalize">Events</a>
                            </li>
                            <li><a href="{{ url('gallery') }}"
                                   class="transition-e tc d-block ps-700 cff s18 capitalize">Gallary</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                {{--  <div class="col-md-8 col-lg-9 d-flex align-items-center">
                    <div class="hero-text tr-md">
                        <h1 class="i-400 cff s61">“ To understand the immeasurable, the mind must be extraordinarily
                            quiet, still.”</h1>
                    </div>
                </div>  --}}

            </div>
        </div>
    </div>
</section>
