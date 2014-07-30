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
	
	
	public function add()
	{ #will create a form for adding customers
		  
		$this->load->helper('form');
		$this->config->set_item('title', 'Add Customer'); 
		$this->load->view('customer/add');
		
	}#end add()
	
	public function insert()
	{ #will create a form for adding customers
		  
		 //var_dump($_POST);
		 //die;
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('FirstName', 'First Name', 'trim|required');
		$this->form_validation->set_rules('LastName', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
		
		if($this->form_validation->run() == false)
		{//form failed - go back to add
			$this->config->set_item('title', 'Failed to add customer'); 
			$this->load->view('customer/add');
			
		}else{//insert data
			
			$this->load->model('Customers_model'); 
			$this->Customers_model->insert();
			echo 'in controller';
			
			
		}
		 
		
	}#end insert()
	 
}

 