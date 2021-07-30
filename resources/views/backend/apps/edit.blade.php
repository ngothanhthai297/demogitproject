@extends('backend.layouts.master')
@section('main-content')

<div class="card">
  <h5 class="card-header">Edit App</h5>
  <div class="card-body">
    <form method="post" action="{{route('apps.update',$apps->id)}}">
      @csrf
      @method('PATCH')
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Content <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="content" placeholder="Enter content" value="{{$apps->content}}" class="form-control">
        @error('content')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="inputDesc" class="col-form-label">Description</label>
        <textarea class="form-control" id="description" name="description">{{$apps->description}}</textarea>
        @error('description')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Live <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="live" placeholder="Enter live" value="{{$apps->live}}" class="form-control">
        @error('live')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">News <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="news" placeholder="Enter news" value="{{$apps->news}}" class="form-control">
        @error('news')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">exchange <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="exchange" placeholder="Enter exchange" value="{{$apps->exchange}}" class="form-control">
        @error('exchange')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
        <div class="input-group">
          <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
              <i class="fa fa-picture-o"></i> Choose
            </a>
          </span>
          <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$apps->photo}}">
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
        @error('photo')
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
@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@push('scripts')
<script>
  $('#description').summernote();
  var route_prefix = "{{url('/filemanager')}}";
  $('#lfm').filemanager('image', {
    prefix: route_prefix
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
@endpush