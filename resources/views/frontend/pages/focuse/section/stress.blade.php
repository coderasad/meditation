<section class="py-5">
    <div class="container">
        <div class="w-870">
            <p class="ps-400 c00 s40 tc">Increase your <span class="ps-700 black-line">{{ $title }}</span></p>
            <div class="focuse-p-text">
                {!! $data->description !!}
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dicta dolorum exercitationem illum magni
                nemo perferendis similique sint totam vel!
            </div>
            <div class="row g-5">
                @foreach ($data->videos as $meditation_video)
                    <div class="col-md-4 col-sm-6">
                        <div class="sleep-music-video">
                            <iframe width="100%" height="165"
                                    src="https://www.youtube.com/embed/{{ $meditation_video->video }}"
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
            <div class="row mt-5">
                <div class="col-12">
                    <div class="stress-content">
                        <h3>
                            The Principles of Meditation for Stress Management
                        </h3>
                        <p>
                            There is no single kind of stress, and therefore no one-size-fits-all solution. The goal is not to eradicate all stress forever, since we know some excitement, challenge and risk is part of the spice of life. Rather, we need solutions that reflect the complexity of stress itself, and help us:
                            Discern mindfully between healthy and unhealthy stress
                            on all time scales and with different kinds of stress,
                            in a way that works for us as unique individuals,
                            and for our entire selves – body, heart, and mind.
                        </p>
                        <div class="bg-text">
                            An effective stress management strategy is about understanding how and why we stress, so we can work with our body’s natural responses and restore a healthy equilibrium. In whatever way stress manifests in a person’s life, the key to dismantling the stress response is to stop it before it begins, i.e. in the early stages of perception.
                        </div>
                        <h3>
                            The Principles of Meditation for Stress Management
                        </h3>
                        <p>
                            There is no single kind of stress, and therefore no one-size-fits-all solution. The goal is not to eradicate all stress forever, since we know some excitement, challenge and risk is part of the spice of life. Rather, we need solutions that reflect the complexity of stress itself, and help us:
                            Discern mindfully between healthy and unhealthy stress
                            on all time scales and with different kinds of stress,
                            in a way that works for us as unique individuals,
                            and for our entire selves – body, heart, and mind.
                        </p>
                        <div class="row video-content">
                            <div class="col-md-4 col-sm-6">
                                <div class="sleep-music-video">
                                    <iframe width="100%" height="165"
                                            src="https://www.youtube.com/embed/T5rmd-vKQeM"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </div>
                                <div class="d-flex justify-content-between align-items-end">
                                    <p class="ps-400 s12 c86">Briting into Sleep</p>
                                    <p class="ps-400 s12 c86">10:23min</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="sleep-music-video">
                                    <iframe width="100%" height="165"
                                            src="https://www.youtube.com/embed/T5rmd-vKQeM"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </div>
                                <div class="d-flex justify-content-between align-items-end">
                                    <p class="ps-400 s12 c86">Briting into Sleep</p>
                                    <p class="ps-400 s12 c86">10:23min</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="sleep-music-video">
                                    <iframe width="100%" height="165"
                                            src="https://www.youtube.com/embed/T5rmd-vKQeM"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </div>
                                <div class="d-flex justify-content-between align-items-end">
                                    <p class="ps-400 s12 c86">Briting into Sleep</p>
                                    <p class="ps-400 s12 c86">10:23min</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-text">
                            An effective stress management strategy is about understanding how and why we stress, so we can work with our body’s natural responses and restore a healthy equilibrium. In whatever way stress manifests in a person’s life, the key to dismantling the stress response is to stop it before it begins, i.e. in the early stages of perception.
                        </div>
                        <p>
                            There is no single kind of stress, and therefore no one-size-fits-all solution. The goal is not to eradicate all stress forever, since we know some excitement, challenge and risk is part of the spice of life. Rather, we need solutions that reflect the complexity of stress itself, and help us:
                            Discern mindfully between healthy and unhealthy stress
                            on all time scales and with different kinds of stress,
                            in a way that works for us as unique individuals,
                            and for our entire selves – body, heart, and mind.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
