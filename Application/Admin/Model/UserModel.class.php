<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
	function getList(){
		$list = $table->select();
		return $list;
	}
}
?>