
<div class="card card-secondary">
  <div class="card-header">
    <h3 id="feature-access-title" class="card-title">PICK THE FEATURES TO BE ACCESSED @if(isset($roleinfo)) BY THIS {{ strtoupper($roleinfo->title) }} @endif</h3>
  </div>
  <div class="card-body">
      <div class="row">
        @foreach($features as $feature)
          <div class="col-sm-6">
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" name="feature_id[{{ $feature->feature_name }}]" id="featureCheckbox{{ $feature->id }}" value="{{ $feature->id }}" @if(isset($feature_id_list) && in_array($feature->id, $feature_id_list)) checked="" @endif @if((isset($feature_id_list) && in_array($feature->id, $feature_id_list)) && (isset($roleinfo) && $roleinfo->id == 1)) disabled="" @endif>
                  <label for="featureCheckbox{{ $feature->id }}" class="custom-control-label">{{ $feature->feature_name }}</label>
              </div>
            </div>

          </div>
        @endforeach
      </div>
  </div>
</div>