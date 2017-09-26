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
							<div class="form-group has-success ">
							<div class="col-lg-3 no-padding">
								<div class="form-group ">
								  <label>Category</label>
								  <select name="id_invoicecategory" id="category" class="form-control">
									<option value="">Select...</option>
									<?php foreach($category as $row){ ?>
									<option value="<?php echo $row->id ?>" <?php if($row->id == $detail->id_invoicecategory) echo 'selected'; ?>><?php echo $row->name ?></option>
									<?php } ?>
								  </select>
								</div>
							</div>
							<div class="col-lg-3">
								<div  class="form-group">
								  <label>Type</label>
								  <select name="id_invoicetype" id="exp" class="form-control">									
									<?php foreach($type as $row){ ?>
									<option value="<?php echo $row->id ?>" <?php if($row->id == $detail->id_invoicetype) echo 'selected'; ?>><?php echo $row->name ?></option>
									<?php } ?>
								  </select>
								</div>
							</div>
							<div class="col-lg-6 no-padding">
								<div class="form-group">
								  <label>Select</label>
								  <select name="id_detail" id="last" class="form-control" >
									<?php foreach($detail_log as $row){ ?>
									<option value="<?php echo $row->id ?>" <?php if($row->id == $detail->id_detail) echo 'selected'; ?>><?php echo $row->name ?></option>
									<?php } ?>
								  </select>
								</div>
							</div>
							</div>
							<div id="daily" class="form-group">
								<?php foreach($daily as $row){ ?>
									<div class='radio' style='display: inline-block;margin: 0 10px;'><label><input type='radio' name='id_daily_type' id='optionsRadios1' <?php if($row->id == $detail->id_daily_type) echo 'checked'; ?> value="<?php echo $row->id ?>"><?php echo $row->name ?></label></div>
								<?php } ?>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Name</label>
							  <input type="text" class="form-control" name="name"  value="<?php echo $detail->name ?>" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Address</label>
							  <input type="text" class="form-control" name="address" value="<?php echo $detail->address?>" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="col-lg-4 no-padding">
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Payment date</label>
							  <div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="input" name="paymentdate" value="<?php echo $detail->paymentdate ?>" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
								</div>
							 
							</div>
							</div>
							<div class="col-lg-4">
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Invoice date</label>
							  <div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="input" name="invoicedate" value="<?php echo $detail->invoicedate ?>" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
								</div>
							  
							</div>
							</div>
							<div class="col-lg-4 no-padding">
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Received date</label>
							  <div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="input" name="receiveddate" value="<?php echo $detail->receiveddate ?>" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
								</div>
							  
							</div>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> tax_code</label>
							  <input type="number" class="form-control" name="tax_code" value="<?php echo $detail->tax_code ?>" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="col-lg-7 no-padding">
								<div class="form-group has-warning">
								  <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Total amount</label>
								  <input type="text" name="money" class="form-control" name="money" value="<?php echo $detail->money ?>" id="money" placeholder="Enter ...">
								  
								</div>
							</div>
							<div class="col-lg-2">
								<div class="form-group has-warning">
								  <label>VAT</label>
								  <select name="vat" id="vat"  class="form-control">									
									<?php foreach($vat as $row){ ?>
									<option value="<?php echo $row->percent ?>" <?php if($row->percent == $detail->vat) echo 'selected' ?>><?php echo $row->percent ?>%</option>
									<?php } ?>
								  </select>
								</div>
							</div>
							<script>
								$('#vat').on('change', function() {								
									$tam = parseFloat(this.value/100 * $('#money').val());
									$tam2 = parseFloat($('#money').val());
									$('#moneyvat').val($tam+$tam2);					
								})
							</script>
							<div class="col-lg-3 no-padding">
								<div class="form-group has-error">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Total payment </label>
							  <input type="text" class="form-control" name="tel" id="moneyvat" required="required" placeholder="Enter ..." disabled >
							</div>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Payment method </label>
								  <select name="paymentmethod"  class="form-control">									
									<?php foreach($method as $row){ ?>
										<option value="<?php echo $row->id ?>" <?php if($row->id == $detail->paymentmethod) echo 'selected' ?>><?php echo $row->name ?></option>
									<?php } ?>
									
								  </select>
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> tel</label>
							  <input type="text" class="form-control" name="phone" value="<?php echo $detail->phone ?>" id="inputSuccess" required="required" placeholder="Enter ..." >
							</div>
							<div class="form-group">
							  <label>Remark</label>
							  <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."><?php echo $detail->description ?></textarea>
							</div>
							<div class="form-group">
							  <a href="invoice/"><button class="btn btn-primary" type="button">Cancel</button></a>
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
				url: base_url+'/invoice/dailyType/',
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