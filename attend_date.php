<?php
include"inc/header.php";
include"lib/student.php";
?>

<?php
if(isset($_GET['msg'])){
	$msge=$_GET['msg'];
	echo $msge ;
}
?>
	<div class="panel m-2 panel-default">
		<div class="pane-heading m-3">
			<h2 >
				<a class=" btn btn-success ml"href="index.php">Home</a>

				
				<a class="btn btn-info pull-right mr"href="attendanceView.php">Go Back</a>
			</h2>
		</div>
		<div class="panel-body">
			<div class="date well text-center">
			<strong>Date: </strong><?php echo $cur_date=date("Y-m-d"); ?> of <strong>Batch: </strong><?php if(isset($_GET['batch'])){
					echo $batch=$_GET['batch'];
				} ?>
			</div>
			<form action=""method="post">
				<table class="table table-striped">
					<tr>
						<th width="30%">Serial</th>
						<th width="50%">Attendance Date</th>
						<th width="20%">Action</th>
						
					</tr>
					<?php
						$stu=new student;
						if(isset($_GET['batch'])){
							$batch=$_GET['batch'];
						}
					   $get_date=$stu->getDatelist($batch);
					   if($get_date){
					   	$i=0;
					   	while($value=$get_date->fetch_assoc()){
					   		$i++;
					   	
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $value['attend_time']; ?></td>
						
						<td>
							<a class="btn btn-primary" href="student_view.php?date=<?php echo $value['attend_time']; ?>&&batch=<?php echo $_GET['batch']; ?>">View</a>
							<a class="btn btn-danger" href="student_view.php?dl=<?php echo $value['attend_time']; ?>">Delete</a>
						</td>
					</tr>
					
					<?php
						}
					   }
					?>
				</table>
				
			</form>
		</div>
	</div>
	</div>
</body>
</html>