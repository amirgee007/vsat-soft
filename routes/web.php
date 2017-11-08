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

Route::get('admin/test' ,function (){

    return view('admin.404');
});


Route::get('/', array(
    'as' => 'signin',
    'uses' => 'Admin\AdminController@showLoginForm'));

Route::get('/login', array(
    'as' => 'admin.signin',
    'uses' => 'Admin\AdminController@showLoginForm'));

Route::get('logout', array(
    'as' => 'logout',
    'uses' => 'Admin\AdminController@logout'));


Auth::routes();


//////// Main Logged In User routes /////////
Route::group(['namespace' =>'Admin' ,'middleware' => 'auth.basic'] , function(){

    Route::get('/dashboard', array(
        'as' => 'index.dashboard',
        'uses' => 'AdminController@showHome'));

    # Location Management
    Route::group(array('prefix' => 'location'), function () {

        Route::get('/regions', [
            'as' => 'location.regions.index',
            'uses' => 'LocationController@indexRegions'
        ]);

        Route::get('/countries', [
            'as' => 'location.countries.index',
            'uses' => 'LocationController@indexCountries'
        ]);

        Route::get('/cities', [
            'as' => 'location.cities.index',
            'uses' => 'LocationController@indexCities'
        ]);

        Route::post('/countries/update-status', [
            'as' => 'post.country.status',
            'uses' => 'LocationController@updateCountryStatus'
        ]);

        Route::post('/cities/update-status', [
            'as' => 'post.city.status',
            'uses' => 'LocationController@updateCityStatus'
        ]);



    });

    # profile Management
    Route::group(array('prefix' => 'profile'), function () {

        Route::get('/', [
            'as' => 'profile.show',
            'uses' => 'UserController@profile'
        ]);

    });


    # People Management
    Route::group(array('prefix' => 'people'), function () {

        Route::get('/clients', [
            'as' => 'people.clients.index',
            'uses' => 'ClientsController@index'
        ]);

        Route::get('/support-staff', [
            'as' => 'people.supportStaff.index',
            'uses' => 'SupportStaffController@index'
        ]);

        Route::get('/users', [
            'as' => 'people.users.index',
            'uses' => 'UserController@index'
        ]);



    });


    # Branches Management
    Route::group(array('prefix' => 'branch'), function () {

        Route::get('/', [
            'as' => 'branch.index',
            'uses' => 'BranchController@index'
        ]);

        Route::get('/create', [
            'as' => 'branch.create',
            'uses' => 'BranchController@create'
        ]);

        Route::post('/create', [
            'as' => 'branch.new_branch',
            'uses' => 'BranchController@new_branch'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'branch.edit',
            'uses' => 'BranchController@edit'
        ])->where('id', '[0-9]+');

        Route::post('/update/{id}', [
            'as' => 'branch.update',
            'uses' => 'BranchController@update'
        ])->where('id', '[0-9]+');

        Route::get('/delete/{id}', [
            'as' => 'branch.delete',
            'uses' => 'BranchController@delete'
        ])->where('id', '[0-9]+');
    });

    # Sites Management
    Route::group(array('prefix' => 'site'), function () {

        Route::get('/', [
            'as' => 'site.index',
            'uses' => 'SiteController@index'
        ]);




    });

    # Tickets Management
    Route::group(array('prefix' => 'ticket'), function () {

        Route::get('/', [
            'as' => 'ticket.index',
            'uses' => 'TicketController@index'
        ]);




    });


});


