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
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess">username</label>
							  <input type="text" class="form-control" name="usernmae" value="<?php echo $detail->username ?>" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess">password</label>
							  <input type="password" class="form-control" name="password" value="<?php echo $detail->password ?>" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess">Admin Group</label>
							  <select name="group_id" id="companyselect" class="form-control">
									<option value="">Select...</option>
									<?php foreach($group as $row){ ?>				 
											<option value="<?php echo $row->id ?>" <?php if($detail->group_id == $row->id) echo 'selected'; ?>><?php echo $row->name ?></option>
									<?php } ?>
							  </select>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess">By Branch</label>
							  <select name="id_branch" id="companyselect" class="form-control">
									<option value="">Select...</option>
									<?php foreach($listbranch as $row){ ?>				 
											<option value="<?php echo $row->id ?>" <?php if($detail->id_branch == $row->id) echo 'selected'; ?>><?php echo $row->name ?></option>
									<?php } ?>
							  </select>
							</div>
							<div class="form-group">
							  <a href="account/"><button class="btn btn-primary" type="button">Cancel</button></a>
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
		