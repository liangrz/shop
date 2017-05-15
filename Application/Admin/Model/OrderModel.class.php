<?php
namespace Admin\Model;
use Think\Model;
class OrderModel extends Model{
	/*
	function index(){
		var_dump('gg');
	}
	*/
	
	function getList(){
		//多表查询
		$table->join()->select();
		return $list;
	}
}
?>