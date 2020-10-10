@extends('layouts.layout')
@section('content')
    <div class="col-lg-8 blog__content">

        <!-- Latest News -->
        <section class="section tab-post mb-16">
            <div class="title-wrap title-wrap--line">
                <h3 class="section-title">Tin Mới Nhất</h3>

                <div class="tabs tab-post__tabs">
                    <ul class="tabs__list">
                        <li class="tabs__item tabs__item--active">
                            <a href="#tab-all" class="tabs__trigger">Tất Cả</a>
                        </li>
                        <?php $arrHref = ['#tab-world', '#tab-lifestyle', '#tab-business', '#tab-fashion'] ?>
                        @foreach($postType as $key => $type)
                            <li class="tabs__item">
                                <a href="{{ $arrHref[$key + 1] }}" class="tabs__trigger">{{ $type->TenTL }}</a>
                            </li>
                        @endforeach
                    </ul> <!-- end tabs -->
                </div>
            </div>

            <!-- tab content -->
            <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

                <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                    <div class="row card-row">


                        @foreach($latestPost as $post)
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="{{ url('post',  [$post->idTin, $post->slug]) }}">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ url('' .$post->urlHinh) }}" src="{{ url('empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{ $post->Ten }}</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="{{ url('post', [$post->idTin, $post->slug]) }}">{{ $post->TieuDe }}</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>by</span>
                                                    <a href="#">Đinh Phước Long</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    {{ $post->Ngay }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p class="overflow">{{ $post->TomTat }}</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach



                    </div>
                </div> <!-- end pane 1 -->

                <div class="tabs__content-pane" id="tab-lifestyle">
                    <div class="row card-row">
                        @foreach($socialPosts as $social)
                        <div class="col-md-6">
                            <article class="entry card">
                                <div class="entry__img-holder card__img-holder">
                                    <a href="{{ url('post', [$social->idTin, $social->slug]) }}">
                                        <div class="thumb-container thumb-70">
                                            <img data-src="{{ url('' . $social->urlHinh) }}" src="{{ url('empty.png') }}" class="entry__img lazyload" alt="" />
                                        </div>
                                    </a>
                                    <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{ $social->Ten }}</a>
                                </div>

                                <div class="entry__body card__body">
                                    <div class="entry__header">

                                        <h2 class="entry__title">
                                            <a href="{{ url('post', [$social->idTin, $social->slug]) }}">{{ $social->TieuDe }}</a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">Đinh Phước Long</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                {{ $social->Ngay }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p class="overflow">{!! $social->TomTat !!}</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>
                </div> <!-- end pane 3 -->

                <div class="tabs__content-pane" id="tab-business">
                    <div class="row card-row">
                       @foreach($lifePosts as $lifePost)
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="{{ url('post', [$lifePost->idTin, $lifePost->slug]) }}">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="" src="{{ url('' . $lifePost->urlHinh) }}" onerror="this.src='{{ url('upload/images/404.png') }}'" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">{{ $lifePost->Ten }}</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="{{ url('post', [$lifePost->idTin, $lifePost->slug]) }}">{{ $lifePost->TieuDe }}</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>by</span>
                                                    <a href="#">Đinh Phước Long</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    {{ $lifePost->Ngay }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p class="overflow">{!! $lifePost->TomTat !!}</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach

                    </div>
                </div> <!-- end pane 4 -->

                <div class="tabs__content-pane" id="tab-fashion">
                    <div class="row card-row">
                        @foreach($enjoyPosts as $enjoyPost)
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="{{ url('post', [$enjoyPost->idTin, $enjoyPost->slug]) }}">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="" src="{{ url('' . $enjoyPost->urlHinh) }}" onerror="this.src='{{ url('upload/images/404.png') }}'" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">{{ $enjoyPost->Ten }}</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="{{ url('post', [$enjoyPost->idTin, $enjoyPost->slug]) }}">{{ $enjoyPost->TieuDe }}</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>by</span>
                                                    <a href="#">Đinh Phước Long</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                   {{ $enjoyPost->Ngay }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p class="overflow">{!! $enjoyPost->TomTat !!}</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach

                    </div>
                </div> <!-- end pane 5 -->
            </div> <!-- end tab content -->
        </section> <!-- end latest news -->

    </div> <!-- end posts -->
@endsection
@section('flashNews')
    <div class="container">
        <div class="trending-now">
        <span class="trending-now__label">
          <i class="ui-flash"></i>
          <span class="trending-now__text d-lg-inline-block d-none">Tin Nhanh</span>
        </span>
            <div class="newsticker">
                <ul class="newsticker__list">

                    @foreach($flashNews as $flashNew)
                        <li class="newsticker__item"><a href="{{ url('post', [$flashNew->idTin, $flashNew->slug]) }}" class="newsticker__item-url">{{ $flashNew->TieuDe }}</a></li>
                    @endforeach

                </ul>
            </div>
            <div class="newsticker-buttons">
                <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
                <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
            </div>
        </div>
    </div>
@endsection

@section('topNews')
    <section class="section mb-0">
        <div class="title-wrap title-wrap--line title-wrap--pr">
            <h3 class="section-title">Tin Xem Nhiều</h3>
        </div>

        <!-- Slider -->
        <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
            @foreach($topNews as $topNew)
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('{{ url('' . $topNew->urlHinh) }}');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="{{ url('post', [$topNew->idTin, $topNew->slug]) }}">{{ $topNew->TieuDe }}</a>
                            </h2>
                        </div>
                        <a href="{{ url('post', [$topNew->idTin, $topNew->slug]) }}" class="thumb-url"></a>
                    </div>
                </article>
            @endforeach
        </div> <!-- end slider -->

    </section> <!-- end carousel posts -->
@endsection
