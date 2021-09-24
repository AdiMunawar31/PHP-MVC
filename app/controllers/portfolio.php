<?php

class Portfolio extends Controller {
	public function index()
	{
    	$data['judul'] = 'Portfolio';
		$data['nama'] = $this->model('User_model')->getUser();
		$this->view('templates/header', $data);
		$this->view('portfolio/index', $data);
		$this->view('templates/footer');
	}
}
