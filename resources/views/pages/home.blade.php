@extends('app')
@section('title', 'Sport News - Home')

@section('content')
<div class="py-30"></div>

<section class="featured-posts">
    <div class="container">
        <div class="row no-gutters">
            {{--TAKES FIRST TWO ITEMS--}}
            @foreach($items->posts->whereIn('id', [1,2]) as $item)
                <div class="col-md-6 col-xs-12 col-lg-4">
                    <div class="featured-slider mr-md-3 mr-lg-3">
                        <div class="item" style="background-image:url({{asset('images/news/'.$item->picture)}})">
                            <div class="post-content">
                                <a href="{{route('category',$item->category->name)}}" class="post-cat" style="background:{{$item->category->color}}">{{$item->category->name}}</a>
                                <h2 class="slider-post-title">
                                    <a href="{{route('post',$item->id)}}">{{$item->title}}</a>
                                </h2>
                                <div class="post-meta mt-2">
                                    <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>{{$item->created_at->diffForHumans()}}</span>
                                    <span class="post-author">
                                        by
                                        <a href="{{route('author',$item->user->name)}}">{{$item->user->name}}</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-4">
                <div class="row mt-3 mt-lg-0">
                    {{--TAKES LAST TWO ITEMS--}}
                    @foreach($items->posts->whereIn('id', [3,4]) as $item)
                        <div class="col-lg-12 col-xs-12 col-sm-6 col-md-6">
                            <div class="post-featured-style" style="background-image:url({{asset('images/news/news-02.jpg')}})">
                                <div class="post-content">
                                    <a href="#" class="post-cat" style="background:{{$item->category->color}}">{{$item->category->name}}</a>
                                    <h2 class="post-title">
                                        <a href="{{route('post',$item->id)}}">{{$item->title}}</a>
                                    </h2>
                                    <div class="post-meta mt-2">
                                        <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>{{$item->created_at->diffForHumans()}}</span>
                                        <span class="post-author">
                                            <span> by </span>
                                                     <a href="{{route('author',$item->user->name)}}">{{$item->user->name}}</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="news-style-one">
                    <h3 class="news-title">
                        <span>Editor Picks</span>
                    </h3>
                    <div class="news-style-one-slide">
                    {{--SHOWS TWO IN A SINGLE ROW--}}
                        <div class="item">
                             @foreach($items->posts->whereIn('id', [1,2]) as $item)
                                <div class="post-block-wrapper clearfix @if($loop->first) mb-5 @endif">
                                    <div class="post-thumbnail">
                                        <a href="{{route('post',$item->id)}}">
                                            <img class="img-fluid" src="{{asset('images/news/'.$item->picture)}}" alt="post-image"/>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="{{route('post',$item->id)}}">{{$item->title}}</a>
                                        </h2>
                                        <div class="post-meta mb-2">
                                            <span class="posted-time"><i class="fa fa-clock-o mr-2"></i>{{$item->created_at->diffForHumans()}}</span>
                                            <span class="post-author">
                                                by
                                                <a href="{{route('author',$item->user->name)}}">{{$item->user->name}}</a>
                                            </span>
                                        </div>
                                        <p>{{substr($item->content,0,100).'...'}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{--SHOWS TWO IN A SINGLE ROW--}}
                        <div class="item">
                            @foreach($items->posts->whereIn('id', [3,4]) as $item)
                                <div class="post-block-wrapper clearfix @if($loop->first) mb-5 @endif">
                                    <div class="post-thumbnail">
                                        <a href="{{route('post',$item->id)}}">
                                            <img class="img-fluid" src="{{asset('images/news/'.$item->picture)}}" alt="post-image"/>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="{{route('post',$item->id)}}">{{$item->title}}</a>
                                        </h2>
                                        <div class="post-meta mb-2">
                                            <span class="posted-time"><i class="fa fa-clock-o mr-2"></i>{{$item->created_at->diffForHumans()}}</span>
                                            <span class="post-author">
                                                by
                                                <a href="{{route('author',$item->user->name)}}">{{$item->user->name}}</a>
                                            </span>
                                        </div>
                                        <p>{{substr($item->content,0,100).'...'}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="item">
                            @foreach($items->posts->whereIn('id', [5,6]) as $item)
                                <div class="post-block-wrapper clearfix @if($loop->first) mb-5 @endif">
                                    <div class="post-thumbnail">
                                        <a href="{{route('post',$item->id)}}">
                                            <img class="img-fluid" src="{{asset('images/news/'.$item->picture)}}" alt="post-image"/>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="{{route('post',$item->id)}}">{{$item->title}}</a>
                                        </h2>
                                        <div class="post-meta mb-2">
                                            <span class="posted-time"><i class="fa fa-clock-o mr-2"></i>{{$item->created_at->diffForHumans()}}</span>
                                            <span class="post-author">
                                                by
                                                <a href="{{route('author',$item->user->name)}}">{{$item->user->name}}</a>
                                            </span>
                                        </div>
                                        <p>{{substr($item->content,0,100).'...'}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                        <div class="item">
                            @foreach($items->posts->whereIn('id', [7,8]) as $item)
                                <div class="post-block-wrapper clearfix @if($loop->first) mb-5 @endif">
                                    <div class="post-thumbnail">
                                        <a href="{{route('post',$item->id)}}">
                                            <img class="img-fluid" src="{{asset('images/news/'.$item->picture)}}" alt="post-image"/>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="{{route('post',$item->id)}}">{{$item->title}}</a>
                                        </h2>
                                        <div class="post-meta mb-2">
                                            <span class="posted-time"><i class="fa fa-clock-o mr-2"></i>{{$item->created_at->diffForHumans()}}</span>
                                            <span class="post-author">
                                                by
                                                <a href="{{route('author',$item->user->name)}}">{{$item->user->name}}</a>
                                            </span>
                                        </div>
                                        <p>{{substr($item->content,0,100).'...'}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="py-40"></div>
{{--                        FOOTBALL--}}
                <div class="news-style-two">
                    <h3 class="news-title">
                        <span>Football</span>
                    </h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">

                            @foreach($items->posts as $item)
                                    @if($item->category_id === 1 && $item->select === "1")
                                        <div class="post-block-wrapper clearfix">
                                            <div class="post-thumbnail">
                                                <a href="{{route('post',$item->id)}}">
                                                    <img class="img-fluid" src="{{asset('images/news/'.$item->picture)}}" alt="post-thumbnail"/>
                                                </a>
                                            </div>
                                            <a class="post-category" href="categoty-style1.html" style="background:{{$item->category->color}}">{{$item->category->name}}</a>
                                            <div class="post-content">
                                                <h2 class="post-title mt-3">
                                                    <a href="single-post.html">{{$item->title}}</a>
                                                </h2>
                                                <div class="post-meta mb-2">
                                                    <span class="posted-time"><i class="fa fa-clock-o mr-2"></i>{{$item->created_at->diffForHumans()}}</span>
                                                    <span class="post-author">
                                                        by
                                                      <a href="{{route('author',$item->user->name)}}">{{$item->user->name}}</a>
                                                    </span>
                                                </div>
                                                <p>{{substr($item->content,0,100).'...'}}</p>
                                            </div>
                                        </div>
                                    @endif
                            @endforeach
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="post-list-block m-top-0">
                                @foreach($items->posts as $item)
                                    @if($item->category_id === 1 && $item->select === "0")
                                        <div class="post-block-wrapper post-float clearfix">
                                            <div class="post-thumbnail">
                                                <a href="{{route('post',$item->id)}}">
                                                    <img class="img-fluid" src="{{asset('images/news/'.$item->picture)}}" alt="post-thumbnail"/>
                                                </a>
                                            </div>

                                            <div class="post-content">
                                                <h2 class="post-title title-sm">
                                                    <a href="{{route('post',$item->id)}}">{{$item->title}}</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="posted-time"><i class="fa fa-clock-o mr-2"></i>{{$item->created_at->diffForHumans()}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

{{--                BEAUTY BLOG--}}
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="sidebar">
                   @include('partials.social')
                    @include('partials.hot_news')
                    <div class="widget mb-0">
                        <h3 class="news-title">
                            <span>Beauty Blog</span>
                        </h3>
                        <div class="post-slide">
                            <div class="item">
                                <div class="post-overlay-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <a href="single-post.html">
                                            <img class="img-fluid" src="{{asset('images/news/news-16.jpg')}}" alt="post-thumbnail"/>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <a class="post-category white" href="post-category-2.html">Hair</a>
                                        <h2 class="post-title">
                                            <a href="single-post.html">On Beauty: Style and Fashion Blogger...</a>
                                        </h2>
                                        <div class="post-meta white">
                                            <span class="posted-time">4 hours ago</span>
                                            <span> by </span>
                                            <span class="post-author">
                            <a href="author.html">Jammy Anderson</a>
                        </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="post-overlay-wrapper clearfix mt-3">
                                    <div class="post-thumbnail">
                                        <a href="single-post.html">
                                            <img class="img-fluid" src="{{asset('images/news/news-18.jpg')}}" alt="post-thumbnail"/>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <a class="post-category white" href="post-category-2.html">Eyes</a>
                                        <h2 class="post-title">
                                            <a href="single-post.html">The Best Eye Makeup Tutorials fo...</a>
                                        </h2>
                                        <div class="post-meta white">
                                            <span class="posted-time">5 hours ago</span>
                                            <span> by </span>
                                            <span class="post-author">
                            <a href="author.html">Roberto Carlous</a>
                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item ">
                                <div class="post-overlay-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <a href="single-post.html">
                                            <img class="img-fluid" src="{{asset('images/news/news-17.jpg')}}" alt="post-thumbnail"/>
                                        </a>
                                    </div>

                                    <div class="post-content">
                                        <a class="post-category white" href="post-category-2.html">Nail</a>
                                        <h2 class="post-title">
                                            <a href="single-post.html">5 Best Essie Polishes for Winter...</a>
                                        </h2>
                                        <div class="post-meta white">
                                            <span class="posted-time">10 hours ago</span>
                                            <span> by </span>
                                            <span class="post-author">
                            <a href="author.html">Jamalick Jack</a>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-overlay-wrapper mt-3 clearfix">
                                    <div class="post-thumbnail">
                                        <a href="single-post.html">
                                            <img class="img-fluid" src="{{asset('images/news/news-19.jpg')}}" alt="post-thumbnail"/>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <a class="post-category white" href="post-category-2.html">Lips</a>
                                        <h2 class="post-title">
                                            <a href="single-post.html">This Red Hot Metallic Lip Tutori...</a>
                                        </h2>
                                        <div class="post-meta white">
                                            <span class="posted-time">5 hours ago</span>
                                            <span> by </span>
                                            <span class="post-author">
                            <a href="author.html">Jerin Khan</a>
                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                                            {{--TENIS--}}
<section class="news-style-four bg-light section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="block">
                    <h3 class="news-title">
                        <span>Tenis</span>
                    </h3>

                    <div class="post-overlay-wrapper clearfix">
                        @foreach($items->posts as $item)
                            @if($item->category_id === 2 && $item->select === "1")
                                <div class="post-thumbnail">
                                    <img class="img-fluid" src="{{asset('images/news/'.$item->picture)}}" alt="post-thumbnail"/>
                                </div>

                                <div class="post-content">
                                    <h2 class="post-title ">
                                        <a href="{{route('post',$item->id)}}">{{$item->title}}</a>
                                    </h2>
                                    <div class="post-meta white">
                                        <span class="posted-time">{{$item->created_at->diffForHumans()}}</span>
                                        <span class="post-author">by
                                       <a href="{{route('author',$item->user->name)}}">{{$item->user->name}}</a>
                                        </span>
{{--                                        KASNIJE DODATI BROJAC ZA KOMENTARE--}}
                                        <span class="pull-right">
                                            <i class="fa fa-comments"></i>
                                            <a href="single-post.html#comments">05</a>
                                        </span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="post-list-block">
                        @foreach($items->posts as $item)
                            @if($item->category_id === 2 && $item->select === "0")
                                <div class="post-block-wrapper post-float clearfix">
                                    <div class="post-thumbnail">
                                        <img class="img-fluid" src="{{asset('images/news/'.$item->picture)}}" alt="post-thumbnail"/>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title title-sm">
                                            <a href="{{route('post',$item->id)}}">{{$item->title}}</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="posted-time">{{$item->created_at->diffForHumans()}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

                                     {{--ESPORTS--}}
            <div class="col-lg-4 col-md-6">
                <div class="block">
                    <h3 class="news-title">
                        <span>ESPORTS</span>
                    </h3>
                    <div class="post-overlay-wrapper clearfix">
                        @foreach($items->posts as $item)
                            @if($item->category_id === 3 && $item->select === "1")
                                <div class="post-thumbnail">
                                    <img class="img-fluid" src="{{asset('images/news/'.$item->picture)}}" alt="post-thumbnail"/>
                                </div>

                                <div class="post-content">
                                    <h2 class="post-title ">
                                        <a href="{{route('post',$item->id)}}">{{$item->title}}</a>
                                    </h2>
                                    <div class="post-meta white">
                                        <span class="posted-time">{{$item->created_at->diffForHumans()}}</span>
                                        <span class="post-author">by
                           <a href="{{route('author',$item->user->name)}}">{{$item->user->name}}</a>
                                        </span>
                                        {{--                                        KASNIJE DODATI BROJAC ZA KOMENTARE--}}
                                        <span class="pull-right">
                                            <i class="fa fa-comments"></i>
                                            <a href="single-post.html#comments">05</a>
                                        </span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="post-list-block">
                        @foreach($items->posts as $item)
                            @if($item->category_id === 3 && $item->select === "0")
                                <div class="post-block-wrapper post-float clearfix">
                                    <div class="post-thumbnail">
                                        <img class="img-fluid" src="{{asset('images/news/'.$item->picture)}}" alt="post-thumbnail"/>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title title-sm">
                                            <a href="{{route('post',$item->id)}}">{{$item->title}}</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="posted-time">{{$item->created_at->diffForHumans()}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

                        {{--BASKETBALL--}}
            <div class="col-lg-4 col-md-6">
                <div class="block">
                    <h3 class="news-title">
                        <span>Basketball</span>
                    </h3>
                    <div class="post-overlay-wrapper clearfix">
                        @foreach($items->posts as $item)
                            @if($item->category_id === 4 && $item->select === "1")
                                <div class="post-thumbnail">
                                    <img class="img-fluid" src="{{asset('images/news/'.$item->picture)}}" alt="post-thumbnail"/>
                                </div>
                                <div class="post-content">
                                    <h2 class="post-title ">
                                        <a href="{{route('post',$item->id)}}">{{$item->title}}</a>
                                    </h2>
                                    <div class="post-meta white">
                                        <span class="posted-time">{{$item->created_at->diffForHumans()}}</span>
                                        <span class="post-author">by
                                            <a href="{{route('author',$item->user->name)}}">{{$item->user->name}}</a>
                                        </span>
                                        {{--                                        KASNIJE DODATI BROJAC ZA KOMENTARE--}}
                                        <span class="pull-right">
                                            <i class="fa fa-comments"></i>
                                            <a href="single-post.html#comments">05</a>
                                        </span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="post-list-block">
                        @foreach($items->posts as $item)
                            @if($item->category_id === 4 && $item->select === "0")
                                <div class="post-block-wrapper post-float clearfix">
                                    <div class="post-thumbnail">
                                        <img class="img-fluid" src="{{asset('images/news/'.$item->picture)}}" alt="post-thumbnail"/>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title title-sm">
                                            <a href="{{route('post',$item->id)}}">{{$item->title}}</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="posted-time">{{$item->created_at->diffForHumans()}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="all-news-block">
                    <h3 class="news-title">
                        <span>Latest Articles</span>
                    </h3>
                    <div class="all-news">
                        <div class="row">
                            @foreach($items->posts->sortByDesc('created_at')->take(2) as $item)
                                <div class="col-lg-6 col-md-6">
                                    <div class="post-block-wrapper post-float-half clearfix">
                                        <div class="post-thumbnail">
                                            <a href="{{route('post',$item->id)}}">
                                                <img class="img-fluid" src="{{asset('images/news/'.$item->picture)}}" alt="post-thumbnail"/>
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <a class="post-category" href="post-category-2.html" style="background:{{$item->category->color}}">{{$item->category->name}}</a>
                                            <h2 class="post-title mt-3">
                                                <a href="{{route('post',$item->id)}}">{{$item->title}}</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="posted-time">{{$item->created_at->diffForHumans()}}</span>
                                                <span class="post-author">by
                                              <a href="{{route('author',$item->user->name)}}">{{$item->user->name}}</a>
                                                </span>
                                            </div>
                                            <p>{{substr($item->content,0,100).'...'}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <nav aria-label="pagination-wrapper" class="pagination-wrapper">
                    <ul class="pagination justify-content-center">
                        <li class="page-item active">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="fa fa-angle-double-left mr-2"></i></span>
                                <span class="">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span class="">Next</span>
                                <span aria-hidden="true"><i class="fa fa-angle-double-right ml-2"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                <div class="sidebar sidebar-right">
                    @include('partials.top_authors')
                </div>
            </div>
        </div>
    </div>
</section>

<div class="py-40"></div>

@endsection
