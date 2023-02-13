<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
	
	public $variable;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function addProduct($productName,$productdesc,$price,$image)
		{	
			// kiểm tra tt user có tồn tại hay chưa
			$this->db->where('productName',$productName);
			$countUser= $this->db->get('tbl_product')->num_rows();
			
			
			if($countUser == '0'){
			$object = array('productName'=>$productName,'productdesc'=>$productdesc,'catId'=>$catId,'brandId'=>$brandId,'price'=>$price,'image'=>$image);
			$this->db->insert('tbl_product', $object);
			redirect('product/viewProduct','refresh');

			} else {
				echo "<span style='color: red;'>Sản phẩm đã tồn tại</span>";
			}
			
		}
	public function getProduct()
	{	
		
		
		//return $this->db->get('tbl_product');
		
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->join('tbl_category', 'tbl_product.catId = tbl_category.catId', 'left');
		$this->db->join('tbl_brand', 'tbl_product.brandId = tbl_brand.brandId', 'left');
		$this->db->order_by('productId','desc');
		//echo "<pre>";var_dump($this->db->get());echo "</pre>";  
		//echo "<pre>"; echo $this->db->last_query();echo "</pre>";  
		
		//exit;
		return $this->db->get();

		
	}
	public function deleteProduct($id)
	{	
		$this->db->where('productId',$id);
		$this->db->delete('tbl_product');
		redirect('viewProduct','refresh');
		
	}
	public function getProductbyId($id)
	{	
		$this->db->where('productId',$id);		
		return $this->db->get('tbl_product');		
		
	}
	public function updateProduct($id,$category)
	{	
		$this->db->where('productId',$id);
		$object = array('productName'=>$productName,'productdesc'=>$productdesc,'price'=>$price,'image'=>$image);
		$this->db->update('tbl_product',$object);		
		redirect('viewProduct','refresh');

	}
}
