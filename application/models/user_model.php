<?php

class User_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		//select * from tblitem
		return $this->db->get('tblitem');
	}
	function insert($param)
	{
		$field=array(
			'i_name'=>$param["item_name"],
			'quantity'=>$param["item_quantity"],
			'category'=>$param["item_category"],
			'brand'=>$param["item_brand"],
			'date'=>$param["item_date"],
			'ip'=>$param["item_ip"]
			);		
		$this->db->insert("tblitem",$field);
	}
	function view($param)
	{
		$query=$this->db->get_where('tblitem',$param['condition']);
		return $query->row_array();
	}
	function update($param)
	{
		$field=array(
			'i_name'=>$param["item_name"],
			'quantity'=>$param["item_quantity"],
			'category'=>$param["item_category"],
			'brand'=>$param["item_brand"],
			'date'=>$param["item_date"]	
			);
		$condition=array('i_id'=>$param['item_id']);
		$query=$this->db->get_where('tblitem',$condition);
		$result=$query->result_array();
		if (!empty($result))
		{
			$this->db->where($condition);
			$this->db->update('tblitem',$field);
		}
	}
	function delete($param)
	{
		$this->db->delete('tblitem',$param['condition']);
	}
}