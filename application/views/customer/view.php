<?php
//customer/view.php
	$this->load->view($this->config->item('theme') . 'header');
	
	echo '<h1> Customer Details</h1>';
	
	if($query->num_rows() > 0)
	{//loop through data
		foreach($query->result() as $customer)
        {
           echo '<p>';    
          echo '<p> CustomerID:' . $customer->CustomerID . '</p>';
		  echo '<p> FirstName:' . $customer->FirstName . '</p>';
		  echo '<p> LastName:' . $customer->LastName . '</p>';
		   echo '<p> Email:' . $customer->Email . '</p>';
		  echo '</p>'; 
        }
	
	} 
	else 
	{//sorry no customers!
		echo '<p>Sorry, no such customer! </p>';
	
	}
	
	
	
			
			
	$this->load->view($this->config->item('theme') . 'footer');

?>
	
	 