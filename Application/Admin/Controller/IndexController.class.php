<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	
	public $goto;
	public $__GOTO__='?m=Admin&c=Index&goto=';
	public $list;
	public $id;
	
	public function index(){
		//获取要去哪个页面
		$this->goto = $this->getGoto();
		//如果有数据传入
		$this->checkPost();
		//获得该页面需要的数据列表
		$this->list = $this->getList();
		//注入
		$this->assign('list',$this->list);
		//视图
		$this->show();
	}
	
	function getGoto(){
		if(!empty($_GET['goto'])){
			return $_GET['goto'];
		}else{
			return '';
		}
	}
	
	//这个getList因为不够一般化可能要开个类来处理细节了
	function getList(){
		$tmp = $this->goto;
		if($num = strpos($this->goto,'Add')){//如果有Add就截取
			//$tmp = substr($tmp, 0 ,$num);
			$tmp = "type";
		}
		$table = M($tmp);
		//$table = D($tmp);
		//$list = $table->getList();
		$list = $table->select();
		//时间修正
		foreach($list as $key=>$value){
			if(!empty($list[$key]['create_time'])){
				$tmp = $list[$key]['create_time'];
				$list[$key]['create_time'] = date('Y-m-d h:i:s',$tmp);
			}
		}
		
		
		if($num = strpos($this->goto,'Save')){//如果有Save就截取
			$tmp = substr($tmp, 0 ,$num);
			
			$table = M($tmp);
			//$table = D($tmp);
			//$list = $table->getList();
			$list = $table->where('id='.$_GET['id'])->select();
			//时间修正
			foreach($list as $key=>$value){
				if(!empty($list[$key]['create_time'])){
					$tmp = $list[$key]['create_time'];
					$list[$key]['create_time'] = date('Y-m-d h:i:s',$tmp);
				}
			}
		}
		return $list;
	}
	
	function show(){
		$this->display('head');
		$this->display($this->goto);
		$this->display('foot');
	}
	
	function checkPost(){
		//表名不能为空
		if(empty($_GET['goto'])){
			return false;
		}
		
		if(empty($_POST)){
			return false;
		}
		//typeAdd格式对应表为type，截取add
		$pos = strpos($this->goto,'Add');
		$tableName = substr($this->goto,0,$pos);
		
		//******以下填入和实装模型只有一般性，对于order这种很难操作，还是做模型吧
		//$model = D($tableName);
		//实例化表模型
		
		$table = M($tableName);
		//获取表单POST数据
		foreach($_POST as $key=>$value){
			$data[$key] = $value; 
		}
		$data['create_time'] = time();
		//需要数据验证吗？
		
		//创建数据并添加
		$table->create($data);
		if($table->add()){
			//跳转
			header('location:?m=Admin&c=Index&goto='.$tableName);
			exit();
		}
	}
	
	function save(){
		//修改数据
	}
	
	
	
	function checkLogin(){
		
	}
}
?>