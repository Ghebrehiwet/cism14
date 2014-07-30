<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	
	}
	
	public function get_customers($id = 0)
	{
		if((int)$id == 0)
		{//id is zero, show all!
			return $this->db->get('test_Customers');
		}
		else {//show one customer
			return $this->db->get_where('test_Customers', array('CustomerID'=>$id));
		}
		
		 
	}#end get_customers()
	
	public function insert()
	{ 
		var_dump($_POST);
			die;
	}
	
}


	

 