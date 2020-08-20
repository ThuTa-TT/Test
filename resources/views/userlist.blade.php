@extends('layout.arraytest')
@section('title', 'Register Test')


@section('content')
<h1 style="text-align: center;">User List</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Phone_No</th>
      <th scope="col">Address</th>
      <th scope="col" colspan="3">Action</th>
     
    </tr>
  </thead>
  <tbody>
   @foreach($users as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->gender}}</td>
      <td>{{$row->email}}</td>
      <td>{{$row->phone}}</td>
      <td>{{$row->address}}</td>

      <td ><a href="{{route('edit',$row->id)}}">Edit</td>
      
      	<td>
      		<form method="post" action="{{route('destroy',$row->id)}}">
      			@csrf
      			@method('DELETE')
      			<button type="submit" class="btn btn-danger">Delete</button>
      		</form>
      	</td>
      
     
         
    </tr>
   @endforeach 
  </tbody>

  
</table>

@endsection