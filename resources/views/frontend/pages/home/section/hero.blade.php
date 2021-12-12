<section class="hero-section1">
    <div id="carouselExampleIndicators" class="carousel slide h-100" data-bs-interval="false" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach($sliders as $key =>$slider)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}"
                        class="{{$key == 0 ? 'active' : ''}}"
                        aria-current="true" aria-label="Slide 1">
                </button>
            @endforeach
        </div>
        <div class="carousel-inner h-100">
            @foreach($sliders as $key =>$slider)

                <div class="carousel-item h-100 {{$key == 0 ? 'active' : ''}}">
                    <img src="{{ $slider->image }}" class="d-block w-100 h-100 object-fit-cover" alt="...">
                    <div class="carousel-caption d-none d-md-flex align-items-center h-100">
                        <p>{{$slider->text}} Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="main-menu">
        <nav class="desktop-menu menu d-none d-md-flex align-items-center h-100">
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
                       class="transition-e tc d-block ps-700 cff s18 capitalize">Gallery</a>
                </li>
            </ul>
        </nav>
    </div>
    {{--<div class="col-md-8 col-lg-9 d-flex align-items-center">
      <div class="hero-text tr-md">
          <h1 class="i-400 cff s61">“ To understand the immeasurable, the mind must be extraordinarily
              quiet, still.”</h1>
      </div>
  </div>--}}
</section>
