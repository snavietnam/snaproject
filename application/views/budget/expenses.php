<div class="row">
            <div class="col-md-4">
            <ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#"> Employee</a></li>
						<li class="active">Salary</li>
					</ul>
            </div>
			<?php $this->load->view('messager', $this->data); ?>
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
						<h2>SALARY TABLE</h2>
						<em>Employee salary - viewed by month </em>
					</div> 
					<div class="col-lg-6">
					<form method="GET" action="">
						<div class="col-lg-5">
						<div class="input-group date">
						  <div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						  </div>
						  <input type="text" name="dateselect" class="form-control pull-right datepicker" id="datepicker">
						</div>
						</div>
						<div class="col-lg-7 no-padding">
							<div class="col-lg-4 no-padding">
							<button id="send" type="submit" name="submit" value="select" class="btn btn-default btn-block">Select</button>
							</div>
						</div>
					</form>
					</div>
					<script>
						$('.datepicker').datepicker({
							format: "yyyy",
							viewMode: "years", 
							minViewMode: "years"
						});
						
					</script>
					
				</div>
             </div>
            </div>
			<div class="row">
				 <div class="box">
				<div class="box-header">
				  
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example2" class="table table-bordered">
					<thead>
					<tr>
					  <th>No.</th>
					  <th>Expenses Type</th>
					  <th>Jan</th>
					  <th>Feb</th>
					  <th>Mar</th>
					  <th>Apr</th>
					  <th>May</th>
					  <th>Jun</th>
					  <th>Jul</th>
					  <th>Aug</th>
					  <th>Sep</th>
					  <th>Oct</th>
					  <th>Nov</th>
					  <th>Dec</th>
					  <th>Total(1 year)</th>
					</tr>
					</thead>
					<tbody>
					<?php  foreach($category as $row){ $flag = true;?>
						<?php foreach($row->type as $row1){ ?>
						<tr>
							<?php if($flag == true) echo '<th rowspan="'.$row->countrow.'">'.$row->name.'</th>' ?>							
							<td><?php echo $row1->name ?></td>
							<td><?php echo number_format(intval($row1->{1})) ?></td>
							<td><?php echo number_format(intval($row1->{2})) ?></td>
							<td><?php echo number_format(intval($row1->{3})) ?></td>
							<td><?php echo number_format(intval($row1->{4})) ?></td>
							<td><?php echo number_format(intval($row1->{5})) ?></td>
							<td><?php echo number_format(intval($row1->{6})) ?></td>
							<td><?php echo number_format(intval($row1->{7})) ?></td>
							<td><?php echo number_format(intval($row1->{8})) ?></td>
							<td><?php echo number_format(intval($row1->{9})) ?></td>
							<td><?php echo number_format(intval($row1->{10})) ?></td>
							<td><?php echo number_format(intval($row1->{11})) ?></td>
							<td><?php echo number_format(intval($row1->{12})) ?></td>
							<th><?php echo number_format(intval($row1->{1})+intval($row1->{2})+intval($row1->{3})+intval($row1->{4})+intval($row1->{5})+intval($row1->{6})+intval($row1->{7})+intval($row1->{8})+intval($row1->{9})+intval($row1->{10})+intval($row1->{11})+intval($row1->{12})) ?></th>
						</tr>
						<?php $flag = false; } ?>
					<?php } ?>
					</tbody>
					<tfoot>
					<tr>
					  <th colspan="2">TOTAL (VND)</th>
					<?php  for($i=1;$i<13;$i++){ $total = 0; ?>
					<?php  foreach($category as $row){ ?>
					<?php foreach($row->type as $row1){  
						$total += $row1->{$i};					
					}}
					?>	
					<th><?php echo  number_format($total); ?></th>
					<?php } ?>
					</tr>
					<tr>
					  <th colspan="2">TOTAL (USD)</th>
					<?php  for($i=1;$i<13;$i++){ $total = 0; ?>
					<?php  foreach($category as $row){ ?>
					<?php foreach($row->type as $row1){  
						$total += $row1->{$i};					
					}}
					?>	
					<th><?php echo  number_format($total/26000) ?></th>
					<?php } ?>
					</tr>
					</tfoot>
				  </table>
				</div>
				<!-- /.box-body -->
			</div>    
        </div>
		<script>
	  
	</script>