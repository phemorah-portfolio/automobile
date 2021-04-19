@extends('backend.layouts.admin_layout')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Auto/Vehicle</h1>
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
                $vehicle_id = (isset($details->id)) ? $details->id : false;
                $submit = ($vehicle_id) ? 'Update Vehicle' : 'Add Vehicle' ;
              ?>
            <form action="{{ url('auto/add-edit-form-table/auto/'.$vehicle_id.'/?success_route=auto/vehicles') }}" method="post" id="model_form"> @csrf
              <!-- <input type="hidden" class="form-control" name="unique_column" value="make_id" required> -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Select Model</label>
                      <select class="form-control select2" id="model_id" name="model_id" style="width: 100%;">
                          <option selected="selected" value="">Select</option>
                          @if(!empty($dynamic_values) && array(in_array('models',$dynamic_values)))
                            @foreach($dynamic_values['models'] as $model)
                              <option value="{{ $model->id }}" @if(isset($details->model_id) && $model->id == $details->model_id) selected="selected" @endif>{{ $model->model_name }}</option>
                            @endforeach
                          @endif
                      </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Select Make</label>
                      <select class="form-control select2" id="make_id" name="make_id" style="width: 100%;">
                          <option selected="selected" value="">Select</option>
                          @if(!empty($dynamic_values) && array(in_array('makes',$dynamic_values)))
                            @foreach($dynamic_values['makes'] as $make)
                              <option value="{{ $make->id }}" @if(isset($details->make_id) && $make->id == $details->make_id) selected="selected" @endif>{{ $make->name }}</option>
                            @endforeach
                          @endif
                      </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Select Vehicle Body</label>
                      <select class="form-control select2" id="body_id" name="body_id" style="width: 100%;">
                          <option selected="selected" value="">Select</option>
                          @if(!empty($dynamic_values) && array(in_array('bodies',$dynamic_values)))
                            @foreach($dynamic_values['bodies'] as $body)
                              <option value="{{ $body->id }}" @if(isset($details->body_id) && $body->id == $details->body_id) selected="selected" @endif>{{ $body->name }}</option>
                            @endforeach
                          @endif
                      </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Select Manufacturer</label>
                      <select class="form-control select2" id="manufacturer_id" name="manufacturer_id" style="width: 100%;">
                          <option selected="selected" value="">Select</option>
                          @if(!empty($dynamic_values) && array(in_array('manufacturers',$dynamic_values)))
                            @foreach($dynamic_values['manufacturers'] as $manufacturer)
                              <option value="{{ $manufacturer->id }}" @if(isset($details->manufacturer_id) && $manufacturer->id == $details->manufacturer_id) selected="selected" @endif>{{ $manufacturer->group_name.' - '.$manufacturer->country }}</option>
                            @endforeach
                          @endif
                      </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="year">Vehicle Year</label>
                      <input type="number" class="form-control" id="year" name="year" value="@if(isset($details->year)){{ $details->year }} @elseif(old('year')) {{ old('year') }} @endif" placeholder="Enter vehicle year">
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="vin">VIN</label>
                      <input type="text" class="form-control" id="vin" name="vin" value="@if(isset($details->vin)){{ $details->vin }} @elseif(old('vin')) {{ old('vin') }} @endif" placeholder="Enter vehicle identification number">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="interior_color">Interior Color</label>
                      <input type="text" class="form-control" id="interior_color" name="interior_color" value="@if(isset($details->interior_color)){{ $details->interior_color }} @elseif(old('interior_color')) {{ old('interior_color') }} @endif" placeholder="Interior color">
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="exterior_color">Exterior Color</label>
                      <input type="text" class="form-control" id="exterior_color" name="exterior_color" value="@if(isset($details->exterior_color)){{ $details->exterior_color }} @elseif(old('exterior_color')) {{ old('exterior_color') }} @endif" placeholder="Exterior color">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="mileage">Mileage</label>
                      <input type="number" class="form-control" id="mileage" name="mileage" value="@if(isset($details->mileage)){{ $details->mileage }} @else {{ old('mileage') }} @endif" placeholder="Enter Mileage">
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="engine">Engine</label>
                      <input type="text" class="form-control" id="engine" name="engine" value="@if(isset($details->engine)){{ $details->engine }} @elseif(old('engine')) {{ old('engine') }} @endif" placeholder="Enter engine number">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="buying_price">Buying Price</label>
                      <input type="number" class="form-control" id="buying_price" name="buying_price" value="@if(isset($details->buying_price)){{ $details->buying_price }} @else {{ old('buying_price') }} @endif" placeholder="Buying price">
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="selling_price">Selling Price</label>
                      <input type="number" class="form-control" id="selling_price" name="selling_price" value="@if(isset($details->selling_price)){{ $details->selling_price }} @else {{ old('selling_price') }} @endif" placeholder="Vehicle selling price">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="doors">Doors</label>
                      <input type="number" class="form-control" id="doors" name="doors" value="@if(isset($details->doors)){{ $details->doors }} @else {{ old('doors') }} @endif" placeholder="Number of doors">
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="seats">Seats</label>
                      <input type="number" class="form-control" id="seats" name="seats" value="@if(isset($details->seats)){{ $details->seats }} @else {{ old('seats') }} @endif" placeholder="Number of seats">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="registration_year">Registration Year</label>
                      <input type="number" class="form-control" id="registration_year" name="registration_year" value="@if(isset($details->registration_year)){{ $details->registration_year }} @else {{ old('registration_year') }} @endif" placeholder="Year registered">
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="insurance_id">Insurance ID</label>
                      <input type="number" class="form-control" id="insurance_id" name="insurance_id" value="@if(isset($details->insurance_id)){{ $details->insurance_id }} @else {{ old('insurance_id') }} @endif" placeholder="Vehicle Insurance ID">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="scancode">Scan Code</label>
                      <input type="text" class="form-control" id="scancode" name="scancode" value="@if(isset($details->scancode)){{ $details->scancode }} @elseif(old('scancode')) {{ old('scancode') }} @endif" placeholder="Enter product amount">
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="transmission">Transmition</label>
                      <input type="text" class="form-control" id="transmission" name="transmission" value="@if(isset($details->transmission)){{ $details->transmission }} @elseif(old('transmission')) {{ old('transmission') }} @endif" placeholder="Enter product discount price">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Warranty</label>
                    <textarea class="form-control" id="warranty" name="warranty" value="@if(isset($details->warranty)){{ $details->warranty }}@endif" rows="3" placeholder="Category warranty">@if(isset($details->warranty)) {{ $details->warranty }} @elseif(old('warranty')) {{ old('warranty') }} @endif</textarea>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Other Notes</label>
                    <textarea class="form-control" id="note" rows="3" name="note" value="@if(isset($details->note)){{ $details->note }}@endif" placeholder="Enter meta title here">@if(isset($details->note)){{ $details->note }} @elseif(old('note')) {{ old('note') }} @endif</textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="chasis_no">Chasis No</label>
                      <input type="number" class="form-control" id="chasis_no" name="chasis_no" value="@if(isset($details->chasis_no)){{ $details->chasis_no }} @else {{ old('chasis_no') }} @endif" placeholder="Enter Chasis No">
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="row">
                    <div class="col-12 col-sm-3">
                      <div class="form-group">
                        <label for="featured">Featured</label><br>
                        <input type="checkbox" name="featured" id="featured">
                      </div>
                    </div>
                      <div class="col-12 col-sm-3">
                        <div class="form-group">
                          <label for="status">Status</label><br>
                          <input type="checkbox" name="status" id="status">
                        </div>
                      </div>
                    </div>
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
