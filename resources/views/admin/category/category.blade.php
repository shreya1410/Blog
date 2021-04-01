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
                        <form role="form" action="{{route('category.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Category Title</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Category Title">
                                </div>



                                <div class="form-group">
                                    <label for="slug">Category Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug ">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="button"  href="{{route('category.index')}}" class="btn btn-warning">Back</a>
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
