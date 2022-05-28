@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a href="#">
                @foreach($data as $datas)
                
               
                <img src="/black/tshirt/{{$datas->image}}" alt="Flowers in Chania"
                width="250" 
                height="200"/>
     
                @endforeach
            </a>
        </div>
        <div class="col-md-4">
            <div class="card" style="height: 500px;">
                <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Desciption</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                </div>
                <div class="card-footer text-muted">
                    <div class="row">   
                        <div class="col"> 
                            <button class="btn btn-primary btn-sm">T-Shirt</button>
                            <button class="btn btn-primary btn-sm">Short</button>
                            <button class="btn btn-primary btn-sm">Long Sleeve</button>
                        </div>
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
    </script>
@endpush
