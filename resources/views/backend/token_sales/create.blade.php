@extends('backend.layouts.master')

@section('main-content')
<div class="card">
  <div class="row">
    <div class="col-md-12">
      <!-- Messega -->
    </div>
  </div>
  <h5 class="card-header">Add TokenSale</h5>
  <div class="card-body">
    <form method="post" action="{{route('token.store')}}">
      {{csrf_field()}}
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="content" placeholder="Enter title" value="{{old('content')}}" class="form-control">
        @error('content')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="summary" class="col-form-label">Description</label>
        <textarea class="form-control" id="description1" name="description">{{old('description')}}</textarea>
        @error('description')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Name <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="name" placeholder="Enter name" value="{{old('name')}}" class="form-control">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Symbol <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="symbol" placeholder="Enter symbol" value="{{old('symbol')}}" class="form-control">
        @error('symbol')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Block chain<span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="blockchain" placeholder="Enter blockchain" value="{{old('blockchain')}}" class="form-control">
        @error('blockchain')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Standard <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="standard" placeholder="Enter standard" value="{{old('standard')}}" class="form-control">
        @error('standard')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Type <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="type" placeholder="Enter type" value="{{old('type')}}" class="form-control">
        @error('type')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Total <span class="text-danger">*</span></label>
        <input id="inputTitle" type="number" name="total" placeholder="0" value="{{old('total')}}" class="form-control">
        @error('total')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Percent <span class="text-danger">*</span></label>
        <input id="inputTitle" type="number" name="percent" placeholder="0" value="{{old('total')}}" class="form-control">
        @error('percent')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">	Exchange <span class="text-danger">*</span></label>
        <input id="inputTitle" type="number" name="exchange" placeholder="0" value="{{old('total')}}" class="form-control">
        @error('exchange')
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