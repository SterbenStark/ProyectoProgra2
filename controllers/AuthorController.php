<?php 

  require_once('Author.php');

  class AuthorController extends Controller {

    public function index() {  
      return view('authors/index',
       ['author'=>Author::all(),
        'title'=>'Lista Autores']);
    }

    public function show($id) {
      $aut = Author::find($id);
      return view('authors/show',
        ['author'=>$aut,
         'title'=>'Detalles Autor']);
    }
  }
?>