<div class="row">
            <div class="col-md-4">
            <ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#">   Employee & Department</a></li>
						<li class="active">Employee List</li>
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
						<h2>EMPLOYEE LIST</h2>
						<em> All employee's information</em>
					</div>
					<div class="col-lg-6  align-right">
						<div class="col-lg-6">
						<a href="stafflist/add"><button type="button" class="btn btn-block btn-info btn-sm">Add Employee</button></a>
						</div>
					</div>
					<script>
						$('.datepicker').datepicker({
							format: "yyyy-mm",
							viewMode: "months", 
							minViewMode: "months",
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
					  <th>Id</th>
					  <th>Staff type</th>
					  <th>Name</th>
					  <th>Position</th>
					  <th>Start working</th>
					  <th>Birthday</th>
					  <th width="11%" >Edit/Delete</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach($this->data['liststaff'] as $row){ ?>
					<tr>
					  <td><?php echo $row->id ?></td>
					  <td><?php  if($row->id_type == 1) echo 'Full time'; else echo 'Part Time'; ?></td>
					  <td><?php echo $row->name ?></td>
					  <td><?php echo $row->position ?></td>
					  <td><?php echo $row->startworkingdate ?></td>
					  <td><?php echo $row->birth ?></td>
					  <td align="center">
						<a href="stafflist/edit/<?php echo $row->id ?>"><button type="button" class="btn btn-danger"><i class="fa fa-edit"></i></button></a>
						<a href="stafflist/del/<?php echo $row->id ?>"><button type="button" class="btn btn-warning"><i class="fa fa-times-circle"></i></button></a>
					  </td>
					</tr>
					<?php } ?>
					</tbody>
					<tfoot>
					<!--<tr>
					  <th>Rendering engine</th>
					  <th>Browser</th>
					  <th>Platform(s)</th>
					  <th>Engine version</th>
					  <th>CSS grade</th>
					</tr>-->
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