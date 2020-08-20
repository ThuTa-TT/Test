	
@extends('layout.arraytest')
@section('title', 'Register Test')


@section('content')
  <div class="container">
		<div class="col-sm-6">
		<form method="post" action="{{route('save')}}">
      
			@csrf
			<h2>User Registration Form</h2>

			 <div class="form-group">
   				<label >Name: </label>
    			<input type="text" class="form-control" id="name" name="name" >
  			</div>
        <div class="form-group">
            <label >Gender:</label>
            <input type="radio" aria-label="Male" value="Male" name='gender'>Male
            <input type="radio" aria-label="Female" value="Female" name='gender'>Female
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email:</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="pwd" name="pwd">
        </div>
        <div>
          <label >Phone no:</label>
          <input type="text" class="form-control" id="type" name="phone">
        </div>
        <div class="form-group">
          <label >Address:</label>
          <input type="text" class="form-control" id="type" name="add">
        </div>
 			
 			
  			<button type="submit" class="btn btn-outline-primary">Submit</button>
  			<button type="reset" class="btn btn-outline-primary">Cancel</button>
		</form>
	</div>
	</div>
 @endsection