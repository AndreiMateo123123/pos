@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">Price</th>
                        <th scope="col">size</th>
                        <th scope="col">color</th>
                        <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                </div>
                <div class="card-footer text-muted">
                    <div class="row">   
                        
                    </div>              
                </div>


            </div>
        </div>
        <div class='col-md-2'>
          <div class="card">
            <div class="card-body">
                <a href="{{route('cart')}}" class="btn btn-primary btn-block">
                    <span class="badge badge-danger badge-pill">{{count($cartdata)}}</span><i class="fa-solid fa-cart-arrow-down"></i> Cart
                </a>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              @foreach($cat as $item)
                <a href="{{route('dashdata', $item->id)}}" class="btn btn-primary btn-block" >{{$item->name}}</a>
              @endforeach
            </div>
          </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });

        function btncatclick(id){
          
        };  
    </script>
@endpush
