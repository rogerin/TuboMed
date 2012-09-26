<?php
	$this->load->view("admin/fixo/header");
	if(!isset($include))
	{
		$this->load->view($include);
	} else 
		{
			$this->load->view($include);
		}
	$this->load->view("admin/fixo/footer");
?>