@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a href="#">

              @foreach($data as $datas)
                @endforeach
              
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                    T-Shirt
                  </button>   
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal1">
                    Short
                  </button>               
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal2">
                    longsleeves
                  </button> 
                  
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-5">
            <div class="card" style="height: 500px;width: 600px;">
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
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h5 class="modal-title text-light" id="exampleModalLabel">Add Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-light">T-Shirt List</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">price</th>
                            <th scope="col">size</th>
                          
                          </tr>
                        </thead>
                        <tbody class="cattable">
                          
                            @foreach ($data as $item)
                            @if($item->category == 1)
                                <tr>
                                  
                                  <td>{{$item->id}}</td>
                                  <td>{{$item->description}}</td>
                                  <td>{{$item->price}}</td>
                                  <td>{{$item->size}}</td>
                                  <td>{{$item->color}}</td>
                                  <td>{{$item->Quantity}}</td>
                                  <td><img src="/black/product/{{$item->product_image}}" alt="Product" style="width: 60px; height: 50px"></td>
                              
                                </tr>
                            @endif
                            @endforeach
                        
                        </tbody>
                      </table>
                </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h5 class="modal-title text-light" id="exampleModalLabel">Add Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-light">Short List</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">price</th>
                            <th scope="col">size</th>
                         
                            

                          </tr>
                        </thead>
                        <tbody class="cattable">
                          
                            @foreach ($data as $item)
                            @if($item->category == 2)
                                <tr>
                                  <td>{{$item->id}}</td>
                                  <td>{{$item->description}}</td>
                                  <td>{{$item->price}}</td>
                                  <td>{{$item->size}}</td>
                                  <td>{{$item->color}}</td>
                                  <td>{{$item->Quantity}}</td>
                                  <td><img src="/black/product/{{$item->product_image}}" alt="Product" style="width: 60px; height: 50px"></td>
                                </tr>
                            @endif
                            @endforeach
                        
                        </tbody>
                      </table>
                </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h5 class="modal-title text-light" id="exampleModalLabel">Add Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-light">T-Shirt List</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">price</th>
                            <th scope="col">size</th>
                        
                            
                          </tr>
                        </thead>
                        <tbody class="cattable">
                          
                            @foreach ($data as $item)
                            @if($item->category == 3)
                                <tr>
                                  <td>{{$item->id}}</td>
                                  <td>{{$item->description}}</td>
                                  <td>{{$item->price}}</td>
                                  <td>{{$item->size}}</td>
                                  <td>{{$item->color}}</td>
                                  <td>{{$item->Quantity}}</td>
                                  <td><img src="/black/product/{{$item->product_image}}" alt="Product" style="width: 60px; height: 50px"></td>
                               
                                </tr>
                                
                            @endif
                            @endforeach
                        
                        </tbody>
                      </table>
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
