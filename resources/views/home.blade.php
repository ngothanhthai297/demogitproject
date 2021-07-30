<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">
<!-- Headẻ -->
@include('partial.header')
    <!--/ Preloader -->
    <nav class="vertical-social">
        <ul>
            <li><a href="https://t.me/IMTCommunity" target="_blank"><i class="fa fa-telegram"
                        aria-hidden="true"></i></a></li>
            <li><a href="https://www.facebook.com/IMTCommunity" target="_blank"><i class="fa fa-facebook"
                        aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/imt_group" target="_blank"> <i class="fa fa-twitter"
                        aria-hidden="true"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCslDH0zaeQXDK2gmHO4i6Mg" target="_blank"><i
                        class="fa fa-youtube" aria-hidden="true"></i></a></li>
        </ul>
    </nav>
    <!-- /////////////////////////////////// HEADER /////////////////////////////////////-->

    <!-- Header Start-->
    @include('partial.sidebar')
    <!-- /Header End-->
    <!-- //////////////////////////////////// CONTAINER ////////////////////////////////////-->
    <div class="content-wrapper">
        <div class="content-body">
            <main>
                <!-- Header: 3D Animation -->
                @include('page.banner')
                <!--/ Header: 3D Animation -->
                <!-- What is IMT -->
                @include('page.what_imt')
                <!--/ About -->
                <!-- IMT -->
                @include('page.about')
                <!--/ About -->
                <!-- Whitepaper -->
                @include('page.whitepaper')
                <!--/ Whitepaper -->
                <!-- Token-Sale & Mobile Apps -->
                @include('page.token_sale')
                <!--/ Pre-Sale & Mobile Apps -->
                <!-- Roadmap -->
                @include('page.roadmap')
                <!--/ Roadmap -->
                <!-- Our Coin -->
                <!-- <section id="our-coin" class="our-coin section-padding ">
    <div class="container">
        <div class="heading text-center">
            <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                <h6 class="sub-title">About coin</h6>
                <h2 class="title">Our COIN</h2>
            </div>
            <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">Decentralized cryptocurrency is produced by the entire cryptocurrency system collectively
                <br class="d-none d-xl-block">at a rate which is defined when the system is created and which is publicly known. </p>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-12 animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
                <div class="coin-img">
                    <img class="img-fluid" src="theme-assets/images/our-coin.png" alt="Coin Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="heading mb-4">
                    <h4 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">CIC Coin</h4>
                </div>
                <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">The validity of each cryptocurrency's coins is provided by a blockchain. A blockchain is a continuously growing list of records, called blocks, which are linked and secured using cryptography.Each block typically contains a hash pointer as a link to a previous block, a timestamp and transaction data. By design, blockchains are inherently resistant to modification of the data. a blockchain is typically managed by a peer-to-peer network collectively adhering to a protocol for validating new blocks. Once recorded</p>
                <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">The block time is the average time it takes for the network to generate one extra block in the blockchain.[21] Some blockchains create a new block as frequently as every five seconds.</p>
            </div>
        </div>
    </div>
</section> -->
                <!--/ Roadmap -->                
                <!-- Token Discription -->
                @include('page.token_distribution')
                <!--/ Token Stats -->
                <!-- Team -->
                @include('page.team')
                <!--/ Team -->
                <!-- Advisors -->
                <!-- <section id="advisor" class="advisor team section-padding">
    <div class="container">
        <div class="heading text-center">
            <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                <h6 class="sub-title">helpful</h6>
                <h2 class="title">Advisors</h2>
            </div>
            <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">Digital currency is a money balance recorded electronically on
                <br class="d-none d-xl-block">a stored-value card or other device. Another form of electronic money is network money.</p>
        </div>
        <div class="team-profile mt-5">
            <div class="row mb-5">
                <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="0.5s">
                    <div class="d-flex">
                        <div class="team-img float-left mr-3" data-toggle="modal" data-target="#teamUser1">
                            <img src="theme-assets/images/user-1.png" alt="team-profile-1" class="rounded-circle" width="128">
                        </div>
                        <div class="team-icon">
                            <i class="ti-linkedin"></i>
                        </div>
                        <div class="profile align-self-center">
                            <div class="name">Nadia Sidko</div>
                            <div class="role">Blockchain Entrepreneur</div>
                            <div class="crypto-profile">
                                <img src="theme-assets/images/company-logo-1.png" alt="Team User">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="0.6s">
                    <div class="d-flex">
                        <div class="team-img float-left mr-3" data-toggle="modal" data-target="#teamUser8">
                            <img src="theme-assets/images/user-8.png" alt="team-profile-1" class="rounded-circle" width="128">
                        </div>
                        <div class="team-icon">
                            <i class="ti-linkedin"></i>
                        </div>
                        <div class="profile align-self-center">
                            <div class="name">Pavel Volek</div>
                            <div class="role">Entrepreneur and Investor</div>
                            <div class="crypto-profile">
                                <img src="theme-assets/images/company-logo-2.png" alt="Team User">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="0.7s" data-toggle="modal" data-target="#teamUser3">
                    <div class="d-flex">
                        <div class="team-img float-left mr-3">
                            <img src="theme-assets/images/user-3.png" alt="team-profile-1" class="rounded-circle" width="128">
                        </div>
                        <div class="team-icon">
                            <i class="ti-linkedin"></i>
                        </div>
                        <div class="profile align-self-center">
                            <div class="name">Alyona Blakytna</div>
                            <div class="role">Fin-Tech Entrepreneur</div>
                            <div class="crypto-profile">
                                <img src="theme-assets/images/company-logo-3.png" alt="Team User">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="0.8s" data-toggle="modal" data-target="#teamUser11">
                    <div class="d-flex">
                        <div class="team-img float-left mr-3">
                            <img src="theme-assets/images/user-11.png" alt="team-profile-1" class="rounded-circle" width="128">
                        </div>
                        <div class="team-icon">
                            <i class="ti-linkedin"></i>
                        </div>
                        <div class="profile align-self-center">
                            <div class="name">Martin Solarik</div>
                            <div class="role">Fin-Tech Investor</div>
                            <div class="crypto-profile">
                                <img src="theme-assets/images/company-logo-4.png" alt="Team User">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="0.9s" data-toggle="modal" data-target="#teamUser7">
                    <div class="d-flex">
                        <div class="team-img float-left mr-3">
                            <img src="theme-assets/images/user-7.png" alt="team-profile-1" class="rounded-circle" width="128">
                        </div>
                        <div class="team-icon">
                            <i class="ti-linkedin"></i>
                        </div>
                        <div class="profile align-self-center">
                            <div class="name">Kate Fisenko</div>
                            <div class="role">Fin-Tech Investor</div>
                            <div class="crypto-profile">
                                <img src="theme-assets/images/company-logo-5.png" alt="Team User">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="1.0s" data-toggle="modal" data-target="#teamUser12">
                    <div class="d-flex">
                        <div class="team-img float-left mr-3">
                            <img src="theme-assets/images/user-12.png" alt="team-profile-1" class="rounded-circle" width="128">
                        </div>
                        <div class="team-icon">
                            <i class="ti-linkedin"></i>
                        </div>
                        <div class="profile align-self-center">
                            <div class="name">Michal Krajnansky</div>
                            <div class="role">Blockchain Entrepreneur</div>
                            <div class="crypto-profile">
                                <img src="theme-assets/images/company-logo-1.png" alt="Team User">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
                <!--/ Advisors -->
                <!-- FAQ -->
                @include('page.faq')
                <!--/ FAQ -->
                <!-- Contact -->
                @include('page.contact')
                <!--/ Contact -->
                <!-- Exchange Listing Area -->
                <section class="exchange-listing" id="exchange-listing">
                    <div class="container-fluid bg-color">
                        <div class="container">
                            <div class="row listing list-unstyled">
                                <div class="col d-none d-lg-block text-center animated" data-animation="fadeInUpShorter"
                                    data-animation-delay="0.2s">
                                    <img src="theme-assets/images/icon-arrow.png" alt="icon-arrow">
                                    <p class="mt-1">Exchange listing
                                        <br>to be announced
                                    </p>
                                </div>
                                <div class="col text-center animated" data-animation="fadeInUpShorter"
                                    data-animation-delay="0.3s">
                                    <h2>4.3/5</h2>
                                    <img src="theme-assets/images/ico-track.png" alt="ico-track">
                                </div>
                                <div class="col text-center animated" data-animation="fadeInUpShorter"
                                    data-animation-delay="0.4s">
                                    <h2>4.8/5</h2>
                                    <img src="theme-assets/images/ico-bench.png" alt="ico-bench">
                                </div>
                                <div class="col text-center animated" data-animation="fadeInUpShorter"
                                    data-animation-delay="0.5s">
                                    <h2>3.9/5</h2>
                                    <img src="theme-assets/images/ico-ranker.png" alt="ico-ranker">
                                </div>
                                <div class="col text-center animated" data-animation="fadeInUpShorter"
                                    data-animation-delay="0.6s">
                                    <h2>4.1/5</h2>
                                    <img src="theme-assets/images/ico-bazaar.png" alt="ico-bazaar">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Exchange Listing Area -->
                <!-- ICO Video Modal -->
                <div class="modal ico-modal fade" id="ico-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-body p-0">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" id="video"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dev Team Modal Pop-ups -->
                <!-- Team user popup - teamUser9 -->
                <!-- <div class="modal team-modal fade" id="teamUser9" tabindex="-1" role="dialog"
                    aria-labelledby="teamUser9Title" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-body">
                                <div class="row p-4">
                                    <div class="col-12 col-md-5">
                                        <img class="img-fluid rounded" src="theme-assets/images/user-9-lg.jpg"
                                            alt="Logan S. Perez">
                                    </div>
                                    <div class="col-12 col-md-7 mt-sm-3">
                                        <h5 id="teamUser9Title">Logan S. Perez</h5>
                                        <small class="text-muted mb-0 ">CEO & CFO</small>
                                        <div class="social-profile">
                                            <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i
                                                    class="ti-linkedin"></i></a>
                                            <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i
                                                    class="ti-twitter-alt"></i></a>
                                            <a href="#" title="Github" class="font-medium grey-accent2"><i
                                                    class="ti-github"></i></a>
                                        </div>
                                        <div class="my-4">
                                            <p>Experienced algorithmic crypto trader and a machine learning evangelist.
                                            </p>
                                            <p>I’m focusing on the logic behind the combination of analysis tools,
                                                neural networks and genetic algorithms for optimization. Always wanted
                                                to have a trading bot with more features but never had the time to build
                                                a solution beyond basic python technical analysis tracker.</p>
                                        </div>
                                        <h6 class="mb-0"><small class="text-uppercase">Blockchain</small> <small
                                                class="float-right">85%</small></h6>
                                        <div class="progress box-shadow-1 mb-4">
                                            <div class="progress-bar progress-orange" role="progressbar"
                                                style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <h6 class="mb-0"><small class="text-uppercase">Python</small> <small
                                                class="float-right">90%</small></h6>
                                        <div class="progress box-shadow-1 mb-4">
                                            <div class="progress-bar progress-orange" role="progressbar"
                                                style="width: 90%;" aria-valuenow="90" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <h6 class="mb-0"><small class="text-uppercase">C++</small> <small
                                                class="float-right">75%</small></h6>
                                        <div class="progress box-shadow-1 mb-4">
                                            <div class="progress-bar progress-orange" role="progressbar"
                                                style="width: 75%;" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </main>
        </div>
    </div>
    <!-- //////////////////////////////////// FOOTER ////////////////////////////////////-->
   @include('partial.footer')
</body>

</html>