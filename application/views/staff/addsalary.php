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
						  <h3 class="box-title">Add salary (<?php echo $dateselect ?>)</h3>
						</div> 
						<!-- /.box-header -->
						<div class="box-body">
						  <form role="form" action="salarylist/add/<?php echo $dateselect ?>" method="POST">
							<?php foreach($liststaff as $row){ ?>
							<div class="col-lg-4">
							<!-- text input -->
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> <?php  echo  $row->name ?></label>
							  <input type="text" class="form-control" name="name[]"  id="inputSuccess" required="required" placeholder="Enter ..." >
							  <input type="hidden" class="form-control" name="id[]" value="<?php echo  $row->id ?>" id="inputSuccess"  placeholder="Enter ..." >
							</div>
							</div>
							<?php } ?>
							<div class="col-lg-12">
							<div class="form-group">
							  <a href="salarylist/"><button class="btn btn-primary" type="button">Cancel</button></a>
							  <button class="btn btn-primary" type="reset">Reset</button>
							  <button type="submit" class="btn btn-success">Create</button>
							</div>
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