<section id="token-sale-mobile-app" class="token-sale-mobile-app section-padding ">
    <!-- Tokens Sale -->
    <div class="token-sale">
        <div class="container">
            <div class="heading text-center">
                <h6 class="sub-title">Pre-Sale &amp; Values</h6>
                <h2 class="title">Tokens Sale</h2>
                @if(isset($token_sale))
                <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">{!!$token_sale->description!!}
                </p>
                @endif
            </div>
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 col-md-12 animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
                    <div class="token-sale-counter">
                        <h5>IMT will start in</h5>
                        <div class="token-details text-center">
                            <!-- ICO Counter -->
                            <div class="clock-counter mb-4">
                                <div class="clock ml-0 mt-5 d-flex justify-content-center"></div>
                                <div class="message"></div>
                            </div>
                            <!-- ICO Counter -->
                            <!-- Progressbar -->
                            
                            <div class="loading-bar mb-2 position-relative">
                                <div class="progres-area pb-5">
                                    @if(isset($token_distributions))
                                    <ul class="progress-top">
                                        <li></li>
                                        <?php $temp = count($token_distributions);
                                        $i = 0 ?>
                                        @foreach($token_distributions as $token_distribution)
                                        <?php $i++ ?>
                                        <li class="<?php if ($i == 1) {echo "pre-sale";} else if ($i == $temp) { echo "bonus";} else{echo "";}?>">     
                                            {{$token_distribution->title}}</li>
                                        @endforeach
                                        <li></li>
                                    </ul>
                                    <ul class="progress-bars">
                                        <li></li>
                                        <li>|</li>
                                        <li>|</li>
                                        <li>|</li>
                                        <li></li>
                                    </ul>
                                    @endif
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 65%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    @if(isset($token_sale))
                                    <div class="progress-bottom">
                                        <div class="progress-info">{{$token_sale->percent}}% target raised</div>
                                        <div class="progress-info">{{$token_sale->exchange}} ETH = $1000 = 3177.38 CIC</div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!--/ Progressbar -->
                            <a href="#" class="btn btn-lg btn-glow btn-gradient-blue">Purchase Token</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-12 mt-5 pl-4 animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
                   @if(isset($token_sale))
                   <div class="row">
                        <p>
                            {!!$token_sale->content!!}
                        </p>
                        <div class="col-md-5">
                            <ul class="token-sale-info">
                                <li>Name: <strong class="white">{{$token_sale->name}} </strong></li>
                                <li>Symbol: <strong class="white">{{$token_sale->symbol}}</strong></li>
                                <li>Blockchain: <strong class="white">{{$token_sale->blockchain}}</strong></li>
                            </ul>
                        </div>
                        <div class="col-md-7 pr-0">
                            <ul class="token-sale-info">
                                <li>Standard: <strong class="white">{{$token_sale->standard}}</strong></li>
                                <li>Token type: <strong class="white">{{$token_sale->type}}</strong></li>
                                <li>Total supply: <strong class="white">{{number_format($token_sale->total)}}IMT</strong></li>
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--/ Tokens Sale -->
    <!-- Crypto ico App -->
    <div id="mobile-app" class="mobile-app">
        <div class="container">
            <div class="heading text-center">
                <h6 class="sub-title">Crypto ico App</h6>
                <h2 class="title">Mobile App</h2>
                <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">A cryptocurrency wallet stores the public and private
                    keys which can be used to receive or spend
                    <br />the cryptocurrency. A wallet can contain multiple public and private key
                    pairs.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
                    <div class="heading mb-4">
                        <h4 class="title">Android &amp; ios app</h4>
                    </div>
                    <p>Mobile app development is a term used to denote the act or process by which a
                        mobile app is developed for mobile devices, such as personal digital assistants,
                        enterprise digital assistants or mobile phones. These applications can be
                        pre-installed on phones during manufacturing platforms, or delivered as web
                        application using server-side or client-side processing to provide an
                        "application-like" experience within a Web browser.</p>
                    <ul class="app-features">
                        <li class="dark-bg-text-color"><i class="ti-pulse white mr-3"></i>Live crypto
                            rate</li>
                        <li class="dark-bg-text-color"><i class="ti-stats-up white mr-3"></i>Latest
                            cryptocurrency news</li>
                        <li class="dark-bg-text-color"><i class="ti-split-h white mr-3"></i>Cryptocurrency exchange</li>
                    </ul>
                    <a href="#" class="android mobile-button btn btn-gradient-purple btn-glow mr-4"><span>Android</span>
                        <img src="theme-assets/images/icon-android.png" alt=""></a>
                    <a href="#" class="apple mobile-button btn btn-gradient-purple btn-glow"><span>Apple</span>
                        <img src="theme-assets/images/icon-apple.png" alt=""></a>
                </div>
                <div class="col-lg-6 col-md-12 move-first">
                    <div class="mobile-app-imgs">
                        <img src="theme-assets/images/mobile-app-1.png" alt="mobile-app" class="mobile-app-img-1 animated" data-animation="fadeInUpShorter" data-animation-delay="0.9s">
                        <img src="theme-assets/images/mobile-app-2.png" alt="mobile-app" class="mobile-app-img-2 animated" data-animation="zoomIn" data-animation-delay="1.4s">
                        <img src="theme-assets/images/mobile-app-3.png" alt="mobile-app" class="mobile-app-img-3 animated" data-animation="zoomIn" data-animation-delay="1.9s">
                        <img src="theme-assets/images/IMT_mobile_app.png" alt="mobile-app" class="mobile-app-img-4 animated" data-animation="zoomIn" data-animation-delay="2.4s">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Crypto ico App -->
</section>