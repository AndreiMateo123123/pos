@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Cart</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            
                            <tr>
                                <th scope="col"></th>     
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">Price</th>
                            <th scope="col">size</th>
                            <th scope="col">color</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                             <td>   <input type="checkbox" aria-label="Checkbox for following text input"></td>
                                <td>{{$item->cart_id}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->size}}</td>
                                <td>{{$item->color}}</td>
                                <td>{{$item->quantity}}</td>
                                <td><img src="/black/product/{{$item->product_image}}" alt="Product" style="width: 60px; height: 50px"></td>
                                <td><a href="{{route('cart.remove', $item->cart_id)}}" class="btn btn-danger btn-sm">Remove</a></td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-muted">
                    <div class="row">   
                        
                    </div>              
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
