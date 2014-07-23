<?php
//customer/default.php
	$this->load->view($this->config->item('theme') . 'header');
	foreach($query as $customer)
            {
                //var_dump($customer);
                echo '<code>' . $customer['FirstName'] . '</code>';
            }
	$this->load->view($this->config->item('theme') . 'footer');

?>
	
	 