<?php


class Home extends CI_Controller
{

	public function index()
	{
		$rows['rows'] = null;
		$this->load->view('home_view',$rows);
	}

	public function search()
	{

		$name['name'] = $this->input->post('name');

		$this->db->like('name', $name['name']);
		$query = $this->db->get('students');
		
		$name['rows'] = $query->result();
		
		$this->load->view('home_view', $name);

	}
}
