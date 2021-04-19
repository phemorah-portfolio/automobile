@extends('backend.layouts.admin_layout')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee</li>
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
              <h3 class="card-title">Employees</h3>
              <a href="{{ url('add-edit-employee') }}" style="max-width:150px; float:right;
              display:inline-block;" class="btn btn-block btn-success">Add Employee</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if(Session::has('flash_message_error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{!! session('flash_message_error') !!}</strong>
                    </div>
                @endif
                @if(Session::has('flash_message_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{!! session('flash_message_success') !!}</strong>
                    </div>
                @endif
                <table id="employees" class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @if(count($employees) > 0)
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->fname }}</td>
                            <td>{{ $employee->lname }}</td>
                            <td>{{ $employee->department }}</td>
                            <td>{{ $employee->position }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->gender }}</td>
                            <td>{{ $employee->dob }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->address }}</td>
                            <td><img src=""></td>
                            <td>
                                @if($employees->access_level > 1)
                                  <a href="{{ url('add-edit-employee/'.$employee->id) }}">Edit</a>
                                @endif
                                @if($employees->access_level > 2)
                                    <a href="javascript:void(0)" delName="{{ $product->name }} Product" delID="{{ $product->id }}" feedback=0 delete_route="vendor/delete-product" class="btn btn-danger btn-sm confirmDelete">Delete</a>
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
