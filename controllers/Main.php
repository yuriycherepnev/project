 <?php

class Main extends Controller{
	function __construct() {
		parent::__construct();
	}
	public function home(){
	  $this->model->LoadMainModel();
      $this->view->render('home', $this->model->answer, $this->model->answer_popular);
	}
	public function popular(){
	  $this->model->LoadMainModel();
      $this->view->render('popular', $this->model->answer, $this->model->answer_popular);
	}
	public function chefs(){
      $this->view->render('chefs');
	}
}

?>