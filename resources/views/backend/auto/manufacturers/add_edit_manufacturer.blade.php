@extends('backend.layouts.admin_layout')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vehicle Manufacturer</h1>
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
                $manufacturer_id = (isset($details->id)) ? $details->id : false;
                $submit = ($manufacturer_id) ? 'Update Manufacturer' : 'Add Manufacturer' ;
              ?>
            <form action="{{ url('auto/add-edit-form-table/manufacturer/'.$manufacturer_id.'/?success_route=auto/manufacturers&vdata[countries]=model_country') }}" method="post" id="manufacturer_form"> @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="group_name">Group Name</label>
                      <input type="text" class="form-control" id="group_name" name="group_name" value="@if(isset($details->group_name)){{ $details->group_name }} @else {{ old('group_name') }}@endif" placeholder="Enter group name" required>
                      <input type="hidden" class="form-control" name="unique_column" value="group_name" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="country">Country</label>
                      <select name="country" class="select2" required>
                        <option value="">Select</option>
                        @if(!empty($dynamic_values) && array(in_array('countries',$dynamic_values)))
                          @foreach($dynamic_values['countries'] as $value)
                              <option value="{{ $value->country_name }}" class="form-control" @if(isset($details) && $details->country == $value->country_name) selected @endif>{{ $value->country_name }}</option>
                          @endforeach
                        @endif
                      </select>
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
