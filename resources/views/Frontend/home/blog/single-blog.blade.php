@extends('Frontend.master')
@section('main_content')

<div class="single-blog-page pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                    
                

                <div class="section-wrap">
                    <article class="sigle-post">
                        <h2 class="post-title">{{ $blog->title }} </h2>
                        <div class="post-thumbnail">
                            <img src="{{asset($blog->image)}}" alt="post image" />
                            <span class="post-date">{{ Carbon\Carbon::parse($blog->created_at)->Format('d M, Y') }}</span>
                        </div>
                        <p class="post-content">{{ $blog->first_section_description }}</p>
                        <blockquote class="blockquote">
                            <q>{{ $blog->quatation }}</q>
                        </blockquote>
                        <p  class="post-content">{{ $blog->second_section_description }}</p>
                        <div class="blog-meta">

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul class="meta-box">
                                        <li>
                                            <a href="#"><i class="far fa-user"></i> John Doe</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-comments"></i> 32 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="social-share-area text-lg-right">
                                        <span class="share-title">Share this Post : </span>
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(isset($blog->comments[0]))
                        @foreach ($blog->comments as $comment )

                        <div class="single-post-commnt">
                            <ul class="comment-list">
                                <li class="sngle-comment">
                                    <div class="media align-items-center">
                                        <a class="mr-4" href="#">
                                            <img class="author-image" src="{{asset('assets/Mainpage/images/comment1.png')}}"  alt="comment">
                                        </a>
                                        <div class="media-body ">
                                          <h3 class="author-name"><a href="#">{{ $comment->user->name}}</a></h3>
                                          <h5 class="post-date">
                                              {{ Carbon\Carbon::parse($comment->created_at)->format('d M, Y')}}  |  
                                          </h5>
                                          <p>
                                            {{$comment->messege}}
                                          </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                            
                        @endforeach
                        @endif
                    </article>
                </div>
                <div class="section-wrap mt-50">
                    <h2 class="sectin-wrap-title">Write a comment</h2>
                    <div class="comment-form">
                        <form action="{{route('blog.comment.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" name="name" required placeholder="Name" value="{{Auth::user()  ? Auth::user()->name : ''}}" readonly/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" required value="{{Auth::user()  ? Auth::user()->email : ''}}" readonly/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="message-box" id="message" name="messege" rows="3" placeholder="Message"></textarea>
                                      </div>
                                </div>
                            </div>
                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                            @if(Auth::user())
                                <button type="submit" class="btn-style-two secondary-bg border-0">Send Comment</button>
                            @else
                                <a type="button" type="submit" class="btn-style-two secondary-bg border-0" href="{{route('login.form')}}">Login</a>
                            @endif
                        </form>
                    </div>
                </div>
                <div class="pagination-area mt-50">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pagination-page d-flex align-items-center justify-content-between">
                                <div class="page-count">
                                    <span>Page</span>
                                    <input class="page-number" type="text" value="2" />
                                    <span>of 30</span>
                                </div>
                                <ul class="page-controls">
                                    <li class="control-btn"><a href="#"><i class="fas fa-caret-left"></i> Prev</a></li>
                                    <li class="control-btn"><a href="#">Next <i class="fas fa-caret-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-area">
                    <div class="single-widget search-widget ">
                        <div class="widget-title text-center">
                            <h3>Search Post</h3>
                        </div>
                        <div class="search-form widget-wrap">
                            <form>
                                <div class="form-group mb-0">
                                  <input type="text" class="form-control" id="search2" name="search" placeholder="search here..." />
                                  <button type="submit" class="search-icon fas fa-search"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="single-widget recent-post-widget ">
                        <div class="widget-title text-center">
                            <h3>Recent Blog</h3>
                        </div>
                        <div class="recent-post-list widget-wrap">
                            <div class="singe-post">
                                <div class="media align-items-center">
                                    <div class="post-thumbnail mr-3">
                                        <a href="single-blog.html">
                                            <img src="{{asset('assets/Mainpage/images/blog/6.jpg')}}" alt="iamge" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                      <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                      <h3 class="post-title">
                                        <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                      </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="singe-post">
                                <div class="media align-items-center">
                                    <div class="post-thumbnail mr-3">
                                        <a href="single-blog.html">
                                            <img src="{{asset('assets/Mainpage/images/blog/6.jpg')}}" alt="iamge" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                      <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                      <h3 class="post-title">
                                        <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                      </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="singe-post">
                                <div class="media align-items-center">
                                    <div class="post-thumbnail mr-3">
                                        <a href="single-blog.html">
                                            <img src="{{asset('assets/Mainpage/images/blog/6.jpg')}}" alt="iamge" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                      <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                      <h3 class="post-title">
                                        <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                      </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-widget add-banner-widget ">
                        <div class="widget-title text-center">
                            <h3>Girls Collections</h3>
                        </div>
                        <img src="{{asset('assets/Mainpage/images/watch.jpg')}}" alt="iamge" />
                    </div>
                    <div class="single-widget recent-post-widget ">
                        <div class="widget-title text-center">
                            <h3>Popular Blog</h3>
                        </div>
                        <div class="recent-post-list widget-wrap">
                            <div class="singe-post">
                                <div class="media align-items-center">
                                    <div class="post-thumbnail mr-3">
                                        <a href="single-blog.html">
                                            <img src="{{asset('assets/Mainpage/images/blog/6.jpg')}}" alt="iamge" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                      <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                      <h3 class="post-title">
                                        <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                      </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="singe-post">
                                <div class="media align-items-center">
                                    <div class="post-thumbnail mr-3">
                                        <a href="single-blog.html">
                                            <img src="{{asset('assets/Mainpage/images/blog/6.jpg')}}" alt="iamge" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                      <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                      <h3 class="post-title">
                                        <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                      </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="singe-post">
                                <div class="media align-items-center">
                                    <div class="post-thumbnail mr-3">
                                        <a href="single-blog.html">
                                            <img src="{{asset('assets/Mainpage/images/blog/6.jpg')}}" alt="iamge" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                      <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                      <h3 class="post-title">
                                        <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                      </h3>
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

@endsection