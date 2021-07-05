<?php
  // file: controllers/BookController.php

  require_once('Book.php');

  class BookController extends Controller {

    public function index() {  
      return view('books/index',
       ['books'=>Book::all(),
        'title'=>'Documentos']);
    }

    public function show($id) {
      $book = Book::find($id);
      return view('books/show',
        ['books'=>$book,
         'title'=>'Documentos Detalle']);
    }
    
    /*public function update($id){
      return BookController::update($id,$request);
    }*/
  }
?>