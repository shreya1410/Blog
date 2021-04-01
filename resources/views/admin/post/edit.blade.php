@extends('admin/layouts/app')

@section('headSection')
<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
@endsection

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Text Editors
                <small>Advanced form element</small>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <!-- /.box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Titles</h3>
                        </div>

                        @include('includes/messages')
                        <form role="form" action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                                    value="{{$post->title}}">
                                </div>

                                <div class="form-group">
                                    <label for="subtitle">Post Sub Title</label>
                                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sub Title"
                                           value="{{$post->subtitle}}">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Post Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                                           value="{{$post->slug}}">
                                </div>

                                <div class="form-group">
                                    <label for="image">File input</label>
                                    <input type="file"  name="image" id="image">
                                </div>


                                <div class="form-check">
                                    <label>
                                    <input type="checkbox" name="status" value="1"
                                    @if($post->status == 1)
                                    {{'checked'}} @endif > Publish
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>Select TAGS</label>
                                    <select class="select2" name="tags[]" multiple="multiple" data-placeholder="Select a Tags" style="width: 100%;">
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id}}"
                                                    @foreach($post->tags as $postTag)
                                                        @if($postTag->id == $tag->id)
                                                            selected
                                                    @endif
                                                @endforeach
                                            >{{$tag->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select class="select2" name="categories[]" multiple="multiple" data-placeholder="Select a Category" style="width: 100%;">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"
                                                    @foreach($post->categories as $postCategory)
                                                    @if($postCategory->id == $category->id)
                                                    selected
                                                @endif
                                                @endforeach
                                            >{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>






                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Write Post Body here

                                    </h3>
                                    <!-- tools box -->

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                    <textarea class="textarea" placeholder="Place some text here" name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                        {{$post->body}}
                                    </textarea>

                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="button"  href="{{route('post.index')}}" class="btn btn-warning">Back</a>
                            </div>
                        </form>
                    </div>


                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('footerSection')
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $(document).ready(function (){
            $(".select2").select2();
        });
    </script>
@endsection
