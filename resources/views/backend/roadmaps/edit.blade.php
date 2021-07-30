@extends('backend.layouts.master')

@section('main-content')
<div class="card">
  <div class="row">
    <div class="col-md-12">
      <!-- Messega -->
    </div>
  </div>
  <h5 class="card-header">Update RoadMap</h5>
  <div class="card-body">
    <form method="post" action="{{route('roadmaps.update',$roadmap->id)}}">
      @csrf
      @method('PATCH')
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="title" placeholder="Enter title" value="{{$roadmap->title}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Sort <span class="text-danger">*</span></label>
        <input id="inputTitle" type="number" name="sortby" placeholder="0" value="{{$roadmap->sortby}}" class="form-control">
        @error('sortby')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="summary" class="col-form-label">Date</label>

        <input type="date" id="start" name="date_start" value="<?php $date = date_create($roadmap->date_start);
                                                                echo date_format($date, 'Y-m-d'); ?>" min="2018-01-01" max="3000-01-01">

        @error('date_start')
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