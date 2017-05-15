<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
	//查询用户数据
		function getList(){
		$user = M('user');
		$list = $user -> select();
		return $list;
		
	}
}
?>