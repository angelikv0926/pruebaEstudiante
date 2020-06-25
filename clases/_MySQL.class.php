<?php

class Database{
	
	private $conexion;
	private $host="localhost";
	private $usuario="root";
	private $pass="";
	private $nombre="ean_prueba";
	private $matriz;
	private $nomColumnas;
	
	function __construct(){
		$this->connect_db();
	}
	
	//Conexion a la base de datos
	public function connect_db(){
		$this->con = mysqli_connect($this->host, $this->usuario, $this->pass, $this->nombre);
		if(mysqli_connect_error()){
			die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
		}
	}
	
	//cierra la conexion establecida en la variable conexion
	function CerrarConexion(){
		mysqli_close($this->conexion);
	}
	
	//Consulta usuario
	function ValidarIngreso($usuario, $clave){
		$sql="SELECT DISTINCT id_estudiante, id_rol FROM usuario WHERE usuario='admin' AND clave='admin'";
		$resp = mysqli_query($this->con, $sql);
		$row = mysqli_fetch_assoc($resp);
		
		if($row['id_usu'] != "" and  $row['cod_Roll'] != ""){
			$_SESSION['USUARIO_AA']['Usuario']=$this;
			return $row;
		}
	}
	
	//Lista total de estudiantes
	public function consultarEstudiantes(){
		$sql = "SELECT id_estudiante, nombres, apellidos, tipo, identificacion, departamento, ciudad FROM estudiante e
				INNER JOIN departamentos d ON e.id_departamento = d.id_departamento
				INNER JOIN tipo_ident t ON e.id_ident = t.id_ident
				WHERE estado = 1";
		$resp = mysqli_query($this->con, $sql);
		return $resp;
	}
	
	//Lista de tipo de identificacion
	public function consultarTipo(){
		$sql = "SELECT * FROM tipo_ident";
		$resp = mysqli_query($this->con, $sql);
		return $resp;
	}
	
	//Lista de departamentos
	public function consultarDepartamento(){
		$sql = "SELECT * FROM departamentos";
		$resp = mysqli_query($this->con, $sql);
		return $resp;
	}
	
	//Consulta estudiante por id
	public function consultarEstudianteById($id_estudiante){
		$sql = "SELECT e.id_estudiante, nombres, apellidos, id_ident, identificacion, id_departamento, ciudad, usuario, clave
				FROM estudiante e
				INNER JOIN usuario u ON e.id_estudiante = u.id_estudiante
				WHERE e.id_estudiante = '$id_estudiante'";
		$resp = mysqli_query($this->con, $sql);
		$row = mysqli_fetch_assoc($resp);
		return $row;
	}
	
	//Crear usuario
	public function crearEstudiante($nombres, $apellidos, $id_ident, $identificacion, $id_departamento, $ciudad, $usuario, $clave){
		$sql = "INSERT INTO estudiante(nombres, apellidos, id_ident, identificacion, id_departamento, ciudad, estado) VALUES
					('$nombres', '$apellidos', $id_ident, '$identificacion', $id_departamento, '$ciudad', 1)";
		$resp = mysqli_query($this->con, $sql);
		
		echo($sql);
		
		$id = mysqli_insert_id($this->con);
		
		$sql2 = "INSERT INTO usuario (id_estudiante, usuario, clave, id_rol, estado) VALUES
					($id, '$usuario', '$clave', 2, 1)";
		$resp2 = mysqli_query($this->con, $sql2);
		
		echo($sql2);
		
		if($resp){
			return true;
		}else{
			return false;
		}
	}
	
	//Actualizar estudiante
	public function actualizarEstudiante($nombres, $apellidos, $id_ident, $identificacion, $id_departamento, $ciudad, $usuario, $clave, $id_estudiante){
		$sql = "UPDATE estudiante SET
					nombres = '$nombres', apellidos = '$apellidos', id_ident = $id_ident, identificacion = '$identificacion',
					id_departamento = $id_departamento, ciudad = '$ciudad'
					WHERE id_estudiante = $id_estudiante";
		$resp = mysqli_query($this->con, $sql);
		
		$sql2 = "UPDATE usuario SET
					usuario = '$usuario', clave = '$clave'
					WHERE id_estudiante = $id_estudiante";
		$resp = mysqli_query($this->con, $sql2);
		
		if($resp){
			return true;
		}else{
			return false;
		}
	}
	
	//Eliminar estudiante por id
	public function eliminarUsuario($id_estudiante){
		$sql = "UPDATE estudiante SET
					estado = 2
					WHERE id_estudiante = $id_estudiante";
		$resp = mysqli_query($this->con, $sql);
		
		$sql2 = "UPDATE usuario SET
					estado = 2
					WHERE id_estudiante = $id_estudiante";
		$resp = mysqli_query($this->con, $sql2);
		if($resp){
			return true;
		}else{
			return false;
		}
	}

}
?>