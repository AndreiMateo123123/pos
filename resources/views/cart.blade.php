@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
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
                             <td>   </td>
                                <td>{{$item->cart_id}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->size}}</td>
                                <td>{{$item->color}}</td>
        <!-- Quantiy -->                        
                                <td class="cart-product-quantity" width="130px">
                                    <div class="input-group quantity">
                                        <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                                            <span class="input-group-text">-</span>
                                        </div>
                                        <input type="text" class="qty-input form-control" maxlength="2" max="10" value="1">
                                        
                                        <div class="input-group-append increment-btn" style="cursor: pointer">
                                            <span class="input-group-text">+</span>
                                        </div>
                                    </div>
                                </td>

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
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>total</h3>
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
