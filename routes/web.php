<?php

use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;
//Logout For Everyone
 Route::get('blood/center{id}', 'NewsController@blooddeptviews')->name('admin.blooddept.views');

Route::get('/status-updatess/{id}','CityController@status_updatess');
Route::get('/status-updatescenter/{id}','CityController@status_updatescenter');

Route::get('/searchddds', 'AdminController@searchs');
 Route::get('home/news', 'NewsController@news')->name('admin.new');
 Route::get('home/contact', 'HomeController@contact')->name('admin.contact');
  
  Route::get('home/doctors', 'NewsController@doctor')->name('admin.doctor.index');
    Route::get('home/gallery', 'NewsController@gallery')->name('admin.gallery.index');

 Route::get('home/departments', 'NewsController@depts')->name('admin.dept');
 Route::get('departments/views{pcid}', 'NewsController@deptviews')->name('admin.dept.views');

Route::get('news/view/{id}', 'NewsController@view')->name('admin.news.views');



 Route::get('home/facilities', 'FacilityController@facility')->name('admin.facilites');
Route::get('facility/view/{id}', 'FacilityController@view')->name('admin.facility.views');

//user
Route::get('/medicine', 'user\userController@index')->name('user.home');
Route::get('/product/{id}', 'user\userController@view')->name('user.product');

Route::get('/searchr', 'user\userController@search')->name('user.searchr');
Route::get('/searchr?c={id}', 'user\userController@view')->name('user.searchr.cat');



Route::get('/view/{id}', 'user\userController@view')->name('user.view');
Route::post('/view/{id}', 'user\userController@post');



Route::get('doctorlogins/{id}','adminController@doctorlogins');
Route::get('doctor/editportfolio/{id}','adminController@editdoctor');
Route::post('doctor/updatedoctor/{id}','crudController@updateData');

Route::get('/', 'frontController@index');
Route::get('doctor','frontController@doctor');



Route::get('logout5','MyController@logout5');
Route::get('logout1','MyController@logout1');
Route::get('logout2','MyController@logout2');
//Login Route
Route::post('login', 'StoreController@login');

Route::get('doctorloginform', 'StoreController@doctorloginform');
Route::post('doctorlogin', 'StoreController@doctorlogin');
Route::get('doctorlogins', 'StoreController@doctorlogin');

Route::post('bloodcenterlogin', 'StoreController@bloodcenterlogin');
//User Panel Route
Route::post('contactstore','StoreController@contactstore');
Route::post('register','StoreController@store');

//User Panel Middleware
Route::group(['middleware'=>'isloggedin'], function(){
	Route::get('User/request','MyController@request');
	
});


Route::get('bloodcenters','frontController@bloodcenters');
Route::group(['middleware'=>'IsAdmin'], function(){
Route::get('bloodcenterlogins/{id}','adminController@centerlogins');
	Route::post('blood/updatecenters/{id}','StoreController@updatecenters');
Route::get('blood/editcenters/{id}','adminController@editcenters');

});



Route::get('User/index','UserController@home');
	Route::get('User/request','UserController@request');
  	Route::get('User/doner','UserController@doner');
  	Route::get('User/bloodcenter','UserController@bloodcenter');
	Route::get('User/igndex','UserController@home');
	Route::get('User/about','UserController@about');
Route::get('User/register','UserController@register');
Route::get('User/tips','UserController@tips');
Route::get('User/contact','UserController@contact');
Route::get('User/privacy','UserController@privacy');
Route::get('User/search-blood', 'UserController@search');
Route::post('User/search_blood', 'UserController@search_blood');

Route::get('User/bloodcenter/{id}','NewsController@blooddeptviews');


Route::group(['middleware'=>'IsAdmin'], function(){
Route::get('Admin/home1','AdminController@admin_index');
Route::get('Admin/home','AdminController@admin');
Route::get('Admin/alldonorlist','AdminController@alldonor');
Route::get('Admin/message','AdminController@message');
Route::get('Admin/deletepc{id}','AdminController@deletePc');
Route::get('Admin/portcats','adminController@portcats');
Route::get('Admin/deletess{id}','AdminController@deletess');
Route::post('Admin/addPc','crudController@insertData');
Route::get('Admin/new-portfolio','adminController@portfolio');
Route::post('Admin/addPortfolio','crudController@insertData');
Route::get('Admin/editpc/{id}','adminController@editPc');
Route::post('Admin/updatePortfolio/{id}','crudController@updateData');
Route::get('Admin/deletepc/{id}','adminController@deletePc');
Route::get('Admin/editportfolio/{id}','adminController@editPortfolio');
Route::get('Admin/deleteportfolio/{id}','adminController@deletePortfolio');
Route::get('Admin/all-portfolio','adminController@allportfolio');





    //categories
    Route::get('Admin/categories', 'admin_panel\categoriesController@index')->name('admin.categories');
    Route::post('Admin/categories', 'admin_panel\categoriesController@posted');

    Route::get('Admin/categories/edit/{id}', 'admin_panel\categoriesController@edit')->name('admin.categories.edit');
    Route::post('Admin/categories/edit/{id}', 'admin_panel\categoriesController@update');

    Route::get('Admin/categories/delete/{id}', 'admin_panel\categoriesController@delete')->name('admin.categories.delete');
    Route::post('Admin/categories/delete/{id}', 'admin_panel\categoriesController@destroy');

     //products
    Route::get('Admin/products', 'admin_panel\productsController@index')->name('admin.products');

    Route::get('Admin/products/create', 'admin_panel\productsController@create')->name('admin.products.create');
    Route::post('Admin/products/create', 'admin_panel\productsController@store');

    Route::get('Admin/products/edit/{id}', 'admin_panel\productsController@edit')->name('admin.products.edit');
    Route::post('Admin/products/edit/{id}', 'admin_panel\productsController@update');

    Route::get('Admin/products/delete/{id}', 'admin_panel\productsController@delete')->name('admin.products.delete');
    Route::post('Admin/products/delete/{id}', 'admin_panel\productsController@destroy');


	

    Route::get('Admin/Breakingnews', 'NewsController@index')->name('admin.Breakingnews');
    Route::post('Admin/Breakingnews', 'NewsController@posted');

      Route::get('Admin/Breakingnews/edit/{id}', 'NewsController@edit')->name('admin.Breakingnews.edit');
    Route::post('Admin/Breakingnews/edit/{id}', 'NewsController@update');

    Route::get('Admin/Breakingnews/delete/{id}', 'NewsController@delete')->name('admin.Breakingnews.delete');
    Route::post('Admin/Breakingnews/delete/{id}', 'NewsController@destroy');




    Route::get('Admin/newses', 'NewsController@indexs')->name('admin.newss');

    Route::get('Admin/news/create', 'NewsController@create')->name('admin.news.create');
    Route::post('Admin/news/create', 'NewsController@store');

    Route::get('Admin/news/edit/{id}', 'NewsController@editnews')->name('admin.news.edit');
    Route::post('Admin/news/edit/{id}', 'NewsController@updatenews');

    Route::get('Admin/news/delete/{id}', 'NewsController@deletenews')->name('admin.news.delete');
    Route::post('Admin/news/delete/{id}', 'NewsController@destroynews');


    
    Route::get('Admin/facility', 'FacilityController@index')->name('admin.facility');

    Route::get('Admin/facility/create', 'FacilityController@create')->name('admin.facility.create');
    Route::post('Admin/facility/create', 'FacilityController@store');

    Route::get('Admin/facility/edit/{id}', 'FacilityController@editfacility')->name('admin.facility.edit');
    Route::post('Admin/facility/edit/{id}', 'FacilityController@updatefacility');

    Route::get('Admin/facility/delete/{id}', 'FacilityController@deletefacility')->name('admin.facility.delete');
    Route::post('Admin/facility/delete/{id}', 'FacilityController@destroyfacility');




    Route::get('Admin/contact', 'HomeController@index')->name('admin.contact.ph');

    Route::get('Admin/contact/create', 'HomeController@create')->name('admin.contact.create');
    Route::post('Admin/contact/create', 'HomeController@posted');

    Route::get('Admin/contact/edit/{id}', 'HomeController@edit')->name('admin.contact.edit');
    Route::post('Admin/contact/edit/{id}', 'HomeController@update');

    Route::get('Admin/contact/delete/{id}', 'HomeController@delete')->name('admin.contact.delete');
    Route::post('Admin/contact/delete/{id}', 'HomeController@destroy');



    Route::get('Admin/city', 'CityController@city')->name('admin.city');

    Route::get('Admin/city/create', 'CityController@create')->name('admin.city.create');
    Route::post('Admin/city/create', 'CityController@posted');

    Route::get('Admin/city/edit/{id}', 'CityController@edit')->name('admin.city.edit');
    Route::post('Admin/city/edit/{id}', 'CityController@update');

    Route::get('Admin/city/delete/{id}', 'CityController@delete')->name('admin.city.delete');
    Route::post('Admin/city/delete/{id}', 'CityController@destroy');

Route::get('/status-update/{id}','CityController@status_update');



Route::get('/search', 'AdminController@search');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');


Route::get('Admin/bloodcontact', 'BloodController@index')->name('admin.bloodcontact.ph');

    Route::get('Admin/bloodcontact/create', 'BloodController@create')->name('admin.bloodcontact.create');
    Route::post('Admin/bloodcontact/create', 'BloodController@posted');

    Route::get('Admin/bloodcontact/edit/{id}', 'BloodController@edit')->name('admin.bloodcontact.edit');
    Route::post('Admin/bloodcontact/edit/{id}', 'BloodController@update');

    Route::get('Admin/bloodcontact/delete/{id}', 'BloodController@delete')->name('admin.bloodcontact.delete');
    Route::post('Admin/bloodcontact/delete/{id}', 'BloodController@destroy');



});








//Requestor Route
Route::group(['middleware'=>'IsRequestor'], function(){
Route::get('Requestor/home','RequestorController@requestor_index');
Route::get('Requestor/bloodcenter','RequestorController@bloodcenter');
Route::get('Requestor/about','RequestorController@requestor_about');
Route::get('Requestor/request','RequestorController@requestor_request');
Route::get('Requestor/tips','RequestorController@requestor_tips');
Route::get('Requestor/contact','RequestorController@requestor_contact');
Route::get('Requestor/privacy','RequestorController@requestor_privacy');
Route::post('Requestor/request_blood_store', 'RequestorController@request_blood_store');
Route::get('Requestor/search-blood', 'RequestorController@search');
Route::post('Requestor/search_blood', 'RequestorController@search_blood');
Route::get('Requestor/yourrequest', 'RequestorController@your_request');
Route::get('Requestor/editrequest/{id}','RequestorController@update');
Route::post('Requestor/updaterequest/{id}','RequestorController@update_data');
Route::get('Requestor/delete/{id}','RequestorController@delete');
Route::get('Requestor/bloodcenter/{id}','RequestorController@blooddeptviews');


});


  





Route::get('Requestor/yourrequest/{id}', 'RequestorController@your_request');

Route::get('Requestor/edit1request/{id}','RequestorController@update1');





Route::get('doctor/login','DonorController@doctorlogin');
//Donor Route
Route::group(['middleware'=>'IsDonor'], function(){
Route::get('Donor/home','DonorController@donor_index');
Route::get('Donor/bloodcenter','DonorController@bloodcenter');
Route::get('Donor/about','DonorController@donor_about');
Route::get('Donor/adddonation','DonorController@adddonation');
Route::post('Donor/donation_store','DonorController@donation_store');
Route::get('Donor/request','DonorController@donor_request');
Route::get('Donor/donation','DonorController@donor_donation');
Route::get('Donor/contact','DonorController@donor_contact');
Route::get('Donor/tips','DonorController@donor_tips');
Route::get('Donor/search-blood', 'DonorController@search');
Route::post('Donor/search_blood', 'DonorController@search_blood');
Route::post('Donor/request_blood_store', 'DonorController@request_blood_store');
Route::get('Donor/yourrequest', 'DonorController@your_request');
Route::get('Donor/editrequest/{id}','DonorController@update');
Route::post('Donor/updaterequest/{id}','DonorController@update_data');
Route::get('Donor/delete/{id}','DonorController@delete');

 Route::get('blood/center{id}', 'NewsController@rblooddeptviews')->name('admin.dblooddept.views');
 Route::get('blood/center{id}', 'NewsController@donerblooddeptviews')->name('admin.donerblooddept.views');
});














