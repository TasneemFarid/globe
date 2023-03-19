@extends('layouts.frontend')

@section('content')

    <!-- newsfeed Area ============================================ -->
    <section class="news-feed">
        <div class="container">
            <div class="row row-margin">
                <div class="col-sm-3 hidden-xs col-padding">
                    <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb img-zoom-in">
                            <a href="#">
                                <img class="entry-thumb" src="{{asset('frontend_asset/images/slider/slide-01.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-1">FASHION </span>
                            <h3 class="post-title post-title-size"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                <!-- read more -->
                                <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-padding">
                    <div id="news-feed-carousel" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="#">
                                        <img class="entry-thumb" src="{{asset('frontend_asset/images/slider/slide-02.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-2">FASHION </span>
                                    <h3 class="post-title"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        <!-- read more -->
                                        <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="#">
                                        <img class="entry-thumb" src="{{asset('frontend_asset/images/slider/slide-03.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-3">FASHION </span>
                                    <h3 class="post-title"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        <!-- read more -->
                                        <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="#">
                                        <img class="entry-thumb" src="{{asset('frontend_asset/images/slider/slide-04.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-4">FASHION </span>
                                    <h3 class="post-title"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        <!-- read more -->
                                        <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 hidden-xs col-padding">
                    <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb img-zoom-in">
                            <a href="#">
                                <img class="entry-thumb" src="{{asset('frontend_asset/images/slider/slide-05.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-5">FASHION </span>
                            <h3 class="post-title post-title-size"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                <!-- read more -->
                                <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 ">
                <!-- right content wrapper -->
                {{-- <div class="input-group search-area">
                    <!-- search area -->
                    <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div> --}}
                <!-- /.search area -->
                <h3 class="category-headding ">CATEGORIES</h3>
                <div class="headding-border bg-color-2"></div>
                <div class="cats-widget">
                    <ul>
                        @foreach ($categories as $category)
                        <li class=""><a href="#">{{$category->category_name}}</a> <span>{{App\Models\Article::where('category_id', $category->id)->count()}}</span></li>
                        @endforeach
                    </ul>
                </div>
                <div class="banner-add">
                    <!-- add -->
                    <span class="add-title">- Advertisement -</span>
                    <a href="#"><img src="{{asset('frontend_asset/images/ad-banner.jpg')}}" class="img-responsive center-block" alt=""></a>
                </div>
                <!-- / tab -->
            </div>
            <div class="col-md-8 col-sm-8 left-padding">
                <!-- left content inner -->
                <section class="recent_news_inner">
                    <h3 class="category-headding">RECENT NEWS</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div id="content-slide" class="owl-carousel">
                            <!-- item-1 -->
                            @foreach (App\Models\Article::latest()->take(2)->get() as $recent_article)
                            <div class="item">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- image -->
                                    <h3><a href="#">{{substr($recent_article->headline,0,60)}}...</a></h3>
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="{{asset('uploads/articles')}}/{{$recent_article->image}}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            {{-- <a target="_blank" href="#" class="post-badge btn_six">I</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i>{{$recent_article->created_at->format('M jS, Y')}}
                                        </div>
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                    <p>{{ substr(strip_tags($recent_article->description), 0, 100) }}
                                        <a href="#">Read more...</a></p>
                                </div>
                            </div>   
                            @endforeach
                        </div>
                    </div>
                    <div class="row rn_block">
                        @foreach (App\Models\Article::take(3)->get() as $recent_article)
                        <div class="col-md-4 col-sm-6 padd">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- image -->
                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-responsive" src="{{asset('uploads/articles')}}/{{$recent_article->image}}" alt="">
                                    </a>
                                </div>
                                <div class="post-info meta-info-rn">
                                    <div class="slide">
                                        {{-- <a target="_blank" href="#" class="post-badge btn_six">I</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <h4><a href="#">{{substr($recent_article->headline,0,45)}}...</a></h4>
                                <div class="post-editor-date">
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> {{$recent_article->created_at->format('M jS, Y')}}
                                    </div>
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                <div class="ads">
                    <a href="#"><img src="{{asset('frontend_asset/images/top-bannner2.jpg')}}" class="img-responsive center-block" alt=""></a>
                </div>
            </div>
            <!-- /.left content inner -->
            
            <!-- side content end -->
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
    <!-- Weekly News Area
        ============================================ -->
    <section class="weekly-news-inner">
        <div class="container">
            <div class="row row-margin">
                <h3 class="category-headding ">WEEKLY NEWS</h3>
                <div class="headding-border bg-color-1"></div>
                <div id="content-slide-4" class="owl-carousel">
                    <div class="item">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                            <div class="post-thumb img-zoom-in">
                                <a href="#">
                                    <img class="entry-thumb" src="{{asset('frontend_asset/images/weekly-news-01.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-4">FASHION </span>
                                <h3 class="post-title"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="post-thumb img-zoom-in">
                                <a href="#">
                                    <img class="entry-thumb" src="{{asset('frontend_asset/images/weekly-news-05.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-1">SPORTS </span>
                                <h3 class="post-title"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="post-thumb img-zoom-in">
                                <a href="#">
                                    <img class="entry-thumb" src="{{asset('frontend_asset/images/weekly-news-02.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-2">TECHNOLOGY </span>
                                <h3 class="post-title"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="post-thumb img-zoom-in">
                                <a href="#">
                                    <img class="entry-thumb" src="{{asset('frontend_asset/images/weekly-news-03.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-5">BUSINESS </span>
                                <h3 class="post-title"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="post-thumb img-zoom-in">
                                <a href="#">
                                    <img class="entry-thumb" src="{{asset('frontend_asset/images/weekly-news-04.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-3">HEALTH </span>
                                <h3 class="post-title"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="post-thumb img-zoom-in">
                                <a href="#">
                                    <img class="entry-thumb" src="{{asset('frontend_asset/images/weekly-news-06.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-2">INTERNATIONAL </span>
                                <h3 class="post-title"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- second content -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <!-- business Area
                            ============================================ -->
                        <div class="col-sm-4 col-md-4">
                            <div class="buisness">
                                <h3 class="category-headding ">BUSINESS</h3>
                                <div class="headding-border bg-color-5"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="{{asset('frontend_asset/images/business-01.jpg')}}" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('frontend_asset/images/business-02.jpg')}}" alt="" height="70" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('frontend_asset/images/business-03.jpg')}}" alt="" height="70" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- international Area
                            ============================================ -->
                        <div class="col-sm-4 col-md-4">
                            <div class="international">
                                <h3 class="category-headding ">INTERNATIONAL</h3>
                                <div class="headding-border bg-color-2"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="{{asset('frontend_asset/images/international.jpg')}}" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('frontend_asset/images/international-2.jpg')}}" alt="" height="70" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('frontend_asset/images/international-3.jpg')}}" alt="" height="70" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.international -->
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="international">
                                <h3 class="category-headding ">INTERNATIONAL</h3>
                                <div class="headding-border bg-color-2"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="{{asset('frontend_asset/images/international.jpg')}}" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('frontend_asset/images/international-2.jpg')}}" alt="" height="70" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('frontend_asset/images/international-3.jpg')}}" alt="" height="70" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.international -->
                        </div>
                    </div>
                    <!-- technology Area
                        ============================================ -->
                    {{-- <section class="politics_wrapper">
                        <h3 class="category-headding ">TECHNOLOGY</h3>
                        <div class="headding-border"></div>
                        <div class="row">
                            <div id="content-slide-3" class="owl-carousel">
                                <!-- item-1 -->
                                <div class="item">
                                    <div class="row">
                                        <!-- left side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                                <!-- post image -->
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img src="{{asset('frontend_asset/images/technology/tecnology-01.jpg')}}" class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-title-author-details">
                                                <div class="post-editor-date">
                                                    <!-- post date -->
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <!-- post comment -->
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                </div>
                                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                                            </div>
                                        </div>
                                        <!-- right side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="row rn_block">
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="{{asset('frontend_asset/images/technology/tecnology-02.jpg')}}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                                        <a href="#">
                                                            <img src="{{asset('frontend_asset/images/technology/tecnology-03.jpg')}}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                                        <a href="#">
                                                            <img src="{{asset('frontend_asset/images/technology/tecnology-04.jpg')}}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                                        <a href="#">
                                                            <img src="{{asset('frontend_asset/images/technology/tecnology-05.jpg')}}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- item-2 -->
                                <div class="item">
                                    <div class="row">
                                        <!-- left side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                                <!-- post image -->
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img src="{{asset('frontend_asset/images/technology/tecnology-01.jpg')}}" class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-title-author-details">
                                                <div class="post-editor-date">
                                                    <!-- post date -->
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <!-- post comment -->
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                </div>
                                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                                            </div>
                                        </div>
                                        <!-- right side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="row rn_block">
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="{{asset('frontend_asset/images/technology/tecnology-02.jpg')}}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="{{asset('frontend_asset/images/technology/tecnology-03.jpg')}}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                                        <a href="#">
                                                            <img src="{{asset('frontend_asset/images/technology/tecnology-04.jpg')}}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                                        <a href="#">
                                                            <img src="{{asset('frontend_asset/images/technology/tecnology-05.jpg')}}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </section> --}}
                </div>
                <!-- second content aside -->
                <div class="col-md-4 col-sm-4 left-padding">
                    {{-- <aside>
                        <!-- social icon -->
                        <h3 class="category-headding ">SOCIAL PIXEL</h3>
                        <div class="headding-border"></div>
                        <div class="social">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span> </a></li>
                                <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a></li>
                                <li><a href="#" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a></li>
                                <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a></li>
                            </ul>
                        </div>
                        <!-- /.social icon -->
                    </aside> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- second content end -->
    <div class="container">
        <!-- /.adds -->
        <div class="row">
            <div class="col-sm-12">
                <div class="ads">
                    <a href="#"><img src="{{asset('frontend_asset/images/top-bannner2.jpg')}}" class="img-responsive center-block" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.adds-->
    <!-- all category  news Area
        ============================================ -->
    <section class="all-category-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <!-- sports -->
                    <div class="sports-inner">
                        <h3 class="category-headding ">SPORTS</h3>
                        <div class="headding-border bg-color-1"></div>
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                            <!-- post title -->
                            <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                            <!-- post image -->
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{asset('frontend_asset/images/sports.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="post-title-author-details">
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                        </div>
                    </div>
                </div>
                <!-- /.sports -->
                <div class="col-md-4 col-sm-4">
                    <!-- fashion -->
                    <div class="fashion-inner">
                        <h3 class="category-headding ">FASHION</h3>
                        <div class="headding-border bg-color-4"></div>
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                            <!-- post title -->
                            <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                            <!-- post image -->
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{asset('frontend_asset/images/fashion.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="post-title-author-details">
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                        </div>
                    </div>
                </div>
                <!-- /.fashion -->
                <div class="col-md-4 col-sm-4">
                    <!-- travel -->
                    <div class="travel-inner">
                        <h3 class="category-headding ">TRAVEL</h3>
                        <div class="headding-border bg-color-3"></div>
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                            <!-- post title -->
                            <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                            <!-- post image -->
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{asset('frontend_asset/images/travel.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="post-title-author-details">
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                        </div>
                    </div>
                </div>
                <!-- /.travel -->
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <!-- food -->
                    <div class="food-inner">
                        <h3 class="category-headding ">FOOD</h3>
                        <div class="headding-border bg-color-4"></div>
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                            <!-- post title -->
                            <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                            <!-- post image -->
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{asset('frontend_asset/images/food.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="post-title-author-details">
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                        </div>
                    </div>
                </div>
                <!-- /.food -->
                <div class="col-md-4 col-sm-4">
                    <!-- politics -->
                    <div class="politics-inner">
                        <h3 class="category-headding ">POLITICS</h3>
                        <div class="headding-border bg-color-5"></div>
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                            <!-- post title -->
                            <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                            <!-- post image -->
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{asset('frontend_asset/images/politics_06.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="post-title-author-details">
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                        </div>
                    </div>
                </div>
                <!-- /.politics -->
                <div class="col-md-4 col-sm-4">
                    <!-- health -->
                    <div class="health-inner">
                        <h3 class="category-headding ">HEALTH</h3>
                        <div class="headding-border bg-color-3"></div>
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                            <!-- post title -->
                            <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                            <!-- post image -->
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{asset('frontend_asset/images/health.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="post-title-author-details">
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                        </div>
                    </div>
                </div>
                <!-- /.health -->
            </div>
        </div>
    </section>
        
@endsection