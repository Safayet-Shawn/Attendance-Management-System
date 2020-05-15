<?php
include"inc/header.php";
include"lib/student.php";


?>
<?php
$stu=new student;
if($_SERVER['REQUEST_METHOD']=='POST'){
	$batch=$_POST['batch'];
	$find=$stu->atnBybatch($batch);
	if($find){
		header("location:attend_date.php?batch=".$batch);
	}

}
?>
<style>
	.c{
		margin-top: 50px;
	}
</style>
     <div class=" well text-center">
     	<h2>Attendance according to Batch</h2>
     </div>
     <div class="pane-heading ">
			<h2 >
				<a class=" btn btn-success "href="index.php">Home</a>
				
				<a class="btn btn-info pull-right "href="index.php">Go Back</a>
			</h2>
		</div>
		<div class="c">
			<form action=""method="post">
				<div class="form-group">
					<label for=""class="text-center">Select Your Batch</label>
					<select name="batch" id=""class="form-control">
						<option value="">---Select Batch---</option>
						<?php
						$stu=new student;
						$b=$stu->getBatchlist();
						while($r=$b->fetch_assoc()){
						?>
						<option value="<?php echo $r['batch_id'];?>"><?php echo $r['batch_id'];?></option>
						<?php
							}
						?>
					</select>
				</div>
				<div class="submit text-center">
					<input class="btn btn-info"type="submit"name="submit"value="Show Attendance">
					
						
					
				</div>
			</form>

		</div>
			</div>
	</div>
</body>
</html>
