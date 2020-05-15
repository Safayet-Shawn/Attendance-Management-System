<?php
include"inc/header.php";
include"lib/student.php";


?>
<?php
$stu=new student;
if($_SERVER['REQUEST_METHOD']=='POST'){
	$batch=$_POST['batch'];
	$find=$stu->bybatch($batch);
	if($find){
		header("location:bystu.php?batch=".$batch);
	}else{
		echo $no="<div class='alert alert-danger'><strong>Sorry !!</strong>No student inserted in <strong>".$batch. "</strong>  Batch</div>";
		
		
	}

}
?>
<style>
	.c{
		margin-top: 50px;
	}
</style>
     <div class=" well text-center">
     	<h2>All Students by Batch</h2>
     </div>
     <div class="pane-heading ">
			<h2 >
				<a class=" btn btn-success "href="index.php">Home</a>
				
				<a class="btn btn-info pull-right "href="all.php">Go Back</a>
			</h2>
		</div>
		<div class="c">
			<form action=""method="post">
				<div class="form-group">
					<label for=""class="text-center">Select Your Batch</label>
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
				<div class="submit text-center">
					<input class="btn btn-info"type="submit"name="submit"value="Find Student">
					
						
					
				</div>
			</form>

		</div>
			</div>
	</div>
</body>
</html>
