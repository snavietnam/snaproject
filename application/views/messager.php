<?php  if(isset($message) && $message != null ){?>
<div id="myModal" class="modal  modal-success fade" role="dialog">
			  <div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Messager</h4>
				  </div>
				  <div class="modal-body">
					<p><?php echo $message?></p>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>

			  </div>
			</div>
			<script>
			$(window).load(function()
			{
				$('#myModal').modal('show');
			});
			</script>
<?php }  ?>