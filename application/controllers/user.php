<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->load->model('user_model');
		$result=$this->user_model->index();
		$data=array('userlist'=> $result);
		$this->load->view("user",$data);
	}
	function insert()
	{
		$name=Null;
		$quantity=Null;
		$category=Null;
		$brand=Null;
		$date=Null;
		$ip =$this->input->ip_address();
		extract($_POST);
		$param["item_name"]=$name;
		$param["item_quantity"]=$quantity;
		$param["item_category"]=$category;
		$param["item_brand"]=$brand;
		$param["item_date"]=$date;
		$param["item_ip"]=$ip;
		if (isset($name)) {
			$this->load->model('user_model');
			$result=$this->user_model->insert($param);
			$this->index();
		}
	}
	function view($x='')
	{
		$data['condition']=array('i_id'=>$x);
		$this->load->model('user_model');
		$result=$this->user_model->view($data);
		$data=array('index'=>$result);
		$this->load->view('user_edit',$data);
	}
	function update()
	{
		$id=Null;
		$name=Null;
		$quantity=Null;
		$category=Null;
		$brand=Null;
		$date=Null;
		extract($_POST);
		$param["item_id"]=$id;
		$param["item_name"]=$name;
		$param["item_quantity"]=$quantity;
		$param["item_category"]=$category;
		$param["item_brand"]=$brand;
		$param["item_date"]=$date;
		if (isset($name))
		{
			$this->load->model('user_model');
			$result=$this->user_model->update($param);
			$this->index();
		}
	}
	function delete($x='')
	{
		$data['condition']=array('i_id'=>$x);
		$this->load->model('user_model');
		$re=$this->user_model->delete($data);
		$this->index();
	}
}

