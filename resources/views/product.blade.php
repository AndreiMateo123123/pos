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
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-muted">     
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="height: 600px">
                <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                    </tbody>
                    </table>
                    
                       <label for="inputPassword5" class="form-label">barcode</label>
                        <input id="inputPassword5" class="form-control">

                        <label for="inputPassword5" class="form-label">description</label>
                        <input id="inputPassword5" class="form-control">

                        <label for="inputPassword5" class="form-label">price</label>
                        <input id="inputPassword5" class="form-control">  
                        <br>
                        <select class="form-select" aria-label="Default select example">
                            <option selected> ---Product_Categories ---</option>
                              
                          </select>
                          <button class="btn btn-primary btn-sm">save</button>
                          <br/> 

                        <br>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>-----------Select sizes-----------  </option>
                            <option value="1">Small</option>
                            <option value="2">Medium</option>
                            <option value="3">Large</option>
                          </select>
                          
                          <br/> 
                        <br>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>----------  Select Status ----------</option>
                            <option value="1">unvailable</option>
                            <option value="2">Unavailable</option>                          
                          </select>   
                          <br/>  
                          
                          
                </div>
                <div class="card-footer text-muted">
                    <div class="row">   
                        <div class="col"> 
                            <button class="btn btn-primary btn-sm">save</button>
                            <button class="btn btn-primary btn-sm">update</button>
                            <button class="btn btn-primary btn-sm">delete</button>
                        </div>
                    </div>              
                </div>
            </div>
        </div>
</div>
</div>
    

        </thead>
    </div>
</div>

@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#form').on('submit',function(e){
                e.preventDefault();

                var form = this;

               $.ajax({
                    url:$(fore).attr('action'),
                    method:$(for).attr('method')
                    data:new FormData(form),
                    processData:false,
                    dataType:'json',
                    contentType:false,
                    beforeSend:function(){
                        $(form).find('span.error-text').text(''); 

                    },
                    success:function(data){
                        if(data.code == 0){
                            $.each(data.error,function(prefix,val){
                                $(form).find('span.'+prefix+'_error').text(val[0]);
                            })
                        }else{
                            $(form[0].reset());
                            alert('New product has been added to the list');
                        }

                    }
                });
            });

          demo.initDashboardPageCharts();
        });
    </script>
@endpush
