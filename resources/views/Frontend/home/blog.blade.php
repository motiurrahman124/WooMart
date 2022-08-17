@extends('Frontend.master')
@section('main_content')
<div class="blog-page pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-wrap">
                    <h2 class="section-title mb-5">Our Latest Blog</h2>
                    <div class="row m-b-30">

                        @foreach ($data['recent_blogs'] as $data)
                        <div class="col-lg-6 col-md-6">
                            <article  class="single-post">
                                <div class="post-thumbnail">
                                    <a href="single-blog.html">
                                        <img src="{{$data->image}}" alt="blog" />
                                    </a>
                                    <span class="blog-date">{{ Carbon\Carbon::parse($data->created_at)->Format('d M, Y') }}</span>
                                </div>
                                <div class="post-info">
                                    <ul class="post-meta">
                                        <li class="author">
                                            <a href="#"><i class="far fa-user"></i>{{ $data->author->name }}</a>
                                        </li>
                                        <li class="comments">
                                            <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                        </li>
                                    </ul>
                                    <h2 class="post-title">
                                        <a href="single-blog.html">{{ substr($data->title,0,28) }}</a>
                                    </h2>
                                    <p class="post-content">{{ substr($data->first_section_description,0,150) }}</p>
                                    <a href="{{ route('single_blog', encrypt($data->id)) }}" class="post-btn">
                                        Read More <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                        @endforeach
                        
                        

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
