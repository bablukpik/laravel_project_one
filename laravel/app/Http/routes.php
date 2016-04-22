<?php 
	// Route::get('/',function(){
	// 	return 'Alhamdulillah';
	// });
	Route::resource('reg', 'PhotoController');

	Route::get('success',function(){
		return view('dbTest.success');
	});

	// Route::get('contact_2',function(){
	// 	return view('contact_page');
	// });

	// // Route::get('alluser','testController@index');

	// // Route::get('alluser/{id}/{name}', function ($id, $name) {
 // //    return 'User '.$id.' '.$name;
	// // })->where('id', '[0-9]+');

	// //office-master project
	// Route::get('about-us.php','testController@aboutUs');
	// Route::get('/','testController@index');
	// //Form Test

//Authentication Route
Route::auth();

Route::get('/home', 'HomeController@index');

 ?>
