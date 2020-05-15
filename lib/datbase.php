

<?php
include('config/config.php');
class database {

	
	public $host=DB_HOST;
	public $user=DB_USER;
	public $pass=DB_PASS;
	public $dbname=DB_NAME;
	public $link;
	public $error;

	public function __construct(){
		$this->connection();
	}
	private function connection(){
		$this->link =new mysqli($this->host, $this->user, $this->pass, $this->dbname);
		if(!$this->link){
			$this->error="Connection Error".$this->link->connect_error;
			return false ;
		}
	}
	// SELECT or READ data
	public function select($query){
		$result=$this->link->query($query) or die($this->link->error.__LINE__);
		if($result->num_rows >0 ){
			return $result;
		}else{
			return false;
		}
	}

	//INSERT data
	public function insert($query){
		$insert=$this->link->query($query) or die($this->link->error.__LINE__);
		if($insert){
			return $insert;
		}else{
			return false;
		}
	}
	//update data
	public function update($query){
		$update=$this->link->query($query) or die($this->link->error.__LINE__);
		if($update){
			return $insert;
		}else{
			return false;
		}
	}
	//DELETE data
	public function delete($q){
		$delete=$this->link->query($q) or die($this->link->error.__LINE__);
		if($delete){
			return $delete;
		}else{
			return false;
		}
	}
}

?>