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
                            <h3 class="card-title">Permission</h3>
                        </div>
                        @include('includes/messages')
                        <form role="form" action="{{route('permission.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">permission</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="permission Title">
                                </div>

                                <div class="form-group">
                                    <label for="for">permission for</label>
                                  <select name="for" id="for" class="form-control">
                                      <option selected disabled> select permission for</option>
                                      <option value="user">User</option>
                                      <option value="post">Post</option>
                                      <option value="other">Other</option>
                                  </select>
                                </div>


                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="button"  href="{{route('permission.index')}}" class="btn btn-warning">Back</a>
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
