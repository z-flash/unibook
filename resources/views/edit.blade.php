@extends('layouts.app')

@section('content')
            
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
     <div class="align-top">
         <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
     </div>
     <br/>    
     <form method="post" action="{{ route('products.update', $data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
           <div class="col-md-8">
               <div class="input-group mb-3">
                 <div class="input-group-prepend">
                   <span class="input-group-text">Upload</span>
                 </div>
                 <div class="custom-file">
                   <input type="file" class="custom-file-input" name="image" id="image">
                   <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100"/>
                   <input type="hidden" name="hidden_image" value="{{ $data->image }}">
                   <label class="custom-file-label" for="inputGroupFile">{{ $data->image }}</label>
                 </div>
               </div>
           </div>
        </div>
        <div class="form-group">
         <div class="col-md-8">
          <input type="text" name="title" class="form-control input-lg" value="{{ $data->title }}" placeholder="Title"/>
         </div>
        </div>
        <div class="form-group">
          <div class="col-md-8">
             <select class="form-control" name="option" value="{{ $data->option }}" id="exampleSelect">
               <option>{{ $data->option }}</option>
               <option>Airline</option>
               <option>Hotel</option>
               <option>Taxi</option>
             </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-8">
            <input class="form-control" name="quantity" type="number" value="{{ $data->quantity }}" id="example-number-input" placeholder="Quantity">
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-md-8">
            <input class="form-control" name="price" type="number" value="{{ $data->price }}" id="example-number-input" placeholder="Price $00.00">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-8">
            <input class="form-control" type="tel" name="mobile" value="{{ $data->mobile }}" id="example-tel-input" placeholder="(+992)-90-090-90-80">
          </div>
        </div>
        <div class="form-group">
         <div class="col-md-8">
          <textarea class="form-control input-lg" name="description" value="{{ $data->description }}" id="exampleFormControlTextarea" rows="3" placeholder="Comment...">{{ $data->description }}</textarea> 
         </div>
        </div>
        <div class="form-group text-center">
          <div class="row">
           <a href="{{ route('home') }}" class="btn btn-primary">back</a>
           <button type="submit" class="btn btn-success">save</button>
          </div>
        </div>
     </form>
    </div>
@endsection