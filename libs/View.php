<?php
class View{
	public function render($name, $arg = false, $pop = false) {
		require 'views/header.php';
		require 'views/' . $name . '.php';
		require 'views/form.php';
		require 'views/footer.php';
	}
}