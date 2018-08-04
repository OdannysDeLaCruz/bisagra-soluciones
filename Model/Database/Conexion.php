<?php 
include_once ('config.php');
Class Conexion {

	protected $conn;

	// CONSTRUCTOR QUE INICIALIZA LA VARIABLE $conn	

	public function Conexion() {
		try {
			$this->conn = new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . "", USER , PASSWORD);

			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->conn->exec("SET CHARACTER SET utf8");

			return $this->conn;				
		} 
		catch (Exception $e) {
			die("Error : " . $e->getMessage());
		}
	}

}
 
?>