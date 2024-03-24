<?php
class Publisher extends Model {

  static $publishers = [
    [
      'id'=>1,
      'name'=>'John Wiley & Sons',
      'country'=>'United States',
      'founded'=>1807,
      'genere'=>'Academic',
      'books'=>[
        [
          'book_id'=>1,
          'book_title'=>'Operating System Concepts',
        ],
        [
          'book_id'=>2,
          'book_title'=>'Database System Concepts',
        ],
      ]
    ],
    [
      'id'=>2,
      'name'=>'Pearson Education',
      'country'=>'United Kingdom',
      'founded'=>1844,
      'genere'=>'Education',
      'books'=>[
        [
          'book_id'=>3,
          'book_title'=>'Computer Networks',
        ],
        [
          'book_id'=>4,
          'book_title'=>'Modern Operating Systems',
        ],
      ]
    ],
  ];

  public static function all() { 
    return self::$publishers; 
  }

  public static function find($id) {
    foreach (self::$publishers as $key => $publisher)
      if ($publisher['id'] == $id) return $publisher;
    return [];
  }
}
?>
