<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Dashboard',function()
{
	return view('layout.master');
	});
/*
Route::get('/login2',function()
{

return view('layout.login2');


//for inserting values
});
*/
//used for logout or redirecting a page by destroying a session
Route::get('/login2','HomeController@login2');
//end of redirecting apage
Route::post('/insert','HomeController@insert');
Route::get('/insert',function()
	{
		return view('layout.registe');
	});
//end of inserting values
//for selecting values
Route::get('viewrecord','HomeController@selects');
//end of selecting values

//for updating values
Route::get('editrecord','HomeController@updates');
Route::get('edit/{id}','HomeController@show');
Route::post('edit/{id}','HomeController@edit');

//end of updating values

//start delete
//delete data
/*
Route::get("color:brown">'deleterecords',"color:brown">'HomeController@index1');
Route::get("color:brown">'delete/{id}',"color:brown">'HomeController@destroy1'); 

*/
//2nd update
Route::get('/edits1','HomeController@indexs1');
Route::get('edit/{id}','HomeController@shows1');
Route::post('edit/{id}','HomeController@edits1');


//end 2nd update

//end delete
//3rd delete
Route::get('/deletes','HomeController@index3');
Route::get('delete/{id}','HomeController@destroy');
//end 3rd delete

//start session
Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');
//end session

//for try page
Route::post('/try','HomeController@try');
Route::get('/try',function()
{


return view('layout.try1');

}


	);

Route::get('/about',function()
{

return view('layout.about');

}


	);








//for trypage
//next
/*
Route::get('insert','HomeController@insertform');
Route::post('create','HomeController@insert'); 
*/


//endnext