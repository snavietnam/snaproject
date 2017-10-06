<div class="row">
            <div class="col-md-4">
            <ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#"> Employee & Department</a></li>
						<li class="active">Salary Table</li>
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
							<div class="col-lg-4 no-padding">
							<button id="send" type="submit" name="submit" value="add" class="btn btn-default btn-block">Input</button>
							</div>
							<div class="col-lg-4 no-padding">
							<button id="send" type="submit" name="submit" value="edit" class="btn btn-default btn-block">Update</button>
							</div>
						</div>
					</form>
					</div>
					<script>
						$('.datepicker').datepicker({
							format: "yyyy-mm",
							viewMode: "months", 
							minViewMode: "months"
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
					  <th>id</th>
					  <th>name</th>
					  <th>start date</th>
					  <th>salary</th>
					  <th>date</th>
					</tr>
					</thead>
					<tbody>
					<?php $total =0; foreach($this->data['liststaff'] as $row){  $total += $row->salary ?>
					<tr>
					  <td><?php echo $row->id ?></td>
					  <td><?php echo $row->name ?></td>
					  <td><?php echo $row->startworkingdate ?></td>
					  <td><?php echo number_format($row->salary) ?> VNĐ</td>
					  <td><?php echo $row->date ?></td>
					</tr>
					<?php } ?>
					</tbody>
					<tfoot>
					<tr>
					  <th></th>
					  <th></th>
					  <th></th>
					  <th>Total: <?php echo number_format($total) ?> VNĐ</th>
					  <th></th>
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