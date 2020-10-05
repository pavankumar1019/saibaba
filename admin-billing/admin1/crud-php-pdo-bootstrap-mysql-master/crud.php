<?php

	
class ArticlesCrud{

	private $connection;

	private $host = 'localhost';
	private $db = 'u430139865_ydyp';
	private $user = 'u430139865_ydyp';
	private $pass = 'pavan5639';

	public function __construct(){
		try
		{
			$this->connection = new PDO('mysql:host={$host};dbname={$db}',$user,$pass);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function getConnection(){
		return $this->connection;
	}

	public function add(){
		$this->connection->prepare();
		$sql = "INSERT INTO tbl_Devotees_Data (first_name,last_name,email_id,contact_no,event_t)
		VALUES ('$fname', '$lname','$email','$contact','$event')";
		$DB_con->exec($sql);  
		
	}

	public function view($id = null){

	}

	public function edit($id = null){
		$sql = "UPDATE  tbl_Devotees_Data SET (first_name,last_name,email_id,contact_no)
		VALUES ('$fname', '$lname','$email','$contact') where id=$id";
$DB_con->exec($sql);  

		
	}

	public function delete($id = null){
		$sql = "DELETE FROM tbl_Devotees_Data  where id=$id";
		$DB_con->exec($sql);  
	}


}





?>