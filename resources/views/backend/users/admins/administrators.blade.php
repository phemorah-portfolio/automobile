@extends('backend.layouts.admin_layout')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Administrators</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Administrators</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Administrators</h3>
              <a href="{{ url('add-edit-admin') }}" style="max-width:150px; float:right;
              display:inline-block;" class="btn btn-block btn-success">Add Admin</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                @include('backend.layouts.flash_message')

                <table id="administrators" class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @if(count($administrators) > 0)
                    @foreach($administrators as $admin)
                        <tr>
                            <td>{{ $admin->id }}</td>
                            <td><img src="{{ url('images/admin_images/admin_images/'.$admin->employeeinfo->image) }}" width="80px"></td>
                            <td>{{ $admin->employeeinfo->fname.' '.$admin->employeeinfo->lname }}</td>
                            <td>{{ $admin->employeeinfo->department->name }}</td>
                            <td>{{ $admin->employeeinfo->email }}</td>
                            <td>{{ $admin->role->title }}</td>
                            <td>
                              @if($access_level > 1)
                                <a href="{{ url('add-edit-admin/'.$admin->id) }}">Edit Role</a>
                              @endif
                              @if($access_level > 2)
                                  <a href="javascript:void(0)" delName="{{ $admin->employeeinfo->fname }} from Admin" delID="{{ $admin->id }}" feedback=0 delete_route="delete-admin" class="btn btn-danger btn-sm confirmDelete" disabled="disabled">Delete</a>
                              @endif
                            </td>
                        </tr>
                    @endforeach
                  @else
                    <center>Record Empty!</center>
                  @endif
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


</div>
@endsection
