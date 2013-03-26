<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->model('Blog_model', 'blog');
		$data = array(
		'title' => 'Meu blog',
		'heading' => 'Titulo do meu blog',
		'message' => 'Minha mensagem'
		);
		$data['dados'] = $this->blog->getPost();
		$this->load->view('blog/blogview', $data);
	}
	
	public function comments()
	{
		echo "Olhe para isso!";
	}
	
	public function mostra()
	{
		echo "Mostrar lol";
	}
	
	public function shoes($sandalias, $id)
	{
		echo $sandalias;
		echo "<br>";
		echo $id;
	}
	
}