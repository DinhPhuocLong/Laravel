@extends('layouts.layout')
@section('content')
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="{{ url('') }}" class="breadcrumbs__url">Trang chủ</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="index.html" class="breadcrumbs__url">{{ $pageTitle }}</a>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
                {{ $postType }}
            </li>
        </ul>
    </div>
<div class="col-lg-8 blog__content mb-72">
    <h1 class="page-title">{{ $pageTitle }}</h1>

    <div class="row card-row">


        @foreach($results as $result)
        <div class="col-md-6">
            <article class="entry card">
                <div class="entry__img-holder card__img-holder">
                    <a href="{{ url('post', [$result->idTin, $result->slug]) }}">
                        <div class="thumb-container thumb-70">
                            <img onerror="this.src='{{ URL::asset('upload/images/404.png') }}'" data-src="" src="{{ URL::asset("{$result->urlHinh}") }}" class="entry__img lazyloaded" alt="">
                        </div>
                    </a>
                    <a href="{{ url('post', [$result->idTin, $result->slug]) }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">{{ $result->Ten }}</a>
                </div>

                <div class="entry__body card__body">
                    <div class="entry__header">

                        <h2 class="entry__title">
                            <a href="{{ url('post', [$result->idTin, $result->slug]) }}">{{ $result->TieuDe }}</a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <span>by</span>
                                <a href="#">Long</a>
                            </li>
                            <li class="entry__meta-date">
                                {{ $result->Ngay }}
                            </li>
                        </ul>
                    </div>
                    <div class="entry__excerpt overflow">
                        {{ $result->TomTat }}
                    </div>
                </div>
            </article>
        </div>
        @endforeach
            @include('pages.paginator', ['paginator' => $results])
    </div>

</div>
@endsection
