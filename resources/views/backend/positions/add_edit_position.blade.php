@extends('backend.layouts.admin_layout')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Positions</h1>
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
                $position_id = (isset($positionDetails->id)) ? $positionDetails->id : false;
                $submit = ($position_id) ? 'Update Position' : 'Add Position' ;
              ?>
            <form action="{{ url('/add-edit-position/'.$position_id) }}" method="post" id="position_form"> @csrf
              <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Position Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="@if(isset($positionDetails->title)){{ $positionDetails->title }} @else {{ old('title') }}@endif" placeholder="Enter position title" required>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" id="description" name="description" value="@if(isset($positionDetails->description)){{ $positionDetails->description }}@else {{ old('description') }}@endif" rows="3" placeholder="Enter feature description">@if(isset($positionDetails->description)){{ $positionDetails->description }}@endif</textarea>
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
