<?php
    Route::get('/', 'BookController@index');
    Route::get('book/(:number)', 'BookController@show');
    Route::get('author/(:number)', 'AuthorController@show');
    Route::get('author', 'AuthorController@index');
    Route::get('publisher', 'PublisherController@index');
    Route::get('publisher/(:number)', 'PublisherController@show');
    Route::dispatch();
?>