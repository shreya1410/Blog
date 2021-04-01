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
                        <form role="form" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                </div>

                                <div class="form-group">
                                    <label for="subtitle">Post Sub Title</label>
                                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sub Title">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Post Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                                </div>

                                <div class="form-group">
                                    <label for="image">File input</label>
                                    <input type="file"  name="image" id="image">
                                </div>


                                <div class="form-check">
                                    <input type="checkbox" name="status"  value="1" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Publish</label>
                                </div>


                                <div class="form-group">
                                    <label>Select TAGS</label>
                                    <select class="select2"  name="tags[]" multiple="multiple" data-placeholder="Select a Tags" style="width: 100%;">
                                       @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select class="select2 select2-hidden-accessible"  name="categories[]"  multiple="" data-placeholder="Select a category" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>




                                </div>


                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Write Post Body here</h3>
                                    <!-- tools box -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                        <textarea class="textarea" placeholder="Place some text here" name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
