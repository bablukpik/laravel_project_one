<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Databases Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	{!! Form::open(['route' => 'reg.index','method' => 'GET']) !!}
	<lavel>User Full name: </lavel>{{ Form::text('user_fullname')}}
	<lavel>Username: </lavel>{{ Form::text('user_name')}}
	{{ Form::submit('Search')}}
	{!! Form::close() !!}
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 ">
				<table class="table">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Full Name</th>
				      <th>Username</th>
				      <th>Password</th>
				      <th>Update</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				  @foreach ($allDBdata as $singleDBdata)
				    <tr>
				      <th scope="row">{!! $count++ !!}</th>
				      <td>{{ $singleDBdata->user_fullname }}</td>
				      <td>{{ $singleDBdata->user_name }}</td>
				      <td>{{ $singleDBdata->password }}</td>
				      <td><a class="btn btn-info" href="{!! Route('reg.edit',$singleDBdata->user_id) !!}">Edit</a></td>
				       <td>
				       		{!! Form::open(array('route' => ['reg.destroy', $singleDBdata->user_id],'method'=>'delete')) !!}
				       			{!! Form::hidden($singleDBdata->user_id) !!} <!-- this line is not needed -->
				       			{!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
							{!! Form::close() !!}
				       </td>
				    </tr>
				   @endforeach
				  </tbody>
				</table>
				{!! $allDBdata->links() !!}
			</div>  
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>