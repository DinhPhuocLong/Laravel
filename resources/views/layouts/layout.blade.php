
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đinh Phước Long</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/font-icons.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ url('img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('apple-touch-icon-114x114.png') }}">

    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="{{ url('assets/js/lazysizes.min.js') }}"></script>
    <style>
        .overflow{
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis; /* text-overflow: clip; */
        }
    </style>

</head>

<body class="bg-light style-default style-rounded">

<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
    </div>
</div>

<!-- Bg Overlay -->
<div class="content-overlay"></div>

<!-- Sidenav -->
<header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
        <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
            <i class="ui-close sidenav__close-icon"></i>
        </button>
    </div>

    <!-- Nav -->
    <nav class="sidenav__menu-container">
        <ul class="sidenav__menu" role="menubar">
            <li>
                <a href="{{ url('/') }}" class="sidenav__menu-url">Home</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-url">Pages</a>
                <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                <ul class="sidenav__menu-dropdown">
                    <li><a href="about.html" class="sidenav__menu-url">About</a></li>
                    <li><a href="contact.html" class="sidenav__menu-url">Contact</a></li>
                    <li><a href="search-results.html" class="sidenav__menu-url">Search Results</a></li>
                    <li><a href="categories.html" class="sidenav__menu-url">Categories</a></li>
                    <li><a href="404.html" class="sidenav__menu-url">404</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="sidenav__menu-url">Features</a>
                <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                <ul class="sidenav__menu-dropdown">
                    <li>
                        <a href="#" class="sidenav__menu-url">Single Post</a>
                        <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                        <ul class="sidenav__menu-dropdown">
                            <li><a href="single-post.html" class="sidenav__menu-url">Style 1</a></li>
                            <li><a href="single-post-politics.html" class="sidenav__menu-url">Style 2</a></li>
                            <li><a href="single-post-fashion.html" class="sidenav__menu-url">Style 3</a></li>
                            <li><a href="single-post-games.html" class="sidenav__menu-url">Style 4</a></li>
                            <li><a href="single-post-videos.html" class="sidenav__menu-url">Style 5</a></li>
                            <li><a href="single-post-music.html" class="sidenav__menu-url">Style 6</a></li>
                        </ul>
                    </li>
                    <li><a href="shortcodes.html" class="sidenav__menu-url">Shortcodes</a></li>
                </ul>
            </li>

            <!-- Categories -->
            <li>
                <a href="#" class="sidenav__menu-url">World</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-url">Business</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-url">Fashion</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-url">Lifestyle</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-url">Advertise</a>
            </li>
        </ul>
    </nav>

    <div class="socials sidenav__socials">
        <a class="social social-facebook" href="https://www.facebook.com/CptJohn.price.11200" target="_blank" aria-label="facebook">
            <i class="ui-facebook"></i>
        </a>
    </div>
</header> <!-- end sidenav -->

<main class="main oh" id="main">

    <!-- Top Bar -->

    <!-- Navigation -->
    <header class="nav">

        <div class="nav__holder nav--sticky">
            <div class="container relative">
                <div class="flex-parent">

                    <!-- Side Menu Button -->
                    <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
                    </button>

                    <!-- Logo -->
                    <a href="{{ url('/') }}" class="logo">
                        <img class="logo__img" src="{{ url('/assets/img/logo_default.png') }}" srcset="{{ url('/assets/img/logo_default.png') }} 1x, {{ url('/assets/img/logo_default@2x.png') }} 2x" alt="logo">
                    </a>

                    <!-- Nav-wrap -->
                    <nav class="flex-child nav__wrap d-none d-lg-block">
                        <ul class="nav__menu">

                            <li class=" {{ request()->is('/*') ? 'active' : '' }}">
                                <a href="{{ url('/') }}">Home</a>
                            </li>

                           @foreach($menu as $item)
                                <li class="nav__dropdown">
                                    <a href="#">{{ $item->TenTL }}</a>
                                    <ul class="nav__dropdown-menu">
                                        <?php
                                        $submenu = DB::table('loaitin')->select('idLT', 'Ten')
                                          ->orderby('ThuTu','ASC')->where('AnHien','=','1')
                                          ->where('idTL','=',$item->idTL)
                                          ->get();
                                        ?>
                                        @foreach($submenu as $sub)
                                            <li>
                                                <a href="{{ url('category', [$sub->idLT]) }}">{{ $sub->Ten }}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                            @endforeach

                            <li>
                                <a href="#">Liên Hệ</a>
                            </li>




                        </ul> <!-- end menu -->
                    </nav> <!-- end nav-wrap -->

                    <!-- Nav Right -->
                    <div class="nav__right">

                        <!-- Search -->
                        <div class="nav__right-item nav__search">
                            <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                                <i class="ui-search nav__search-trigger-icon"></i>
                            </a>
                            <div class="nav__search-box" id="nav__search-box">
                                <form class="nav__search-form">
                                    <input type="text" placeholder="Search an article" class="nav__search-input">
                                    <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                        <i class="ui-search nav__search-icon"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div> <!-- end nav right -->

                </div> <!-- end flex-parent -->
            </div> <!-- end container -->

        </div>
    </header> <!-- end navigation -->


    <!-- Trending Now -->

    @yield('flashNews')

    <!-- Featured Posts Grid -->


    <div class="main-container container pt-24" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- Posts -->

                @yield('content')

            <!-- Sidebar -->
            <aside class="col-lg-4 sidebar sidebar--right">

                <!-- Widget Popular Posts -->
                <aside class="widget widget-popular-posts">
                    <h4 class="widget-title">Tin Phổ Biến</h4>
                    <ul class="post-list-small">

                        @foreach($popularPosts as $post)
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="{{ url('post', [$post->idTin, $post->slug]) }}">
                                                <img data-src="{{ url('' . $post->urlHinh) }}" src="{{ url('empty.png') }}" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="{{ url('post', [$post->idTin, $post->slug]) }}">{{ $post->TieuDe }}</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">Long</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                {{ $post->Ngay }}
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        @endforeach


                    </ul>
                </aside> <!-- end widget popular posts -->

                <!-- Widget Newsletter -->


                <!-- Widget Socials -->
                <aside class="widget widget-socials">
                    <h4 class="widget-title">Hãy theo dõi chúng tôi</h4>
                    <div class="socials socials--wide socials--large">
                        <div class="row row-16">
                            <div class="col">
                                <a class="social social-facebook" href="https://www.facebook.com/CptJohn.price.11200" title="facebook" target="_blank" aria-label="facebook">
                                    <i class="ui-facebook"></i>
                                    <span class="social__text">Facebook</span>
                                </a><!--
                  -->
                            </div>
                        </div>
                    </div>
                </aside> <!-- end widget socials -->

            </aside> <!-- end sidebar -->

        </div> <!-- end content -->

        <!-- Ad Banner 728 -->

            @yield('topNews')
        <!-- Carousel posts -->


        <!-- Posts from categories -->

        <!-- Video posts -->


        <!-- Content Secondary -->


    </div> <!-- end main container -->

    <!-- Footer -->
    <footer class="footer footer--dark">
        <div class="container">
            <div class="footer__widgets">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <aside class="widget widget-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ '/assets/img/logo_default.png' }}" srcset="{{ url('/assets/img/logo_default.png') }} 1x, {{ url('/assets/img/logo_default.png') }} 2x" class="logo__img" alt="">
                            </a>
                            <p class="copyright">
                                © 2018 Deus | Made by <a href="https://deothemes.com">DeoThemes</a>
                            </p>
                            <div class="socials socials--large socials--rounded mb-24">
                                <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                                <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                                <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                                <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                                <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                            </div>
                        </aside>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <aside class="widget widget_nav_menu">
                            <h4 class="widget-title">Useful Links</h4>
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">News</a></li>
                                <li><a href="categories.html">Advertise</a></li>
                                <li><a href="shortcodes.html">Support</a></li>
                                <li><a href="shortcodes.html">Features</a></li>
                                <li><a href="shortcodes.html">Contact</a></li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <aside class="widget widget-popular-posts">
                            <h4 class="widget-title">Popular Posts</h4>
                            <ul class="post-list-small">
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry clearfix">
                                        <div class="post-list-small__img-holder">
                                            <div class="thumb-container thumb-100">
                                                <a href="single-post.html">
                                                    <img data-src="{{ url('assets/img/content/post_small/post_small_1.jpg') }}" src="{{ url('empty.png') }}" alt="" class="post-list-small__img--rounded lazyload">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                                            </h3>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>by</span>
                                                    <a href="#">DeoThemes</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    Jan 21, 2018
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry clearfix">
                                        <div class="post-list-small__img-holder">
                                            <div class="thumb-container thumb-100">
                                                <a href="single-post.html">
                                                    <img data-src="{{ url('assets/img/content/post_small/post_small_2.jpg') }}" src="{{ url('empty.png') }}" alt="" class="post-list-small__img--rounded lazyload">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                                            </h3>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>by</span>
                                                    <a href="#">DeoThemes</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    Jan 21, 2018
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_mc4wp_form_widget">
                            <h4 class="widget-title">Newsletter</h4>
                            <p class="newsletter__text">
                                <i class="ui-email newsletter__icon"></i>
                                Subscribe for our daily news
                            </p>
                            <form class="mc4wp-form" method="post">
                                <div class="mc4wp-form-fields">
                                    <div class="form-group">
                                        <input type="email" name="EMAIL" placeholder="Your email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-color" value="Sign Up">
                                    </div>
                                </div>
                            </form>
                        </aside>
                    </div>

                </div>
            </div>
        </div> <!-- end container -->
    </footer> <!-- end footer -->

    <div id="back-to-top">
        <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

</main> <!-- end main-wrapper -->


<!-- jQuery Scripts -->
<script src="{{ url('assets/js/jquery.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/easing.min.js') }}"></script>
<script src="{{ url('assets/js/owl-carousel.min.js') }}"></script>
<script src="{{ url('assets/js/flickity.pkgd.min.js') }}"></script>
<script src="{{ url('assets/js/twitterFetcher_min.js') }}"></script>
<script src="{{ url('assets/js/jquery.newsTicker.min.js') }}"></script>
<script src="{{ url('assets/js/modernizr.min.js') }}"></script>
<script src="{{ url('assets/js/scripts.js') }}"></script>

</body>
</html>
