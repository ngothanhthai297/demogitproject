@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <div class="row">
        <div class="col-md-12">
            <!-- Messega -->
        </div>
    </div>
    <h5 class="card-header">Update Question</h5>
    <div class="card-body">
        <form method="post" action="{{route('questions.update',$question->id)}}">
            {{csrf_field()}}
            @method('PATCH')
            <div class="form-group">
                <label for="inputTitle" class="col-form-label">Question Name <span class="text-danger">*</span></label>
                <input id="inputTitle" type="text" name="question_name" placeholder="Enter title" value="{{$question->question_name}}" class="form-control">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputName" class="col-form-label">Question Content <span class="text-danger">*</span></label>
                <input id="inputName" type="text" name="question_content" value="{{$question->question_content}}" placeholder="Enter title" class="form-control">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="status" class="col-form-label">Categories Question <span class="text-danger">*</span></label>
                <select name="categories_id" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" @if($question->categories_id == $category->id) echo selected @endif>{{$category->title}}</option>
                    @endforeach
                </select>
                @error('status')
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
        $('#desciption').summernote({
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