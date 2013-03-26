<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model
{
		
	function __construct()
    {
        parent::__construct();
    }
	
	public function getPost()
	{
		$query = $this->db->get('post');
		return $query->result();
	}
		
}
