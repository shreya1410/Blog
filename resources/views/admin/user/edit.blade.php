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
                            <h3 class="card-title">Update Admin</h3>
                        </div>
                        @include('includes/messages')
                        <form role="form" action="{{route('user.update',$user->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">User Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="User Name" value="@if (old('name'))  {{old('name')}} @else{{$user->name}} @endif">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="@if (old('email'))  {{old('email')}} @else{{$user->email}} @endif">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="@if (old('phone'))  {{old('phone')}} @else{{$user->phone}} @endif">
                                </div>



                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <div class="checkbox">
                                        <label>   <input type="checkbox" name="status"
                                                         @if (old('status')==1 || $user->status ==1)
                                                         checked
                                                         @endif
                                                         value="1">Status</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label> Assign Role</label>
                                    <div class="row">
                                        @foreach($roles as $role)
                                            <div class="col-lg-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="role[]" value="{{$role->id}}"
                                                               @foreach($user->roles as $user_roles)
                                                                   @if($user_roles->id == $role->id)
                                                                       checked
                                                               @endif
                                                            @endforeach
                                                        >{{$role->name}}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>



                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a type="button"  href="{{route('user.index')}}" class="btn btn-warning">Back</a>
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
