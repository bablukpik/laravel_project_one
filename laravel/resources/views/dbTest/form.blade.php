<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		{!! Form::open(array('route' => 'reg.store')) !!}
			 <div class="form-group ">
			  <label class="control-label " for="name">
			   User Full Name
			  </label>
			  <input class="form-control" id="name" name="user_fullname" type="text"/>
			 </div>

			 <div class="form-group ">
			  <label class="control-label " for="text">
			   Username
			  </label>
			  <input class="form-control" id="text" name="user_name" type="text"/>
			 </div>
			 
			 <div class="form-group ">
			  <label class="control-label " for="text">
			   Password
			  </label>
			  <input class="form-control" id="text" name="password" type="password"/>
			 </div>

			 <div class="form-group">
			  <div>
			   <button class="btn btn-primary " type="submit">
				Submit
			   </button>
			  </div>
			 </div>
		{!! Form::close() !!}
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>