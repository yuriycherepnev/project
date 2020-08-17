<?php
class Article extends Controller{
	function __construct() {
		parent::__construct();
	}
	public function index() {
        $this->view->render('article/index');
	}
	public function article($id = false) {
		var_dump($id);//параметр для передачи через гет url[2]
		$this->view->render('article/article');
	}
}


?>