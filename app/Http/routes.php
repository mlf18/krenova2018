<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/admin/editprofil/{id}', 'AdminController@editinventor');
Route::patch('/admin/updateprofil/{id}', 'AdminController@updateprofil');
Route::delete('/admin/deleteprofil/{id}', 'AdminController@deleteprofil');
Route::resources([
    'superadmin' => 'SuperAdminController',
    'inventor' => 'InventorController',
    'admin' => 'AdminController',
    'juri' => 'JuriController',
    'permission' =>'PermissionController',
    'role' => 'RoleController',
    'proposal' => 'ProposalController',
    'user' => 'UserController',
    'adminkuesioner' => 'AdminkuesionerController'
  ]);
  
Route::group([
  'middleware'=>['auth']] ,function(){

  Route::get('/home', 'HomeController@index');

});

Route::auth();

Route::get('/home', 'HomeController@index');
