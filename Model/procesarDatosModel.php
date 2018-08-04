<?php 
include_once ('Database/Conexion.php');

class procesarDatosModel extends Conexion {
	public function __construct() {
		parent::__construct();
	}
	// Metodo que devuelve los datos formateados de un trabajador, listo para usarse
	public function formatearTrabajador($datos) {
		foreach ($datos as $dato) {
			$misDatos['foto_perfil']      = $dato['Foto_perfil'];
			$misDatos['primer_nombre']    = $dato['Primer_nombre'];
			$misDatos['segundo_nombre']   = $dato['Segundo_nombre'];
			$misDatos['primer_apellido']  = $dato['Primer_apellido'];
			$misDatos['segundo_apellido'] = $dato['Segundo_apellido'];

			// Obtenemos el nombre del area apartir del id_area
			$sql = "SELECT Nombre_area FROM areas_oficios WHERE id=:id_area";
			$sentencia = $this->conn->prepare($sql);
			$sentencia->execute(array(":id_area" => $dato['Id_area']));
			$area = $sentencia->fetchAll(PDO::FETCH_ASSOC);
			$misDatos['area']  = $area[0]['Nombre_area'];

			$trabajadores[] = $misDatos;
			// var_dump($trabajadores);
		}
		return $trabajadores;
	}
	// Obtener Áreas
	public function getAreas() {
		$sql = "SELECT Id, Nombre_area, Logo_area, Clase_estilo, Link_area FROM areas_oficios";
		$sentencia = $this->conn->prepare($sql);
		$sentencia->execute();
		$areas = $sentencia->fetchAll(PDO::FETCH_ASSOC);

		$sentencia->closeCursor();

		return $areas;

		//Cerrar conexion
		$this->conn = null;
	}

	// Obtener Trabajadores
	public function getWorkers() {
		$sql = "
			SELECT Foto_perfil, Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido, Id_area
			FROM trabajadores 
			INNER JOIN trabajador_area ON trabajador_area.Id_trabajador = trabajadores.Id
			";
		$sentencia = $this->conn->prepare($sql);
		$sentencia->execute();
		$datos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
		// Procesar datos de los trabajadores 
		$trabajadores = $this->formatearTrabajador($datos);

		$sentencia->closeCursor();
		return $trabajadores;
		//Cerrar conexion
		$this->conn = null;
	}

	// Obtener algunos trabajadores
	public function getSomeWorkers($cant) {
		$sql = "SELECT Foto_perfil, Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido, Id_area
			FROM trabajadores
			INNER JOIN trabajador_area ON trabajador_area.Id_trabajador = trabajadores.Id
			LIMIT $cant
			";
		$sentencia = $this->conn->prepare($sql);
		$sentencia->execute();
		$datos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
		// Procesar datos de los trabajadores 
		$trabajadores = $this->formatearTrabajador($datos);

		$sentencia->closeCursor();
		return $trabajadores;
		$this->conn = null;
	}
	// Obtener trabajadores de áreas especifica
	public function getAreaWorkers($area) {
		$sql = "
			SELECT Foto_perfil, Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido, Id_area
			FROM trabajadores 
			INNER JOIN trabajador_area ON trabajador_area.Id_trabajador = trabajadores.Id
			WHERE Id_area = :area
			";
		$sentencia = $this->conn->prepare($sql);
		$sentencia->execute(array(":area" => $area));
		$datos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

		// Procesar datos de los trabajadores 
		$trabajadores = $this->formatearTrabajador($datos);

		$sentencia->closeCursor();
		
		return $trabajadores;
		$this->conn = null;
	}
	
	// Obtener perfil del trabajador
	public function getProfileWorker() {

	}
}

 ?>