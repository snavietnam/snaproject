<div class="row">
            <div class="col-md-4">
            <ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#"> Employee & Department</a></li>
						<li class="active"> Employee List</li>
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
						<h2>Employee List</h2>
						<em>Edit current employee's information</em>
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
						  <h3 class="box-title">Update Employee's Information</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
						  <form role="form" action="stafflist/edit/<?php echo $staffdetail->id ?>" method="POST">
							<div class="col-lg-6">
							<!-- text input -->
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-angle-right"></i> Full Name</label>
							  <input type="text" class="form-control" name="name" value="<?php echo $staffdetail->name ?>" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="form-group has-success">
							  <label><i class="fa fa-angle-right"></i> Employment Status</label>
							  <select name="id_type" class="form-control">
							  <?php foreach($stafftype as $row){ ?>
								<option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
							  <?php } ?>
							  </select>
							</div>
							<div class="form-group has-success"><label class="control-label"><i class="fa fa-angle-right"></i> Gender</label> <br/>
                            
							<div class="col-lg-6">
								<div class="radio">
								  <input type="radio" name="gender" id="optionsRadios1" value="1" checked="">
                                  <label>Male </label>
								</div>
							  </div>
							  <div class="col-lg-6">
							  <div class="radio">
								  <input type="radio" name="gender" id="optionsRadios2" value="0">
								<label>  Female</label>
							  </div>
							  </div>
							</div>
							<div class="form-group has-success">
							   <label class="control-label" for="inputSuccess"><i class="fa fa-angle-right"></i> Date of Birth</label>
							  <div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="input" name="birth" value="<?php echo $staffdetail->birth ?>" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask="">
								</div>
							  
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-angle-right"></i> ID Card Number</label>
							  <input type="text" class="form-control" name="idno" value="<?php echo $staffdetail->idno ?>" id="inputSuccess" required="required" placeholder="Enter ...">
							  <span class="help-block">Ex: 123456789</span>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-angle-right"></i> Date of Issue</label>
							  <div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="input" name="date_of_issue" value="<?php echo $staffdetail->date_of_issue ?>" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
								</div>
							  
							</div>
							<div class="form-group has-success">
							   <label class="control-label" for="inputSuccess"><i class="fa fa-angle-right"></i> Place of Issue</label>
							  <input type="text" class="form-control" name="place_of_issue" value="<?php echo $staffdetail->place_of_issue ?>" id="inputSuccess" required="required" placeholder="Enter ...">
							  <span class="help-block">Ex: TP.HCM, Long An, etc</span>
							</div>
							<div class="form-group has-success"><label class="control-label"><i class="fa fa-angle-right"></i> Marital Status</label> <br/>
							<div class="col-lg-6">
								<div class="radio">
								  <input type="radio" name="marital_status" id="optionsRadios1" value="1" <?php if($staffdetail->marital_status == 1) echo "checked" ?>>
								  Single
								</label>
								</div>
							  </div>
							  <div class="col-lg-6">
							  <div class="radio">
								<label>
								  <input type="radio" name="marital_status" id="optionsRadios2" value="0" <?php if($staffdetail->marital_status == 0) echo "checked" ?>>
								 Married
								</label>
							  </div>
							  </div>
							</div>
							<div class="form-group has-success">
							  <label class="control-label"><i class="fa fa-angle-right"></i> Email</label>
							  <input type="email" class="form-control" name="email" value="<?php echo $staffdetail->email ?>" required="required" placeholder="Email ..." >
							  	<span class="help-block">Ex: test@snaglobal.net</span>
							</div>
							</div>
							
							<div class="col-lg-6">
							<!-- text input -->
							<div class="form-group has-success">
							   <label class="control-label"><i class="fa fa-angle-right"></i> Department</label>
							  <select name="id_department" class="form-control">
							  <?php foreach($department as $row){ ?>
								<option value="<?php echo $row->id ?>" <?php if($row->id == $staffdetail->id_department) echo "selected" ?>><?php echo $row->name ?></option>
							  <?php } ?>
							  </select>
							</div>
							
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-angle-right"></i> Position</label>
							  <input type="text" class="form-control" value="<?php echo $staffdetail->position ?>" name="position" id="inputSuccess" required="required" placeholder="Enter ...">
							  
							</div>
							
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-angle-right"></i> Start Working Date</label>
							  <div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="input" name="startworkingdate" value="<?php echo $staffdetail->startworkingdate ?>" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
								</div>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-angle-right"></i> Tax Identification Number (TIN)</label>
							  <input type="text" class="form-control" value="<?php echo $staffdetail->tax_identification_no ?>" name="tax_identification_no" id="inputSuccess"  placeholder="Enter ...">
							 
							</div>
							<div class="form-group has-warning">
							  <label class="control-label" for="inputWarning"><i class="fa fa-angle-right"></i> Agreeable Salary </label>
							  <input type="text" class="form-control" name="startingsalary" value="<?php echo $staffdetail->startingsalary ?>" id="inputWarning" required="required" placeholder="Enter ...">
							  <span class="help-block">Monthly salary</span>
							</div>
							
							<div class="form-group has-warning">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-angle-right"></i> Insurance Payment Salary</label>
							  <input type="text" class="form-control" value="<?php echo $staffdetail->insurance_premiums ?>" name="insurance_premiums" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-angle-right"></i> Number of Related people</label>
							  <input type="text" class="form-control" value="<?php echo $staffdetail->dependent_person ?>" name="dependent_person" id="inputSuccess" required="required" placeholder="Enter ...">
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-angle-right"></i> Bank Account Number</label>
							  <input type="text" class="form-control" name="account_no" value="<?php echo $staffdetail->account_no ?>" id="inputSuccess"  placeholder="Enter ...">
							  <span class="help-block">Shinhan Bank account</span>
							</div>
							<!-- textarea -->
							<div class="form-group optional">
							  <label>Remark</label>
							  <textarea class="form-control" rows="3" name="description" required="required" placeholder="Enter ..."><?php echo $staffdetail->description ?></textarea>
							</div>
							</div>
							<div class="form-group">
							  <a href="stafflist/"><button class="btn btn-primary" type="button">Cancel</button></a>
							  <button class="btn btn-primary" type="reset">Reset</button>
							  <button type="submit" class="btn btn-success">updates</button>
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

			$('[data-mask]').inputmask()
		</script>