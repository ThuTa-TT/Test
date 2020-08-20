	
@extends('layout.arraytest')
@section('title', 'Register Test')


@section('content')
  <div class="container">
		<div class="col-sm-6">
		<form method="Post" action="{{route('update',$users->id)}}">
      
			@csrf
      @method('PUT')
      
			<h2>User Registration Form Edit</h2>

			 <div class="form-group">
   				<label >Name: </label>
    			<input type="text" class="form-control" id="name" name="name" value="{{$users->name}}" >
  			</div>
        <div class="form-group">
            <label >Gender:</label>
            <input type="radio" aria-label="Male" value="Male" name='gender' value="{{$users->gender}}">Male
            <input type="radio" aria-label="Female" value="Female" name='gender' value="{{$users->gender}}">Female
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email:</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{$users->email}}">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="pwd" name="pwd " value="{{$users->password}}">
        </div>
        <div>
          <label >Phone no:</label>
          <input type="text" class="form-control" id="type" name="phone" value="{{$users->phone}}">
        </div>
        
        <div class="form-group">
          <label >Address:</label>
          <input type="textarea" class="form-control" id="type" name="add" value="{{$users->address}}">
        </div>
 			
 			
  			<button type="submit" class="btn btn-outline-primary">Submit</button>
  			<button type="reset" class="btn btn-outline-primary">Cancel</button>
		</form>
	</div>
	</div>
 @endsection