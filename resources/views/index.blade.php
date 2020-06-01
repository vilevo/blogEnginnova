@extends('includes.template')

@section('meta')
<meta name="keywords" content="Enginnova, teletravail , teletravail afrique, IT consulting, numérique, afrique, togo" />
<meta name="description" content="Enginnova s'emploie à révolutionner le monde du travail et du recrutement en donnant la possibilité aux citoyens des pays du Sud de travailler à distance pour les entreprises des pays du Nord et Vice Versa." />
<meta property="og:url" content="http://www.blog.enginnova.co" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Enginnova - News" />
<meta property="og:description" content="Enginnova s'emploie à révolutionner le monde du travail et du recrutement en donnant la possibilité aux citoyens des pays du Sud de travailler à distance pour les entreprises des pays du Nord et Vice Versa." />
<meta property="og:image" content="https://enginnova.s3-us-west-2.amazonaws.com/enginnova.png" />
@endsection

@section('breadcrumb')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>News</h2>
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
<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach($blogs as $blog)
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="{{asset('blog_assets/img/blog/single_blog_2.png')}}" alt="" />
                            <a href="#" class="blog_item_date">
                                <h3>{{date('d',strtotime($blog->created_at))}}</h3>
                                <p>{{date('F',strtotime($blog->created_at))}}</p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="{{route('news.article', $blog->id)}}">
                                <h2>{{ $blog->titre }}</h2>
                            </a>
                            <p>
                                <?php echo substr($blog->contenu, 0, 145); ?>...
                            </p>
                            <ul class="blog-info-link">
                                <li>
                                    <a href="#"><i class="far fa-user"></i> Enginnova</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    @endforeach



                    <nav class="blog-pagination justify-content-center d-flex">
                        {{$blogs->links()}}
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">

                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Articles popualires</h3>
                        @foreach($autres_blogs as $autre_blog)
                        <div class="media post_item">
                            <img src="{{asset('blog_assets/img/post/post_1.png')}}" alt="post" />
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
                                <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder="Enter email" required />
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">
                                Subscribe
                            </button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
@endsection