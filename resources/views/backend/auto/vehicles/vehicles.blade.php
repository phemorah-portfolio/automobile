@extends('backend.layouts.admin_layout')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Vehicles</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Managements</li>
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
              <h3 class="card-title">Vehicle Managements</h3>
              <a href="{{ url('auto/add-edit-form-table/auto/?route_v=backend.auto.vehicles.add_edit_&vdata[models]=model_vehiclemodel&vdata[makes]=model_make&vdata[bodies]=model_body&vdata[manufacturers]=model_manufacturer') }}" style="max-width:150px; float:right;
              display:inline-block;" class="btn btn-block btn-success">Add Vehicle</a>
            </div>
            <div class="card-body">
                @include('backend.layouts.flash_message')
                <table id="vehicles" class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Model</th>
                        <th>Make</th>
                        <th>Body</th>
                        <th>Year</th>
                        <th>VIN</th>
                        <th>Mileage</th>
                        <th>Interior Color</th>
                        <th>Exterior Color</th>
                        <th>Cost Price</th>
                        <th>Selling Price</th>
                        <th>Scan Code</th>
                        <th>Engine</th>
                        <th>Transmission</th>
                        <th>Warranty</th>
                        <th>Year Registered</th>
                        <th>Insurance ID</th>
                        <th>Doors</th>
                        <th>Seats</th>
                        <th>Chasis No</th>
                        <th>Featured</th>
                        <th>Note</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @if(!empty($vehicles))
                    @foreach($vehicles as $vehicle)
                        <tr>
                            <td>{{ $vehicle->id }}</td>
                            <td>{{ $vehicle->model_id }}</td>
                            <td>{{ $vehicle->make_id }}</td>
                            <td>{{ $vehicle->trim }}</td>
                            <td>{{ $vehicle->year }}</td>
                            <td>{{ $vehicle->mileage }}</td>
                            <td>{{ $vehicle->interior_color }}</td>
                            <td>{{ $vehicle->exterior_color }}</td>
                            <td>{{ $vehicle->cost_price }}</td>
                            <td>{{ $vehicle->selling_price }}</td>
                            <td>{{ $vehicle->scancode }}</td>
                            <td>{{ $vehicle->engine }}</td>
                            <td>{{ $vehicle->transmission }}</td>
                            <td>{{ $vehicle->warranty }}</td>
                            <td>{{ $vehicle->registration_year }}</td>
                            <td>{{ $vehicle->insurance_id }}</td>
                            <td>{{ $vehicle->doors }}</td>
                            <td>{{ $vehicle->seats }}</td>
                            <td>{{ $vehicle->chasis_no }}</td>
                            <td>{{ $vehicle->featured }}</td>
                            <td>{{ $vehicle->note }}</td>
                            <td>{{ $vehicle->status }}</td>
                            <td>
                                @if($access_level > 1)
                                  <a href="{{ url('auto/add-edit-form-table/vehicle/'.$vehicle->id.'?route_v=backend.auto.vehicles.add_edit_&vdata[countries]=model_country') }}">Edit</a>
                                @endif
                                @if($access_level > 2)
                                     | <a href="javascript:void(0)" delName="{{ $vehicle->group_name }} Manufacturer" delID="{{ $vehicle->id }}" feedback=0 delete_route="delete/vehicle/id" class="btn btn-danger btn-sm confirmDelete">Delete</a>
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
