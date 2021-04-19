@extends('backend.layouts.admin_layout')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employee</h1>
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
                $empID = (isset($employeeDetails->id)) ? $employeeDetails->id : false;
              ?>
            <form action="{{ url('/add-edit-employee/'.$empID) }}" method="post" id="employee_form" enctype="multipart/form-data"> @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="fname">First Name</label>
                      <input type="text" class="form-control" id="fname" name="fname" value="@if(isset($employeeDetails->fname)){{ $employeeDetails->fname }}@elseif(!empty(old('fname'))) {{ old('fname') }} @endif" placeholder="Enter first name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="lname">Last Name</label>
                      <input type="text" class="form-control" id="lname" name="lname" value="@if(isset($employeeDetails->lname)){{ $employeeDetails->lname }}@elseif(!empty(old('lname'))) {{ old('lname') }} @endif" placeholder="Enter last name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" value="@if(isset($employeeDetails->email)){{ $employeeDetails->email }}@elseif(!empty(old('email'))) {{ old('email') }} @endif" placeholder="Employee's email">
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                  <label>Date of Birth</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" name="dob" value="@if(isset($employeeDetails->dob)){{ $employeeDetails->dob }}@elseif(!empty(old('dob'))) {{ old('dob') }} @endif" placeholder="Employee Date of Birth" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                  </div>
                  <!-- /.input group -->
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control select2" id="gender" name="gender" style="width: 100%;">
                      <option selected="selected" value="">Select</option>
                          <option value="male" @if((isset($employeeDetails->gender) && $employeeDetails->gender == 'male') || old('gender') == 'male') selected="selected" @endif>Male</option>
                          <option value="female" @if((isset($employeeDetails->gender) && $employeeDetails->gender == 'female') || old('gender') == 'female') selected="selected" @endif>Female</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="phone">Telephone</label>
                      <input type="text" class="form-control" id="phone" name="phone" value="@if(isset($employeeDetails->phone)){{ $employeeDetails->phone }}@elseif(!empty(old('phone'))) {{ old('phone') }} @endif" placeholder="Phone number">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Department</label>
                      <select class="form-control select2" id="department" name="department" style="width: 100%;">
                        <option selected="selected" value="">Select</option>
                          @foreach($departments as $department)
                            <option value="{{ $department->id }}" @if((isset($employeeDetails->department) && $employeeDetails->department == $department->id) || old('department') == $department->id) selected="selected" @endif>{{ $department->name }}</option>
                          @endforeach
                      </select>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Position</label>
                      <select class="form-control select2" id="position" name="position" style="width: 100%;">
                        <option selected="selected" value="">Select</option>
                          @foreach($positions as $position)
                            <option value="{{ $position->id }}" @if((isset($employeeDetails->position) && $employeeDetails->position == $position->id) || old('position') == $position->id) selected="selected" @endif>{{ $position->title }}</option>
                          @endforeach
                      </select>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="image">Employee Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        @if(isset($employeeDetails->image))
                          <input type="hidden" name="current_image" value="{{ $employeeDetails->image }}">
                        @endif
                        <input type="file" name="image" id="image" class="custom-file-input" _required>
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="address">Employee's Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Category description">@if((isset($employeeDetails->address)) ){{ $employeeDetails->address }}@elseif(!empty(old('address'))) {{ old('address') }} @endif</textarea>
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
