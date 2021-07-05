<?php
  // file: Professor.php

class Book extends Model {

  static $books = [
    ['id'=>1,'title'=>'Reglamentos ','copyright'=>'2012',
    'language'=>'ENGLISH','pages'=>'15','author'=>'Abraham Silberschatz','author_id'=>'1',
    'publisher'=>'John Wiley & Sons','publisher_id'=>'1',],

    ['id'=>2,'title'=>'Politicas de COVID-19','copyright'=>'2010',
     'language'=>'ENGLISH','pages'=>'8','author'=>'Abraham Silberschatz','author_id'=>'1',
     'publisher'=>'John Wiley & Sons','publisher_id'=>'1',], 

     ['id'=>3,'title'=>'Boletines Informativos','copyright'=>'2010',
      'language'=>'ENGLISH','pages'=>'80','author'=>'Andrew S. Tanenbaum','author_id'=>'2',
      'publisher'=>'Pearson Education','publisher_id'=>'2',],  

      ['id'=>4,'title'=>'Normativa Interna','copyright'=>'2014',
       'language'=>'ENGLISH','pages'=>'90','author'=>'Andrew S. Tanenbaum','author_id'=>'2',
       'publisher'=>'Pearson Education','publisher_id'=>'2',],  
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