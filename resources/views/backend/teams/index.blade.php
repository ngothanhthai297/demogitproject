@extends('backend.layouts.master')

@section('main-content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="row">
    <div class="col-md-12">
        @include('backend.layouts.notification')
    </div>
  </div>
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary float-left">Teams Lists</h6>
    <a href="{{route('teams.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Team</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      @if(count($teams) > 0)
      <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>STT</th>
            <th>Title</th>
            <th>Name</th>
            <th>Position</th>
            <th>Photo</th>
            <th>Linkedin</th>
            <th>Facebook</th>
            <th>Instagram</th>
            <th>Twitter</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>STT</th>
            <th>Title</th>
            <th>Name</th>
            <th>Position</th>
            <th>Photo</th>
            <th>Linkedin</th>
            <th>Facebook</th>
            <th>Instagram</th>
            <th>Twitter</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>

          @foreach($teams as $team)
          <tr>
            <td>{{$team->id}}</td>
            <td>{{$team->title}}</td>
            <td>{{$team->name}}</td>
            <td>{{$team->position}}</td>
            <td>
              @if(!empty($team->photo))
              <img src="{{$team->photo}}" class="img-fluid" style="max-width:80px" alt="{{$team->photo}}">
              @else
              <img src="{{asset('backend/img/thumbnail-default.jpg')}}" class="img-fluid" style="max-width:80px" alt="No image">
              @endif
            </td>
            <td>{{$team->linkedin}}</td>
            <td>{{$team->facebook}}</td>
            <td>{{$team->instagram}}</td>
            <td>{{$team->twitter}}</td>
            <td>
              <a href="{{route('teams.edit',$team->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
              <form method="POST" action="{{route('teams.destroy',[$team->id])}}">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm nutXoaDayNe" data-id={{$team->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <span style="float:right">{{$teams->links()}}</span>
      @else
      <h6 class="text-center">No Categories found!!! Please create Category</h6>
      @endif
    </div>
  </div>
</div>
@endsection

@push('styles')
<link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<style>
  div.dataTables_wrapper div.dataTables_paginate {
    display: none;
  }
</style>
@endpush

@push('scripts')

<!-- Page level plugins -->
<script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
<script>
  $('#banner-dataTable').DataTable({
    "columnDefs": [{
      "orderable": false,
      "targets": [3, 4, 5]
    }]
  });

  // Sweet alert

  function deleteData(id) {

  }
</script>
<script>
  //Script t???o popup hi???n l??n khi b???m n??t x??a
  $(document).ready(function() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('.nutXoaDayNe').click(function(e) {
      var form = $(this).closest('form');
      var dataID = $(this).data('id');
      // alert(dataID);
      e.preventDefault();
      swal({
          title: "Confirm!",
          text: "Team that has been deleted cannot be retrieved!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            form.submit();
          } else {
            swal("Oh good luck, not deleted yet!!!");
          }
        });
    })
  })
</script>
@endpush