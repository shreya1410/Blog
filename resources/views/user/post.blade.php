@extends('user/app')

@section('bg-img',Storage::disk('local')->url($post->image))
@section('title',$post->title)
@section('sub-heading',$post->subtitle)

@section('main-content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0&appId=271757984481444&autoLogAppEvents=1" nonce="CUYRc1kP"></script>
    <article>
        <div class="container">
            <div class="row">

                <div class="col-lg-8  col-md-10 mx-auto">
                    <small>Created At  {{$post->created_at}}</small><br><br>
                    @foreach($post->categories as $category)
                    <small class="pull-right" >
                    <h3>  <a href="{{ route('category',$category->slug) }}">{{$category->name}}</a></h3>
                    </small>
                    @endforeach
                {!! htmlspecialchars_decode($post->body) !!}
                    <h3>Tag clouds</h3>
                    {{-- tag --}}
                    @foreach($post->tags as $tag)
                        <small class="pull-left" >
                           <h3><a href="{{ route('tag',$tag->slug) }}">{{$tag->name}}</a></h3>
                        </small>
                    @endforeach
                </div>
                <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="10"></div>
            </div>
        </div>
    </article>

    <hr>
@endsection
