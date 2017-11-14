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
Route::group(['namespace' =>'Admin' ,'middleware' => 'auth'] , function(){

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

        Route::post('/regions/update-status', [
            'as' => 'post.region.status',
            'uses' => 'LocationController@updateRegionStatus'
        ]);

        Route::post('/get-cities', [
            'as' => 'location.cities.citiesByCountry',
            'uses' => 'LocationController@citiesByCountryId'
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

     ////////////////////////////////////////Clients/////////////////////////////   /

        Route::get('/clients', [
            'as' => 'people.clients.index',
            'uses' => 'ClientsController@index'
        ]);

        Route::get('/create-client', [
            'as' => 'people.clients.createClients',
            'uses' => 'ClientsController@createClients'
        ]);

        Route::post('/create-client', [
            'as' => 'people.clients.addClient',
            'uses' => 'ClientsController@save'
        ]);

        Route::get('/edit-client/{id}', [
            'as' => 'people.clients.editClients',
            'uses' => 'ClientsController@edit'
        ])->where('id', '[0-9]+');

        Route::get('/delete-client/{id}', [
            'as' => 'people.clients.delete',
            'uses' => 'ClientsController@delete'
        ])->where('id', '[0-9]+');

        Route::post('/update-client', [
            'as' => 'people.clients.updateClient',
            'uses' => 'ClientsController@update'
        ]);
/////////////////////////////////////////Supporrt Stafff////////////////////

        Route::get('/support-staff', [
            'as' => 'people.supportStaff.index',
            'uses' => 'SupportStaffController@index'
        ]);

        Route::get('/create-staff', [
            'as' => 'people.supportStaff.createStaff',
            'uses' => 'SupportStaffController@createStaff'
        ]);

        Route::get('/edit-staff', [
            'as' => 'people.supportStaff.editStaff',
            'uses' => 'SupportStaffController@editStaff'
        ]);

//////////////////////////////////////////////USERS//////////////////////////
        Route::get('/users', [
            'as' => 'people.users.index',
            'uses' => 'UserController@index'
        ]);


        Route::get('/create-user', [
            'as' => 'people.users.createUser',
            'uses' => 'UserController@create'
        ]);

        Route::post('/create-user/store', [
            'as' => 'people.users.store',
            'uses' => 'UserController@store'
        ]);

        Route::post('/create-user/update', [
            'as' => 'people.users.update',
            'uses' => 'UserController@update'
        ]);


        Route::get('/edit-user/{id}', [
            'as' => 'people.user.edit',
            'uses' => 'UserController@edit'
        ])->where('id', '[0-9]+');


        Route::get('/delete-user/{id}', [
            'as' => 'people.user.delete',
            'uses' => 'UserController@delete'
        ])->where('id', '[0-9]+');


        Route::post('/profile-update', [
            'as' => 'user.profile-update',
            'uses' => 'UserController@profileUpdate'
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

        Route::post('/create/store', [
            'as' => 'post.branch.store',
            'uses' => 'BranchController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'get.branch.edit',
            'uses' => 'BranchController@edit'])->where('id', '[0-9]+');

        Route::post('/update', [
            'as' => 'post.branch.update',
            'uses' => 'BranchController@update']);

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

        Route::get('/create', [
            'as' => 'site.create',
            'uses' => 'SiteController@create'
        ]);

        Route::post('/create/store', [
            'as' => 'post.site.create',
            'uses' => 'SiteController@store'
        ]);

        Route::post('/edit/update', [
            'as' => 'post.site.update',
            'uses' => 'SiteController@update'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'site.edit',
            'uses' => 'SiteController@edit'
        ])->Where('id', '[0-9]+');


        Route::get('/delete/{id}', [
            'as' => 'site.delete',
            'uses' => 'SiteController@delete'
        ])->where('id', '[0-9]+');

    });

    # Tickets Management
    Route::group(array('prefix' => 'ticket'), function () {

        Route::get('/', [
            'as' => 'ticket.index',
            'uses' => 'TicketController@index'
        ]);




    });


});


