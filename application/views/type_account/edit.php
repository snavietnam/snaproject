<div class="row">
            <div class="col-md-4">
            <ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#"> Customer</a></li>
						<li class="active">Customer List</li>
					</ul>
            </div>
            <div class="col-md-8">
            <ul class="list-inline pull-right mini-stat">
							<li>
								<h5>LIKES <span class="stat-value color-blue"><i class="fa fa-plus-circle"></i> 81,450</span></h5>
								
							</li>
							<li>
								<h5>SUBSCRIBERS <span class="stat-value color-green"><i class="fa fa-plus-circle"></i> 150,743</span></h5>
								
							</li>
							<li>
								<h5>CUSTOMERS <span class="stat-value color-orang"><i class="fa fa-plus-circle"></i> 43,748</span></h5>
								
							</li>
						</ul>
            </div>
            </div>
            
            <div class="row">
            <div class="col-md-12">
                <div class="main-header">
					<div class="col-lg-6">
						<h2>CUSTOMERS LIST</h2>
						<em>Add new customer information</em>
					</div>
					<div class="col-lg-6  align-right">
						<div class="col-lg-6">
						
						</div>
					</div>
					
				</div>
             </div>
            </div>
			<div class="row">
				 <div class="box">
				</div>
					<div class="col-lg-12">
					<div class="col-lg-offset-2 col-lg-8">
						<div class="box box-warning">
						<div class="box-header with-border">
						  <h3 class="box-title">Add New Customer</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
						  <form role="form" action="" method="POST">
							<!-- text input -->
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess">Name</label>
							  <input type="text" class="form-control" name="name" value="<?php echo $detail->name ?>" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<?php foreach($menu as $row){ ?>
							<div class="form-group">
							<label class="control-label"><i class="fa fa-fw fa-hand-o-right"></i> <?php echo $row->name ?></label>
							<ul class="col-lg-12">
							<?php foreach($row->submenu as $row2){ 
							$tam=array();
							foreach($selectbox as $row3){
								if($row3->id_sub_category == $row2->id){
									array_push($tam,$row3);
									}
							}
							//var_dump($tam[2]->id_tool);die;
							?>
							<li class="col-lg-12">
							<input type="checkbox" ><?php echo $row2->name ?>
							<ul class="col-lg-12">
							<?php foreach($tool as $row4){ $tam2 = 0;foreach($tam as $row5){if($row5->id_tool == $row4->id){ $tam2=$row5->id;break;}} ?> 
							<li class="checkbox col-lg-3">
								<label>
								  <input type="checkbox" name="<?php echo $row2->id ?>[]" value="<?php echo $row4->alias ?>" <?php if($tam2 != 0){ echo 'checked';} ?>>
								   <?php echo $row4->name ?>
								</label>
							</li>
							<?php } ?>
							  </ul>
							  </li>
							<?php } ?>
							  </ul>
							</div>
							<?php } ?>
							<div class="form-group">
							  <a href="typeaccount/"><button class="btn btn-primary" type="button">Cancel</button></a>
							  <button class="btn btn-primary" type="reset">Reset</button>
							  <button type="submit" class="btn btn-success">Create</button>
							</div>

						  </form>
						</div>
						<!-- /.box-body -->
					  </div>
					</div>
					</div>
				<!-- /.box-header -->
				<div class="box-body">
				</div>
				<!-- /.box-body -->
			</div>    
        </div>
		<script>
			$(function () {
				$("input[type='checkbox']").change(function () {					
					$(this).siblings('ul')
						.find("input[type='checkbox']")
						.prop('checked', this.checked);
				});
			});
		</script>
