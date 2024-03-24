<?php
class Author extends Model {

  static $authors = [
    [
      'id'=>1,
      'name'=>'Abraham Silberschatz',
      'nationality'=>'Israelis / American',
      'birth'=>1952,
      'fields'=>'Database Systems, Operating Systems',
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
      'name'=>'Andrew S. Tanenbaum',
      'nationality'=>'Dutch / American',
      'birth'=>1944,
      'fields'=>'Distributed computing, Operating Systems',
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
    ]
  ];

  public static function all() { 
    return self::$authors; 
  }

  public static function find($id) {
    foreach (self::$authors as $key => $author)
      if ($author['id'] == $id) return $author;
    return [];
  }
}
?>
