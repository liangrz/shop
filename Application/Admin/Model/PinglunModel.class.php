<?php
namespace Admin\Model;
use Think\Model;
class PinglunModel extends Model{
	//查询评论数据
	function getList(){
		$pinglun = M('pinglun');
		$list = $pinglun -> select();      
		return $list;
	}
}
?>