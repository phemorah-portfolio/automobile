@extends('backend.layouts.admin_layout')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vehicle Model</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <div class="card-body">
            @include('backend.layouts.flash_message')
              <?php
                $model_id = (isset($details->id)) ? $details->id : false;
                $submit = ($model_id) ? 'Update Model' : 'Add Model' ;
              ?>
            <form action="{{ url('auto/add-edit-form-table/vehiclemodel/'.$model_id.'/?success_route=auto/models') }}" method="post" id="model_form"> @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="model_name">Vehicle Model Name</label>
                      <input type="text" class="form-control" id="model_name" name="model_name" value="@if(isset($details->model_name)){{ $details->model_name }} @else {{ old('model_name') }}@endif" placeholder="Enter model name" required>
                      <input type="hidden" class="form-control" name="unique_column" value="model_name" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="model_manufacturer">Model Manufacturer</label>
                      <select name="manufacturer_id" class="form-control">
                        <option value="0">Select</option>
                      </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="model_description">Model Description</label>
                      <textarea name="model_description" id="model_description" class="form-control" placeholder="Enter model descriptions" required>@if(isset($details->model_description)){{ $details->model_description }} @else {{ old('model_description') }}@endif</textarea>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{ $submit }}</button>
              </div>
            </form>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
