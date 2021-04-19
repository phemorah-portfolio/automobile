@extends('backend.layouts.admin_layout')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Features</h1>
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
                $feature_id = (isset($featureDetails->id)) ? $featureDetails->id : false;
                $submit = ($feature_id) ? 'Update Feature' : 'Add Feature' ;
              ?>
            <form action="{{ url('/add-edit-feature/'.$feature_id) }}" method="post" id="feature_form"> @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="feature_name">Feature Name</label>
                      <input type="text" class="form-control" id="feature_name" name="feature_name" value="@if(isset($featureDetails->feature_name)){{ $featureDetails->feature_name }} @else {{ old('feature_name') }}@endif" placeholder="Enter feature name" required>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Feature Description</label>
                    <textarea class="form-control" id="feature_description" name="feature_description" value="@if(isset($featureDetails->feature_description)){{ $featureDetails->feature_description }}@else {{ old('feature_description') }}@endif" rows="3" placeholder="Enter feature description">@if(isset($featureDetails->feature_description)){{ $featureDetails->feature_description }}@endif</textarea>
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
