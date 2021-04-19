@extends('backend.layouts.admin_layout')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Positions</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Positions</li>
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
              <h3 class="card-title">Positions</h3>
              <a href="{{ url('add-edit-position') }}" style="max-width:150px; float:right;
              display:inline-block;" class="btn btn-block btn-success">Add Position</a>
            </div>
            <div class="card-body">

                @include('backend.layouts.flash_message')

                <table id="positions" class="table table-striped table-bordered table-responsive_">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Position Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @if(!empty($positions))
                    @foreach($positions as $position)
                        <tr>
                            <td>{{ $position->id }}</td>
                            <td>{{ $position->title }}</td>
                            <td>{{ $position->description }}</td>
                            <td>
                                @if($positions->access_level > 1)
                                  <a href="{{ url('add-edit-position/'.$position->id) }}">Edit</a>
                                @endif
                                @if($positions->access_level > 2)
                                     | <a href="javascript:void(0)" delName="{{ $position->title }} Position" delID="{{ $position->id }}" feedback=0 delete_route="delete-position" class="btn btn-danger btn-sm confirmDelete">Delete</a>
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
