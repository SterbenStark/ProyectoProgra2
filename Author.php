<?php
  // file: Professor.php

class Author extends Model {

  static $author = [
    ['id'=>1,'author'=>'Milton Gómez Pérez','nationality'=>'Costarricense',
     'birth_year'=>'1995','fields'=>'Ingenieria en Sistemas, Bases de Datos, Tecnologías Low Code',
     'books__book_id'=>'1','books__title'=>'Reglamentos'], 
    
     ['id'=>2,'author'=>'Cristina Vasquez Granados','nationality'=>'Costarricense',
     'birth_year'=>'1994','fields'=>'Administración de Empresas, Recursos Humanos, Comercio Internacional',
     'books__book_id'=>'3','books__title'=>'Boletines Informativos'],
     
     ['id'=>3,'author'=>'Jiandro Sibaja Granados','nationality'=>'Canadiense',
     'birth_year'=>'1997','fields'=>'Ingenieria en Sistemas, Administración de Recursos',
     'books__book_id'=>'2','books__title'=>'Politicas de COVID-19'],
  ];

  public static function all() { 
    return self::$author; 
  }

  public static function find($id) {
    foreach (self::$author as $key => $prof)
      if ($prof['id'] == $id) return $prof;
    return [];
  }
}
?>