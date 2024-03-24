<?php
  require_once('models/Book.php');

  class BookController extends Controller {
    public function index() {  
      return view('book',
        [
          'books'=>Book::all(),
          'title'=>'Books List'
        ]
      );
    }

    public function show($id) {
      $book = Book::find($id);
      return view('book2',
        [
          'book'=>$book,
          'title'=>'Book Detail'
        ]
      );
    }
  }
?>