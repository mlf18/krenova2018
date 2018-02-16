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
Route::get('/inventor/editprofil', 'InventorController@edit');
Route::patch('/admin/updateprofil/{id}', 'AdminController@updateprofil');
Route::post('/admin/deletesprofil/{id}', 'AdminController@deletesprofil');
Route::resources([
    'superadmin' => 'SuperAdminController',
    'inventor' => 'InventorController',
    'admin' => 'AdminController',
    'juri' => 'JuriController',
    'permission' =>'PermissionController',
    'role' => 'RoleController',
    'proposal' => 'ProposalController',
    'user' => 'UserController',
    'adminkuesioner' => 'AdminkuesionerController',
    'berita' => 'ArticleController'
  ]);
  
Route::group([
  'middleware'=>['auth']] ,function(){

  Route::get('/home', 'HomeController@index');

});

Route::auth();

Route::get('/home', 'HomeController@index');
