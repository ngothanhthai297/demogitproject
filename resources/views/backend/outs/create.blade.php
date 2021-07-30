@extends('backend.layouts.master')

@section('main-content')
<div class="card">
  <div class="row">
    <div class="col-md-12">
      <!-- Messega -->
    </div>
  </div>
  <h5 class="card-header">Add Our</h5>
  <div class="card-body">
    <form method="post" action="{{route('out.store')}}">
      {{csrf_field()}}
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Name <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="our_name" placeholder="Enter title" value="{{old('our_name')}}" class="form-control">
        @error('our_name')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="summary" class="col-form-label">Description</label>
        <textarea class="form-control" id="description1" name="our_description">{{old('our_description')}}</textarea>
        @error('our_description')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

    
    
     
      <div class="form-group mb-3">
        <button type="reset" class="btn btn-warning">Reset</button>
        <button class="btn btn-success" type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
<script src="{{asset('/vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
  $(document).ready(function() {
    $('#description').summernote({
      placeholder: "Write short description.....",
      tabsize: 2,
      height: 120
    });
  });
  var route_prefix = "{{url('/filemanager')}}";
  $('#lfm').filemanager('image', {
    prefix: route_prefix
  });
</script>
@endpush