<?php
include"inc/header.php";
include"lib/student.php";
?>
<?php
$stu=new student;
if($_SERVER['REQUEST_METHOD']=='POST'){
	$name=$_POST['name'];
	$class=$_POST['batch_id'];
	$des=$_POST['des'];
	$insert=$stu->insertBatch($name,$class,$des);
}
?>
<?php
if(isset($insert)){
	echo $insert;
}
?>
	<div class="panel m-2 panel-default">
		<div class="pane-heading m-3">
			<h2 >
				<a class=" btn btn-success ml"href="all_batch.php">All Batch</a>
				<a class="btn btn-info pull-right mr"href="index.php">Go Back</a>
			</h2>
		</div>
		<div class="panel-body">
			<form action=""method="post">
				<div class="form-group">
					<label for="name">Batch Name</label>
					<input class="form-control"type="text"name="name"required>
				</div>
				<div class="form-group">
					<label for="name">Class Name</label>
					<select name="batch_id" id=""class="form-control"required>
						<option >Select Class</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
						<option value="4">Four</option>
						<option value="5">Five</option>
						<option value="6">Six</option>
						<option value="7">Seven</option>
						<option value="8">Eight</option>
						<option value="9">Nine</option>
						<option value="10">Ten</option>
						<option value="11">Eleven</option>
						<option value="12">Twelve</option>
						

					</select>
				</div>
				<div class="form-group">
					<label for="roll">Batch Descripction</label>
					<textarea class="form-control"name="des"></textarea>
				</div>
				<div class="form-group text-center">
					
					<input class="btn btn-info "type="submit"name="submit"value="Add Batch">
				</div>
			</form>
		</div>
	</div>
	</div>
</body>
</html>