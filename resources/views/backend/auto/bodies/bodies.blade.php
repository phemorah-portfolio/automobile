@extends('backend.layouts.admin_layout')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Vehicle Bodies</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Bodies</li>
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
              <h3 class="card-title">Vehicle Bodies</h3>
              <a href="{{ url('auto/add-edit-form-table/body/?route_v=backend.auto.bodies.add_edit_') }}" style="max-width:150px; float:right;
              display:inline-block;" class="btn btn-block btn-success">Add Body</a>
            </div>
            <div class="card-body">

                @include('backend.layouts.flash_message')

                <table id="vehicle_bodies" class="table table-striped table-bordered table-responsive_">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Body Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @if(!empty($bodies))
                    @foreach($bodies as $body)
                        <tr>
                            <td>{{ $body->id }}</td>
                            <td>{{ $body->name }}</td>
                            <td>
                                @if($access_level > 1)
                                  <a href="{{ url('auto/add-edit-form-table/body/'.$body->id.'/?route_v=backend.auto.bodies.add_edit_') }}">Edit</a>
                                @endif
                                @if($access_level > 2)
                                     | <a href="javascript:void(0)" delName="{{ $body->name }} Body" delID="{{ $body->id }}" feedback=0 delete_route="delete/body/id" class="btn btn-danger btn-sm confirmDelete">Delete</a>
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
