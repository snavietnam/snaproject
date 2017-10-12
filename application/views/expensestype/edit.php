<div class="row">
            <div class="col-md-4">
            <ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#"> Expenses Type</a></li>
						<li class="active">Edit Expense Type</li>
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
						<h2>EXPENSES LIST</h2>
						<em>Edit Expense Type</em>
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
						  <h3 class="box-title">Edit Expense Type</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
						  <form role="form" action="expensestype/edit/<?php echo $typedetail->id ?>" method="POST">
							<!-- text input -->
							<div class="form-group">
							  <label>Category</label>
							  <select name="id_category" class="form-control">
							  <?php foreach($listexpensescategory as $row){ ?>
								<option value="<?php echo $row->id ?>" <?php if($row->id == $typedetail->id_category) echo 'selected' ?>><?php echo $row->name ?></option>
							  <?php } ?>
							  </select>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"> Name</label>
							  <input type="text" class="form-control" name="name" id="inputSuccess" value="<?php echo $typedetail->name ?>" required="required" placeholder="Enter ..." >
							</div>
							<div class="form-group">
							  <a href="customer/"><button class="btn btn-primary" type="button">Cancel</button></a>
							  <button class="btn btn-primary" type="reset">Reset</button>
							  <button type="submit" class="btn btn-success">Save</button>
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
