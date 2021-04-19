@extends('backend.layouts.admin_layout')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Special Features Access</h1>
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
            <h3 class="card-title">{{ $title }} Access</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <div class="card-body">

            @include('backend.layouts.flash_message')

            <?php $featureID = (isset($featureDetails->id)) ? $featureDetails->id : false; ?>
            <form action="{{ url('/add-remove-feature-access/'.$featureID) }}" method="post" id="feature_form"> @csrf
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label>Select Role</label>
                      <select class="form-control select2" id="dropdown_role_id" name="role_id" style="width: 100%;" required>
                        <option selected="selected" value="">Select</option>
                        @foreach($roles as $role)
                          <option value="{{ $role->id }}"  @if(isset($featureDetails->role_id) && $role->id == $featureDetails->role_id) selected="selected" @endif>{{ $role->title }}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="col-md-6">
                  <div id="append-feature-access-list">
                    <!-- Feature access list -->
                    @include('backend.roles.append_feature_access_list')
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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
