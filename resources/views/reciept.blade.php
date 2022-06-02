@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="font-weight-bold text-right" style="cursor: pointer"><i class="fas fa-print"></i></h3>
                <h3 class=" font-weight-bold text-center">Receipt</h3>
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
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                            $change = 0;
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
                            <td>{{$item->client_quantity}}</td>

                            <td><img src="/black/product/{{$item->product_image}}" alt="Product" style="width: 60px; height: 50px"></td>
                        </tr>
                        @php
                            $total += ($item->price * $item->client_quantity);
                        @endphp
                        @endforeach
                       @php
                           $change = $payment - $total;
                       @endphp
                    </tbody>
                </table>
            </div>
            <div class="card-footer border-top">
                <h1 class="text-right pr-5">Recieved Amount: {{$payment}}</h1>
                <h1 class="text-right pr-5">Total: {{$total}}</h1>
                
                <h1 class="text-right pr-5">Change: {{$change}}</h1>
            </div>
        </div>
    </div>
</div>  
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
    </script>
@endpush
