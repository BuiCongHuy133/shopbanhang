<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('session');
	}

	public function viewProduct()
	{	
		$this->load->model('product_model');
		$result['info']= $this->product_model->getProduct()->result_array();
		
	
		$this->load->view('viewProduct',$result);
		
	}
	public function addProduct()
	{
		$this->load->view('addProduct');
		//lấy dữ liệu từ trang product
		$productName=$this->input->post('productName');
		$productdesc=$this->input->post('productdesc');
		$price=$this->input->post('price');
		$image=$this->input->post('image');
		if($productName && $productdesc && $price && $image){
		//gửi dữ liệu sang model
		$this->load->model('product_model');
		$this->product_model->addProduct($productName,$productdesc,$price,$image);
		}
	}
	public function deleteProduct($id)
	{	
		$this->load->model('product_model');
		$this->product_model->deleteProduct($id);
		
	}
	public function editProduct($id)
	{	
		$this->load->model('product_model');
		$result['info']= $this->product_model->getProductbyId($id)->result_array();		
		$this->load->view('editProduct',$result);
		
	}
	public function updateProduct()
	{	
		$id= $this->input->post('id')."<br>";
		$productName= $this->input->post('productName');
		$productdesc= $this->input->post('productdesc');
		$price= $this->input->post('price');
		$image= $this->input->post('image');
		if($productName && $productdesc && $price && $image){
		$this->load->model('product_model');
		$this->product_model->updateCategory($id,$productName,$productdesc,$price,$image);
		}
	}
}
