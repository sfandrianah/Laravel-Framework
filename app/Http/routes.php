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

//$new = Route();
//$new->get();

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Pages\AuthLoginController@doLogin');
Route::get('auth/logout', 'Pages\AuthLoginController@doLogout');

Route::group(['middleware' => 'auth.before.login'], function() {
    Route::get('', 'Pages\ControllerDashboard@index');
    Route::get('dashboard', 'Pages\ControllerDashboard@index');
    Route::get('master-kecamatan', 'Pages\Master\MasterKecamatanController@index');
    Route::post('pagination', 'Basic\Page\PaginationController@index');

    Route::group(['prefix' => 'master'], function () {
        Route::group(['prefix' => 'benefit'], function () {
            Route::get('', 'Pages\Master\MasterBenefitController@index');
            Route::post('', 'Pages\Master\MasterBenefitController@index');
            Route::post('save', 'Pages\Master\MasterBenefitController@save');
            Route::post('update', 'Pages\Master\MasterBenefitController@update');
            Route::delete('delete', 'Pages\Master\MasterBenefitController@delete');
        });
        Route::group(['prefix' => 'city'], function () {
            Route::get('', 'Pages\Master\MasterCityController@index');
            Route::post('', 'Pages\Master\MasterCityController@index');
            Route::post('save', 'Pages\Master\MasterCityController@save');
            Route::post('update', 'Pages\Master\MasterCityController@update');
            Route::post('lovCityProvince', 'Pages\Master\MasterCityController@lovCityProvince');
            Route::delete('delete', 'Pages\Master\MasterCityController@delete');
        });
        Route::group(['prefix' => 'district'], function () {
            Route::get('', 'Pages\Master\MasterDistrictController@index');
            Route::post('', 'Pages\Master\MasterDistrictController@index');
            Route::post('save', 'Pages\Master\MasterDistrictController@save');
            Route::post('update', 'Pages\Master\MasterDistrictController@update');
            Route::delete('delete', 'Pages\Master\MasterDistrictController@delete');
        });

        Route::group(['prefix' => 'education'], function () {
            Route::get('', 'Pages\Master\MasterEducationController@index');
            Route::post('', 'Pages\Master\MasterEducationController@index');
            Route::post('save', 'Pages\Master\MasterEducationController@save');
            Route::post('update', 'Pages\Master\MasterEducationController@update');
            Route::delete('delete', 'Pages\Master\MasterEducationController@delete');
        });

        Route::group(['prefix' => 'village'], function () {
            Route::get('', 'Pages\Master\MasterVillageController@index');
            Route::post('', 'Pages\Master\MasterVillageController@index');
            Route::post('save', 'Pages\Master\MasterVillageController@save');
            Route::post('update', 'Pages\Master\MasterVillageController@update');
            Route::delete('delete', 'Pages\Master\MasterVillageController@delete');
        });

        Route::group(['prefix' => 'job'], function () {
            Route::get('', 'Pages\Master\MasterJobController@index');
            Route::post('', 'Pages\Master\MasterJobController@index');
            Route::post('save', 'Pages\Master\MasterJobController@save');
            Route::post('update', 'Pages\Master\MasterJobController@update');
            Route::delete('delete', 'Pages\Master\MasterJobController@delete');
        });

        Route::group(['prefix' => 'province'], function () {
            Route::get('', 'Pages\Master\MasterProvinceController@index');
            Route::post('', 'Pages\Master\MasterProvinceController@index');
            Route::post('save', 'Pages\Master\MasterProvinceController@save');
            Route::post('update', 'Pages\Master\MasterProvinceController@update');

            Route::delete('delete', 'Pages\Master\MasterProvinceController@delete');
            Route::delete('deleteCollection', 'Pages\Master\MasterProvinceController@deleteCollection');
        });
    });

    Route::group(['prefix' => 'lembaga'], function () {
        Route::group(['prefix' => 'registrasi'], function () {
            Route::get('', 'Pages\Lembaga\RegistrasiLembagaController@index');
            Route::post('', 'Pages\Lembaga\RegistrasiLembagaController@index');
            Route::post('save', 'Pages\Lembaga\RegistrasiLembagaController@save');
            Route::group(['prefix' => 'approval'], function () {
                Route::get('', 'Pages\Lembaga\ApprovalRegistrasiLembagaController@index');
                Route::post('', 'Pages\Lembaga\ApprovalRegistrasiLembagaController@index');
                Route::post('approve', 'Pages\Lembaga\ApprovalRegistrasiLembagaController@approve');
                Route::post('reject', 'Pages\Lembaga\ApprovalRegistrasiLembagaController@reject');
            });
        });
        Route::group(['prefix' => 'change'], function () {
            Route::get('', 'Pages\Lembaga\ChangeLembagaController@index');
            Route::post('', 'Pages\Lembaga\ChangeLembagaController@index');
            Route::post('save', 'Pages\Lembaga\ChangeLembagaController@save');
            Route::group(['prefix' => 'approval'], function () {
                Route::get('', 'Pages\Lembaga\ApprovalRegistrasiLembagaController@index');
                Route::post('', 'Pages\Lembaga\ApprovalRegistrasiLembagaController@index');
                Route::post('approve', 'Pages\Lembaga\ApprovalRegistrasiLembagaController@approve');
                Route::post('reject', 'Pages\Lembaga\ApprovalRegistrasiLembagaController@reject');
            });
        });
        
    });

    Route::group(['prefix' => 'security'], function(){
        Route::group(['prefix' => 'user'], function () {
            Route::get('', 'Pages\Security\SecurityUserController@index');
            Route::post('', 'Pages\Security\SecurityUserController@index');
            Route::post('save', 'Pages\Security\SecurityUserController@save');
            Route::post('update', 'Pages\Security\SecurityUserController@update');
            Route::delete('delete', 'Pages\Security\SecurityUserController@delete');
        });
        Route::group(['prefix' => 'group'], function () {
            Route::get('', 'Pages\Security\SecurityGroupController@index');
            Route::post('', 'Pages\Security\SecurityGroupController@index');
            Route::post('save', 'Pages\Security\SecurityGroupController@save');
            Route::post('update', 'Pages\Security\SecurityGroupController@update');
            Route::delete('delete', 'Pages\Security\SecurityGroupController@delete');
        });
    });

    Route::group(['prefix' => 'upload'], function () {
        Route::get('', 'Pages\UploadController@index');
        Route::post('storeImage', 'Pages\UploadController@storeImage');
        Route::post('storeExcel', 'Pages\UploadController@storeExcel');
        Route::post('readAndStoreExcel', 'Pages\UploadController@readAndStoreExcel');
    });

    Route::group(['prefix' => 'report'], function () {
        Route::get('', 'Pages\ReportController@index');
        Route::post('reportPDF', 'Pages\ReportController@reportPDF');
        Route::post('reportExcel5', 'Pages\ReportController@reportExcel5');
        Route::post('reportExcel7', 'Pages\ReportController@reportExcel7');
        Route::post('reportCSV', 'Pages\ReportController@reportCSV');
    });
});
