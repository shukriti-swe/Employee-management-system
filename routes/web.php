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
/* Home page */

Route::get('/', 'homecontroller@index')->name('home');
Route::get('/about', 'homecontroller@about')->name('about');
Route::get('/service', 'homecontroller@service')->name('service');
Route::get('/photos', 'homecontroller@photos')->name('photos');
Route::get('/contact', 'homecontroller@contact')->name('contact');
Route::get('/description', 'homecontroller@description')->name('description');

/* File Debugging */

Auth::routes();

Route::get('/employee', 'debugging@employee')->name('employee')->middleware('auth');
Route::get('/admin','debugging@admin')->middleware('admin');
Route::get('/ceo',  'debugging@ceo')->middleware('ceo');

Route::group(['middleware' => ['admin']], function () {
Route::get('/admin', 'debugging@admin'); });


/* Admin */
Route::get('/admin/addemployee', 'adminController@addemployee')->name('addemployee');
Route::get('/admin/profile/{id}', 'adminController@adminprofile')->name('adminprofile');
Route::get('/admin/profile_update/{id}', 'adminController@profile_update')->name('profile_update');
Route::post('/admin/profile_save/{id}', 'adminController@profile_save')->name('adminprofile_save');
Route::get('/admin/employee_list', 'adminController@employee_list')->name('employee_list');
Route::get('/admin/employee_list_pdf', 'adminController@employee_list_pdf')->name('employee_list_pdf');

Route::get('/admin/take_attendance', 'adminController@take_attendance')->name('take_attendance');
Route::get('/admin/attendance_store', 'adminController@attendance_store')->name('attendance_store');
Route::get('/admin/show_attendance', 'adminController@show_attendance')->name('show_attendance');
Route::get('/admin/view_details/{id}', 'adminController@view_details')->name('view_details');
Route::get('/admin/generate_pdf/{id}', 'adminController@generate_pdf')->name('generate_pdf');
Route::get('/admin/attend_date_search', 'adminController@attend_date_search')->name('attend_date_search');
Route::get('/admin/make_salary_report', 'adminController@make_salary_report')->name('make_salary_report');
Route::get('/admin/store_salary_report', 'adminController@store_salary_report')->name('store_salary_report');
Route::get('/admin/show_salary_report', 'adminController@show_salary_report')->name('show_salary_report');
Route::get('/admin/search_salary_report', 'adminController@search_salary_report')->name('search_salary_report');
Route::get('/admin/salary_pdf/{search}', 'adminController@salary_pdf')->name('salary_pdf');
Route::get('/admin/make_monthly_extra_bill', 'adminController@make_monthly_extra_bill')->name('make_monthly_extra_bill');
Route::get('/admin/extra_bill_save', 'adminController@extra_bill_save')->name('extra_bill_save');
Route::get('/admin/show_extra_bill_report', 'adminController@show_extra_bill_report')->name('show_extra_bill_report');
Route::get('/admin/search_extra_bill', 'adminController@search_extra_bill')->name('search_extra_bill');
Route::get('/admin/extra_bill_pdf/{search}', 'adminController@extra_bill_pdf')->name('extra_bill_pdf');





/* Ceo */
Route::get('/ceo/adduser', 'ceoController@adduser')->name('adduser');
Route::get('/ceo/profile/{id}', 'ceoController@ceoprofile')->name('ceoprofile');
Route::get('/ceo/profile_update/{id}', 'ceoController@profile_update')->name('profile_update');
Route::post('/ceo/profile_save/{id}', 'ceoController@profile_save')->name('ceoprofile_save');
Route::get('/ceo/show_attendance_report', 'ceoController@show_attendance_report')->name('show_attendance_report');
Route::get('/ceo/view_details/{id}', 'ceoController@view_details')->name('view_details');
Route::get('/ceo/generate_pdf/{id}', 'ceoController@generate_pdf')->name('generate_pdf');
Route::get('/ceo/attend_date_search', 'ceoController@attend_date_search')->name('attend_date_search');
Route::get('/ceo/delete_attendance/{id}', 'ceoController@delete_attendance')->name('delete_attendance');
Route::get('/ceo/view_salary_report', 'ceoController@view_salary_report')->name('view_salary_report');
Route::get('/ceo/delete_salary_report/{id}', 'ceoController@delete_salary_report')->name('delete_salary_report');
Route::get('/ceo/search_salary_date', 'ceoController@search_salary_date')->name('search_salary_date');
Route::get('/ceo/update_salary_report/{id}', 'ceoController@update_salary_report')->name('update_salary_report');
Route::get('/ceo/update_save_salary_report/{id}', 'ceoController@update_save_salary_report')->name('update_save_salary_report');
Route::get('/ceo/delete_save_salary_report/{id}', 'ceoController@delete_save_salary_report')->name('delete_save_salary_report');

Route::get('/ceo/view_equipment_report', 'ceoController@view_equipment_report')->name('view_equipment_report');
Route::get('/ceo/search_equipments_report', 'ceoController@search_equipments_report')->name('search_equipments_report');
Route::get('/ceo/update_equipment_report/{id}', 'ceoController@update_equipment_report')->name('update_equipment_report');
Route::get('/ceo/equipment_update_save/{id}', 'ceoController@equipment_update_save')->name('equipment_update_save');
Route::get('/ceo/delete_save_salary_report/{id}', 'ceoController@delete_equipment_report')->name('delete_equipment_report');

Route::get('/ceo/view_extrabill_report', 'ceoController@view_extrabill_report')->name('view_extrabill_report');
Route::get('/admin/search_extra_bill', 'adminController@search_extra_bill')->name('search_extra_bill');
Route::get('/admin/extra_bill_pdf/{search}', 'adminController@extra_bill_pdf')->name('extra_bill_pdf');

Route::get('/ceo/view_monthly_closing_report', 'ceoController@view_monthly_closing_report')->name('view_monthly_closing_report');


/* Employee */
Route::get('/employee/profile/{id}', 'employeeController@employeeprofile')->name('employeeprofile');
Route::get('/employee/profile_update/{id}', 'employeeController@profile_update')->name('profile_update');
Route::post('/employee/profile_save/{id}', 'employeeController@profile_save')->name('employeeprofile_save');
Route::get('/employee/search_monthly_closing_report', 'employeeController@search_monthly_closing_report')->name('search_monthly_closing_report');

       // start daily_work_report

Route::get('/employee/make_daily_work_report', 'employeeController@make_daily_work_report')->name('make_daily_work_report');
Route::get('/employee/daily_work_report_save', 'employeeController@daily_work_report_save')->name('daily_work_report_save'); 
Route::get('/employee/show_daily_work_report', 'employeeController@show_daily_work_report')->name('show_daily_work_report'); 
Route::get('/employee/search_daily_work_report', 'employeeController@search_daily_work_report')->name('search_daily_work_report');
Route::get('/employee/daily_work_pdf/{search}', 'employeeController@daily_work_pdf')->name('daily_work_pdf');

       // start Equipment cost report

Route::get('/employee/make_equipment_cost_report', 'employeeController@make_equipment_cost_report')->name('make_equipment_cost_report');
Route::get('/employee/equipment_report_save', 'employeeController@equipment_report_save')->name('equipment_report_save'); 
Route::get('/employee/show_equipment_report', 'employeeController@show_equipment_report')->name('show_equipment_report');
Route::get('/employee/search_equipment_report', 'employeeController@search_equipment_report')->name('search_equipment_report');
Route::get('/employee/equipment_pdf/{search}', 'employeeController@equipment_pdf')->name('equipment_pdf');

// start Equipment cost report

Route::get('/employee/make_monthly_closing_report', 'employeeController@make_monthly_closing_report')->name('make_monthly_closing_report');
Route::get('/employee/monthly_closing_report_save', 'employeeController@monthly_closing_report_save')->name('monthly_closing_report_save'); 
Route::get('/employee/show_monthly_closing_report', 'employeeController@show_monthly_closing_report')->name('show_monthly_closing_report');
Route::get('/employee/search_monthly_closing_report', 'employeeController@search_monthly_closing_report')->name('search_monthly_closing_report');
Route::get('/employee/monthly_closing_report_pdf/{search}', 'employeeController@monthly_closing_report_pdf')->name('monthly_closing_report_pdf');