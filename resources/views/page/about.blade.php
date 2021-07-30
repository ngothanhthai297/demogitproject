<section id="problem-solution" class="problem-solution section-pro section-padding ">
    <div class="container">
        <div class="heading text-center">
            <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                <h6 class="sub-title">About IMT</h6>
                <h2 class="title">About IMT</h2>
            </div>

        </div>
        <div class="problems">
            <div class="row">
                @if(isset($about))
                <div class="col-md-12 col-lg-6">
                    <div class="heading mb-4">
                        <h4 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s">{{$about->title}}</h4>
                    </div>
                    <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">{{$about->description}}</p>
                    @if(isset($outs) && count($outs) >= 2 )
                    <nav>
                        <div class="nav nav-pills nav-underline mb-5 nav-about animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s" id="myTab" role="tablist">
                            <a href="#general" class="nav-item nav-link active" id="general-tab" data-toggle="tab" aria-controls="general" aria-selected="true" role="tab">{{$outs[0]->our_name}}</a>
                            <a href="#ico" class="nav-item nav-link" id="ico-tab" data-toggle="tab" aria-controls="ico" aria-selected="false" role="tab">{{$outs[1]->our_name}}</a>
                            
                            <a href="#team" class="nav-item nav-link animated" data-animation="fadeInDown" data-animation-delay="1.5s">OUR TEAM</a>
                        </div>
                    </nav>
                  
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                            <div id="general-accordion" class="collapse-icon accordion-icon-rotate">
                                <?php $splits = explode('/', $outs[0]->our_description);
                                $i = 0; ?>
                                @foreach($splits as $split)
                                <?php $i += 0.1 ?>
                                <div class="card animated about-imt" data-animation="fadeInUpShorter" data-animation-delay="<?php echo $i ?>s">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <a class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span class="icon"></span>
                                                {{$split}}
                                            </a>
                                        </h5>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ico" role="tabpanel" aria-labelledby="ico-tab">
                            <div id="ico-accordion" class="collapse-icon accordion-icon-rotate">
                                <?php $splits = explode('/', $outs[1]->our_description);
                                $i = 0; ?>
                                @foreach($splits as $split)
                                <?php $i += 0.1 ?>
                                <div class="card animated about-imt" data-animation="fadeInUpShorter" data-animation-delay="<?php echo $i ?>s">
                                    <div class="card-header" id="icoHeadingOne">
                                        <h5 class="mb-0">
                                            <a class="btn-link" data-toggle="collapse" data-target="#icoCollapseOne" aria-expanded="true" aria-controls="icoCollapseOne">
                                                <span class="icon"></span>
                                                {{$split}}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-md-12 col-lg-6 text-center pt-5">
                    <img src="theme-assets/images/we_are_imt.svg" class="problems-img animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s" alt="problems-graphic">
                </div>
            </div>
            @endif
        </div>
    </div>
</section>