@extends('backend.layouts.master')

@section('main-content')
<div class="card">
    <div class="row">
        <div class="col-md-12">
            <!-- Messega -->
        </div>
    </div>
    <h5 class="card-header">Add Team</h5>
    <div class="card-body">
        <form method="post" action="{{route('teams.update',$team->id)}}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
                <input id="inputTitle" type="text" name="title" placeholder="Enter title" value="{{$team->title}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="inputName" class="col-form-label">Name <span class="text-danger">*</span></label>
                <input id="inputName" type="text" name="name" placeholder="Enter title" class="form-control" value="{{$team->name}}">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputPosition" class="col-form-label">Position <span class="text-danger">*</span></label>
                <input id="inputPosition" type="text" name="position" placeholder="Enter title" class="form-control" value="{{$team->position}}">
                @error('position')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputLinkedin" class="col-form-label">Linkedin <span class="text-danger">*</span></label>
                <input id="inputLinkedin" type="text" name="linkedin" placeholder="Enter title" class="form-control" value="{{$team->linkedin}}">

            </div>

            <div class="form-group">
                <label for="inputfacebook" class="col-form-label">Facebook<span class="text-danger">*</span></label>
                <input id="inputfacebook" type="text" name="facebook" placeholder="Enter title" class="form-control" value="{{$team->facebook}}">
    
            </div>

            <div class="form-group">
                <label for="inputInstagram" class="col-form-label">Instagram<span class="text-danger">*</span></label>
                <input id="inputInstagram" type="text" name="instagram" placeholder="Enter title" class="form-control" value="{{$team->instagram}}">
      
            </div>

            <div class="form-group">
                <label for="inputTwitter" class="col-form-label">Twitter<span class="text-danger">*</span></label>
                <input id="inputTwitter" type="text" name="twitter" placeholder="Enter title" class="form-control" value="{{$team->twitter}}">
  
            </div>
            <div class="form-group">
                <label for="inputPhoto" class="col-form-label">Photo</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$team->photo}}">
                </div>
                <div id="holder" style="margin-top:15px;max-height:100px;"></div>

                @error('url')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <button type="reset" class="btn btn-warning">Reset</button>
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