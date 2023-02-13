<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	
	public $variable;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function addCategory($category)
	{	
		
		$object = array('cat_name'=>$category);
		$this->db->insert('danhmuc',$object);
		
		redirect('mycontroller/viewCategory','refresh');
	}
	public function getCategory()
	{	
		
		$this->db->order_by('cat_date_create','desc');
		return $this->db->get('danhmuc');
		
	}
	public function deleteCategory($id)
	{	
		$this->db->where('cat_id',$id);
		$this->db->delete('danhmuc');
		redirect('mycontroller/viewCategory','refresh');

	}
	public function getCatbyId($id)
	{	
		$this->db->where('cat_id',$id);		
		return $this->db->get('danhmuc');		
		
	}
	public function updateCategory($id,$category)
	{	
		$this->db->where('cat_id',$id);
		$object = array('cat_name'=> $category);
		$this->db->update('danhmuc',$object);		
		redirect('mycontroller/viewCategory','refresh');

	}
}
