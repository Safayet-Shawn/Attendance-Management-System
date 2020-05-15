<?php
include"inc/header.php";
include"lib/student.php";
$stu=new student;

?>

     <div class=" well text-center">
     	<h2>All Batches</h2>
     </div>
     <div class="pane-heading ">
			<h2 >
				<a class=" btn btn-success "href="index.php">Home</a>
				<a class="btn btn-info pull-right "href="index.php">Go Back</a>
			</h2>
		</div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Serial No</th>
        <th>Batch Name</th>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php
          $betch=$stu->getBetch();
          if($betch){
            $i=0;
            while($value=$betch->fetch_assoc()){
              $i++;
              ?>
            
        <td><?php echo $i; ?></td>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['ba'];?></td>
        <td><?php echo $value['batch'];?></td>
      </tr>
     <?php             }
          }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
