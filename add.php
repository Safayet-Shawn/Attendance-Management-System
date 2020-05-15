<?php
include"inc/header.php";
include"lib/student.php";
?>
<?php
error_reporting(0);
$stu=new student;
if($_SERVER['REQUEST_METHOD']=='POST'){
	$name=$_POST['name'];
	$roll=$_POST['roll'];
	$cnt=$_POST['cnt'];
	$batch=$_POST['batch'];
	
	$insertdata=$stu->insertStudent($name,$roll,$cnt,$batch);
}
?>	
<?php
if(isset($insertdata)){
	echo $insertdata;
}
?>

	<div class="panel m-2 panel-default">
		<div class="pane-heading m-3">
			<h2 >
				<a class=" btn btn-success ml"href="all.php">View Student</a>
				<a class="btn btn-info pull-right mr"href="index.php">Go Back</a>
			</h2>
		</div>
		<div class="panel-body">
			<form action=""method="post">
				<div class="form-group">
					<label for="name">Student Name</label>
					<input class="form-control"type="text"name="name">
				</div>
				<div class="form-group">
					<label for="roll">Student Roll</label>
					<input class="form-control"type="text"name="roll">
				</div>
				<div class="form-group">
					<label for="roll">Parents Contact</label>
					<input class="form-control"type="text"name="cnt">
				</div>
				
				<div class="form-group">
					<label for="roll">Batch</label>
					<select name="batch" id=""class="form-control">
						<option value="">---Select Batch---</option>
						<?php
						$b=$stu->getBetch();
						while($r=$b->fetch_assoc()){
						?>
						<option value="<?php echo $r['ba'];echo $r["name"];?>"><?php echo $r['ba'];echo $r["name"];?></option>
						<?php
							}
						?>
					</select>
				</div>
				
				<div class="form-group text-center">
					
					<input class="btn btn-info "type="submit"name="submit"value="Add Student">
				</div>
			</form>
		</div>
	</div>
	</div>
</body>
</html>
