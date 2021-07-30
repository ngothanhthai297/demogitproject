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
    <h6 class="m-0 font-weight-bold text-primary float-left">TokenSale Lists</h6>
    <a href="{{route('token.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add TokenSale</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      @if(count($token_sales) > 0)
      <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>STT</th>
            <th>Title</th>
            <th>Name</th>
            <th>Symbol</th>
            <th>Blockchain</th>
            <th>Standard</th> 
            <th>Type</th>  
            <th>Total</th> 
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>STT</th>
            <th>Title</th>
            <th>Name</th>
            <th>Symbol</th>
            <th>Blockchain</th>
            <th>Standard</th> 
            <th>Type</th>  
            <th>Total</th> 
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach($token_sales as $token_sale)
          <tr>
            <td>{{$token_sale->id}}</td>
            <td>{{$token_sale->content}}</td>
            <td>{{$token_sale->name}}</td>
            <td>{{$token_sale->symbol}}</td>
            <td>{{$token_sale->blockchain}}</td>
            <td>{{$token_sale->standard}}</td>
            <td>{{$token_sale->type}}</td>
            <td>{{$token_sale->total}}</td>
            <td>
           
              <a href="{{route('token.edit',$token_sale->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
              <form method="POST" action="{{route('token.destroy',[$token_sale->id])}}">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm nutXoaDayNe" data-id={{$token_sale->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <span style="float:right">{{$token_sales->links()}}</span>
      @else
      <h6 class="text-center">No TokenSales found!!! Please create TokenSale</h6>
      @endif
    </div>
  </div>
</div>
@endsection
@push('scripts')

<!-- Page level plugins -->
<script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<!-- Page level custom scripts -->
<script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
<script>
  //Script tạo popup hiện lên khi bấm nút xóa
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
          text: "TokenSale that has been deleted cannot be retrieved!",
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