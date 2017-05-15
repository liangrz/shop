<?php if (!defined('THINK_PATH')) exit();?><p id="page-intro">管理员</p>

<div class="clear"></div> <!-- End .clear -->
<div>
	<input class = 'search' type ='text' placeholder='搜索'>
	<input class = 'btn' type = 'button' value = '搜索'>
</div><br>	
<div class="content-box"><!-- Start Content Box -->

	<div class="content-box-header">
		
		<h3>管理用户</h3>
		
		<div class="clear"></div>
		
	</div> <!-- End .content-box-header -->
	
	<div class="content-box-content">
		
		<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
			
			<table>
				
				<thead>
					<tr>
					   <th>ID</th>
					   <th>用户名称</th>
					   <th>注册时间</th>
					   <th>操作</th>
					</tr>
				</thead>
			 
				<tbody>
				<?php if(is_array($list)): foreach($list as $key=>$row): ?><tr>
						<td><?php echo ($row["id"]); ?></td>
						<td><?php echo ($row["uname"]); ?></td>
						<td><?php echo ($row["create_time"]); ?></td>
						<td>
							<a href="#" title="Delete"><img src="Public/resources/images/icons/cross.png" alt="下架" /></a> 
							<a href="?m=Admin&c=Index&goto=userSave&id=<?php echo ($row["id"]); ?>" title="Edit"><img src="Public/resources/images/icons/pencil.png" alt="修改" /></a>
						</td>
					</tr><?php endforeach; endif; ?>
				</tbody>
				
				<tfoot>
					<tr>
						<td colspan="6">
							
							<div class="pagination">
								<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
								<a href="#" class="number" title="1">1</a>
								<a href="#" class="number" title="2">2</a>
								<a href="#" class="number current" title="3">3</a>
								<a href="#" class="number" title="4">4</a>
								<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
							</div> <!-- End .pagination -->
							<div class="clear"></div>
						</td>
					</tr>
				</tfoot>
				
			</table>
			
		</div> <!-- End #tab1 -->
			
		
	</div> <!-- End .content-box-content -->
	
</div> <!-- End .content-box -->