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
                            <h3 class="card-title"> EditRoles</h3>
                        </div>
                        @include('includes/messages')
                        <form role="form" action="{{route('role.update',$role->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Role Title</label>
                                    <input type="text" value="{{$role->name}}"   class="form-control" id="name" name="name" placeholder="role Title">
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="name">Posts Permissions</label>
                                        @foreach ($permissions as $permission)
                                            @if ($permission->for == 'post')
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}"
                                                         @foreach($role->permissions as $role_permit)
                                                             @if($role_permit->id== $permission->id)
                                                                 checked
                                                                  @endif
                                                             @endforeach
                                                        >{{ $permission->name }}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="name">User Permissions</label>
                                        @foreach ($permissions as $permission)
                                            @if ($permission->for == 'user')
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}"
                                                                  @foreach($role->permissions as $role_permit)
                                                                  @if($role_permit->id== $permission->id)
                                                                  checked
                                                            @endif
                                                            @endforeach
                                                        >{{ $permission->name }}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">User Permissions</label>
                                        @foreach ($permissions as $permission)
                                            @if ($permission->for == 'other')
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}"
                                                                  @foreach($role->permissions as $role_permit)
                                                                  @if($role_permit->id== $permission->id)
                                                                  checked
                                                            @endif
                                                            @endforeach
                                                        >{{ $permission->name }}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="button"  href="{{route('role.index')}}" class="btn btn-warning">Back</a>
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
