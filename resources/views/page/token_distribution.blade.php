<section id="token-distribution" class="token-distribution section-padding">
    <div class="container">
        <div class="heading text-center">
            <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                <h6 class="sub-title">Token Stats</h6>
                <h2 class="title">Token Distribution</h2>
            </div>
            @if(isset($distribution))
            <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">{!!$distribution->title!!}
            </p>
            @endif
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6 pr-5">
                <div class="content-area">
                    <h4 class="title token-sale mb-4 animated mb-5" data-animation="fadeInUpShorter" data-animation-delay="0.5s">IMT Token Sale</h4>
                    <table class="flat-table flat-table-1 animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">
                        @if(isset($token_distributions))
                        <tbody>
                            @foreach($token_distributions as $token_distribution)
                            <tr>
                                <td>{{$token_distribution->title}} :</td>
                                <td class="token-td">{{$token_distribution->value}}$ - 200.000.000 IMT</td>
                            </tr>
                            @endforeach
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 move-first animated" data-animation="fadeInUpShorter" data-animation-delay="0.8s">
                <div class="token-img">
                    <!-- <img class="img-fluid" src="theme-assets/images/chart.png" alt="token-distribution"> -->
                    <!-- <canvas id="pie-chart" awidth="800" height="220"></canvas> -->
                    <div id="chartdiv"></div>
                    <div id="legend"></div>
                </div>
            </div>
        </div>
    </div>
</section>