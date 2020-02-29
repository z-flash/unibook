@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <div class="container">
                    Dashboard 
                    <a href="{{ route('products.index') }}" class="btn btn-primary" style="margin-left: 33em">My Product</a>
                  </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($errors->any())
                    <div class="alert alert-danger">
                     <ul>
                      @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                     </ul>
                    </div>
                    @endif
                    <div class="container">
                      <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">                    
                        @csrf
                        <div class="form-group">
                           <div class="col-md-12">
                               <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                   <span class="input-group-text">Upload</span>
                                 </div>
                                 <div class="custom-file">
                                   <input type="file" class="custom-file-input" name="image" id="inputGroupFile01">
                                   <label class="custom-file-label" for="inputGroupFile">Choose File</label>
                                 </div>
                               </div>
                           </div>
                        </div>
                        <div class="form-group">
                         <div class="col-md-12">
                          <input type="text" name="title" class="form-control input-lg" placeholder="Title"/>
                         </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                             <select class="form-control" name="option" id="exampleSelect">
                               <option>Choose Option...</option>
                               <option>Airline</option>
                               <option>Hotel</option>
                               <option>Taxi</option>
                             </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <input class="form-control" name="quantity" type="number" value="" id="example-number-input" placeholder="Quantity">
                          </div>
                        </div>                     
                        <div class="form-group">
                          <div class="col-md-12">
                            <input class="form-control" name="price" type="float" value="" id="example-number-input" placeholder="Price $00.00">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <input class="form-control" name="mobile" type="tel" value="" id="example-tel-input" placeholder="(+992)-90-090-90-80">
                          </div>
                        </div>
                        <div class="form-group">
                         <div class="col-md-12">
                          <textarea class="form-control input-lg" name="description" id="exampleFormControlTextarea" rows="3" placeholder="Comment..."></textarea> 
                         </div>
                        </div>
                        <div class="form-group text-center">
                         <input type="submit" name="add" class="btn btn-success input-lg" value="+ Save" />
                        </div>                
                      </form>
                    </div>                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
