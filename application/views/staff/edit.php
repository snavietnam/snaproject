<div class="row">
            <div class="col-md-4">
            <ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#"> Staff</a></li>
						<li class="active">Staff List</li>
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
						<h2>STAFF LIST</h2>
						<em>the first staff information</em>
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
						  <h3 class="box-title">updates staff</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
						  <form role="form" action="stafflist/edit/<?php echo $staffdetail->id ?>" method="POST">
							<div class="col-lg-6">
							<!-- text input -->
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Name</label>
							  <input type="text" class="form-control" name="name" value="<?php echo $staffdetail->name ?>" id="inputSuccess" required="required" placeholder="Enter ..." >
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
								  <input type="radio" name="gender" id="optionsRadios1" value="1" <?php if($staffdetail->gender == 1) echo "checked" ?>>
								  Male 
								</label>
								</div>
							  </div>
							  <div class="col-lg-6">
							  <div class="radio">
								<label>
								  <input type="radio" name="gender" id="optionsRadios2" value="0" <?php if($staffdetail->gender == 0) echo "checked" ?>>
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
								  <input type="input" name="birth" value="<?php echo $staffdetail->birth ?>" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask="">
								</div>
							  <span class="help-block">yyyy/mm/dd or yyyy-mm-dd</span>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Id no</label>
							  <input type="text" class="form-control" name="idno" value="<?php echo $staffdetail->idno ?>" id="inputSuccess" required="required" placeholder="Enter ...">
							  <span class="help-block">123456789</span>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Date of issue</label>
							  <div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="input" name="date_of_issue" value="<?php echo $staffdetail->date_of_issue ?>" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
								</div>
							  <span class="help-block">yyyy/mm/dd or yyyy-mm-dd</span>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Place of issue</label>
							  <input type="text" class="form-control" name="place_of_issue" value="<?php echo $staffdetail->place_of_issue ?>" id="inputSuccess" required="required" placeholder="Enter ...">
							  <span class="help-block">CA: TP.hcm</span>
							</div>
							<div class="form-group">
							<div class="col-lg-6">
								<div class="radio">
								<label>
								  <input type="radio" name="marital_status" id="optionsRadios1" value="1" <?php if($staffdetail->marital_status == 1) echo "checked" ?>>
								  single 
								</label>
								</div>
							  </div>
							  <div class="col-lg-6">
							  <div class="radio">
								<label>
								  <input type="radio" name="marital_status" id="optionsRadios2" value="0" <?php if($staffdetail->marital_status == 0) echo "checked" ?>>
								  a married person
								</label>
							  </div>
							  </div>
							</div>
							<div class="form-group">
							  <label>Email</label>
							  <input type="email" class="form-control" name="email" value="<?php echo $staffdetail->email ?>" required="required" placeholder="Email ..." >
							   <span class="help-block">ex:sna@global.net</span>
							</div>
							</div>
							
							<div class="col-lg-6">
							<!-- text input -->
							<div class="form-group">
							  <label>Department</label>
							  <select name="id_department" class="form-control">
							  <?php foreach($department as $row){ ?>
								<option value="<?php echo $row->id ?>" <?php if($row->id == $staffdetail->id_department) echo "selected" ?>><?php echo $row->name ?></option>
							  <?php } ?>
							  </select>
							</div>
							
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Position</label>
							  <input type="text" class="form-control" value="<?php echo $staffdetail->position ?>" name="position" id="inputSuccess" required="required" placeholder="Enter ...">
							  
							</div>
							
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Start working date</label>
							  <div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="input" name="startworkingdate" value="<?php echo $staffdetail->startworkingdate ?>" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
								</div>
							  <span class="help-block">yyyy/mm/dd or yyyy-mm-dd</span>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Ma số thuế</label>
							  <input type="text" class="form-control" value="<?php echo $staffdetail->tax_identification_no ?>" name="tax_identification_no" id="inputSuccess"  placeholder="Enter ...">
							  <span class="help-block">Số tài khoản ngân hàng</span>
							</div>
							<div class="form-group has-warning">
							  <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i>Starting Salary </label>
							  <input type="text" class="form-control" name="startingsalary" value="<?php echo $staffdetail->startingsalary ?>" id="inputWarning" required="required" placeholder="Enter ...">
							  <span class="help-block">Salary</span>
							</div>
							
							<div class="form-group has-warning">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Insurance Premiums</label>
							  <input type="text" class="form-control" value="<?php echo $staffdetail->insurance_premiums ?>" name="insurance_premiums" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> dependent person no</label>
							  <input type="text" class="form-control" value="<?php echo $staffdetail->dependent_person ?>" name="dependent_person" id="inputSuccess" required="required" placeholder="Enter ...">
							  <span class="help-block">số người phụ thuộc vào bạn</span>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>the bank account no</label>
							  <input type="text" class="form-control" name="account_no" value="<?php echo $staffdetail->account_no ?>" id="inputSuccess"  placeholder="Enter ...">
							  <span class="help-block">Số tài khoản ngân hàng</span>
							</div>
							<!-- textarea -->
							<div class="form-group">
							  <label>Description</label>
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