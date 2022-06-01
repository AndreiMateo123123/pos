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
                            @php
                                $total = 0;
                            @endphp
                            @foreach($data as $item)
                            <tr>
                             <td>   </td>
                                <td>{{$item->cart_id}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->size}}</td>
                                <td>{{$item->color}}</td>
        <!-- Quantiy -->                        
                                <td class="cart-product-quantity">
                                    <div class="row">
                                        <div class="col-2">
                                            <button id="increase" onclick="inc({{$item->price}},{{$item->cart_id}}, {{$item->store_quantity}})">+</button>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="input{{$item->cart_id}}" value="{{$item->client_quantity}}" min="1" max="" placeholder="enter amount">
                                        </div>
                                        <div class="col-2">
                                            <button id="increase" onclick="dec({{$item->price}},{{$item->cart_id}})">-</button>
                                        </div>                               
                                    </div>
                                </td>

                                <td><img src="/black/product/{{$item->product_image}}" alt="Product" style="width: 60px; height: 50px"></td>
                                <td><a href="{{route('cart.remove', $item->cart_id)}}" class="btn btn-danger btn-sm">Remove</a></td>
                            </tr>
                            @php
                                $total += $item->price;
                            @endphp
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
                    <h3>Total: <span><input type="number" id="total" value="{{$total}}" style="border:none; background: transparent" disabled /></span></h3>
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

        function inc(price, id, max){
         $quan =  parseInt($('#input'+id).val()) + 1;

         if(max >= $quan){
            $('#input'+id).val($quan);
            $x = parseInt($('#total').val());
            $('#total').val($x + price);
         }
        };  
        function dec(price, id){
        $quan =  parseInt($('#input'+id).val()) - 1;
        if($quan >= 1){
            $('#input'+id).val($quan);
            $x = parseInt($('#total').val());
            $('#total').val($x - price);
         }
        };  
    </script>
@endpush
