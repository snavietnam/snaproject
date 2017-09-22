<div class="row">
            <div class="col-md-4">
            <ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#"> Invoice</a></li>
						<li class="active">Invoice list</li>
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
						<h2>Invoice LIST</h2>
						<em>the Invoice information</em>
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
						  <h3 class="box-title">Add new Invoice</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
						  <form role="form" action="" method="POST">
							<!-- text input -->
							<div class="form-group has-success">
							<div class="col-lg-3">
								<div class="form-group">
								  <label>Select</label>
								  <select id="category" class="form-control">
									<option value="">Select...</option>
									<?php foreach($category as $row){ ?>
									<option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
									<?php } ?>
								  </select>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
								  <label>Select</label>
								  <select id="exp" class="form-control" disabled>									
									<option value="">Select...</option>
								  </select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
								  <label>Select</label>
								  <select id="last" class="form-control" disabled>
									
								  </select>
								</div>
							</div>
							</div>
							<div id="daily" class="form-group">
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Name</label>
							  <input type="text" class="form-control" name="name" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Address</label>
							  <input type="text" class="form-control" name="address" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="col-lg-4">
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Date</label>
							  <div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="input" name="birth" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
								</div>
							 
							</div>
							</div>
							<div class="col-lg-4">
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Date</label>
							  <div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="input" name="birth" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
								</div>
							  
							</div>
							</div>
							<div class="col-lg-4">
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Date</label>
							  <div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="input" name="birth" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
								</div>
							  
							</div>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> tax_code</label>
							  <input type="text" class="form-control" name="tax_code" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="col-lg-7">
								<div class="form-group has-warning">
								  <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Total amount</label>
								  <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
								  
								</div>
							</div>
							<div class="col-lg-2">
								<div class="form-group has-warning">
								  <label>Select</label>
								  <select id="exp" class="form-control">									
									<option value="">Select...</option>
									<option value="">Select...</option>
									<option value="">Select...</option>
									<option value="">Select...</option>
								  </select>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group has-error">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Total payment </label>
							  <input type="text" class="form-control" name="tel" id="inputSuccess" required="required" placeholder="Enter ..." disabled >
							</div>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Payment method </label>
								  <select id="exp" class="form-control">									
									<option value="">Select...</option>
									<option value="">Select...</option>
									<option value="">Select...</option>
									<option value="">Select...</option>
								  </select>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> tel</label>
							  <input type="text" class="form-control" name="tel" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="form-group">
							  <label>Description</label>
							  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
							</div>
							<div class="form-group">
							  <a href="customer/"><button class="btn btn-primary" type="button">Cancel</button></a>
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
		$("#category").change(function() {			
			var base_url = window.location.origin;
			  $.ajax({
				url: base_url+'/invoice/ajaxload',
				type: 'POST',
				data: {"category": this.value},
				success: function(data){
					//alert('ok');
					$( "#exp option" ).remove();
					$( "#exp" ).append(data);
					if(data == '')
						$( "#exp" ).prop('disabled', true);
					else
						$( "#exp" ).prop('disabled', false);
				}
			});
			$.ajax({
				url: base_url+'/invoice/dailyType',
				type: 'POST',
				data: {"category": this.value},
				success: function(data){
					//alert('ok');
					$( "#daily .radio" ).remove();
					$( "#daily" ).append(data);
					if(data == '')
						$( "#exp" ).prop('disabled', true);
					else
						$( "#exp" ).prop('disabled', false);
				}
			});
		});
		$("#exp").change(function() {		
			var base_url = window.location.origin;
			  $.ajax({
				url: base_url+'/invoice/last',
				type: 'POST',
				data: {"category": this.value},
				success: function(data){
					//alert('ok');
					$( "#last option" ).remove();
					$( "#last" ).append(data);
					if(data == '')
						$( "#last" ).prop('disabled', true);
					else
						$( "#last" ).prop('disabled', false);
				}
			});
		});
		</script>