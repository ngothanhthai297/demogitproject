<section id="team" class="team section-padding ">
    <div class="container">
        <div class="heading text-center">
            <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                <h6 class="sub-title">Creative</h6>
                <h2 class="title">Team</h2>
            </div>
            <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">Our Core Team Members
            </p>
        </div>
        <div class="row team-intro justify-content-center text-center">
            <div class="col-12 col-md-4 col-lg-2 team-width animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">
                <span>+60</span>
                <p>Creative and
                    <br>Dedicated People
                </p>
            </div>
            <div class="col-12 col-md-4 col-lg-2 team-width animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
                <span>125</span>
                <p>Years of combined experience</p>
            </div>
            <div class="col-12 col-md-4 col-lg-2 team-width animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">
                <span>10</span>
                <p>Years of blockchain experience</p>
            </div>
        </div>
        <div class="team-profile mt-5">
            <div class="row mb-5">
                <?php $i = 0.8; ?>
                @if(isset($teams))
                @foreach($teams as $team)
                <?php $i += 0.1 ?>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="<?php $i ?>s">
                    <div class="d-flex team-member">
                        <div class="team-img float-left mr-3" data-toggle="modal" data-target="#teamUser9">
                            <img src="{{$team->photo}}" alt="team-profile-1" class="rounded-circle" width="128">
                        </div>
                        <div class="profile align-self-center">
                            <div class="name">{{$team->name}}</div>
                            <div class="role">{{$team->position}}</div>
                            <div class="social-profile mt-3">
                                <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                                <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                                <a href="#" title="Facebook" class="font-medium grey-accent2"><i class="ti-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>