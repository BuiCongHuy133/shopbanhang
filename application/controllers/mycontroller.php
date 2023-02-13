<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycontroller extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('session');
	}

	public function viewCategory()
	{	
		$this->load->model('mymodel');
		$result['info']= $this->mymodel->getCategory()->result_array();
	
		$this->load->view('category/viewCategory',$result);
		
	}
	public function addCategory()
	{	
		$this->load->view('category/addCategory');	
		$category= $this->input->post('category');
		//gửi dữ liệu sang model
		if($category){
		$this->load->model('mymodel');
		$this->mymodel->addCategory($category);
		}
		
	}
	public function deleteCategory($id)
	{	
		$this->load->model('mymodel');
		$this->mymodel->deleteCategory($id);
		
	}
	public function editCategory($id)
	{	
		$this->load->model('mymodel');
		$result['info']= $this->mymodel->getCatbyId($id)->result_array();		
		$this->load->view('category/editCategory',$result);
		
	}
	public function updateCategory()
	{	
		$id= $this->input->post('id')."<br>";
		$category= $this->input->post('category');
		if($category){
		$this->load->model('mymodel');
		$this->mymodel->updateCategory($id,$category);
		}
	}
}
