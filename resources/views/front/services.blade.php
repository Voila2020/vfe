@extends('layout.layout') @section('content') @if($seo) @section('description',
$seo->description_en)
@section('keywords',
$seo->keywords_en) @section('author', $seo->author_en) @section('title', $seo->title_en)
@endif
    <script src="/js/circleMagic.js"></script>
    <script type="text/javascript" src="/slider/js/jquery.cslider.js"></script>

<main class="js-page-wrap" data-smooth data-router-wrapper>
        <article data-router-view="page">

            <div class="o-page o-mask js-transition-mask" data-smooth-section>

                <figure class="o-page__bg " data-parallax="0.1" data-parallax-mobile="true">
                    <img src="/temp/images/img/sec1/highlight 2-01.png" alt="Drop" >
                </figure>
                <div class="o-page__inner ">
                    <div class="o-container">
                        <div class="o-grid u-align-center service-sec">
                            <div class="o-cell-28@sm o-cell-20@md o-cell-16@lg">
                                <div class="o-content o-content--center">
                                    <h1 class="o-page__title o-h2 js-loader-title js-transition-title">services</h1>
                                </div>

                                <div id="da-slider" class="da-slider">
                                @foreach($data as $key=>$service)
                                <div class="da-slide " style="display:flex;align-items: center">
                                    <h2>{{$service->title}}</h2>
                                    <div class="o-txt c-slide__text js-slide__text">
                                        <p class="c-site-nav-link__text o-sub-title">
                                            {!! $service->text !!}
                                        </p>
                                    </div>
                                    <div class="da-img">
                                        <img src="{{url(''.CRUDBooster::getResizeImage($service->image,400,500))}}" alt="image01" />
                                    </div>
                                </div> 
                                @endforeach


                                <nav class="da-arrows">
                                    <span class="da-arrows-prev"></span>
                                    <span class="da-arrows-next"></span>
                                </nav>
                                </div>


                                </div>
                                <div class="o-page__link">
                                    <a href="{{url('/')}}" class="c-btn">
                                        <span class="o-sub-title">{{__('Back to homepage')}}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            @include('front.footer')


        </article>
    </main>
    <script type="text/javascript">
        $(function () {

            $('#da-slider').cslider();

        });


    </script>
    

@endsection
