@extends('backend.layouts.admin_layout')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Vehicle Models</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Models</li>
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
              <h3 class="card-title">Vehicle Models</h3>
              <a href="{{ url('auto/add-edit-form-table/vehiclemodel/?route_v=backend.auto.models.add_edit_') }}" style="max-width:150px; float:right;
              display:inline-block;" class="btn btn-block btn-success">Add Model</a>
            </div>
            <div class="card-body">
                @include('backend.layouts.flash_message')
                <table id="vehicle_models" class="table table-striped table-bordered table-responsive_">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Model Name</th>
                        <th>Description</th>
                        <th>Manufacturer</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @if(!empty($models))
                    @foreach($models as $model)
                        <tr>
                            <td>{{ $model->id }}</td>
                            <td>{{ $model->model_name }}</td>
                            <td>{{ $model->model_description }}</td>
                            <td>{{ $model->manufacturer_id }}</td>
                            <td>
                                @if($access_level > 1)
                                  <a href="{{ url('auto/add-edit-form-table/vehiclemodel/'.$model->id.'/?route_v=backend.auto.models.add_edit_') }}">Edit</a>
                                @endif
                                @if($access_level > 2)
                                     | <a href="javascript:void(0)" delName="{{ $model->model_name }} Model" delID="{{ $model->id }}" feedback=0 delete_route="delete/vehiclemodel/id" class="btn btn-danger btn-sm confirmDelete">Delete</a>
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
