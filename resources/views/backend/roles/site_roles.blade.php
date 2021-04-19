@extends('backend.layouts.admin_layout')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Site Roles</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Site Roles</li>
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
              <h3 class="card-title">Site Roles</h3>
              <a href="{{ url('add-edit-site-role') }}" style="max-width:150px; float:right;
              display:inline-block;" class="btn btn-block btn-success">Add New Role</a>
            </div>
            <div class="card-body">

                @include('backend.layouts.flash_message')

                <table id="site_roles" class="table table-striped table-bordered table-responsive_">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role Title</th>
                        <th>Access Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @if(!empty($roles))
                    @foreach($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->title }}</td>
                            <td>{{ $role->accesslevel->access_title }}</td>
                            <td>
                                @if($roles->access_level > 1)
                                  <a href="{{ url('add-edit-site-role/'.$role->id) }}">Edit</a>
                                @endif
                                @if($roles->access_level > 2)
                                     | <a href="javascript:void(0)" delName="{{ $role->title }} Feature" delID="{{ $role->id }}" feedback=0 delete_route="delete-site-role" class="btn btn-danger btn-sm confirmDelete">Delete</a>
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
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


</div>
@endsection
