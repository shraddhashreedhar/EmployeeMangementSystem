<?php
use App\admin;
use App\employee;
use App\leaveapp;
use App\internship;

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
    return view('welcompany');
});

Route::get('about', function () {
    return view('about');
});


Route::get('services', function () {
    return view('services');
});


Route::get('contact', function () {
    return view('contact');
});


Route::get('intern', function () {
    return view('intern');
});


Route::post('addqry2','employeeController@addqry2');

Route::get('cadmin', function () {
    return view('admin/login');
});




Route::get('index',function() {
	if(Session()->get('unm'))
    {
	return view('admin/index');
    }
    else
    {
    	return view('admin/login');
    }
});


Route::post('adminlogin','AdminController@adminlogin');
Route::get('alogout','AdminController@alogout');

Route::get('employeeinsert', function () {
	if(Session()->get('unm'))
	return view('admin/employeeinsert');
    else
    {
    	return view('admin/login');
    }
   
});


Route::post('addqry','AdminController@addqry');

Route::get('employeeview', function () {
	$res=employee::all();
	if(Session()->get('unm'))
    {
	return view('admin/employeeview',compact('res'));
    }
   else
    {
    	return view('admin/login');
    }
   
});


Route::get('edit/{id}','AdminController@edit');
Route::post('editqry','AdminController@editqry');

Route::get('delete/{id}','AdminController@delete');


Route::get('cemployee', function () {
    return view('employee/employeelogin');
});

Route::post('employeelogin','EmployeeController@employeelogin');
Route::get('a1logout','EmployeeController@a1logout');



Route::get('employeeindex',function() {
    if(Session()->get('id'))
    {
    return view('employee/employeeindex');
    }
    else
    {
        return view('cemployee');
    }
});


Route::get('leave', function () {
    if(Session()->get('id'))
    {
    return view('employee/leaveapp');
    }
else
    {
        return view('cemployee');
    }
   
});

Route::post('addqry1','EmployeeController@addqry1');




Route::get('leaveappview', function () {
    $res=leaveapp::all();
    if(Session::get('unm'))
    {
    return view('admin/leaveappview',compact('res'));
    }
    else
    {
        return view('cemployee');
    }
   
});


Route::get('approve/{id}','AdminController@approve');


Route::get('reject/{id}','AdminController@reject');


Route::get('sendNotification','AdminController@sendNotification');



Route::get('detailsview', function () {
    $id=Session()->get('id');
    $res=employee::where('id','=',$id)->get();
     return view('employee/detailsview',compact('res'));
    
  
});


Route::get('internview', function () {
    $res=internship::all();
    if(Session()->get('unm'))
    {
    return view('admin/internview',compact('res'));
    }
   else
    {
        return view('admin/login');
    }
   
});