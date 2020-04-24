<?php

	namespace App\Controllers;


	class IndexController{

		private $view;

		public function  __construct(){
				$this->view = new \stdClass();
		}


		public function index(){

			$this->view->dados = array('Sofá' , 'Cadeira' , 'Cama' , 'TV');

                $this->render('index');
		

		}

		public function sobreNos(){

			$this->view->dados = array('Notebook' , 'SmartPhone');

            $this->render('sobreNos');
		
			
		}

		//encapsular Requires
		public function render($view){

			//recuperar diretorio relativo as views do controller de forma dinamica
			$classAtual =  get_class($this);

			$classAtual = str_replace('App\\Controllers\\' , '' , $classAtual);

			$classAtual = strtolower(str_replace('Controller' , '' , $classAtual));

			

			require_once "../App/Views/" . $classAtual. "/" .$view . ".phtml";

		}

	}



?>