@extends('backend.layouts.master')

@section('main-content')
<div class="card">
  <div class="row">
    <div class="col-md-12">
    
    </div>
  </div>
  <h5 class="card-header">Edit Solution</h5>
  <div class="card-body">
    <form method="post" action="{{route('solution.update',$solutions->id)}}">
      @csrf
      @method('PATCH')
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="title" placeholder="Enter title" value="{{$solutions->title}}" class="form-control">
        @error('our_name')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="description" class="col-form-label">Description</label>
        <textarea class="form-control" id="description1" name="description">{{$solutions->description}}</textarea>
        @error('description')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

     
      <div class="form-group mb-3">
        <button class="btn btn-success" type="submit">Update</button>
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