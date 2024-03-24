<?php
  require_once('models/Publisher.php');

  class PublisherController extends Controller {
    public function index() {  
      return view('publisher',
        [
          'publishers'=>Publisher::all(),
          'title'=>'Publishers List'
        ]
      );
    }

    public function show($id) {
      $publisher = Publisher::find($id);
      return view('publisher2',
        [
          'publisher'=>$publisher,
          'title'=>'Publisher Detail'
        ]
      );
    }
  }
?>