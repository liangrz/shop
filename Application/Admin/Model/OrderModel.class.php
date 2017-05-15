<?php
namespace Admin\Model;
use Think\Model;
class OrderModel extends Model{
	// 查询订单数据
		function getList(){
		$order = M('order');
		$list = $order -> select();
		return $list;
		
	}
}
?>