@extends('layouts.app')

@section('content')
<div class="container">

  <table class="table table-bordered table-striped">
   <tr>
    <th width="10%">Image</th>
    <th width="20%">Title</th>
    <th width="10%">Quantity</th>
    <th width="10%">Price</th>
    <th width="20%">Mobile</th>
    <th width="30%">Description</th>
    <th width="5%">Edit</th>
    <th width="5%">Delete</th>
   </tr>
   @foreach($data as $row)
    <tr>
     <td><img src="{{ URL::to('/ ') }}/images/{{ $row->image }}" class="img-thumbnail" name="image" id="image" width="100"/></td>   
     <td>{{ $row->title }}</td>
     <td>{{ $row->quantity }}</td>
     <td>${{ $row->price }}</td>
     <td>{{ $row->mobile }}</td>
     <td>{{ $row->description }}</td>
     <td>                 
       <a href="{{ route('products.edit', $row->id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
     </td>
     <td>     
       <form action="{{ route('products.destroy', $row->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
       </form>
     </td> 
    </tr>  
   @endforeach
  </table>
  {!! $data->links() !!}
</div>
<a href="{{ route('home') }}" class="btn btn-success" style="margin-left: 50em"><i class="fas fa-plus-square"></i> Add Product</a>

@endsection