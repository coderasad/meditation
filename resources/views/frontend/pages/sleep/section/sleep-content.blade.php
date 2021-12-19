<section class="py-5">
    <div class="container">
        <div class="sleep-title tc mx-auto">
            <p class="ps-400 c00 s40 mb-3">Improve your <span class="ps-700 black-line">Sleep</span></p>
            <p class="ps-400 c60 s20">
                Around one in three people suffer from mild insomnia. If you wake consistently at night or suffer from
                restless sleep patterns, these sleep meditations, talks, and music tracks will help calm the mind and
                relax the body in preparation for sleep
            </p>
        </div>
        @foreach($data as $row)
            <div class="row g-5 sleep-row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-end">
                        <h3 class="ps-700 c00 s28">Sleep Music</h3>
                        <p class="ps-400 s16 c7e">See all 2,400</p>
                    </div>
                </div>
                @foreach($row->videos as $video)
                    <div class="col-lg-3 col-sm-6">
                        <div class="sleep-music-video">
                            <iframe width="100%" height="168" src="https://www.youtube.com/embed/{{ $video->video }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <p class="ps-400 s12 c86">Briting into Sleep</p>
                            <p class="ps-400 s12 c86">10:23min</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach


    </div>
</section>
