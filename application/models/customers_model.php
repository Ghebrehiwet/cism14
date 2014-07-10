<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	
	}
	
	public function get_customers()
	{
		$query = $this->db->get('test_Customers');
		return $query->result_array();
	}
	
}


	

 