<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		  $this->load->model('First_Model');
	$allD["all_data"]=$this->First_Model->Fetch_all_data();
		  $this->load->view('Firsr_view',$allD);

	}
	public function insert()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email","Email","required");
		$this->form_validation->set_rules("password","Password","required");
		if($this->form_validation->run())
		{
			$data=array(
				"email" => $this->input->post("email"),
				"password" => $this->input->post("password")
			);
			$this->load->model('First_Model');


			if($this->input->post("submit")){
				$this->First_Model->insert_data($data);
			    redirect('Welcome/inserted');
			}
			if($this->input->post("Update")){
				$this->First_Model->Update_data($this->input->post("id"),$data);
			    redirect('Welcome/Updated');
			}
			
		}
		else{
			$this->index();
		}
	}
	public function inserted()
	{
		$this->index();
	}
	public function Updated()
	{
		$this->index();
	}

	public function delete_data()
	{
		$id=$this->uri->segment(3);
		$this->load->model('First_Model');
		$this->First_Model->delete_data($id);
		$this->index();

	}
	public function update_data()
	{
		$id=$this->uri->segment(3);
		$this->load->model('First_Model');
		$allD["single"]=$this->First_Model->get_single_data($id);
		$allD["all_data"]=$this->First_Model->Fetch_all_data();
		  $this->load->view('Firsr_view',$allD);

	}
}
