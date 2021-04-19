@extends('backend.layouts.admin_layout')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrator</h1>
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

            <?php $admin_id = (isset($adminDetails->id)) ? $adminDetails->id : false; ?>
            <form action="{{ url('/add-edit-admin/'.$admin_id) }}" method="post" id="add_edit_admin_form"> @csrf
              <!-- <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" name="username" value="@if(isset($adminDetails->username)){{ $adminDetails->username }}@elseif(!empty(old('username'))) {{ old('username') }} @endif" placeholder="Enter first name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="lname">Last Name</label>
                      <input type="text" class="form-control" id="lname" name="lname" value="@if(isset($adminDetails->lname)){{ $adminDetails->lname }}@elseif(!empty(old('lname'))) {{ old('lname') }} @endif" placeholder="Enter last name">
                  </div>
                </div>
              </div> -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Employee</label>
                      <select class="form-control select2" id="employee" name="employee" style="width: 100%;" required>
                          @if(!empty($adminDetails))
                            <option value="{{ $adminDetails->employee_id }}" selected="selected">{{ $adminDetails->employeeinfo->fname.' '.$adminDetails->employeeinfo->lname }}</option>
                          @else
                            <option selected="selected" value="">Select</option>
                            @foreach($employees as $employee)
                              <option value="{{ $employee->id }}">{{ $employee->fname.' '.$employee->lname }}</option>
                            @endforeach
                          @endif
                      </select>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Admin Role</label>
                      <select class="form-control select2" id="role" name="role" style="width: 100%;" required>
                        <option selected="selected" value="">Select</option>
                          @foreach($roles as $role)
                            <option value="{{ $role->id }}" @if($adminDetails->role == $role->id) selected="selected" @endif>{{ $role->title }}</option>
                          @endforeach
                      </select>
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
