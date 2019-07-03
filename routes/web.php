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



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| contain routes that use in admin application & only account with type=10 has access to them.
|
 */
Route::group(array('prefix' => 'admin','middleware' => ['auth']), function () {

    Route::get('/', 'AdminController@index');

    // Personel Place //
    Route::get('/personel', 'PersonelController@index');  // Personel List
    Route::post('/personel', 'PersonelController@index'); // ُ Search Personel


    Route::get('/personel/new', 'PersonelController@create'); // New Personel Form
    Route::post('/personel/new', 'PersonelController@store'); // New Personel store

    Route::get('/personel/edit/{personel}', 'PersonelController@edit'); // Edit Personel Form
    Route::post('/personel/edit/{personel}', 'PersonelController@update'); // Edit Personel store


    Route::get('/personel/search', 'PersonelController@search'); // New Personel Form
    Route::post('/personel/search', 'PersonelController@index'); // New Personel store

    Route::get('/personel/delete/{personel}', 'PersonelController@destroy'); // Delete An Item


    // Group Place //
    Route::get('/group', 'GroupController@index');  // group List
    Route::post('/group', 'GroupController@store'); // New group store

    // Branch Place //
    Route::get('/branch', 'BranchController@index');  // branch List
    Route::post('/branch', 'BranchController@store');  // branch List



    // Month Place //
    Route::get('/month', 'MonthController@index');  // branch List
    Route::post('/month', 'MonthController@store'); // New group store


    // Item Place //
    Route::get('/item', 'ItemController@index');  // Item List
    Route::post('/item', 'ItemController@store'); // Store New Item



    // Bank Place //
    Route::get('/bank', 'BankController@index');  // Item List
    Route::post('/bank', 'BankController@store'); // Store New Item



    // Payslip Place //
    Route::get('/payslip', 'PayslipController@index');  // Item List
    Route::post('/payslip', 'PayslipController@index'); // Store New Item

    Route::get('/payslip/new/{personel}', 'PayslipController@create');  // Item List
    Route::post('/payslip/new/{personel}', 'PayslipController@store'); // Store New Item


    Route::get('/payslip/item/{payslip}', 'PayslipController@AddItem');  // Item List
    Route::post('/payslip/item/{payslip}', 'PayslipController@StoreItem'); // Store New Item

    Route::get('/payslip/delete/{payslip}', 'PayslipController@destroy'); // Store New Item

    Route::get('/payslip/item/delete/{payitem}', 'PayslipController@DeleteItem'); // Delete An Item


    Route::get('/payslip/autoItem/{payslip}', 'PayslipController@autoItem'); // Calculate Automatic Item



    // Payslip Place //
    Route::get('/report', 'ReportController@index');  // Item List
    Route::get('/report/excel', 'ReportController@excel');  // Item List
    Route::get('/report/bank', 'ReportController@bank');  // Item List
    Route::get('/report/tax', 'ReportController@tax');  // Item List


});

