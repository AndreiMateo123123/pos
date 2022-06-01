@extends('layouts.app', ['pageSlug' => 'payment'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body"> 
                    <table class="table table-striped">
                        <thead>
                            
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Desciption</th>
                            <th scope="col">Price</th>   
                            <th scope="col">Size</th>
                            <th scope="col">color</th>                  
                            <th scope="col">Quantity</th>        
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                         
                          

                            </tr>
                        </thead>
                    </table>
                   
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


