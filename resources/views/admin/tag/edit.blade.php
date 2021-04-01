
@extends('admin/layouts/app')
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
                        <form role="form" action="{{route('tag.update',$tag->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Tag Title</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Tag Title"
                                           value="{{$tag->name}}" >
                                </div>



                                <div class="form-group">
                                    <label for="slug">Tag Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                                           value="{{$tag->slug}}">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="button"  href="{{route('tag.index')}}" class="btn btn-warning">Back</a>
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
