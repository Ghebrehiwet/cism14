<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//customer.php
class Customer extends CI_Controller {
 
	public function index($id = 0)
	{ 
		  
		$this->load->model('Customers_model'); 
		$this->config->set_item('title', 'Customer Title');
		$data['query'] = $this->Customers_model->get_customers($id); 
		$this->load->view('customer/default', $data);
		
	}
	 
	public function mylist($id = 0)
	{ 
		  
		$this->load->model('Customers_model'); 
		$this->config->set_item('title', 'List of Customers');
		$data['query'] = $this->Customers_model->get_customers($id); 
		$this->load->view('customer/mylist', $data);
		
	}
	
	
	public function view($id = 0)
	{ 
		  
		$this->load->model('Customers_model'); 
		$this->config->set_item('title', 'Customer Detail');
		$data['query'] = $this->Customers_model->get_customers($id); 
		$this->load->view('customer/view', $data);
		
	}
	 
}

 