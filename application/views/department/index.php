<div class="row">
            <div class="col-md-4">
            <ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#">  Employee & Department</a></li>
						<li class="active">Department List</li>
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
						<h2>DEPARTMENT LIST</h2>
						<em>All departments in company </em>
					</div>
					<div class="col-lg-6  align-right">
						<div class="col-lg-6">
						<a href="department/add"><button type="button" class="btn btn-block btn-info btn-sm">ADD DEPARTMENT</button></a>
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
					  <th>ID</th>
					  <th>Department name</th>
					  <th width="11%" >Edit/Delete</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach($this->data['listdepartment'] as $row){ ?>
					<tr>
					  <td><?php echo $row->id ?></td>
					  <td><?php echo $row->name ?></td>
					  <td align="center">
						<a href="department/edit/<?php echo $row->id ?>"><button type="button" class="btn btn-danger"><i class="fa fa-edit"></i></button></a>
						<a href="department/del/<?php echo $row->id ?>"><button type="button" class="btn btn-warning"><i class="fa fa-times-circle"></i></button></a>
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