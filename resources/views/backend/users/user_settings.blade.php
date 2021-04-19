@extends('backend.layouts.admin_layout')
@section('content')
<style>
  #current_pswd_check {
    font-size:10px;
  }
</style>
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Password</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Password</h3>
              </div> <br>
              <!-- /.card-header -->
              @if(Session::has('flash_message_error'))
                  <div class="alert alert-danger alert-block">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      <strong>{!! session('flash_message_error') !!}</strong>
                  </div>
              @endif
              @if(Session::has('flash_message_success'))
                  <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      <strong>{!! session('flash_message_success') !!}</strong>
                  </div>
              @endif

              @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <!-- form start -->
              <form role="form" method="post" action="{{ url('/update-pswd') }}" name="updatePasswordForm" id="updatePasswordForm">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Email</label>
                    <input class="form-control" name="email" value="{{ $userDetails->employeeinfo->email }}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Type</label>
                    <input class="form-control" name="type" value="{{ Auth::User()->user_role }}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Current Password</label>
                    <div id="current_pswd_check">hide</div>
                    <input type="password" class="form-control" id="current_pswd" name="current_pswd" placeholder="Enter Password" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
                    <input type="password" class="form-control" id="new_pswd" name="new_pswd" placeholder="Enter New Password" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirm New Password</label>
                    <input type="password" class="form-control" id="confirm_pswd" name="confirm_pswd" class="confirm_pswd" placeholder="Confirm New Password" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
