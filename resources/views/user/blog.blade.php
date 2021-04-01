@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title',"shreya's blog" )
@section('sub-heading','keep learning keep going')
@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .fa-thumbs-up:hover{
            color:blue;
        }
    </style>
@endsection

@section('main-content')
    <div class="container">
        <div class="row" id="app">
            <div class="col-lg-8 col-md-10 mx-auto">

                <posts
                    v-for='value in blog'
                    :title=value.title
                    :subtitle=value.subtitle
                    :created_at=value.created_at
                    :key=value.index
                    :post-id=value.id
                    login = "{{Auth::check()}}"
                    :likes = value.likes.length
                    :slug =value.slug
                ></posts>
{{--                @foreach($posts as $post)--}}
{{--                <div class="post-preview">--}}
{{--                    <a href="{{route('post',$post->slug)}}">--}}
{{--                        <h2 class="post-title">--}}
{{--                           {{$post->title}}--}}
{{--                        </h2>--}}
{{--                        <h3 class="post-subtitle">--}}
{{--                          {{$post->subtitle}}--}}
{{--                        </h3>--}}
{{--                    </a>--}}
{{--                    <p class="post-meta">Posted by--}}
{{--                        <a href="#">Start Bootstrap</a>--}}
{{--                      {{$post->created_at->diffForHumans()}}--}}
{{--                    <a href="">--}}
{{--                        <small>0</small>--}}
{{--                        <i class="fas fa-thumbs-up"></i></a>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                @endforeach--}}
                <hr>

                <!-- Pager -->
                <div class="clearfix">
                    {{$posts->links()}}

                </div>
            </div>
        </div>
    </div>

    <hr>

@endsection

@section('footer')

    <script src="{{asset('js/app.js')}}"></script>

@endsection
