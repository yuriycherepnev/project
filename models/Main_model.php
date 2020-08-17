<?php
class Main_model extends Model{
	function __construct(){
		parent::__construct();
	}
	public function LoadMainModel(){
		$sql_top = "SELECT * FROM top";
		$sql_popular = "SELECT * FROM popular";
		$query_top = $this->db->query($sql_top);
		$query_popular = $this->db->query($sql_popular);
		$this->answer = array();
		$this->answer = $query_top->fetchAll();
		$this->answer_popular = array();
		$this->answer_popular = $query_popular->fetchAll();
	}
}

?>