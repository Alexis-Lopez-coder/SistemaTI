<?php
//date_default_timezone_set("America/Mexico_City");
$req = $_REQUEST['c'];

class Push {
	private $host  = 'localhost';
    private $user  = 'user2';
    private $password   = "123";
    private $database  = "sistemati";  
	private $dbConnect = false;

	

    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error al conectar con la BD: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error en consulta: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_assoc($result)) {
			$data[]=$row;            
		}
		return $data;
	}
	


	
	public function listUsers(){
		$sqlQuery = "SELECT * FROM notif_user WHERE username != 'admin'";
        return  $this->getData($sqlQuery);
	}
	
	public function loginUsers($username, $password){
		$sqlQuery = "SELECT id_admin, contrasena, nombre FROM admins WHERE id_admin='$username' AND contrasena='$password'";
        return  $this->getData($sqlQuery);
	}

	
	
	
}

?>
