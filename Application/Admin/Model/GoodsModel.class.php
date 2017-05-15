<?php
namespace Admin\Model;
use Think\Model;
class GoodsModel extends Model{
	function getList(){
		$goods = M('goods');
		$list = $goods  //
		-> field('goods.name as nname,goods.id as nid,create_time,sold,rest,goods.t_id,type.name as tname')
		->join('left join type on goods.t_id = type.id') 
		-> select();
		//用field 重新命名name 然后left join 和 type表关联查询
		return $list;
	}
}
?>