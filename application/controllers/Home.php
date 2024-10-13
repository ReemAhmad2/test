<?php


class Home extends CI_Controller
{

	public function index()
	{
		$rows['rows'] = null;
		$this->load->view('Home/home', $rows);
	}

	public function search()
	{
		$name['name'] = $this->input->post('name');

		if ($name['name'] != null) {

			$this->db->like('name', $name['name']);

			$query = $this->db->get('students');

			$name['rows'] = $query->result();

			$this->load->view('Home/result', $name);
		} else {
			$this->load->view('Home/home', $name);
		}
	}
}
