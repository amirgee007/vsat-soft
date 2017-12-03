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


Route::get('/delete' ,function (){



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
Route::group(['namespace' =>'Admin' ,'middleware' => ['auth']] , function(){

    # Dashboard Managment
    Route::get('/dashboard', array(
        'as' => 'index.dashboard',
        'uses' => 'AdminController@showHome'));

    Route::get('/region-select-ajax', [
        'as' => 'region-country-ajax',
        'uses' => 'SystemController@regionCountryAjax'
    ]);

    Route::get('/cities-sites-ajax', [
        'as' => 'cities-sites-ajax',
        'uses' => 'SystemController@cityAjax'
    ]);


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
    Route::group(array('prefix' => 'my-profile'), function () {

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

        Route::get('/country-select-ajax', [
            'as' => 'country-city-ajax',
            'uses' => 'SystemController@countryCityAjax'
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

        Route::post('/create-staff', [
            'as' => 'people.supportStaff.store',
            'uses' => 'SupportStaffController@store'
        ]);

        Route::get('/edit-staff/{id}', [
            'as' => 'people.supportStaff.editStaff',
            'uses' => 'SupportStaffController@editStaff'
        ])->where('id', '[0-9]+');

        Route::post('/edit-staff', [
            'as' => 'people.supportStaff.updateStaff',
            'uses' => 'SupportStaffController@update'
        ]);

        Route::get('/delete-staff/{id}', [
            'as' => 'people.supportStaff.delete',
            'uses' => 'SupportStaffController@delete'
        ])->where('id', '[0-9]+');

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

        Route::post('/ajax-assets', [
            'as' => 'asset.ajax.request',
            'uses' => 'SiteController@ajaxRequestAssets'
        ]);
    });

    # Tickets Management
    Route::group(array('prefix' => 'ticket'), function () {

        Route::get('/', [
            'as' => 'ticket.index',
            'uses' => 'TicketController@index'
        ]);

        Route::get('/create', [
            'as' => 'ticket.create',
            'uses' => 'TicketController@create'
        ]);

        Route::get('/view', [
            'as' => 'ticket.show',
            'uses' => 'TicketController@show'
        ]);


    });

    # Asset Management
    Route::group(array('prefix' => 'asset'), function () {

        Route::get('/', [
            'as' => 'asset.index',
            'uses' => 'AssetController@index'
        ]);

        Route::get('/create', [
            'as' => 'asset.create',
            'uses' => 'AssetController@create'
        ]);

        Route::post('/store', [
            'as' => 'post.asset.store',
            'uses' => 'AssetController@store'
        ]);

        Route::post('/update', [
            'as' => 'post.asset.update',
            'uses' => 'AssetController@update'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'asset.edit',
            'uses' => 'AssetController@edit'
        ])->where('id', '[0-9]+');

        Route::get('/delete/{id}', [
            'as' => 'asset.delete',
            'uses' => 'AssetController@delete'
        ])->where('id', '[0-9]+');


    });

    #TOOLS & EQUIPMENT Management
    Route::group(array('prefix' => 'equipments'), function () {

        Route::get('/', [
            'as' => 'equipments.index',
            'uses' => 'EquipmentController@index'
        ]);

        Route::get('/add-tool', [
            'as' => 'equipments.tools.create',
            'uses' => 'EquipmentController@create'
        ]);

        Route::post('/add-tool', [
            'as' => 'equipments.tools.store',
            'uses' => 'EquipmentController@store'
        ]);

        Route::get('/edit-tool/{id}', [
            'as' => 'equipments.tools.edit',
            'uses' => 'EquipmentController@edit'
        ])->where('id', '[0-9]+');

        Route::post('/edit-tool', [
            'as' => 'equipments.tools.update',
            'uses' => 'EquipmentController@update'
        ]);

        Route::get('/delete-tool/{id}', [
            'as' => 'equipments.tools.delete',
            'uses' => 'EquipmentController@delete'
        ])->where('id', '[0-9]+');
    });

     #Logs Management
     Route::group(array('prefix' => 'log'), function () {

         Route::get('/installation', [
             'as' => 'log.installation.index',
             'uses' => 'InstallationLogController@index'
         ]);

         Route::get('/installation/add', [
             'as' => 'log.installation.create',
             'uses' => 'InstallationLogController@create'
         ]);

         Route::post('/installation/store', [
             'as' => 'log.installation.store',
             'uses' => 'InstallationLogController@store'
         ]);

         Route::get('/installation/edit/{id}', [
             'as' => 'log.installation.edit',
             'uses' => 'InstallationLogController@edit'
         ])->where('id', '[0-9]+');


         Route::post('/installation/update', [
             'as' => 'log.installation.update',
             'uses' => 'InstallationLogController@update'
         ]);

         Route::get('/installation/delete/{id}', [
             'as' => 'log.installation.delete',
             'uses' => 'InstallationLogController@delete'
         ])->where('id', '[0-9]+');


     ///////////////////////////////////////Maintenance Log routes//////////////

         Route::get('/maintenance', [
             'as' => 'log.maintenance.index',
             'uses' => 'MaintenanceLogController@index'
         ]);

         Route::get('/maintenance/add', [
             'as' => 'log.maintenance.create',
             'uses' => 'MaintenanceLogController@create'
         ]);

         Route::post('/maintenance/store', [
             'as' => 'log.maintenance.store',
             'uses' => 'MaintenanceLogController@store'
         ]);

         Route::get('/maintenance/edit/{id}', [
             'as' => 'log.maintenance.edit',
             'uses' => 'MaintenanceLogController@edit'
         ])->where('id', '[0-9]+');

         Route::post('/maintenance/update', [
             'as' => 'log.maintenance.update',
             'uses' => 'MaintenanceLogController@update'
         ]);

          Route::get('/maintenance/delete/{id}', [
              'as' => 'log.maintenance.delete',
              'uses' => 'MaintenanceLogController@delete'
          ])->where('id', '[0-9]+');

          Route::get('/test-cases', [
              'as' => 'log.testCases.index',
              'uses' => 'TestCasesController@index'
          ]);
     });

    #Documents Management
    Route::group(array('prefix' => 'documents'), function () {

        Route::get('/project', [
            'as' => 'document.project.index',
            'uses' => 'DocumentController@projectIndex'
        ]);

        Route::get('/project/add', [
            'as' => 'document.project.create',
            'uses' => 'DocumentController@projectCreate'
        ]);

        Route::post('/project/add', [
            'as' => 'document.project.store',
            'uses' => 'DocumentController@projectStore'
        ]);

        Route::get('/project/edit/{id}', [
            'as' => 'document.project.edit',
            'uses' => 'DocumentController@projectEdit'
        ])->where('id', '[0-9]+');


        Route::post('/project/edit', [
            'as' => 'document.project.update',
            'uses' => 'DocumentController@projectUpdate'
        ]);

        Route::get('/project/ajax', [
            'as' => 'document.project.ajax',
            'uses' => 'DocumentController@projectAjax'
        ]);

        Route::get('/project/delete/{id}', [
            'as' => 'document.project.delete',
            'uses' => 'DocumentController@projectDelete'
        ])->where('id', '[0-9]+');

        Route::get('/general', [
            'as' => 'document.general.index',
            'uses' => 'DocumentController@generalIndex'
        ]);

        Route::get('/general/add', [
            'as' => 'document.general.create',
            'uses' => 'DocumentController@generalCreate'
        ]);

        Route::post('/general/add', [
            'as' => 'document.general.create',
            'uses' => 'DocumentController@generalStore'
        ]);

        Route::post('/general/edit', [
            'as' => 'document.general.update',
            'uses' => 'DocumentController@generalUpdate'
        ]);

        Route::get('/general/edit/{id}', [
            'as' => 'document.general.edit',
            'uses' => 'DocumentController@generalEdit'
        ])->where('id', '[0-9]+');

        Route::get('/general/delete/{id}', [
            'as' => 'document.general.delete',
            'uses' => 'DocumentController@generalDelete'
        ])->where('id', '[0-9]+');

        Route::get('/special', [
            'as' => 'document.special.index',
            'uses' => 'DocumentController@specialIndex'
        ]);

        Route::get('/special/add', [
            'as' => 'document.special.create',
            'uses' => 'DocumentController@specialCreate'
        ]);

        Route::post('/special/add', [
            'as' => 'document.special.store',
            'uses' => 'DocumentController@specialStore'
        ]);

        Route::get('/special/edit/{id}', [
            'as' => 'document.special.edit',
            'uses' => 'DocumentController@specialEdit'
        ])->where('id', '[0-9]+');

        Route::post('/special/edit', [
            'as' => 'document.special.update',
            'uses' => 'DocumentController@specialUpdate'
        ]);

        Route::get('/special/delete/{id}', [
            'as' => 'document.special.delete',
            'uses' => 'DocumentController@specialDelete'
        ])->where('id', '[0-9]+');
    });

    //Survey Management

    Route::group(array('prefix' => 'survey'), function () {

        Route::get('/add', [
            'as' => 'survey.create',
            'uses' => 'SurveyController@create'
        ]);

        Route::get('/take/{id}', [
            'as' => 'survey.take',
            'uses' => 'SurveyController@takeSurvey'
        ])->where('id', '[0-9]+');

        Route::post('/add/store', [
            'as' => 'survey.store',
            'uses' => 'SurveyController@store'
        ]);

        Route::post('/take', [
            'as' => 'survey.submit.survey',
            'uses' => 'SurveyController@submitSurveyResult'
        ]);



        Route::get('/edit/{id}', [
            'as' => 'get.survey.edit',
            'uses' => 'SurveyController@edit'
        ])->where('id', '[0-9]+');


        Route::post('/update', [
            'as' => 'survey.post.update',
            'uses' => 'SurveyController@update'
        ]);

        Route::get('/site', [
            'as' => 'survey.site.index',
            'uses' => 'SurveyController@indexSiteSurvey'
        ]);

        Route::get('/performance', [
            'as' => 'survey.performance.index',
            'uses' => 'SurveyController@indexPerformanceSurvey'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'get.survey.delete',
            'uses' => 'SurveyController@delete'
        ])->where('id', '[0-9]+');

    });

    #Reports Management
    Route::group(array('prefix' => 'reports'), function () {

        Route::get('/', [
            'as' => 'report.index',
            'uses' => 'ReportController@index'
        ]);
    });

});


