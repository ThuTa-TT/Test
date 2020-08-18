@extends('layout.arraytest')

@section('title', 'Array Test')

@section('sidebar')
    @parent


@endsection

@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone_No</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th> 
      <th scope="col">F_Month</th>
      <th scope="col">F_Score</th>
      <th scope="col">S_Month</th>
      <th scope="col">S_Score</th>
    </tr>
  </thead>
  <tbody>
  	 @foreach($users as $val)
		    <tr>
		      <td>{{$val['name']}}</td>
		      <td>{{$val['phone']}}</td>
		      <td>{{$val['email']}}</td>
		      <td>{{$val['address']}}</td>
		      @foreach($val['score'] as $key=>$value)
		      	<td>{{$key}}</td>
		      	<td>{{$value}}</td>
		       @endforeach
		    </tr>
	 @endforeach
  
@endsection

</h2>

