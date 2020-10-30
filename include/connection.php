<?php

class Database
{
	public $con="";
	public $host="localhost";
	public $user="root";
	public $pass="";
	public $dbname="mrhandicraftexport";

	public function __construct()
	{

		 $this->con=new mysqli($this->host,$this->user,$this->pass,$this->dbname);

		if($this->con->connect_error)
	{
		echo "Database Connection is Failed";
		exit;
	}

	}

	public function insert($query)
	{
		$result=$this->con->query($query);
		return $result;
	}
	public function select($query)
	{
		$result=$this->con->query($query);
		return $result;
	}
	public function update($query)
	{
		$result=$this->con->query($query);
		return $result;
	}
	public function deleted($query)
	{
		$result=$this->con->query($query);
		return $result;
	}
	public function real_escape($query)
	{

	$anv=mysqli_real_escape_string($this->con,$query);

	return $anv;
	}

}
?>
