<?php
include"inc/header.php";
include"lib/student.php";


?>
     <div class=" well text-center">
     	<h2>All Students of <?php if($_GET['batch']){
     		$batch=$_GET['batch'];
     		echo $batch ;
     	}
     		?>
     			
     		</h2>
     </div>
     <div class="pane-heading ">
			<h2 >
				<a class=" btn btn-success "href="index.php">Home</a>
				<a class=" btn btn-primary "href="bybatch.php">See by Batch</a>
				<a class="btn btn-info pull-right "href="bybatch.php">Go Back</a>
			</h2>
		</div>
  <table class="table table-bordered">
    <thead>
      <tr>
      	<th>Serial No</th>
        <th>Name</th>
        <th>Roll</th>
       <th>Contact(P)</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
      	<?php
      		$stu=new student;
      		if(isset($_GET['batch'])){

      		$batch=$_GET['batch'];
      		$all=$stu->bybatch($batch);
      		if($all){
      			$i=0;
      			while($row=$all->fetch_assoc()){
      				$i++;
      				?>
      
      	<td><?php echo $i; ?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['roll'];?></td>
        <td><?php echo $row['cnt'];?></td>

       
      </tr>
     <?php 	
     			}		
 				}
      		}
      	?>
    </tbody>
  </table>
</div>

</body>
</html>

