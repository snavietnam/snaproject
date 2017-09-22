<div class="row">
            <div class="col-md-4">
            <ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#"> Employee & Department</a></li>
						<li class="active">Employee List</li> 
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
						<h2>EMPLOYEE LIST</h2>
						<em> All employee's information</em>
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
					<div class="col-lg-offset-1 col-lg-10">
						<div class="box box-warning">
						<div class="box-header with-border">
						  <h3 class="box-title">Add new staff</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
						  <form role="form" action="" method="POST">
							<div class="col-lg-6">
							<!-- text input -->
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Name</label>
							  <input type="text" class="form-control" name="name" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="form-group">
							  <label>Staff type</label>
							  <select name="id_type" class="form-control">
							  <?php foreach($stafftype as $row){ ?>
								<option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
							  <?php } ?>
							  </select>
							</div>
							<div class="form-group">
							<div class="col-lg-6">
								<div class="radio">
								<label>
								  <input type="radio" name="gender" id="optionsRadios1" value="1" checked="">
								  Male 
								</label>
								</div>
							  </div>
							  <div class="col-lg-6">
							  <div class="radio">
								<label>
								  <input type="radio" name="gender" id="optionsRadios2" value="0">
								  Female
								</label>
							  </div>
							  </div>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Birthday</label>
							  <div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="input" name="birth" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
								</div>
							  <span class="help-block">yyyy/mm/dd or yyyy-mm-dd</span>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Id no</label>
							  <input type="text" class="form-control" name="idno" id="inputSuccess" required="required" placeholder="Enter ...">
							  <span class="help-block">123456789</span>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Date of issue</label>
							  <div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="input" name="date_of_issue" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
								</div>
							  <span class="help-block">yyyy/mm/dd or yyyy-mm-dd</span>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Place of issue</label>
							  <input type="text" class="form-control" name="place_of_issue" id="inputSuccess" required="required" placeholder="Enter ...">
							  <span class="help-block">CA: TP.hcm</span>
							</div>
							<div class="form-group">
							<div class="col-lg-6">
								<div class="radio">
								<label>
								  <input type="radio" name="marital_status" id="optionsRadios1" value="1" checked="">
								  single 
								</label>
								</div>
							  </div>
							  <div class="col-lg-6">
							  <div class="radio">
								<label>
								  <input type="radio" name="marital_status" id="optionsRadios2" value="0">
								  a married person
								</label>
							  </div>
							  </div>
							</div>
							<div class="form-group">
							  <label>Email</label>
							  <input type="email" class="form-control" name="email" required="required" placeholder="Email ..." >
							   <span class="help-block">ex:sna@global.net</span>
							</div>
							</div>
							
							<div class="col-lg-6">
							<!-- text input -->
							<div class="form-group">
							  <label>Department</label>
							  <select name="id_department" class="form-control">
							  <?php foreach($department as $row){ ?>
								<option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
							  <?php } ?>
							  </select>
							</div>
							
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Position</label>
							  <input type="text" class="form-control" name="position" id="inputSuccess" required="required" placeholder="Enter ...">
							  
							</div>
							
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Start working date</label>
							  <div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="input" name="startworkingdate" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
								</div>
							  <span class="help-block">yyyy/mm/dd or yyyy-mm-dd</span>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Ma số thuế</label>
							  <input type="text" class="form-control" name="tax_identification_no" id="inputSuccess"  placeholder="Enter ...">
							  <span class="help-block">Số tài khoản ngân hàng</span>
							</div>
							<div class="form-group has-warning">
							  <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i>Starting Salary </label>
							  <input type="text" class="form-control" name="startingsalary" id="inputWarning" required="required" placeholder="Enter ...">
							  <span class="help-block">Salary</span>
							</div>
							
							<div class="form-group has-warning">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Insurance Premiums</label>
							  <input type="text" class="form-control" name="insurance_premiums" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> dependent person no</label>
							  <input type="text" class="form-control" name="dependent_person" id="inputSuccess" required="required" placeholder="Enter ...">
							  <span class="help-block">số người phụ thuộc vào bạn</span>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>the bank account no</label>
							  <input type="text" class="form-control" name="account_no" id="inputSuccess"  placeholder="Enter ...">
							  <span class="help-block">Số tài khoản ngân hàng</span>
							</div>
							<!-- textarea -->
							<div class="form-group">
							  <label>Description</label>
							  <textarea class="form-control" rows="3" name="description" required="required" placeholder="Enter ..."></textarea>
							</div>
							</div>
							<div class="form-group">
							  <a href="stafflist/"><button class="btn btn-primary" type="button">Cancel</button></a>
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
		