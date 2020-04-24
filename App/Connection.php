<?php

namespace App;

class Connection{

	public static function getDB(){

		try{
				$conn = new \PDO(// indicar \ pois PDO é uma função raiz dso php e nos estamos a usar namespace App!!!

						"mysql:host=localhost;dbname=mvc;charset=utf8",
						"root",
						""

				);

				return $conn;

		}catch(PDOException $e){
				//tratar o erro//

		}
	}

}

?>