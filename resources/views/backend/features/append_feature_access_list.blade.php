<div class="row">
  @foreach($features as $feature)
    <div class="col-sm-6">
      <div class="form-group">
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" name="feature_id[]" id="featureCheckbox{{ $feature->id }}" value="{{ $feature->id }}" @if(isset($feature_id_list) && in_array($feature->id, $feature_id_list)) disabled="" @endif>
            <label for="featureCheckbox{{ $feature->id }}" class="custom-control-label">{{ $feature->feature_name }}</label>
        </div>
      </div>

    </div>
  @endforeach
</div>
