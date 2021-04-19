@extends('backend.layouts.admin_layout')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Manufacturers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Manufacturers</li>
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
              <h3 class="card-title">Vehicle Manufacturers</h3>
              <?php #$view_data = array('title'=>'add','details'=>'manufacturer','countries'=>'manufacturer'); ?>
              <a href="{{ url('auto/add-edit-form-table/manufacturer/?route_v=backend.auto.manufacturers.add_edit_&vdata[countries]=model_country') }}" style="max-width:150px; float:right;
              display:inline-block;" class="btn btn-block btn-success">Add Manufacturer</a>
            </div>
            <div class="card-body">
                @include('backend.layouts.flash_message')
                <table id="manufacturers" class="table table-striped table-bordered table-responsive_">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Manufacturer/Group Name</th>
                        <th>Country</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @if(!empty($manufacturers))
                    @foreach($manufacturers as $manufacturer)
                        <tr>
                            <td>{{ $manufacturer->id }}</td>
                            <td>{{ $manufacturer->group_name }}</td>
                            <td>{{ $manufacturer->country }}</td>
                            <td>
                                @if($access_level > 1)
                                  <a href="{{ url('auto/add-edit-form-table/manufacturer/'.$manufacturer->id.'?route_v=backend.auto.manufacturers.add_edit_&vdata[countries]=model_country') }}">Edit</a>
                                @endif
                                @if($access_level > 2)
                                     | <a href="javascript:void(0)" delName="{{ $manufacturer->group_name }} Manufacturer" delID="{{ $manufacturer->id }}" feedback=0 delete_route="delete/manufacturer/id" class="btn btn-danger btn-sm confirmDelete">Delete</a>
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
