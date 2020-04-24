<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap   {

     //configurar as rotas que vamos ter

     protected function initRoutes(){
        //definir as rotas
        //home
        $routes['home'] = array(
                //deninir rota
            'route' => '/',
            //controlador
            'controller' => 'indexController',
            //qual a ação
            'action' => 'index'

        );
        //sobre nos 
        $routes['sobre_nos'] = array(
            //deninir rota
        'route' => '/sobre_nos',
        //controlador
        'controller' => 'indexController',
        //qual a ação
        'action' => 'sobreNos'
        );
            $this->setRoutes($routes);
    }

  

 

}

?>