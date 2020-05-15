<?php
include"lib/datbase.php";
?>
<?php
class student{
	private $db;
	public function __construct(){
		$this->db=new database;
	}
	public function getStudent($batch){
		$query="SELECT * FROM student WHERE batch='$batch' order by roll";
		$select=$this->db->select($query);
		return $select;
	}
		public function getAllStudent(){
		$query="SELECT * FROM student  order by batch ";
		$select=$this->db->select($query);
		return $select;
	}
		public function getBetch(){
		$bquery="SELECT * FROM batch";
		$select=$this->db->select($bquery);
		return $select;
	}
		public function insertStudent($name,$roll,$cnt,$batch){
		$name=mysqli_real_escape_string($this->db->link, $name);
		$roll=mysqli_real_escape_string($this->db->link, $roll);
		$cnt=mysqli_real_escape_string($this->db->link, $cnt);
		$batch=mysqli_real_escape_string($this->db->link, $batch);
		$cr=$this->checkRoll($roll,$batch);
		if($cr==true){
			$msg="<div class='alert alert-danger'><strong>Sorry !!</strong>Roll no already exist, try another.</div>";
			return $msg;
		}
		if(empty($name) || empty($roll) || empty($cnt)||empty($batch) ){
			$msg="<div class='alert alert-danger'><strong>ERROR !!</strong>Field must not be empty.</div>";
			return $msg;
		} else{

		$squery="INSERT INTO student(name,roll,cnt,batch)VALUES('$name','$roll','$cnt','$batch')";
		$stu_insert=$this->db->insert($squery);

		$aquery="INSERT INTO atn(roll)VALUES('$roll')";
		$stu_insert=$this->db->insert($aquery);
		if($stu_insert){
			$msg="<div class='alert alert-success'><strong>Success !!</strong> Student added successfully.</div>";
			return $msg;
		}else{
     		$msg="<div class='alert alert-danger'><strong>ERROR !!</strong>Field must not be empty.</div>";
			return $msg;
		}
			 }

	}
	public function bybatch($batch){
		$batch=mysqli_real_escape_string($this->db->link, $batch);
		$qq="SELECT * from student where batch='$batch' ";
		$bybatch=$this->db->select($qq);
		if($bybatch){
		return $bybatch;
		}else{
			return false;
		}

	} 
	public function checkRoll($roll,$batch){
			$sql="SELECT roll from student where roll='$roll' and batch='$batch'";
			$query12=$this->db->select($sql);
			if(mysqli_num_rows($query12) == 1){
				return true;
			}else{
				return false;
			}
		}
	public function insertBatch($name,$class,$des){
		$name=mysqli_real_escape_string($this->db->link, $name);
		$class=mysqli_real_escape_string($this->db->link, $class);
		$des=mysqli_real_escape_string($this->db->link, $des);
		if(empty($name) || empty($class) || empty($des)){
			$msg="<div class='alert alert-danger'><strong>ERROR !!</strong>Field must not be empty.</div>";
			return $msg;
		} else{
		$squery="INSERT INTO batch(name,ba,batch)VALUES('$name','$class','$des')";
		$bth_insert=$this->db->insert($squery);
		if($bth_insert){
			$msg="<div class='alert alert-success'><strong>Success !!</strong>Batch added successfully.</div>";
			return $msg;
		}else{
     		$msg="<div class='alert alert-danger'><strong>ERROR !!</strong>Data is not inserting.</div>";
			return $msg;
		}
			 }
	}

	public function insertAttendance($cur_date,$attend=array(),$batch){
		$query="SELECT DISTINCT attend_time and batch_id FROM atn ";
		$getdata=$this->db->select($query);
		while($result = $getdata->fetch_assoc()){
			$db_date=$result['attend_time'];
			$db_batch=$result['batch_id'];
			if($cur_date==$db_date && $batch == $db_batch){
			$msg="<div class='alert alert-danger'><strong>SORRY !!</strong>Attendance already taken today of Btach ".$batch.".</div>";
			return $msg;
			}
		}
		foreach ($attend as $atn_key => $atn_value) {
			if($atn_value == "present"){
				$stu_query="INSERT INTO atn(roll,attend,attend_time,batch_id)VALUES('$atn_key','present',now(),'$batch')";
				$data_insert=$this->db->insert($stu_query);
			}elseif($atn_value == "absent"){
				$stu_query="INSERT INTO atn(roll,attend,attend_time,batch_id)VALUES('$atn_key','absent',now(),'$batch')";
				$data_insert=$this->db->insert($stu_query);
			}
		}
		if($data_insert){
			$msg="<div class='alert alert-success'><strong>Success !!</strong>Attendance  data inserted today(".$cur_date.") of Batch ".$batch.".</div>";
			return $msg;
		}else{
			$msg="<div class='alert alert-danger'><strong>SORRY !!</strong>Attendance  not data inserted today(".$cur_date.") of Batch ".$batch.".</div>";
			return $msg;
		}
	}
	public function getDatelist($batch){
		$query="SELECT DISTINCT attend_time FROM atn where batch_id='$batch'";
		$result=$this->db->select($query);
		return $result;
	}
	public function getBatchlist(){
		$query="SELECT DISTINCT batch_id FROM atn";
		$result=$this->db->select($query);
		return $result;
	}
	public function atnBybatch($batch){
		$query="SELECT DISTINCT attend_time FROM atn where batch_id='$batch'";
		$result=$this->db->select($query);
		return $result;
	}
	public function getAllData($dt,$bt){
		$query="SELECT student.name, atn.*
		FROM student
		INNER JOIN atn
		ON student.roll = atn.roll
		WHERE attend_time='$dt' and batch_id='$bt'";
		$result=$this->db->select($query);
		return $result;
	}
	public function deleteDate($delete){
		$q=" DELETE FROM atn WHERE attend_time ='$delete'";
		$result=$this->db->delete($q);

			return $result;
		
	}
}
?>