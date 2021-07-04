<?php
    require_once('Book.php');
    require_once('Author.php');
    require_once('Publisher.php'); 
    require_once('Professor.php'); 
     
  Route::get('/', function () { return view('welcome'); });

  Route::get('book', 'BookController@index'); 
  Route::get('book/(:number)', 'BookController@show');  
 

 Route::resource('author', 'AuthorController');
  //Route::resource('book', 'BookController');
  Route::resource('publisher', 'PublisherController');
  Route::resource('professor', 'ProfessorController');
    Route::dispatch();
?>
