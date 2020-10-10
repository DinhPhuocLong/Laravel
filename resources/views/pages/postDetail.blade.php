@extends('layouts.layout')
@section('content')
<div class="col-lg-8 blog__content mb-72">
    <div class="content-box">

        <!-- standard post -->
        <article class="entry mb-0">

            <div class="single-post__entry-header entry__header">

                <h1 class="single-post__entry-title">
                    {{ $Tin->TieuDe }}
                </h1>

                <div class="entry__meta-holder">
                    <ul class="entry__meta">
                        <li class="entry__meta-author">
                            <span>by</span>
                            <a href="#">DeoThemes</a>
                        </li>
                        <li class="entry__meta-date">
                            {{ $Tin->Ngay }}
                        </li>
                    </ul>

                    <ul class="entry__meta">
                        <li class="entry__meta-views">
                            <i class="ui-eye"></i>
                            <span>{{ $Tin->SoLanXem }}</span>
                        </li>
                        <li class="entry__meta-comments">
                            <a href="#">
                                <i class="ui-chat-empty"></i>{{ count($count) }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div> <!-- end entry header -->

            <div class="entry__img-holder">
                <img src="{{ url('' . $Tin->urlHinh) }}" alt="" class="entry__img">
            </div>

            <div class="entry__article-wrap">


                <div class="entry__article">



                    {!! $Tin->Content !!}



                </div> <!-- end entry article -->
            </div> <!-- end entry article wrap -->


            <!-- Prev / Next Post -->

            <!-- Related Posts -->

        </article> <!-- end standard post -->

        <!-- Comments -->
        <div class="entry-comments">
            <div class="title-wrap title-wrap--line">
                <h3 class="section-title">{{ count($count) }} comments</h3>
            </div>
            <ul class="comment-list">
                @foreach($count as $com)
                <li class="comment">
                    <div class="comment-body">
                        <div class="comment-avatar">
                            <img alt="" src="img/content/single/comment_1.jpg">
                        </div>
                        <div class="comment-text">
                            <h6 class="comment-author">{{ $com->HoTen }}</h6>
                            <div class="comment-metadata">
                                <a href="#" class="comment-date">{{ $com->Ngay }}</a>
                            </div>
                            <p>{{ $com->NoiDung }}</p>
                            <a href="#" class="comment-reply">Reply</a>
                        </div>
                    </div>

                </li> <!-- end 1-2 comment -->
                @endforeach

            </ul>
        </div> <!-- end comments -->

        <!-- Comment Form -->
        <div id="respond" class="comment-respond">
            <div class="title-wrap">
                <h5 class="comment-respond__title section-title">Leave a Reply</h5>
            </div>
            <form id="form" class="comment-form" method="post" action="#">
                <p class="comment-form-comment">
                    <label for="comment">Comment</label>
                    <textarea id="comment" name="comment" rows="5" required="required"></textarea>
                </p>

                <div class="row row-20">
                    <div class="col-lg-4">
                        <label for="name">Name: *</label>
                        <input name="name" id="name" type="text">
                    </div>
                    <div class="col-lg-4">
                        <label for="comment">Email: *</label>
                        <input name="email" id="email" type="email">
                    </div>
                    <div class="col-lg-4">
                        <label for="comment">Website:</label>
                        <input name="website" id="website" type="text">
                    </div>
                </div>

                <p class="comment-form-submit">
                    <input type="submit" class="btn btn-lg btn-color btn-button" value="Post Comment" id="submit-message">
                </p>

            </form>
        </div> <!-- end comment form -->

    </div> <!-- end content box -->
</div>
@endsection
