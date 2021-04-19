@extends('backend.layouts.admin_layout')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Features</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Special Features</li>
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
              <h3 class="card-title">Special Features</h3>
              <a href="{{ url('add-edit-feature') }}" style="max-width:150px; float:right;
              display:inline-block;" class="btn btn-block btn-success">Add Feature</a>
              <a href="{{ url('add-remove-feature-access/'.$userInfo->role) }}" style="max-width:250px; float:right;
              display:inline-block;" class="btn btn-block btn-danger">Add/Remove Feature Access</a>
            </div>
            <div class="card-body">

                @include('backend.layouts.flash_message')

                <table id="features_access" class="table table-striped table-bordered table-responsive_">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Feature Name</th>
                        <th>Feature Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @if(!empty($userInfo->roleaccess))
                    @foreach($userInfo->roleaccess as $role_access)
                        <tr>
                            <td>{{ $role_access->feature->id }}</td>
                            <td>{{ $role_access->feature->feature_name }}</td>
                            <td>{{ $role_access->feature->feature_description }}</td>
                            <td>
                                @if($role_access->access_level > 1)
                                  <a href="{{ url('add-edit-feature/'.$role_access->feature_id) }}">Edit</a>
                                @endif
                                @if($role_access->access_level > 2)
                                     | <a href="javascript:void(0)" delName="{{ $role_access->feature->feature_name }} Feature" delID="{{ $role_access->feature_id }}" feedback=0 delete_route="delete-feature" class="btn btn-danger btn-sm confirmDelete">Delete</a>
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
