@extends('backend.layouts.admin_layout')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Vehicle Makes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Makes</li>
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
              <h3 class="card-title">Vehicle Makes</h3>
              <a href="{{ url('auto/add-edit-make') }}" style="max-width:150px; float:right;
              display:inline-block;" class="btn btn-block btn-success">Add Make</a>
            </div>
            <div class="card-body">

                @include('backend.layouts.flash_message')

                <table id="vehicle_makes" class="table table-striped table-bordered table-responsive_">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Make Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @if(!empty($makes))
                    @foreach($makes as $make)
                        <tr>
                            <td>{{ $make->id }}</td>
                            <td>{{ $make->name }}</td>
                            <td>
                                @if($access_level > 1)
                                  <a href="{{ url('auto/add-edit-make/'.$make->id) }}">Edit</a>
                                @endif
                                @if($access_level > 2)
                                     | <a href="javascript:void(0)" delName="{{ $make->name }} Make" delID="{{ $make->id }}" feedback=0 delete_route="delete/make/id" class="btn btn-danger btn-sm confirmDelete">Delete</a>
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
