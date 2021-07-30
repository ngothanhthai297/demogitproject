@extends('backend.layouts.master')

@section('main-content')
<div class="card">
  <div class="row">
    <div class="col-md-12">
    @include('backend.layouts.notification')
    </div>
  </div>
  <h5 class="card-header">Edit ICOS</h5>
  <div class="card-body">
    <form method="post" action="{{route('icos.update',$icos->id)}}" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="title" placeholder="Enter title" value="{{$icos->title}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="description" class="col-form-label">description</label>
        <textarea class="form-control" id="description" name="description">{{$icos->description}}</textarea>
        @error('description')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="content" class="col-form-label">Content</label>
        <textarea class="form-control" id="description2" name="content">{{$icos->content}}</textarea>
        @error('content')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="inputPhoto" class="col-form-label">Photo</label>
        <div class="input-group">
          <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
              <i class="fa fa-picture-o"></i> Choose
            </a>
          </span>
          <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$icos->photo}}">
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>

        @error('photo')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Link Video <span class="text-danger">*</span></label>
        <input id="inputTitle" type="url" name="video" placeholder="Enter link" value="{{$icos->video}}" class="form-control">
        @error('video')
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
    $('#description2').summernote({
      placeholder: "Write short content.....",
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