@extends('admin/layouts/app')
@section('headSection')
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">

    <link rel="stylesheet" href="{{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">


    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

@endsection
@section('main-content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        @include('admin.layouts.pagehead')
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>
                    @can('posts.create',Auth::user())

                    <div class="text-center">
                        <a class='col-lg-offset-5 btn btn-success' href="{{route('post.create')}}"> Add New post</a>
                    </div>
                    @endcan
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>post title</th>
                                    <th>post subtitle</th>
                                    <th>post slug</th>
                                    <th>post created at</th>
                                    @can('posts.update',Auth::user())
                                    <th>Edit</th>
                                    @endcan
                                    @can('posts.delete',Auth::user())
                                    <th>Delete</th>
                                    @endcan
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$loop->index +1}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->subtitle}}</td>
                                        <td>{{$post->slug}}</td>
                                        <td>{{$post->created_at}}</td>
                                        @can('posts.update',Auth::user())
                                        <td><a href="{{route('post.edit',$post->id)}}">
                                        <i class="far fa-edit"></i></a></td>
                                        @endcan

                                        @can('posts.delete',Auth::user())
                                        <td>
                                            <form id="delete-form-{{$post->id}}"
                                                  method="post"
                                                  action="{{route('post.destroy',$post->id)}}"
                                                  style="display: none">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                            </form>
                                            <a href=""  onclick="if(confirm('ARE YOU SURE ,YOU WANT TO DELETE THIS?'))
                                               {
                                                event.preventDefault();
                                            document.getElementById('delete-form-{{$post->id}}').submit();
                                            }else
                                                {
                                                event.preventDefault();
                                                }" > <i class="fas fa-trash"></i></a>
                                        </td>
                                        @endcan
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>post title</th>
                                    <th>post subtitle</th>
                                    <th>post slug</th>
                                    <th>post created at</th>
                                    @can('posts.update',Auth::user())
                                        <th>Edit</th>
                                    @endcan
                                    @can('posts.delete',Auth::user())
                                        <th>Delete</th>
                                    @endcan
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
