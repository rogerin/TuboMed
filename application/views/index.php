<?php
	$this->load->view("fixo/header");
	if(!isset($include))
	{
		$this->load->view($include);
	} else 
		{
			$this->load->view($include);
		}
	$this->load->view("fixo/footer");
?>