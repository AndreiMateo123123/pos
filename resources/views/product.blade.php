@extends('layouts.app', ['pageSlug' => 'product'])

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
                            <th scope="col">Category</th>
                            <th scope="col">Status</th>
                            <th scope="col">Size</th>
                            <th scope="col">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $item)
                                <tr>
                                  <td>{{$item->id}}</td>
                                  <td>{{$item->description}}</td>
                                  <td>{{$item->price}}</td>
                                  <td>{{$item->category}}</td>
                                  <td>{{$item->status}}</td>
                                  <td>{{$item->size}}</td>
                                  <td><img src="/black/product/{{$item->product_image}}" alt="Product" style="width: 60px; height: 50px"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-muted">     
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
              <form method="POST" action="{{route('product.add')}}" enctype="multipart/form-data">
                <div class="card-body">
                      @csrf
                       <label for="inputPassword5" class="form-label">Barcode</label>
                        <input id="inputPassword5" class="form-control" name="barcode" required>

                        <label for="inputPassword5" class="form-label">Description</label>
                        <input id="inputPassword5" class="form-control" name="desc" required>

                        <label for="inputPassword5" class="form-label">Price</label>
                        <input id="inputPassword5" class="form-control" name="price" required>  
                        <br>
                        <label for="image" class="form-label">Attach</label>
                        <input type="file" id="image" name="image" accept="image" required />
                        <hr style="background-color:rgb(160, 23, 130)">
                        <br>
                        <div class="row">
                            <div class="col-md-9">
                                <select class="form-control bg-dark" aria-label="Default select example" name="category" required>
                                  <option selected value="0">--------Select Category--------  </option>
                                    @foreach ($data as $datas)
                                      <option value="{{$datas->id}}">{{$datas->name}}</option>
                                    @endforeach
                                </select>      
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                                    Add
                                  </button>  
                            </div>
                        </div>
                                         
                          <br/> 

                        <br>
                        <select class="form-control bg-dark" aria-label="Default select example" name="size" required>
                            <option selected>-----------Select sizes-----------  </option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                          </select>
                          
                          <br/> 
                        <br>
                        <select class="form-control bg-dark" aria-label="Default select example" name="status" required>
                            <option selected>----------  Select Status ----------</option>
                            <option value="1">Available</option>
                            <option value="0">Unavailable</option>                          
                          </select>   
                          <br/>  
                          
                          
                </div>
                <div class="card-footer text-muted">
                    <div class="row">   
                        <div class="col"> 
                            <button class="btn btn-primary btn-sm" type="submit">save</button>
                            <button class="btn btn-primary btn-sm">update</button>
                            <button class="btn btn-primary btn-sm">delete</button>
                        </div>
                    </div>              
                </div>
              </form>
            </div>
        </div>
</div>
</div>
    

        </thead>
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
          <label for="category" class="strong text-light">Category</label>
          <input type="text text-light" class="form-control" name="category" id="category"/>
          <br>
          <div class="row">
            <div class="col-sm-6">
                <button type="button" class="btn btn-primary" id="btncat">Save</button>
            </div>
            <div class="col-sm-6 text-right">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
        <div class="modal-footer">
            <br>
          <div class="card">
            <div class="card-header">
                <h5 class="text-light">Category List</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                      </tr>
                    </thead>
                    <tbody class="cattable">
                      
                        @foreach ($data as $datas)
                        <tr>
                          <th scope="row">{{$datas->id}}</th>
                          <td>{{$datas->name}}</td>
                        </tr>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function() {
          console.log("test");
          $('#btncat').click(function(){
            x = $('#category').val();
            $.ajax({ 
              type: 'GET',
              url: '/add-category/'+x,
              success: function (data) {
                $('#category').val("");
                var markup = "<tr><td></td><td>"+x+"</td></tr>";
                $("table .cattable").append(markup);
              },
              error: function() { 
            }
          });
          })
        });
    </script>
