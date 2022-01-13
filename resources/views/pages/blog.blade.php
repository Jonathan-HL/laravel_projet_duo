@extends('layouts.index')
@section('content')
<main id="main" class="site-main">

    <section class="site-section-small section-blog">

        <div class="container">

            <div class="text-center">

                <h1 class="section-title-big">Blog</h1>
                <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            </div>

            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Blog</li>
            </ol><!-- /.breadcrumb -->

            <div class="row">
                @foreach ($blogs as $el)

                <div class="col-md-9">

                    <div class="blog-post">

                        <a href="blog-post.html"><img class="img-carousel post-img" src={{ asset("img/". $el -> images) }} alt=""></a>

                        <div class="post-content">

                            <h3><a class="post-title" href="blog-post.html">{{ $el -> titre }}</a></h3>

                            <p class="section-text">{{ $el -> descrip }}</p>

                        </div><!-- /.post-content -->

                    </div><!-- /.blog-post -->
                @endforeach
    </section><!-- /.social-networks -->

</main><!-- /.site-main -->
@endsection
