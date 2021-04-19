@extends('backend.layouts.admin_layout')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vehicle Body</h1>
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
                $body_id = (isset($details->id)) ? $details->id : false;
                $submit = ($body_id) ? 'Update Body' : 'Add Body' ;
              ?>
            <form action="{{ url('auto/add-edit-form-table/body/'.$body_id.'/?success_route=auto/bodies') }}" method="post" id="body_form"> @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="name">Vehicle Body Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="@if(isset($details->name)){{ $details->name }} @else {{ old('name') }}@endif" placeholder="Enter auto body name" required>
                      <input type="hidden" class="form-control" name="unique_column" value="name" required>
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
