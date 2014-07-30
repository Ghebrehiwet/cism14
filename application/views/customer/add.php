<?php
//customer/add.php
	$this->load->view($this->config->item('theme') . 'header'); 
	echo '<h1>Add Customer</h1>'; 
	echo validation_errors();
	echo form_open('customer/insert');
	$FirstName = array(
		'name' => 'FirstName',
		'id' => 'FirstName',
		'value' => set_value('FirstName', '')
	
	);
	echo form_label('First Name', 'FirstName') . ': ';
	echo form_input($FirstName, '') . '<br />';
	
	
	
	$LastName = array(
		'name' => 'LastName',
		'id' => 'LastName',
		'value' => set_value('LastName', '')
	
	);
	echo form_label('Last Name', 'LastName') . ': ';
	echo form_input($LastName, '') . '<br />';
	
	
	
	$Email = array(
		'name' => 'Email',
		'id' => 'Email',
		'value' => set_value('Email', '')
	
	);
	echo form_label('Email', 'Email') . ': ';
	echo form_input($Email, '') . '<br />';
	
	
	echo form_submit('submit', 'Add Customer');
	
	echo form_close();

	
	$this->load->view($this->config->item('theme') . 'footer');

?>
	
	 