<?php 
Route::get('crud/form','prnc\crud\CrudController@index')->name('main');
Route::POST('crud/store','prnc\crud\CrudController@store')->name('input');
Route::get('crud/showdata','prnc\crud\CrudController@showdata')->name('showdata');
Route::POST('crud/show','prnc\crud\CrudController@show')->name('show');
Route::POST('crud/update','prnc\crud\CrudController@update')->name('update');
Route::get('crud/after/update','prnc\crud\CrudController@afterupdate')->name('afterupdate');



