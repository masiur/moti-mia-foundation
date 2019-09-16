<?php

Route::group(['middleware' => ['auth']],function (){
       Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
});