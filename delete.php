<?php

	/**
	*|--------------------------------------------------------------------------------------------------------
	*| SWEET-ALERT-PHP
	*|--------------------------------------------------------------------------------------------------------
	* @author    MARCUS GUARANI <contato@marcusguarani.com.br>
	* @copyright  
	* @version   1.0.0
	*|--------------------------------------------------------------------------------------------------------
	*| Data Criação: 02/02/2021 
	*|--------------------------------------------------------------------------------------------------------
	*| SWEET-ALERT-PHP
	*| 
	*/
	
	if(isset($_GET['id'])){
		
		$id=$_GET['id'];
	}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sweet_db";
 
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "DELETE FROM tbl_user WHERE id='$id'";
	$result = $conn->query($sql);
	
	if($result){
		
		header('location:index.php?m=1');
	}

?>