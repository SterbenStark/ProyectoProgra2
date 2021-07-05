<?php
  // file: Professor.php

class Book extends Model {

  static $books = [
    ['id'=>1,'title'=>'Reglamentos ','copyright'=>'2010',
    'language'=>'Ingles/Español','pages'=>'15','author'=>'Milton Gómez Pérez','author_id'=>'1',
    'publisher'=>'John Walker','publisher_id'=>'1',],

    ['id'=>2,'title'=>'Politicas de COVID-19','copyright'=>'2020',
     'language'=>'Ingles/Español','pages'=>'8','author'=>'Jiandro Sibaja Granados','author_id'=>'3',
     'publisher'=>'John Walker','publisher_id'=>'1',], 

     ['id'=>3,'title'=>'Boletines Informativos','copyright'=>'2015',
      'language'=>'Ingles/Español','pages'=>'80','author'=>'Cristina Vasquez Granados','author_id'=>'2',
      'publisher'=>'Shiva','publisher_id'=>'2',],  

      ['id'=>4,'title'=>'Normativa Interna','copyright'=>'2010',
       'language'=>'Español','pages'=>'90','author'=>'Milton Gómez Pérez','author_id'=>'1',
       'publisher'=>'Jack el Destripador','publisher_id'=>'3',],  
  ];

  public static function all() { 
    return self::$books; 
  }

  public static function find($id) {
    foreach (self::$books as $key => $prof)
      if ($prof['id'] == $id) return $prof;
    return [];
  }
}
?>