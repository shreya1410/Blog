@extends('admin/layouts/app')

@section('headSection')
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-responsive/js/dataTables.responsive.min.js") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}">

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
                            <li class="breadcrumb-item active">Blank Page</li>
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
                    <h3 class="card-title">Roles</h3>
                    <div class="text-center">
                    <a class='col-lg-offset-5 btn btn-success' href="{{route('role.create')}}"> Add New Role</a>
                    </div>
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
                                    <th>Role Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($roles as $role)
                                <tr>
                                    <td>{{$loop->index +1}}</td>
                                    <td>{{$role->name}}</td>
                                    <td><a href="{{route('role.edit',$role->id)}}">
                                    <i class="far fa-edit"></i></a></td>


                                    <td>
                                        <form id="delete-form-{{$role->id}}"
                                              method="post"
                                              action="{{route('role.destroy',$role->id)}}"
                                              style="display: none">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a href=""  onclick="if(confirm('ARE YOU SURE ,YOU WANT TO DELETE THIS?'))
                                            {
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{$role->id}}').submit();
                                            }else
                                            {
                                            event.preventDefault();
                                            }" ><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Role Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
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
