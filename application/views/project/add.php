<div class="row">
            <div class="col-md-4">
            <ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#"> Project</a></li>
						<li class="active">Project add</li>
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
						<h2>PROJECT ADD</h2>
						<em>add new project</em>
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
						  <h3 class="box-title">Add new project</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
						  <form role="form" action="" method="POST">
							<!-- text input -->
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Name</label>
							  <input type="text" class="form-control" name="name" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="form-group">
							  <label>customer list</label>
							  <select name="id_customer" class="form-control">
							  <?php foreach($customerlist as $row){ ?>
								<option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
							  <?php } ?>
							  </select>
							</div>
							
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Start date</label>
							  <input type="text" class="form-control" name="startdate" id="inputSuccess" required="required" placeholder="Enter ...">
							  <span class="help-block">yyyy/mm/dd or yyyy-mm-dd</span>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> End date</label>
							  <input type="text" class="form-control" name="enddate" id="inputSuccess" required="required" placeholder="Enter ...">
							  <span class="help-block">yyyy/mm/dd or yyyy-mm-dd</span>
							</div>
							
							<!-- textarea -->
							<div class="form-group">
							  <label>Description</label>
							  <textarea class="form-control" rows="3" name="description" required="required" placeholder="Enter ..."></textarea>
							</div>

							<div class="form-group">
							  <a href="project/"><button class="btn btn-primary" type="button">Cancel</button></a>
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
