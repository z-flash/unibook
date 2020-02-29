@extends('layouts.app')

@section('content')
<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Image</th>
  <th width="20%">title</th>
  <th width="10%">quantity</th>
  <th width="10%">price</th>
  <th width="20%">mobile</th>
  <th width="30%">description</th>
  <th width="10%">buttons</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" name="image" id="image" width="75" /></td>
   <td>{{ $row->title }}</td>
   <td>{{ $row->quantity }}</td>
   <td>{{ $row->price }}</td>
   <td>{{ $row->mobile }}</td>
   <td>{{ $row->description }}</td>
   <td>
    <div class="table-row">        
     <a href="{{ route('products.edit', $row->id) }}" class="btn btn-primary">edit</a>
     <form action="{{ route('products.destroy', $row->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
     </form>
    </div>
   </td> 
  </tr>  
 @endforeach
</table>
{!! $data->links() !!}
@endsection