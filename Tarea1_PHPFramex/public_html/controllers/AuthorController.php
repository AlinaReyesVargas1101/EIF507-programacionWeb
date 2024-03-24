<?php
  require_once('models/Author.php');

  class AuthorController extends Controller {
    public function index() {  
      return view('author',
        [
          'authors'=>Author::all(),
          'title'=>'Authors List'
        ]
      );
    }

    public function show($id) {
      $author = Author::find($id);
      return view('author2',
        [
          'author'=>$author,
          'title'=>'Author Detail'
        ]
      );
    }
  }
?>