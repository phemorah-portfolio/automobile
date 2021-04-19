@extends('backend.layouts.admin_layout')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Departments</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Departments</li>
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
              <h3 class="card-title">Departments</h3>
              <a href="{{ url('add-edit-department') }}" style="max-width:150px; float:right;
              display:inline-block;" class="btn btn-block btn-success">Add Department</a>
            </div>
            <div class="card-body">

                @include('backend.layouts.flash_message')

                <table id="departments" class="table table-striped table-bordered table-responsive_">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Department Name</th>
                        <th>Department Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @if(!empty($departments))
                    @foreach($departments as $department)
                        <tr>
                            <td>{{ $department->id }}</td>
                            <td>{{ $department->name }}</td>
                            <td>{{ $department->description }}</td>
                            <td>
                                @if($departments->access_level > 1)
                                  <a href="{{ url('add-edit-department/'.$department->id) }}">Edit</a>
                                @endif
                                @if($departments->access_level > 2)
                                     | <a href="javascript:void(0)" delName="{{ $department->name }} Feature" delID="{{ $department->id }}" feedback=0 delete_route="delete-department" class="btn btn-danger btn-sm confirmDelete">Delete</a>
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
