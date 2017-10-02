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
				  <table id="example2" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th></th>
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
					</tr>
					</thead>
					<tbody>				
					<tr>
					  <td>Salary + Insurance</td>
					  <?php foreach($salary as $row){ ?>
					  <td><?php if(show_values_in_month($row) != 'NULL') echo  number_format(show_values_in_month($row), 0, ',', ' '); else echo  show_values_in_month($row); ?></td>
					  <?php } ?>
					</tr>
					<tr>
					  <td>Expenses</td>
					   <?php foreach($expenses as $row){ ?>
					  <td><?php if(show_values_in_month($row) != 'NULL') echo  number_format(show_values_in_month($row), 2, ',', ' '); else echo  show_values_in_month($row); ?></td>
					  <?php } ?>
					</tr>
					</tbody>
					<tfoot>
					<tr>
					  <th>TOTAL (VND)</th>
					  <?php for($i=1;$i<13;$i++){ ?>
					  <th><?php echo number_format(show_values_in_month($expenses[$i])+show_values_in_month($salary[$i]), 2, ',', ' ') ?></th>
					  <?php } ?>
					</tr>
					<tr>
					  <th>TOTAL (USD)</th>
					  <?php for($i=1;$i<13;$i++){ ?>
					  <th><?php echo number_format((show_values_in_month($expenses[$i])+show_values_in_month($salary[$i]))/22700.00, 2, ',', ' ') ?></th>
					  <?php } ?>
					</tr>
					</tfoot>
				  </table>
				</div>
				<!-- /.box-body -->
			</div>    
        </div>
		<script>
	  $(function () {
		$('#example1').DataTable()
		$('#example2').DataTable({
		  'paging'      : false,
		  'lengthChange': true,
		  'searching'   : true,
		  'ordering'    : true,
		  'info'        : false,
		  'autoWidth'   : true
		})
	  })
	</script>