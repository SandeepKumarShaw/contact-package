<?php

Route::group(['namespace' =>'Sandy\Contact\Http\Controllers'], function(){
  Route::get('contact','ContactController@index')->name('contact');
  Route::post('contact','ContactController@send')->name('contact');
});






?>