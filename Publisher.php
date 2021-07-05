<?php
  // file: Professor.php

class Publisher extends Model {

  static $publisher = [
    ['id'=>1,'publisher'=>'John Walker','country'=>'Estados Unidos',
    'founded'=>'1980','status'=>'Activo','books__book_id'=>'1',
    'books__title'=>'Reglamentos', ],  

    ['id'=>2,'publisher'=>'Shiva','country'=>'India',
    'founded'=>'1844','status'=>'Activo','books__book_id'=>'3',
    'books__title'=>'Boletines Informativos', ], 

    ['id'=>3,'publisher'=>'Jack el Destripador','country'=>'Reino Unido',
    'founded'=>'1888','status'=>'Activo','books__book_id'=>'4',
    'books__title'=>'Normativa Interna', ], 

    ['id'=>4,'publisher'=>'John Walker','country'=>'Estados Unidos',
    'founded'=>'1980','status'=>'Activo','books__book_id'=>'2',
    'books__title'=>'Politicas de COVID-19', ], 
  ];

  public static function all() { 
    return self::$publisher; 
  }

  public static function find($id) {
    foreach (self::$publisher as $key => $prof)
      if ($prof['id'] == $id) return $prof;
    return [];
  }
}
?>