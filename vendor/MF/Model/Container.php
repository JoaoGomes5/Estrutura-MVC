<?php


namespace MF\Model;
use App\Connection;

class Container{


	public static function getModel($model){

		$class = "\\App\\Models\\".ucfirst($model);
		
		//retornar o modelo solicitado ja instanciado(PDO) , inclusive com a conecao a db
	    
	    $conn = Connection::getdb();
		
		return new $class($conn);
	}
}