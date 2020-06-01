@extends('includes.template')

@section('meta')
<meta name="keywords" content="Enginnova, teletravail , teletravail afrique, IT consulting, numérique, afrique, togo" />
<meta property="og:url" content="{{route('news.article', $blog->id)}}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$blog->titre}}" />
<meta property="og:description" content="<?php echo substr($blog->contenu, 0, 145); ?>..." />
<meta property="og:image" content="https://enginnova.s3-us-west-2.amazonaws.com/{{$blog->photo}}" />
@endsection

@section('breadcrumb')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Article</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
@endsection

@section('content')
<!--================Blog Area =================-->
<section class="blog_area single-post-area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="https://enginnova.s3-us-west-2.amazonaws.com/{{$blog->photo}}" alt="">
                    </div>
                    <div class="blog_details">
                        <?php echo $blog->contenu; ?>
                    </div>
                </div>
                <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <!-- Social sharing buttons -->
                        Partager sur : <br>
                        <button class='btn partager_facebook' style='background: #3b5998; color: white;' data-url="{{route('news.article', $blog->id)}}">
                            <span class='icon-facebook2'></span> facebook
                        </button>

                        <button class='btn partager_twitter' style='background: #00aced; color: white;' data-url={{route('news.article', $blog->id)}}>
                            <span class='icon-twitter'></span> twitter
                        </button>

                        <button class='btn partager_whatsapp' style='background: green;'>
                            <a style="color: white;" href="whatsapp://send?text={{route('news.article', $blog->id)}}" data-action='share/whatsapp/share' style='color: white;'><span class='icon-whatsapp'></span> whatsapp</a>
                        </button>
                    </div>
                </div>
                <div class="blog-author">
                    <div class="media align-items-center">
                        <img src="{{asset('blog_assets/img/enginnova.ico')}}" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Enginnova</h4>
                            </a>
                            <p>Enginnova s'emploie à révolutionner le monde du travail et du recrutement en donnant la possibilité aux citoyens des pays du Sud de travailler à distance pour les entreprises des pays du Nord et Vice Versa.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Articles similaires</h3>
                        @foreach($autres_blogs as $autre_blog)
                        <div class="media post_item">
                            <img src="https://enginnova.s3-us-west-2.amazonaws.com/{{$blog->photo}}" alt="post" />
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>{{$autre_blog->titre}}</h3>
                                </a>
                                <p>{{date('d F \, Y',strtotime($blog->created_at))}}</p>
                            </div>
                        </div>
                        @endforeach
                    </aside>
                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Subscribe</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area end =================-->
@endsection