<?php if (!defined('THINK_PATH')) exit();?>
			<!-- Page Head -->
			<h2>欢迎管理员 Tony</h2>
			<p id="page-intro">添加类别</p>
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>添加类别</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab2">
					
						<form method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
		
								<p>
									<label>类别名称</label>
										<input class="text-input small-input" type="text" id="small-input" name="name" />
								</p>
								<p>
									<label>隶属父类</label>
									<select name="p_id" class="small-input">';
									<!-- 要遍历了喔-->
										<option value = ''>请选择(不选为父类)</option>
									<?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>" ><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
									
									</select>
								</p>
								<!--
								<p>
									<label>是否导航显示</label>
									<input type="radio" name="is_nav" value="0" /> 不显示
									<input type="radio" name="is_nav" value="1" checked="checked" /> 显示
								</p>
								-->
								<p>
									<input class="button" type="submit" value="添加" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->