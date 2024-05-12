<?php 

class Home
{
	use Controller;

	public function index()
	{

		$this->view('home');
	}

	public function amer() {
		echo 'This is Amer';
	}
}
