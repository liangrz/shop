<?php if (!defined('THINK_PATH')) exit();?>			<!-- Page Head -->
			<h2>欢迎管理员</h2>
			<p id="page-intro">发布商品</p>
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>发布商品</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab2">
					
						<form method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>商品名字</label>
										<input class="text-input small-input" type="text" id="small-input" name="name" />
								</p>
								
								<p>
									<label>商品类型</label>
									<select name="t_id" class="small-input">';
									<!-- 要遍历了喔-->
										<option value = ''>请选择(不选为没有)</option>
									<?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>" ><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
									
									</select>
								</p>
								
								<p>
									<label>商品价格</label>
										<input class="text-input small-input" type="text" id="small-input" name="price" />
								</p>
								
								<p>	
									<label>商品原价</label>
										<input class="text-input small-input" type="text" id="small-input" name="origin" />
								</p>
								
								<p>
									<label>商品销量</label>
										<input class="text-input small-input" type="text" id="small-input" name="sold" />
								</p>
								
								<p>
									<label>商品库存</label>
										<input class="text-input small-input" type="text" id="small-input" name="rest" />
								</p>
								
								<p>
									<label>商品描述</label>
									<textarea name="content"></textarea>
								</p>
								
								<p>
									<input class="button" type="submit" value="添加" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->