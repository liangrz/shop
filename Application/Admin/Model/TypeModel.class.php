<?php
namespace Admin\Model;
use Think\Model;
class TypeModel extends Model{
	// 查询类别数据
		function getList(){
		$type = M('type');
		$list = $type -> select();
		return $list;
		
	}
}
?>