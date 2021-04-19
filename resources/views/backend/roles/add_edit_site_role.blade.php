@extends('backend.layouts.admin_layout')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Site Role</h1>
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
                $releID = (isset($roleDetails->id)) ? $roleDetails->id : false;
                $submit = ($releID) ? 'Update Site Role' : 'Add Site Role' ;
              ?>
            <form action="{{ url('/add-edit-site-role/'.$releID) }}" method="post" id="site_role_form"> @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="title">Role Title</label>
                      <input type="text" class="form-control" id="title" name="title" value="@if(isset($roleDetails->title)){{ $roleDetails->title }} @else {{ old('title') }}@endif" placeholder="Enter Role title" required>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="title">Feature Access</label>
                    <select class="form-control select2" id="access_level" name="access_level" style="width: 100%;">
                      <option value="">Select</option>
                      @foreach($access_levels as $acceslevel)                  
                        <option value="{{ $acceslevel->id }}" @if($roleDetails->access_level == $acceslevel->id) selected="selected" @endif>{{ $acceslevel->access_title }}</option>
                      @endforeach

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
